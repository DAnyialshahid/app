<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	if(!function_exists('LoginUser')){
		
		function LoginUser(){
			
			$ci =& get_instance();
		
			$return_array = array( 
				'ERROR'  => FALSE,
				'MESSAGE' => '' 
			);
			
			$username_input = $ci->input->post('username');
			$password_input = $ci->input->post('password');
			//echo $username_input . '<br>';
			//echo $password_input;
			
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
 
				$ci->session->set_userdata(array(
					
					'user_id'     => $userdata->id,
					'username'    => $userdata->username,
					'role_id'		  => $userdata->role_id,
					'role'		  => GetRoleName($userdata->role_id),
					'user_role_id'		  => $userdata->role_id,
					'user_role'		  => GetRoleName($userdata->role_id),
					'user_company_id'		  => $userdata->company_id,
					'user_site_id'		  => $userdata->site_id,
					'row'		  => $userdata,
					'loggedIn'	  => 1
					
				));
 				// 		$sites=getSites($this);
				 // if(count($sites)==1){
     //    		   $user_active_site=$sites[0]->id;
     //                }else{
     //                	 $user_active_site=$sites[0]->id;
     //                }
				$ci->session->set_userdata(array( 
					'user_active_site'     => 	getSites($ci)[0]->id, 
				));
			 
				

				
			 
				  echo json_encode(['success'=>'yes','response'=>'Login Successfull']);
			}
			else{
				   echo json_encode(['success'=>'no','response'=>'Username or Password is Invalid']);
	 
			}
			
	 exit();
		}
	}
	
	
	function showSessions(){
		
		$ci =& get_instance();
		print_r($ci->session->userdata());
	}
	
	function desSession(){
		
		$ci =& get_instance();
		$ci->session->sess_destroy();
	}
	
	 function User_Exist($param = array()){
			
			 
			
			$userdata = $this->db->get_where('users', $param)->result();
			d($param);
						 echo $this->db->last_query();
			if(!empty($userdata)){
				
				return true;
			}
			
			return false;
		}
	
	if(!function_exists('GetUserData')){
		
		function GetUserData($param = array()){
			
			$ci =& get_instance();
			
			$userdata = $ci->db->get_where('users', $param)->result();
			
			return !empty($userdata) ? $userdata[0] : array() ;
		}
	}
	
	
	
	if(!function_exists('GetRoleName')){
		
		function GetRoleName($id = ''){
			
			$ci =& get_instance();
			
			$role_array = $ci->db->get_where('users_roles', ['id' => $id])->result();
			
			if(!empty($role_array)){
				
				return $role_array[0]->name;
			
				
			}else{
				
				return false;
			}
		}
		
	}
	
	
	
	
	if(!function_exists('is_admin'))
	{
		function is_admin(){
			
			$ci =& get_instance();
			
			if(isLoggedIn() && $ci->session->userdata('role') == 'Admin'){
				
				return true;
			}
			
			return false;
		}
	}
		
	
	if(!function_exists('getUserId')){
			
		function getUserId(){
			
			$ci =& get_instance();
			
			return $ci->session->userdata('user_id');
		}
			
	}
	
	if(!function_exists('isLoggedIn')){
			
		function isLoggedIn(){
			
			$ci =& get_instance();
			
			$session_loggedin = $ci->session->userdata('loggedIn');
			
			if($session_loggedin == 1){
			
				return true;
			}
			
			return false;
		}
			
	}
	
	
	
	
	if(! function_exists('control_panelAuthentication')){
		
		
		function control_panelAuthentication(){
			
			
			if(!isLoggedIn()){
				
				redirect(base_url('admin/login'));
			}
			
			if(!User_Exist(['id' => getUserId()])){
				
				redirect('auth/logout');
			}
		}
		
	}
	
	
	
	
	function GetRoles(){
		
		$ci =& get_instance();
		
		return $ci->db->get('users_roles')->result();
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		

?>