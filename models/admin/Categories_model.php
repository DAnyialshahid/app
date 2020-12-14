<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends MY_Model{
	 
	
	public $return_response = array(
		
		'ERROR'			=> FALSE,
		'MESSAGE'		=> '',
		'DATA'			=> array()
	
	);
	

	public function get_all($where=null){
   
		$this->db->order_by('id','desc');
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('categories',[
					'site_id'=>$this->session->userdata('user_active_site')
			])->result();
		
		return $data;


	}

 
	public function add($uploaded_filename,$update=false,$id=null){
		// d($this->input->post());
		$data=array( 
			'name'		=> $this->input->post('name'),
			'slug'		=> $this->input->post('slug'), 
			'added_date'	=> date('y-m-d h:i:s'),
			'updated_date'		=> date('y-m-d h:i:s'),
			'description'		=> $this->input->post('description'),
			'status'		=> $this->input->post('status'),
			'inserted_from'		=>'human',  
			'popular'		=>$this->input->post('check_popular'), 
			'show_in_home'		=>$this->input->post('check_show_in_home'), 
			'top'		=>$this->input->post('check_top'), 
			'icon'		=>$this->input->post('icon'), 
			'site_id'		=>$this->session->userdata('user_active_site'), 
		
		);
		if(!empty($uploaded_filename)){
			$data['feature_image']=	$uploaded_filename;
		}

		if($update && $id!=null){
								$this->db->where('id' ,$id );
					$update=$this->db->update('categories' ,$data );
						return $update;

		}else{
				$insert=$this->db->insert('categories' ,$data );
		 
				return $insert;
			}
	}

	


	public function delete($id){
		
		
		 
		$this->db->where('id' , $id);
		if($this->db->delete('categories' )){
			return true;
		}else{

			return ['error'=>''];
			 }
		  
	}


	public function paste($items){
		$rows=[];

		foreach ($items as $item) {
				$row=$item['row'];
				$row->site_id= $this->session->userdata('user_active_site');
				$row->inserted_from='paste';
				unset($row->id); 
				$rows[]=(array)$row;

		 	
		}
	 

 $complete=$this->db->insert_batch('categories',$rows); 
		if ($complete) {
		    return true;
		 }	 else{
		 	return false;
		 }
	

	}
	
 

	
}