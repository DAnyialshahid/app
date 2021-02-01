<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();

	} 
	 

 	public function get_all($where=null){
   
		$this->db->select('users.*');
		$this->db->select('users_roles.name as role_name');
		$this->db->select('sites.name as site_name');
		$this->db->order_by('id','desc'); 
		$this->db->join('users_roles','users_roles.id=users.role_id');
		$this->db->join('sites','sites.id=users.site_id');
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('users',[
					'users.company_id'=>$this->session->userdata('user_company_id')
			])->result();
			if ($data) {
				foreach ($data as   &$row) {
				$row->password=decrypt($row->password,'no_one_can_decrypt');
				}
			}
		
		return $data;


	}


	public function add($uploaded_filename,$update=false,$id=null){
		// d($this->input->post());
		
		$data=array( 
			'username'		=> $this->input->post('username'),
			'email'			=> $this->input->post('email'),
			'first_name'	=> $this->input->post('first_name'), 
			'last_name'		=> $this->input->post('last_name'),
			'contact'		=> $this->input->post('contact'),
			'status'		=> $this->input->post('status'),
			'role_id'		=> $this->input->post('role_id'),
			'added_date'	=> date('y-m-d h:i:s'),
			'updated_date'	=> date('y-m-d h:i:s'),
			'inserted_from' =>'human',  
			'site_id'		=> $this->input->post('site_id'), 
			'company_id'	=> $this->session->userdata('user_company_id'),  
		
		
		);
		if ($this->input->post('password') ) { 
			$data['password']= md5($this->input->post('password').'lock');
		}


		if(!empty($uploaded_filename)){
			$data['feature_image']=	$uploaded_filename;
		}

		if($update && $id!=null){
								$this->db->where('id' ,$id );
					$update=$this->db->update('users' ,$data );
						return $update;

		}else{
				$insert=$this->db->insert('users' ,$data );
		 
				return $insert;
			}
	}

	

	public function delete($id){
		
		
		 
		$this->db->where('id' , $id);
		if($this->db->delete('users' )){
			return true;
		}else{

			return ['error'=>''];
			 }
		  
	}



	
}
?>