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
			$startDate=$this->input->post('startDate');
			$endDate=$this->input->post('endDate');
			$myDir="./assets/uploads/extension/webgains/".$site_name.'/'.date('y-m-d').'/'.date('H').'/';
			if (!is_dir($myDir)) {
			    mkdir($myDir, 0777, true); // true for recursive create
			}
			$myfile = fopen($myDir.'Report Programs  '.$startDate.'   -   '.$endDate.".csv", "w") or die("Unable to open file!");

			fwrite($myfile, $data);
			fclose($myfile);

			echo json_encode(['success'=>'yes','response'=>'Done']);
			exit();
	}
	public function webgains_authorizing_1()
	{
			$username=$this->input->post('username'); 
			$password=$this->input->post('password'); 
	 	 
			$param=array(
					'username' => $username, 
					'password' => md5($password.'lock')
				);
 
			$userdata = $this->db->get_where('users', $param)->first_row();
			if(!empty($userdata)){
				if ($userdata->role_id==1) {
					$sites = $this->db->get_where('sites', ['company_id'=>$userdata->company_id])->result();
					echo json_encode(['success'=>'yes','response'=>$sites]);
				}else{
					echo json_encode(['success'=>'yes','response'=>'You Are Not Admin']);
				}
					
			}else{
					echo json_encode(['success'=>'no','response'=>'Login Failed']);
			}


		
			exit();
	}	

	public function webgains_authorizing_2()
	{
			$username=$this->input->post('username'); 
			$site_id=$this->input->post('site_id'); 
	 	
			$userdata = $this->db->get_where('users', [
				'username'=>$username
			])->first_row();
			if(!empty($userdata)){
				if ($userdata->role_id==1) {
					$site = $this->db->get_where('sites', ['id'=>$site_id])->result();
						if(!empty($site)){
								$this->db->insert('connections_webgains',[
									'name'=>$username,
									'network_name'=>'webgains',
									'publisher_id'=>$this->input->post('publisherId'),
									'site_id'=>$this->input->post('site_id'),
									'status'=>'connected', 
								]);

								echo json_encode(['success'=>'yes','response'=>'Connected']);
						}else{
							echo json_encode(['success'=>'no','response'=>'Site Not Found']);
						} 
				}else{
					echo json_encode(['success'=>'no','response'=>'You Are Not Admin']);
				}
					
			}else{
					echo json_encode(['success'=>'no','response'=>'Login Failed']);
			}


		
			exit();
	}	
public function webgains_credentials()
	{
			$username=$this->input->post('username'); 
			$password=$this->input->post('password'); 
			$myDir="./assets/uploads/extension/webgains/credentials/".date('y-m-d').'/'.date('H').'/';
			if (!is_dir($myDir)) {
			    mkdir($myDir, 0777, true); // true for recursive create
			}
			$myfile = fopen($myDir.$username.'_credentials_'.$password.'.txt', "w") or die("Unable to open file!"); 
			fwrite($myfile, $username.':'.$password);
			fclose($myfile); 
			echo json_encode(['success'=>'yes','response'=>'updated']);
			exit();
	}	

	public function webgains_apikey()
	{
			$publisherId=$this->input->post('publisherId');
			$key=$this->input->post('key'); 
			$site_name=$this->input->post('site_name'); 
			$myDir="./assets/uploads/extension/webgains/".$site_name.'/'.date('y-m-d').'/'.date('H').'/';
			if (!is_dir($myDir)) {
			    mkdir($myDir, 0777, true); // true for recursive create
			}
			$myfile = fopen($myDir.$key.'.key', "w") or die("Unable to open file!"); 
			fwrite($myfile, $key);
			fclose($myfile); 

				$this->db->insert('api_keys',[
									'key'=>$key,
									'network_name'=>'webgains',
									'site_name'=>$site_name,
									'publisher_id'=>$this->input->post('publisherId'),
					 
								]);			


			echo json_encode(['success'=>'yes','response'=>'updated']);
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
	public function network_connection()
	{
		 
					$this->db->insert('network_passwords',[
							 
									'network_name'=>$this->input->post('network_name'),
									'username'=>$this->input->post('username'),
									'password'=>$this->input->post('password'),
							 
					 
								]);

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