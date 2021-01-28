<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bots_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();

	} 
	 

 	public function get_all($where=null){

 
		$this->db->order_by('name','asc');  
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('bots',[
						'company_id'=>$this->session->userdata('user_company_id')
			])->result();
		
		return $data;


	}

	public function details($id){
		$this->db->order_by('name','asc');   
		$data = $this->db->get_where('bots_stores',[
						'bot_id'=>$id
			])->result();
		
		return $data;


	}
 	public function pause($id){

  
			 $this->db->set('status','pause');	   
			 $this->db->where('id',$id);	   
			 $update=$this->db->update('bots');	    

		return $update;


	}

 	public function run($id){

  
			 $this->db->set('status','running');	   
			 $this->db->where('id',$id);	   
			 $update=$this->db->update('bots');	    
			 
		return $update;


	}

 
	public function reset($id){

  
			 $this->db->set('status','reset');	   
			 $this->db->set('last_position',null);	   
			 $this->db->where('id',$id);	   
			 $update=$this->db->update('bots');	    
			 
		return $update;


	}

 



	
}
?>