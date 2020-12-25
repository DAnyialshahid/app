<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Networks_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();

	} 
	 

 	public function get_all($where=null){

 
		$this->db->order_by('name','asc');  
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('networks',[
						'site_id'=>$this->session->userdata('user_active_site')
			])->result();
		
		return $data;


	}


	public function add($update=false,$id=null){
		// d($this->input->post());

			$this->connect_webgains( $this->input->post('add_network_username'), $this->input->post('add_network_password'));

			exit();
		$data=array( 
			'network_name'		=> $this->input->post('add_network_network'), 
			'name'		=> $this->input->post('add_network_title'), 
			'username'		=> $this->input->post('add_network_username'), 
			'password'		=> $this->input->post('add_network_password'),   
			'added_date'	=> date('y-m-d h:i:s'),
			'updated_date'		=> date('y-m-d h:i:s'),
			'inserted_from'		=>'human',  
			'site_id'		=> $this->session->userdata('user_active_site') 
		
		
		); 
		if($update && $id!=null){
								$this->db->where('id' ,$id );
					$update=$this->db->update('networks' ,$data );
				

		}else{
				$insert=$this->db->insert('networks' ,$data );
		 
	
			}
		

	}


	 function Post($url = "", $data = array(), $files = array(), $forceSsl = false, $cookie = "", $session = true)
	{
// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
            foreach ($files as $k => $v) {
                $f = realpath($v);
                if(file_exists($f)){
                    $fc = new CurlFile($f, mime_content_type($f), basename($f)); 
                    $data["file[".$k."]"] = $fc;
                }
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");        
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
          //  curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); // !!!! required as of PHP 5.6.0 for files !!!
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)");
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            if($session){
                curl_setopt($ch, CURLOPT_COOKIESESSION, true );
                curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookies.txt');
                curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookies.txt');
            }
            if($forceSsl){
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 1, 2
            }
            if(!empty($cookie)){
                curl_setopt($ch, CURLOPT_COOKIE, $cookie); // "token=12345"
            }
            $res = curl_exec($ch);
            if (curl_error($ch)) {
                $this->error = curl_error($ch);
                throw new Exception($this->error);
            }else{
                curl_close($ch);
                return $res;
            }  
 }



  function GetArray($url = "http://hostname.x/api.php", $data = array(), $forceSsl = false, $cookie = "", $session = true){
            $url = $url . "?". http_build_query($data);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
            if($session){
                curl_setopt($ch, CURLOPT_COOKIESESSION, true );
                curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookies.txt');
                curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookies.txt');
            }
            if($forceSsl){
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 1, 2
            }
            if(!empty($cookie)){
                curl_setopt($ch, CURLOPT_COOKIE, $cookie); // "token=12345"
            }
            $info = curl_getinfo($ch);
            $res = curl_exec($ch);        
            if (curl_error($ch)) {
                $this->error = curl_error($ch);
                throw new Exception($this->error);
            }else{
                curl_close($ch);
                return $res;
            }        
        }



	public function test()
	{


$url = 'https://www.google.com/recaptcha/api2/anchor?ar=1&k=6LfvxKAUAAAAANU7686POiqLNd0eBG3lUWr37V2w&co=aHR0cDovL3d3dy5yYW5hLmNvbTo4MA..&hl1=en&v=qc5B-qjP0QEimFYUxcpWJy5B&size=normal&cb=hapen3nspm1u';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers    = [];
$headers[]  = 'Host: www.webgains.com';
$headers[]  = 'Orgin:  http://www.webgains.com';
$headers[]  = 'Referer:  www.webgains.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($curl, CURLOPT_HEADER, false);
echo  $data = curl_exec($curl);
curl_close($curl);

//echo $this->GetArray('https://www.gstatic.com/recaptcha/releases/qc5B-qjP0QEimFYUxcpWJy5B/recaptcha__en.js');
exit();

	}

	public function recaptcha__en()
	{

$url = 'https://www.google.com/recaptcha/api2/anchor?ar=1&k=6LfvxKAUAAAAANU7686POiqLNd0eBG3lUWr37V2w&co=aHR0cDovL3d3dy5yYW5hLmNvbTo4MA..&hl1=en&v=qc5B-qjP0QEimFYUxcpWJy5B&size=normal&cb=hapen3nspm1u';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers    = [];

  


$headers[]  = 'Host: www.webgains.com';
$headers[]  = 'Orgin:  http://www.webgains.com';
$headers[]  = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[]  = 'accept-language: en-US,en;q=0.9';
$headers[]  = 'Referer:  www.webgains.com';
$headers[]  = 'referer: http://www.rana.com/';
$headers[]  = 'sec-fetch-dest::  iframe'; 
$headers[]  = 'sec-ch-ua:  "Google Chrome";v="87", " Not;A Brand";v="99", "Chromium";v="87"';
$headers[]  = 'sec-ch-ua-mobile:  ?0';
$headers[]  = 'sec-fetch-dest:  iframe';
$headers[]  = 'sec-fetch-mode:  navigate';
$headers[]  = 'sec-fetch-site: cross-site';
$headers[]  = 'upgrade-insecure-requests: 1';
$headers[]  = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
$headers[]  = 'x-client-data: CIi2yQEIpLbJAQjEtskBCKmdygEIkcLKAQisx8oBCPbHygEItMvKAQijzcoBCNzVygEI75fLAQiTmssBCNGaywEIwpzLAQjVnMsB
Decoded:
message ClientVariations {
  // Active client experiment variation IDs.
  repeated int32 variation_id = [3300104, 3300132, 3300164, 3313321, 3318033, 3318700, 3318774, 3319220, 3319459, 3320540, 3329007, 3329299, 3329361, 3329602, 3329621];
}';
$headers[]  = 'cookie:  ANID=AHWqTUmvwYcLqmTcXOTvIJPRT-WO3_JW5eCRT4_no78O1k8BThmPysHJvY6QrpR9; 1P_JAR=2020-12-22-15; __Secure-3PAPISID=o6rA4daTYQxvW4QQ/APTUad9mBG412w1jJ; __Secure-3PSID=4wco_FnCoTKfqTJ3G7gArVynCD2fNVcIkS5m1Q1FqHP6TD9OaiTF4eRpKAfH3RdX6tK8ww.; NID=205=U1FvsVmfj6-_b9YQplhK75yweJC5Jd1Rq4bb2ocAhOADftnjGCQWNSLfRbGBnZw9xIqnSRXA8Ag2JukAZWnnDeIzJwA38TWVTUCixpGaqtFlzHUdJBIlMq0e5R8pdZGmiBHrAcnnLuwbP8xIS8s1A_lF1rRLMKN3BVCLe28qy9Mmug5yFZbqPQZlsyMq1IcEPD65oekA3ZoV1D9FVx5hf4pqtOSpIJaiYfmzaDvEhUrUi40DME4XEZ1yKQqnagngBSEtsH1VCODDtTprcQ; __Secure-3PSIDCC=AJi4QfHBzlV1zXCMpKrdBw6OZYhVgSKDdRPynYRzmMbnb0nLkcblXwz3xwGoTEaDau3mbT_ztA';
$headers[]  = 'cookie:  ANID=AHWqTUmvwYcLqmTcXOTvIJPRT-WO3_JW5eCRT4_no78O1k8BThmPysHJvY6QrpR9; 1P_JAR=2020-12-22-15; __Secure-3PAPISID=o6rA4daTYQxvW4QQ/APTUad9mBG412w1jJ; __Secure-3PSID=4wco_FnCoTKfqTJ3G7gArVynCD2fNVcIkS5m1Q1FqHP6TD9OaiTF4eRpKAfH3RdX6tK8ww.; NID=205=U1FvsVmfj6-_b9YQplhK75yweJC5Jd1Rq4bb2ocAhOADftnjGCQWNSLfRbGBnZw9xIqnSRXA8Ag2JukAZWnnDeIzJwA38TWVTUCixpGaqtFlzHUdJBIlMq0e5R8pdZGmiBHrAcnnLuwbP8xIS8s1A_lF1rRLMKN3BVCLe28qy9Mmug5yFZbqPQZlsyMq1IcEPD65oekA3ZoV1D9FVx5hf4pqtOSpIJaiYfmzaDvEhUrUi40DME4XEZ1yKQqnagngBSEtsH1VCODDtTprcQ; __Secure-3PSIDCC=AJi4QfHBzlV1zXCMpKrdBw6OZYhVgSKDdRPynYRzmMbnb0nLkcblXwz3xwGoTEaDau3mbT_ztA';
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($curl, CURLOPT_HEADER, false);
echo  $data = curl_exec($curl);
curl_close($curl);

//echo $this->GetArray('https://www.gstatic.com/recaptcha/releases/qc5B-qjP0QEimFYUxcpWJy5B/recaptcha__en.js');
exit();
	}

	public function connect_webgains($username,$password)
	{
		echo "<script>
var u='https://www.gstatic.com/recaptcha/releases/qc5B-qjP0QEimFYUxcpWJy5B/recaptcha__en.js?sdf';
var u='http://www.rana.com/recaptcha__en.js?development=tru';
var u='http://www.rana.com/application/views/backend/assets/js/recaptcha__en.js';
		/* PLEASE DO NOT COPY AND PASTE THIS CODE. */(function(){var w=window,C='___grecaptcha_cfg',cfg=w[C]=w[C]||{},N='grecaptcha';var gr=w[N]=w[N]||{};gr.ready=gr.ready||function(f){(cfg['fns']=cfg['fns']||[]).push(f);};w['__recaptcha_api']='https://www.google.com/recaptcha/api2/';(cfg['render']=cfg['render']||[]).push('onload');w['__google_recaptcha_client']=true;var d=document,po=d.createElement('script');po.type='text/javascript';po.async=true;po.src=u;po.crossOrigin='anonymous';po.integrity='sha384-EauiKN7dy30bq/wDo7lcvebLQr7wwQPtEV6A1G43RAWnhPwxWZFCCTOT/hE+ffe3';var e=d.querySelector('script[nonce]'),n=e&&(e['nonce']||e.getAttribute('nonce'));if(n){po.setAttribute('nonce',n);}var s=d.getElementsByTagName('script')[0];s.parentNode.insertBefore(po, s);})();

</script>";
 echo '

 <scrip1t src="https://www.google.com/recaptcha/api.js"></script>
 <form target="_blank" action="http://localhost/rana/site1/app2/affiliateplatform/api/network_connect/?development=true">
<div class="g-recaptcha" name="g-recaptcha" data-sitekey="6LfvxKAUAAAAANU7686POiqLNd0eBG3lUWr37V2w"></div>
<input type="text" name="as" value="123"/>
<input type="submit"/>
 </form>


';

exit();
 //setting url
$url = 'https://www.webgains.com/loginform.html?action=checkauth';
$url = 'https://www.webgains.com/front/user/login';

//data
$data = array("username" => "webgain%40di345i.com","password" => "webgain%40di345i.com");
 echo  $this->post($url,$data);
  /*
			  fetch("https://www.webgains.com/loginform.html?action=checkauth&callback=jQuery18306279371239909959_1608643397976", {
			  "headers": {
			    "accept": "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript,  q=0.01",
			    "accept-language": "en-US,en;q=0.9",
			    "content-type": "application/x-www-form-urlencoded; charset=UTF-8",
			    "sec-ch-ua": "\"Google Chrome\";v=\"87\", \" Not;A Brand\";v=\"99\", \"Chromium\";v=\"87\"",
			    "sec-ch-ua-mobile": "?0",
			    "sec-fetch-dest": "empty",
			    "sec-fetch-mode": "cors",
			    "sec-fetch-site": "same-origin",
			    "x-requested-with": "XMLHttpRequest"
			  },
			  "referrer": "https://www.webgains.com/front/user/login",
			  "referrerPolicy": "strict-origin-when-cross-origin",
			  "body": "screenwidth=&screenheight=&colourdepth=&user_type=&username=webgain%40discountli.com&password=Fake123%40%40%402&g-recaptcha-response=",
			  "method": "POST",
			  "mode": "cors",
			  "credentials": "include"
			});
*/

			exit();
	}


	

	public function delete($id){
		
		
		 
		$this->db->where('id' , $id);
		if($this->db->delete('pages' )){
			return true;
		}else{

			return ['error'=>''];
			 }
		  
	}



	
}
?>