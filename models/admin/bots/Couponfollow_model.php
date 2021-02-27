<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Couponfollow_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();
		$this->load->helper('simple_html_dom_helper');
		// $this->load->helper('curl_helper');
			ignore_user_abort(true);
				set_time_limit(0);
	} 
	 
 
 
	public function fetchCoupons($bot_details,$bot_id,$store_id){
 


$store=$this->db->get_where('bots_stores',['id'=>$store_id])->first_row(); 
			if (!empty($bot_details)) {
		$this->db->where('store_id',$store_id);
		$this->db->delete('bots_stores_coupons');
				$limit=9999;
			$site_url='https://couponfollow.com/'.$store->custom_url.'#C11'; 
			  //$site_url='https://couponfollow.com/site/adagio.com#C11'; 
			 // $site_url='https://couponfollow.com/site/acefitness.org'; //2
			 // $site_url='https://couponfollow.com/site/advanceautoparts.com'; 
			// $site_url='https://couponfollow.com/site/nike.com#C11'; 
			// $site_url='https://couponfollow.com/site/zonealarm.com#C11'; 
 
				$ch = curl_init();

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				 curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
				    'accept-encoding: gzip, deflate, br',
				));
				curl_setopt($ch, CURLOPT_REFERER, 'https://couponfollow.com/');
				curl_setopt($ch, CURLOPT_ENCODING, "gzip");
				curl_setopt($ch, CURLOPT_USERAGENT,  'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');

				// curl_setopt($ch,CURLOPT_ENCODING , "gzip");
				curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
				// curl_setopt($request, CURLOPT_HTTPHEADER, $singleLinheaders);



				//fetch last update date
					 curl_setopt($ch, CURLOPT_URL, trim($site_url)); 
					 $response = curl_exec($ch);

				 $pregmatch_activate_date="/popup.initJsPopup\(\{(.*)\);/" ;
				 $m=[];
				 preg_match($pregmatch_activate_date,$response,$m);

// d(json_decode($m[1]));
 
// dd(count('EgBnAxzic9uClnD'));
			//  dd(	$response);
				 if (stripos($response, "This is what we call a")  ) {
return true;
}if (stripos($response, "Object moved")  ) {
return true;
}


				$html=str_get_html($response);

$list=array();

// dd($response1);
 $type=str_ireplace('\'', '', trim(explode(',', $m[1])[11]));
 // d(explode(',', $m[1]));
 // echo $type."<br>";
 if ($type=='0') {
 						$m2=[];
				 preg_match("/body:before{ content:\'(.*)\'; /",$response,$m2);
 $keyString=($m2[1]);


 }
 else if ($type=='1') {
 $keyString=str_ireplace('\'', '', trim(explode(',', $m[1])[10]));
 }else{
$keyString=$html->find('#siteOut',0)->getAttribute('data-info');
 }



// dd();
  // dd($type);
 // dd($keyString);
 // echo($keyString).'<br>';
// $keyString='EgBnAxzic9uClnD';
 // exit($keyString);
				// Find all article blocks
				foreach($html->find('div.content section article.clickable') as $coupon) {
				    //$item['title']     = '-'.$article->find('.coupon-tile-description', 0)->plaintext;  

				    $item=array();
				    $item['name']     = trim($coupon->find('h2.title',0)->plaintext);

				    //coupon folow encrypt the code in javascrip[t function and decode it 

				    $encryptedcoupon_code= @(array_values($coupon->find('.deal-desc',0)->getAllAttributes())[1]);
				    // $item['encrypt_code']     = $encryptedcoupon_code;
				    $int_chars=explode(',',base64_decode($encryptedcoupon_code));
				    $str = "";
				    for($i=0; $i<count($int_chars); $i++) {
				    	$s=intval($int_chars[$i]);
				    	$d=$this->utf8_char_code_at($keyString,$i % strlen($keyString));
				  	 $str .=chr($s^$d); 
				    }
				    $item['coupon_code']     =  $str ;


				    $item['description']     = @trim($coupon->find('p.explain',0)->plaintext);
				    $item['type']     = @trim($coupon->find('.deal-info .type',0)->plaintext)=='COUPON CODE'?'coupon':'deal';
				    $item['short_title']     = @trim($coupon->find('.benefit .value',0)->plaintext).' '.@trim($coupon->find('.benefit .suffix',0)->plaintext);
				    if ( $item['type'] =='deal') {
				    	 $item['coupon_code']='';
				    }
				    // $item['custom_url']     = $store->href;
				    $item['store_id']     = $store_id;
				   array_push($list,$item);
				   //d($item);
		 			

				}

 
				 // dd($list);
$this->db->insert_batch('bots_stores_coupons',$list);
$logo=@$html->find('.logo img',0)->src;
dd($logo);
$logo_slugs=@explode('/', $logo);
$logo_name_n_ext=@explode('.',$logo_slugs[count($logo_slugs)-1]);
$store_name= @strtolower( str_ireplace(' ', '_',  str_ireplace('.', '_',str_ireplace('-', '_', $store->name))));
$final_logo_file_name=@$store_name.'.'.$logo_name_n_ext[1];


@file_put_contents('assets/uploads/stores/'.$final_logo_file_name, fopen( str_ireplace('//', 'http://',$logo), 'r'));
$this->db->set('feature_image',$final_logo_file_name)->where('id',$store_id)->update('bots_stores');
 if (!empty($list)) {
 return true;
 }
				//print_r($list);
	
	 }
		return false;		
	}
 

public function utf8_char_code_at($str, $index)
{
    $char = mb_substr($str, $index, 1, 'UTF-8');

    if (mb_check_encoding($char, 'UTF-8')) {
        $ret = mb_convert_encoding($char, 'UTF-32BE', 'UTF-8');
        return hexdec(bin2hex($ret));
    } else {
        return null;
    }
}

	public function resync($id){
 

			
				$limit=9999;
			$sites='https://couponfollow.com/site/browse/a/all
					https://couponfollow.com/site/browse/b/all
					https://couponfollow.com/site/browse/c/all
					https://couponfollow.com/site/browse/d/all
					https://couponfollow.com/site/browse/e/all
					https://couponfollow.com/site/browse/f/all
					https://couponfollow.com/site/browse/g/all
					https://couponfollow.com/site/browse/h/all
					https://couponfollow.com/site/browse/i/all
					https://couponfollow.com/site/browse/j/all
					https://couponfollow.com/site/browse/k/all
					https://couponfollow.com/site/browse/l/all
					https://couponfollow.com/site/browse/m/all
					https://couponfollow.com/site/browse/n/all
					https://couponfollow.com/site/browse/o/all
					https://couponfollow.com/site/browse/p/all
					https://couponfollow.com/site/browse/q/all
					https://couponfollow.com/site/browse/r/all
					https://couponfollow.com/site/browse/s/all
					https://couponfollow.com/site/browse/t/all
					https://couponfollow.com/site/browse/u/all
					https://couponfollow.com/site/browse/v/all
					https://couponfollow.com/site/browse/w/all
					https://couponfollow.com/site/browse/x/all
					https://couponfollow.com/site/browse/y/all
					https://couponfollow.com/site/browse/z/all'; 
				 

				$sites=(explode("\n", $sites));



				$ch = curl_init();

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

				// curl_setopt($ch,CURLOPT_ENCODING , "gzip");
				curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
				// curl_setopt($request, CURLOPT_HTTPHEADER, $singleLinheaders);


$this->db->where('store_id in (select id from bots_stores where  bot_id='.$id.')');
$this->db->delete('bots_stores_coupons');


$this->db->where('bot_id',$id);
$this->db->delete('bots_stores');


foreach ($sites as $site_url) {
$list=array();
if ((@$i++)==$limit) {
		exit();
	}

				//fetch last update date
					 curl_setopt($ch, CURLOPT_URL, trim($site_url)); 
					 $response = curl_exec($ch);

				$html=str_get_html($response);


				// Find all article blocks
				foreach($html->find('ul.storelist li a') as $store) {
				    //$item['title']     = '-'.$article->find('.coupon-tile-description', 0)->plaintext;
				    $item=array();
				    $item['name']     = str_ireplace(' Coupon Codes', '', $store->title);
				    $item['custom_url']     = $store->href;
				    $item['bot_id']     = $id;
				   array_push($list,$item);
				   //d($item);
		 			
				}
$this->db->insert_batch('bots_stores',$list);
		}
	 
				

	}

	public function run($id){
 

			
				$limit=2;
				$file_name='groupons_bot'.date('y m d h i s').'.csv';
				$replace='https://www.groupon.com/coupons/';
				$pregmatch_activate_date="/{\"coupon.*oupon-background/" ;
					$sites='https://www.groupon.com/coupons/a-pea-in-the-pod'; 
				 

				$file=fopen($file_name, 'w');
				$sites=(explode("\n", $sites));



				$ch = curl_init();

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

				// curl_setopt($ch,CURLOPT_ENCODING , "gzip");
				curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
				// curl_setopt($request, CURLOPT_HTTPHEADER, $singleLinheaders);



				foreach ($sites as $site_url) {
					//breaker
					if ((@$i++)==$limit) {
						exit();
					}

				//fetch last update date
					 curl_setopt($ch, CURLOPT_URL, trim($site_url)); 
					 $response = curl_exec($ch);$m=[];
				$html=str_get_html($response);


				// Find all article blocks
				foreach($html->find('.coupon-tile-title') as $article) {
				    //$item['title']     = '-'.$article->find('.coupon-tile-description', 0)->plaintext;
				    $item['title']     = $article->plaintext;
				 	fwrite($file,str_ireplace($replace, "", trim($site_url)).','. $item['title'] ."\n");
				}



				 
				  



				}
				echo 'done';
				fclose($file);

		 echo 'resynce done';

	}

 



	
}
?>