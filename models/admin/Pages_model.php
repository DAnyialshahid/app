<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();

	} 
	 

 	public function get_all($where=null){

 
		$this->db->order_by('name','asc');  
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('pages',[
						'site_id'=>$this->session->userdata('user_active_site')
			])->result();
		
		return $data;


	}


	public function add($update=false,$id=null){
		// d($this->input->post());
		$data=array( 
			'name'		=> $this->input->post('name'), 
			'slug'		=> $this->input->post('slug'), 
			'description'		=> $this->input->post('description'),   
			'seo_page_meta_title'		=> $this->input->post('seo_page_meta_title'),   
			'seo_page_meta_keywords'		=> $this->input->post('seo_page_meta_keywords'),   
			'seo_page_meta_description'		=> $this->input->post('seo_page_meta_description'),   
			'added_date'	=> date('y-m-d h:i:s'),
			'updated_date'		=> date('y-m-d h:i:s'),
			'inserted_from'		=>'human',  
			'site_id'		=> $this->session->userdata('user_active_site') 
		
		
		); 
		if($update && $id!=null){
								$this->db->where('id' ,$id );
					$update=$this->db->update('pages' ,$data );
						return $update;

		}else{
				$insert=$this->db->insert('pages' ,$data );
		 
				return $insert;
			}
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