<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stores_model extends MY_Model{
	
	
	public $return_response = array(
		
		'ERROR'			=> FALSE,
		'MESSAGE'		=> '',
		'DATA'			=> array()
	
	);
	
	public function get_all($where=null){
				// $this->db->limit(10);
$this->db->select('id as id');	
$this->db->select('feature_image as feature_image');	
$this->db->select('name as store_name');	
$this->db->select('updated_date as last_update');	
$this->db->select('"2/3" as views_n_click');	
$this->db->select('"2/3" as coupons_n_deals');	
$this->db->select('type as type');	 
$this->db->select('status as status');	  
$this->db->select('feature_image as feature_image');	  
$this->db->select('stores.*');	  
$this->db->order_by('id','desc');
if($where){ $this->db->where($where);	 }	  
 
// exit('5');
			$data = $this->db->get_where('stores',[
					'site_id'=>$this->session->userdata('user_active_site')
			])->result();
		
		return $data;


	}
	public function add($uploaded_filename,$update=false,$id=null){
		// d($this->input->post());
		$data=array( 
			'name'		=> $this->input->post('store_name'),
			'added_date'	=> date('y-m-d h:i:s'),
			'updated_date'		=> date('y-m-d h:i:s'),
			'category_id'		=> $this->input->post('category_id'),
			'custom_url'		=> $this->input->post('store_slug'), 
			'website_url'		=> $this->input->post('website_url'), 
			'affiliate_link'		=> $this->input->post('affiliate_link'), 
			'icon'		=> $this->input->post('icon'),
			'description'		=> $this->input->post('description'),
			'type'		=> $this->input->post('type'),
			'status'		=> $this->input->post('status'),
			'inserted_from'		=>'human', 
			
			'popular'		=>$this->input->post('check_popular'), 
			'show_in_home'		=>$this->input->post('check_show_in_home'), 
			'top'		=>$this->input->post('check_top'), 
			'site_id'		=>$this->session->userdata('user_active_site'), 

			'seo_store_meta_title'		=>$this->input->post('seo_store_meta_title'), 
			'seo_store_meta_keywords'		=>$this->input->post('seo_store_meta_keywords'), 
			'seo_store_meta_description'		=>$this->input->post('seo_store_meta_description'),  
		
		);
		if(!empty($uploaded_filename)){
			$data['feature_image']=	$uploaded_filename;
		}

		if($update && $id!=null){
								$this->db->where('id' ,$id );
					$update=$this->db->update('stores' ,$data );
						return $update;

		}else{
				$insert=$this->db->insert('stores' ,$data );
		 
				return $insert;
			}
	}
	
	 

	public function delete($id){
		
		
		 
		$this->db->where('id' , $id);
		if($this->db->delete('stores' )){
			return true;
		}else{

			return ['error'=>''];
			 }
		  
	}

	public function paste($items,$withCoupons){
		$rows=[];
 
		foreach ($items as $item) {
				$row=$item['row'];
				$row->site_id= $this->session->userdata('user_active_site');
				$row->inserted_from='paste';
				unset($row->id); 
				$insert=$this->db->insert('stores',(array)$row );
				
				if ($insert && $withCoupons=='true') {
					$insert_id=$this->db->insert_id();
				 
						$rows=$this->db->get_where('coupons',['store_id'=>$item['id']])->result();
							
						foreach ($rows as $coupon) { 
							$coupon->store_id=$insert_id;
							$coupon->site_id= $this->session->userdata('user_active_site');
							$coupon->inserted_from='paste';
							unset($coupon->id); 
							$rows_2[]=(array)$coupon;
					 	
						} 
					$this->db->insert_batch('coupons',$rows_2);
				} 


		 	
		}
		 
 
	 

	}
 
 }