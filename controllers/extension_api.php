<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';
class extension_api extends CI_Controller{
	
 
	public function __construct()
	{

		
		parent::__construct();
  
		if (!( ! empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
		   				 if(strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false){ 



						 }else{
						 	   exit('No direct script access allowed');
						 }
		// echo strpos($_SERVER['HTTP_ACCEPT'], 'json') ;
		}
	// $_POST['limit']=1;
		if(isset($_GET['debuger']) && $_GET['debuger']){ 
	        $this->output->enable_profiler(TRUE);
	    }
	}

	   
	public function test($slug=null,$site_id=null)
	{
		
 
			echo json_encode(['success'=>'no','response'=>'test parameters']);
			exit();
	}
	public function webgains_report()
	{
			$data=$this->input->post('data');
			$site_name=$this->input->post('site_name');
			$user=$this->input->post('user');
			$myDir="./assets/uploads/extension/webgains/".$site_name.'/'.date('y-m-d').'/'.date('H').'/';
			if (!is_dir($myDir)) {
			    mkdir($myDir, 0777, true); // true for recursive create
			}
			$myfile = fopen($myDir.'Report 1 '.$user.".csv", "w") or die("Unable to open file!");

			fwrite($myfile, $data);
			fclose($myfile);

			echo json_encode(['success'=>'yes','response'=>'Done']);
			exit();
	}	
	public function webgains_callbacks()
	{
			$data=$this->input->post('data'); 
			$myDir="./assets/uploads/extension/webgains/callbacks/";
			if (!is_dir($myDir)) {
			    mkdir($myDir, 0777, true); // true for recursive create
			}
			$myfile = fopen($myDir."callbacks.html", "a+") or die("Unable to open file!");

			fwrite($myfile, $data);
			fclose($myfile);

			echo json_encode(['success'=>'yes','response'=>'Done']);
			exit();
	}
	   
	public function index($slug=null,$site_id=null)
	{
		
 
			echo json_encode(['success'=>'no','response'=>'invalid parameters']);
			exit();
	}
	    
	
}

?>