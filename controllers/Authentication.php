<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';
class Authentication extends Theme_Controller{

	
	public function login_panel(){
		
		
		//  if( $this->session->userdata('loggedIn')==1){
		// 	echo 'SESSION DEACTIVATING ';
		// 	$this->session->unset_userdata($array_items);
			
		// 	redirect('admin/login');
		// }else{
		//     	redirect('admin');
		// }
	 
		
		 backend_page($this,'login.php',[
			 ]); 
		
		//$this->load->view('admin/templates/login');
		
	}
	
	
	
	function domain($site_id){
		
			echo encrypt($site_id,'no_one_can_decrypt');
	}

	function User_Exist($param = array()){
			
 
	
			$userdata = $this->db->get_where('users', $param)->result();
			
			if(!empty($userdata)){
				
				return true;
			}
			
			return false;
		}

	public function generate_token($user_id){
		$now = new DateTime(); //current date/time
$now->add(new DateInterval("PT24H"));
$expire_time = $now->format('Y-m-d H:i:s');
$token=md5(rand());

		$this->db->insert('users_tokens',[
				'user_id'=>$user_id,
				'token'=>$token,
				'status'=>'active',
				'expire_date'=>$expire_time, 
		]);

return $token;
	}
	public function do_login(){
// 	 print_r($_POST);
// if (empty($_SESSION['da'])) {
// 	 print_r($_SESSION);
// echo 'Session not found writng ';
// $_SESSION['da']='asdsadasdasdasdasd';
// }else{
// 	echo 'Session FOUND';
// 	 print_r($_SESSION);
// }
		 
 

  // exit(print_r($_SESSION));
 			 
			$return_array = array( 
				'ERROR'  => FALSE,
				'MESSAGE' => '' 
			);
			
			$username_input = $this->input->post('username');
			$password_input = $this->input->post('password');

			// echo $username_input . '<br>';
			// echo $password_input;

// d(getallheaders());
// d($_POST);
			$check_usr = $this->User_Exist(array( 
				'username' => $username_input,
				'password' => md5($password_input.'lock'),
				'status'   => 'Active'
			));

			if($check_usr)
			{
				$userdata = GetUserData(array(
					'username' => $username_input, 
					'password' => md5($password_input.'lock')
				));
 
				$this->session->set_userdata(array(
					
					'user_id'     => $userdata->id,
					'username'    => $userdata->username,
					'role_id'		  => $userdata->role_id,
					'role'		  => GetRoleName($userdata->role_id),
					'user_role_id'		  => $userdata->role_id,
					'user_role'		  => GetRoleName($userdata->role_id),
					'user_company_id'		  => $userdata->company_id,
					'user_site_id'		  => $userdata->site_id,
					'row'		  => $userdata,
					'token'		  => $this->generate_token( $userdata->id),
					'loggedIn'	  => 1
					
				));
 				// 		$sites=getSites($this);
				 // if(count($sites)==1){
     //    		   $user_active_site=$sites[0]->id;
     //                }else{
     //                	 $user_active_site=$sites[0]->id;
     //                }
				$this->session->set_userdata(array( 
					'user_active_site'     => 	getSites($this)[0]->id, 
				));
			 
				
 
			 
				  echo json_encode(['success'=>'yes','response'=>'Login Successfull']);
			}
			else{
				   echo json_encode(['success'=>'no','response'=>'Username or Password is Invalid']);
	 
			}
			
	 exit();
		
	}
	
	
	
	public function logout(){
		
		$array_items = array('user_id', 'username' , 'role', 'loggedIn');
		
		 if( $this->session->userdata('loggedIn')==1){
			echo 'SESSION DEACTIVATING ';
			$this->session->unset_userdata($array_items);
			
			redirect('admin/login');
		}
		
		die('Logout success');
	}
	
	
}

?>