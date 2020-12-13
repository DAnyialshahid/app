<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
		
	public function __construct(){
		
		parent::__construct();
		
		
		//autoload web options..
		
		registered_webOptions();
		
		$this->load->model('admin/Taxonomies_model');
		$this->load->model('admin/Coupons_model');
		$this->load->model('admin/Option_model');
		$this->load->model('theme/Theme_model');
		$this->load->model('admin/User_model');
		$this->db->query(' SET FOREIGN_KEY_CHECKS = 0;');
	
	}
	
	
	
	
	
	
	
	
}

?>