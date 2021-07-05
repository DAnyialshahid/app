<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupons_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();

	}
	 

 	public function get_all($where=null){
		$this->db->limit(50);
   
		$this->db->select('coupons.*');
		$this->db->select('stores.name as store_name');
		$this->db->select('stores.feature_image as store_feature_image');
		
		$this->db->join('stores','stores.id=coupons.store_id');
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('coupons',[
					'coupons.site_id'=>$this->session->userdata('user_active_site')
			])->result();
		
		return $data;


	}


	public function add($uploaded_filename,$update=false,$id=null){
		// d($this->input->post());
		$data=array( 
			'name'		=> $this->input->post('name'),
			'short_title'		=> $this->input->post('short_title'), 
			'description'		=> $this->input->post('description'),
			'affiliate_link'		=> $this->input->post('affiliate_link'),
			'coupon_code'		=> $this->input->post('coupon_code'),
			'expire_date'		=> $this->input->post('expire_date'),
			'status'		=> $this->input->post('status'),
			'store_id'		=> $this->input->post('store_id'),
			'category_id'		=> $this->input->post('category_id'),
			'verified'		=>$this->input->post('check_verified'), 
			'featured'		=>$this->input->post('check_featured'), 
			'exclusive'		=>$this->input->post('check_exclusive'), 
			'popular'		=>$this->input->post('check_popular'), 
			'show_in_home'		=>$this->input->post('check_show_in_home'), 
			'top'		=>$this->input->post('check_top'), 
			'seasonal_type'		=>$this->input->post('seasonal_type'), 
			'added_date'	=> date('y-m-d h:i:s'),
			'updated_date'		=> date('y-m-d h:i:s'),
			'inserted_from'		=>'human',  
			'seo_coupon_meta_title'		=>$this->input->post('seo_coupon_meta_title'), 
			'seo_coupon_meta_keywords'		=>$this->input->post('seo_coupon_meta_keywords'), 
			'seo_coupon_meta_description'		=>$this->input->post('seo_coupon_meta_description'),  
			'site_id'		=>$this->session->userdata('user_active_site'), 
			'type'		=> !empty($this->input->post('coupon_code'))?'coupon':'deal', 
		
		);
		if(!empty($uploaded_filename)){
			$data['feature_image']=	$uploaded_filename;
		}

		if($update && $id!=null){
								$this->db->where('id' ,$id );
					$update=$this->db->update('coupons' ,$data );
						return $update;

		}else{
				$insert=$this->db->insert('coupons' ,$data );
		 
				return $insert;
			}
	}

	
	public function batchUpdate(){
		foreach ($this->input->post('coupon') as $id => $coupon) {




				$data=array( 
			'name'		        => !empty($coupon['coupon_title'])?$coupon['coupon_title']:null,
			'short_title'		=> !empty($coupon['coupon_short_title'])?$coupon['coupon_short_title']:null ,
			'description'		=> !empty($coupon['coupon_description'])?$coupon['coupon_description']:null,
			'affiliate_link'	=> !empty($coupon['coupon_affiliate_link'])?$coupon['coupon_affiliate_link']:null,
			'coupon_code'		=> !empty($coupon['coupon_code'])?$coupon['coupon_code']:null,
			'expire_date'		=> !empty($coupon['coupon_expire_date'])?$coupon['coupon_expire_date']:null,
			'status'	    	=> 'active',
			'store_id'		    => $this->input->post('store_id'),
			'category_id'		=> !empty($coupon['coupon_category'])?$coupon['coupon_category']:null,
			'verified'		    => !empty($coupon['coupon_check_verified'])?$coupon['coupon_check_verified']:null ,
			'featured'		    => !empty($coupon['coupon_check_featured'])?$coupon['coupon_check_featured']:null ,
			'exclusive'		    => !empty($coupon['coupon_check_exclusive'])?$coupon['coupon_check_exclusive']:null ,
			'popular'		    => !empty($coupon['coupon_check_popular'])?$coupon['coupon_check_popular']:null ,
			'show_in_home'		=> !empty($coupon['coupon_check_show_in_home'])?$coupon['coupon_check_show_in_home']:null ,
			'top'		        => !empty($coupon['coupon_check_top'])?$coupon['coupon_check_top']:null ,
			'added_date'	    => date('y-m-d h:i:s'),
			'updated_date'		=> date('y-m-d h:i:s'),
			'inserted_from'		=>'human_batch',  
			// 'seasonal_type'		=>$seasonal_type, 
			// 'seo_coupon_meta_title'		=>$this->input->post('seo_coupon_meta_title'), 
			// 'seo_coupon_meta_keywords'		=>$this->input->post('seo_coupon_meta_keywords'), 
			// 'seo_coupon_meta_description'		=>$this->input->post('seo_coupon_meta_description'),  
			'site_id'		=>$this->session->userdata('user_active_site'), 
			'type'		=> !empty($coupon['coupon_code'])?'coupon':'deal', 
		
		);


 
	 
 		
			if(  (!empty($coupon['coupon_delete']) ) ){
						 
	 		if (strpos( $id,"new") !==false) {}else{
	 			// dd($coupon);
	 				 $this->db->where('id' ,$coupon['coupon_id'] );
	 			     $delete=$this->db->delete('coupons' ,['id'=>$coupon['coupon_id'] ]);
	 		}
				// dd($coupon['coupon_id'].$delete);
								
			}else{

						 		if (strpos( $id,"new") !==false) {
						 
							   	   $insert=$this->db->insert('coupons' ,$data );
								}else{
									$this->db->where('id' ,$coupon['coupon_id'] );
								    $update=$this->db->update('coupons' ,$data );
								}
			}
}

	return true;


	}

	

	public function delete($id){
		
		
		 
		$this->db->where('id' , $id);
		if($this->db->delete('coupons' )){
			return true;
		}else{

			return ['error'=>''];
			 }
		  
	}




	public function delete_by_store_id($store_id){
		
		
		 
		$this->db->where('store_id' , $store_id);
		if($this->db->delete('coupons' )){
			return true;
		}else{

			return ['error'=>''];
			 }
		  
	}




public function sort($store_id,$coupon_ids){

	foreach (explode(',',$coupon_ids) as $position => $coupon_id) {
	 $this->db->set('position',$position)->where(['store_id'=>$store_id,'id'=>$coupon_id])->update('coupons');
	} 


		 
	}

	


	
	public function GetCouponUsedCount($usedFormat = '', $coupon_id = ''){
		
		
		$this->db->select('count(*) as used_count');
		$this->db->where('coupon_id', $coupon_id);
		$stringFormat = '';
		
		if($usedFormat == 'Daily'){
			
			$this->db->where('date_format(added_date, \'%Y-%m-%d\')' , '= CURDATE()', false);
			$stringFormat = ' used Today!';
		
		}else if($usedFormat == 'Weekly'){
			
			$this->db->where('YEARWEEK(added_date,1)' , ' YEARWEEK(CURDATE(), 1)', false);
			$stringFormat = ' Weekly used';
			
		}else if($usedFormat == 'Monthly'){
			
			$this->db->where('MONTH(added_date)' , ' MONTH(CURRENT_DATE())', false);
			$this->db->where('YEAR(added_date)' , ' YEAR(CURRENT_DATE())', false);
			$stringFormat = ' Monthly used';
			
		}else if($usedFormat == 'Yearly'){
			
			$this->db->where('date_format(added_date, \'%Y\' )' , '= YEAR(CURDATE())', false);
			$stringFormat = ' used this year';
			
		
		}else{
			
			$stringFormat = ' used total';
		}
		
		$usedCount = $this->db->get('web_coupons_used')->result();
		
		//echo $this->db->last_Query();
		
		return empty($usedCount) ? '0 used total' : $usedCount[0]->used_count . $stringFormat;
	}
	
	


public function add_dummy_categories_stores($site_id){
$this->db->set('category_id',null)->where('site_id',$site_id)->update('stores'); 
$categories=$this->db->get_where('categories',['site_id'=>$site_id])->result();
$stores_ids=$this->db->get_where('stores',['site_id'=>$site_id])->result();
$ids=[];
foreach ($stores_ids as $key => $value) {
	$ids[]=$value->id;
}



	foreach ($categories as $category) {

		$counter=3;
		$group_ids=[];
		for ($i=1; $i <=$counter ; $i++) { 
			$group_ids[]=$ids[rand(0, count($ids) - 1)];
		}


			$this->db
			->set('category_id',$category->id)
			->set('popular',rand(0,1),false)
			->set('show_in_home',rand(0,1),false)
			->set('top',rand(0,1),false)
			->where('site_id',$site_id)->where_in('id',$group_ids)->update('stores'); 
			//dd($this->db->last_query());
		
	}

}

 

public function add_dummy_categories_coupons($site_id){



$this->db->set('category_id',null)->where('site_id',$site_id)->update('coupons'); 
$coupons_ids=$this->db->select('id')->get_where('coupons',['site_id'=>$site_id])->result();
$ids=[];
foreach ($coupons_ids as $key => $value) {
	$ids[]=$value->id;
}


$categories=$this->db->get_where('categories',['site_id'=>$site_id])->result();
foreach ($categories as $category) {

	// $time_start = microtime(true); 
	$counter=4;
	$group_ids=[];
	for ($i=1; $i <=$counter ; $i++) { 
		$group_ids[]=$ids[rand(0, count($ids) - 1)];
	}

 
 
// $time_end = microtime(true);
// $execution_time = ($time_end - $time_start);
// d(implode(',', $group_ids));

		$this->db->set('category_id',$category->id)
		->set('verified',rand(0,1),false)
		->set('featured',rand(0,1),false)
		->set('exclusive',rand(0,1),false)
		->set('popular',rand(0,1),false)
		->set('show_in_home',rand(0,1),false)
		->set('top',rand(0,1),false)
		->where('site_id',$site_id)->where_in('id',$group_ids)->update('coupons'); 
		// dd($this->db->last_query());
		//dd($this->db->last_query());
// dd( '<b>Total1 Execution Time:</b> '.$execution_time.' Mins');
	
}

}


public function paste($items){
		$rows=[];

		foreach ($items as $item) {
				$row=$item['row'];
				$row->site_id= $this->session->userdata('user_active_site');
				$row->inserted_from='paste';
				unset($row->id); 
				unset($row->store_id); 
				$rows[]=(array)$row;

		 	
		}
	 

 $complete=$this->db->insert_batch('coupons',$rows); 
		if ($complete) {
		    return true;
		 }	 else{
		 	return false;
		 }
	

	}
	
	 
 

}
?>