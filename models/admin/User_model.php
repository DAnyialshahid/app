<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model{
	
	
	public $return_response = array(
		
		'ERROR'			=> FALSE,
		'MESSAGE'		=> '',
		'DATA'			=> array()
	
	);
	
	public function add(){
		
		
		$this->db->insert('web_users' , array(
		
			'username'		=> $this->input->post('username'),
			'first_name'	=> $this->input->post('first_name'),
			'last_name'		=> $this->input->post('last_name'),
			'contact'		=> $this->input->post('contact'),
			'address'		=> $this->input->post('address'),
			'password'		=> md5($this->input->post('password').'48615029'),
			'role_id'		=> $this->input->post('role'),
			'status'		=> '1'
		
		));
		
		$this->return_response['ERROR']	= FALSE;
		$this->return_response['MESSAGE']	= 'Successfully Inserted';
		return $this->return_response;
	}
	
	
	public function update(){
		
		
		$inputs_fields = array(
		
			'username'		=> $this->input->post('username'),
			'first_name'	=> $this->input->post('first_name'),
			'last_name'		=> $this->input->post('last_name'),
			'contact'		=> $this->input->post('contact'),
			'address'		=> $this->input->post('address'),
			'role_id'		=> $this->input->post('role'),
			'status'		=> $this->input->post('status')
		
		);
		
		if(!empty($this->input->post('password'))){
			
			
			$inputs_fields += [
				'password'		=> md5($this->input->post('password').'48615029')
			];
		}
		$this->db->where('id' , $this->input->post('user_id'));
		$this->db->update('web_users' , $inputs_fields);
		
		$this->return_response['ERROR']	= FALSE;
		$this->return_response['MESSAGE']	= 'Successfully Updated';
		return $this->return_response;
	}
	
	
	public function GetUsersList(){
		
		$data = $this->db->get('web_users')->result();
		
		return $data;
	}
	
	
	public function GetSubscriberInfo($params = array()){
		
		
		$result = $this->db->get_where('web_subscriber', $params)->result();
		
		return $result;
	}
	
}