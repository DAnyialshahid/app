<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();

	} 
	 

 	public function get_sites($where=null){
    
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('sites',[
					'company_id'=>$this->session->userdata('user_company_id')
			])->result();
		
		return $data; 
	}

 	public function get_roles($where=null){
    
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('users_roles',[
					//'company_id'=>$this->session->userdata('user_company_id')
			])->result();
		
		return $data; 
	}

	public function get_settings($where=null){
    
		if($where){ $this->db->where($where);	 }	  


			$configs_rows =$this->db->where(['site_id'=>$this->session->userdata('user_active_site')])->get('configs')->result();  
			$configs =[] ;
			foreach ($configs_rows as $key => $value) {
				$configs[$value->name]=$value->value;
			}
			return $configs;
		
		return $data; 
	}	

	public function update_settings($logo=null,$favicon=null){


		  $settings=[];

		if ($logo) {
				$settings['logo']=$logo['file_name'];
		}  
		if ($favicon) {
 
				$settings['favicon']=$favicon['file_name'];
		}
 

				$settings['youtube']=$this->input->post('youtube');
				$settings['contact_number']=$this->input->post('contact_number');
				$settings['contact_address']=$this->input->post('contact_address');
				$settings['contact_country']=$this->input->post('contact_country');
				$settings['contact_flag']=$this->input->post('contact_flag');
				$settings['facebook']=$this->input->post('facebook');
				$settings['instagram']=$this->input->post('instagram');
				$settings['twitter']=$this->input->post('twitter');
				$settings['pintrest']=$this->input->post('pintrest');
				$settings['status']=$this->input->post('status');
				$settings['description']=$this->input->post('description');
				$settings['header']=$this->input->post('header');
				$settings['footer']=$this->input->post('footer');
				// $settings['domain']=$this->input->post('domain');
				// $settings['theme']=$this->input->post('theme');
	 
				foreach ($settings as $name => $value) {
					 $update=$this->db->set('value',$value)
					 ->where([ 
					 	'name'=> $name ,
					 	'site_id'=>$this->session->userdata('user_active_site')
					])
		 			 ->update('configs');  
				 
				}
		
		 
			return $update;
		 
	}


 }

?>