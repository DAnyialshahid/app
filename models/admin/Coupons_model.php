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

	

	public function delete($id){
		
		
		 
		$this->db->where('id' , $id);
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