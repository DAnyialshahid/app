<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends MY_Model{
	 
	 

	public function get_all($where=null){
   
		$this->db->order_by('id','desc');
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('slider',[
					'site_id'=>$this->session->userdata('user_active_site')
			])->result();

			foreach ($data as $key => &$slider) {
				$slider->images= $this->db->get_where('slider_slides',[
							'slide_id'=>$slider->id
					])->result();

			}
		
		return $data;


	}

 
	public function add($uploaded,$update=false,$id=null){
		// d($this->input->post());
		$data=array( 
			'name'		=> $this->input->post('name'),
			'added_date'	=> date('y-m-d h:i:s'),
			'updated_date'		=> date('y-m-d h:i:s'),
			'status'		=> $this->input->post('status'),
			'inserted_from'		=>'human',  
			'type'		=>$this->input->post('type'), 
			'site_id'		=>$this->session->userdata('user_active_site'), 
		
		);
		if($update && $id!=null){

								$this->db->where('id' ,$id );
					            $update=$this->db->update('slider' ,$data );
					           	$insert_id=$id;

								$this->db->where('slide_id' ,$id );
					 			$this->db->delete('slider_slides' );

		}else{
				$insert=$this->db->insert('slider' ,$data );
		 					 	$insert_id=$this->db->insert_id();	
		 
			}


				foreach ($uploaded as  $upload) {
									 $this->db->insert('slider_slides' ,[
									 		'file_name'=>$upload['file_name'],
									 		'affliate_link'=>$upload['link'],
									 		'slide_id'=>$insert_id, 
									] );
					}

	return true;


	}

	


	public function delete($id){
		
		
		 
		$this->db->where('slide_id' , $id);
		$this->db->delete('slider_slides' );

		
		$this->db->where('id' , $id);
		if($this->db->delete('slider' )){
			return true;
		}else{

			return ['error'=>''];
			 }
		  
	}

	
}