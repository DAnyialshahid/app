<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';

class api extends Theme_Controller{
public $login_user_id;	
public $login_user;	
		
	public $props = array(
		
		'title'		=> 'Untitled',
		'page'		=> '',
		'template'	=> '',
		'data'		=> array()
	);
	
	
	public function __construct()
	{
		
		parent::__construct();
	 
	 
		  flush(); 

		  	if (!( ! empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
		   				 if(strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false){  
						 }else{
						 	   exit('No direct script access allowed');
						 }
			}



		//$this->load->model('admin/Taxonomies_model');
				//registered_webOptions();
		//control_panelAuthentication();
	//	print_r($_SESSION);

	
	  
	     		 
			// if ($this->input->post('token')) {
			// 	$token=$this->db->order_by('id','desc')->get_where('users_tokens',[
			// 			'token'=>$this->input->post('token')
			// 	])->first_row();
			// 	if (empty($token)) {
			// 		  echo json_encode(['success'=>'no','response'=>'Invalid Token']);
			// 			exit();
			// 	}else{
			// 		if (strtotime($token->expire_date) <= strtotime('now') ) {
			// 			echo json_encode(['success'=>'no','response'=>'OAuth Expired']);
			// 			exit(); 
			// 		}else{

			// 			$this->login_user=$this->db->get_where('users',[
			// 					'id'=>$token->user_id
			// 				])->first_row(); 

			// 		}
			// 	}
			// }else{
				
			
			// }
			
		 if( $this->session->userdata('loggedIn')!=1){ 
				 		echo json_encode(['success'=>'no','response'=>'OAuth Failed']);
						exit(); 
				 		 
				 	  }
		// if ($this->input->post('token') && empty($this->session->userdata('user_active_site')) ) { 
		// 	$this->session->set_userdata('user_active_site',$this->login_user->site_id);
	
		// }

			


		if(isset($_GET['debuger']) && $_GET['debuger']){ 
	        $this->output->enable_profiler(TRUE);
	    }
	}

	
public function getClipboard()
	{


         $this->load->library('cart'); 
		 $group_items=[];
		      foreach ($this->cart->contents() as $item){  
		          $group_items[$item['type']][]=$item;
		      }
		      echo json_encode(['success'=>'yes','response'=>$group_items]);
 exit();
  }

  public function deleteClipboard($id)
	{

    $this->load->library('cart'); 
 $this->cart->remove($id); 
         
		      echo json_encode(['success'=>'yes','response'=>'deleted']);
 exit();
  }
  public function pasteClipboard($type)
	{

    $this->load->library('cart'); 
 //$this->cart->remove($id); 
    
         
		      echo json_encode(['success'=>'yes','response'=>$type]);
 exit();
  }


	public function changeSite($site_id)
	{
		 $this->session->set_userdata('user_active_site',$site_id);
		// $this->db->set('site_id',$site_id)->where('token',$this->input->post('token'))->update('users_tokens');

				 // echo  $this->session->userdata('user_active_site');
				 // echo '=='.$site_id;
		
		echo json_encode(['success'=>'yes','response'=>'Changed']);
		exit();
	}

	public function getPages($where=null,$return=false)
	{

			$this->load->model('admin/pages_model');
			$pages=$this->pages_model->get_all($where); 
				if($return){return $pages;}
			echo json_encode(['success'=>'yes','response'=>$pages]);
			exit();
	}	
	public function getCoupons($where=null,$return=false)
	{

			$this->load->model('admin/coupons_model');
			$stores=$this->coupons_model->get_all($where); 
				if($return){return $stores;}
			echo json_encode(['success'=>'yes','response'=>$stores]);
			exit();
	}

	public function getUsers($where=null,$return=false)
	{

			$this->load->model('admin/users_model');
			$users=$this->users_model->get_all($where); 
				if($return){return $users;}
			echo json_encode(['success'=>'yes','response'=>$users]);
			exit();
	}

	public function getCategories($where=null,$return=false)
	{

			$this->load->model('admin/categories_model');
			$stores=$this->categories_model->get_all($where); 
				if($return){return $stores;}
			echo json_encode(['success'=>'yes','response'=>$stores]);
			exit();
	}
	public function getSlides($where=null,$return=false)
	{

			$this->load->model('admin/slider_model');
			$slides=$this->slider_model->get_all($where); 
				if($return){return $slides;}
			echo json_encode(['success'=>'yes','response'=>$slides]);
			exit();
	}



		
	public function getStores($where=null,$return=false)
	{ 

			$this->load->model('admin/stores_model');
			$stores=$this->stores_model->get_all($where); 
			if($return){return $stores;}
		echo json_encode(['success'=>'yes','response'=>$stores]);
		exit();
	}
		
	public function getStore($id)
	{

			$stores=$this->getStores([
					'id'=>$id
			],true);
			if(!empty($stores)){
				$stores=$stores[0];
					echo json_encode(['success'=>'yes','response'=>$stores]);
						exit();
			}else{

					echo json_encode(['success'=>'no','response'=>'Item Not found ID '.$id]);
						exit();

			}
	
	}	

	public function getCoupon($id)
	{

			$coupon=$this->getCoupons([
					'coupons.id'=>$id
			],true);
			if(!empty($coupon)){
				$coupon=$coupon[0];
					echo json_encode(['success'=>'yes','response'=>$coupon]);
						exit();
			}else{

					echo json_encode(['success'=>'no','response'=>'Item Not found ID '.$id]);
						exit();

			}
	
	}		
	public function getPage($id)
	{

			$page=$this->getPages([
					'id'=>$id
			],true);
			if(!empty($page)){
				$page=$page[0];
					echo json_encode(['success'=>'yes','response'=>$page]);
						exit();
			}else{

					echo json_encode(['success'=>'no','response'=>'Item Not found ID '.$id]);
						exit();

			}
	
	}	

	public function getUser($id)
	{

			$users=$this->getUsers([
					'users.id'=>$id
			],true);
			if(!empty($users)){
				$users=$users[0];
					echo json_encode(['success'=>'yes','response'=>$users]);
						exit();
			}else{

					echo json_encode(['success'=>'no','response'=>'Item Not found ID '.$id]);
						exit();

			}
	
	}


	public function getCategory($id)
	{

			$category=$this->getCategories([
					'id'=>$id
			],true);
			if(!empty($category)){
				$category=$category[0];
					echo json_encode(['success'=>'yes','response'=>$category]);
						exit();
			}else{

					echo json_encode(['success'=>'no','response'=>'Item Not found ID '.$id]);
						exit();

			}
	
	}	

	public function getSlide($id)
	{

			$slide=$this->getSlides([
					'id'=>$id
			],true);
			if(!empty($slide)){
				$slide=$slide[0];
					echo json_encode(['success'=>'yes','response'=>$slide]);
						exit();
			}else{

					echo json_encode(['success'=>'no','response'=>'Item Not found ID '.$id]);
						exit();

			} 

	}


	public function copyStores()
	{
			$this->load->library('cart'); 
 			$ids=explode(',', $this->input->get('ids'));

 			foreach ($ids as   $id) { 
 				$store=$this->db->get_where('stores',['id'=>$id])->first_row();
 				$data = array(
			        'id'      => $id,
			        'type'=>'Stores',
			        'site_id'=>$this->session->userdata('user_active_site'),
			        'row'     => $store,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'null',
			        'coupon'         => 'null'
			);
			$this->cart->insert($data );
 				
 			}
 				
echo json_encode(['success'=>'yes','response'=>'Copied Successfully']);
				exit();
		 
	}
	
	public function copyCategories()
	{
			$this->load->library('cart'); 
 			$ids=explode(',', $this->input->get('ids'));

 			foreach ($ids as   $id) { 
 				$store=$this->db->get_where('categories',['id'=>$id])->first_row();
 				$data = array(
			        'id'      => $id,
			        'type'=>'Categories',
			        'site_id'=>$this->session->userdata('user_active_site'),
			        'row'     => $store,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'null',
			        'coupon'         => 'null'
			);
			$this->cart->insert($data );
 				
 			}
 				
echo json_encode(['success'=>'yes','response'=>'Copied Successfully']);
				exit();
		 
	}

	public function copyCoupons()
	{
			$this->load->library('cart'); 
 			$ids=explode(',', $this->input->get('ids'));

 			foreach ($ids as   $id) { 
 				$store=$this->db->get_where('coupons',['id'=>$id])->first_row();
 				$data = array(
			        'id'      => $id,
			        'type'=>'Coupons',
			        'site_id'=>$this->session->userdata('user_active_site'),
			        'row'     => $store,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'null',
			        'coupon'         => 'null'
			);
			$this->cart->insert($data );
 				
 			}
 				
echo json_encode(['success'=>'yes','response'=>'Copied Successfully']);
				exit();
		 
	}	

	public function copyUsers()
	{
			$this->load->library('cart'); 
 			$ids=explode(',', $this->input->get('ids'));

 			foreach ($ids as   $id) { 
 				$users=$this->db->get_where('users',['id'=>$id])->first_row();
 				$users->name=$users->first_name. " " .$users->last_name;
 				$data = array(
			        'id'      => $id,
			        'type'=>'Users',
			        'site_id'=>$this->session->userdata('user_active_site'),
			        'row'     => $users,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'null',
			        'coupon'         => 'null'
			);
			$this->cart->insert($data );
 				
 			}
 				
echo json_encode(['success'=>'yes','response'=>'Copied Successfully']);
				exit();
		 
	}
	

		public function clearClipboardByType($type)
	{
			$this->load->library('cart');  
		    foreach ($this->cart->contents() as $item){   
				 if($item['type']==$type){
					$this->cart->remove($item['rowid']);
				 } 
		      }
echo json_encode(['success'=>'yes','response'=>'Clear Group Successfully']);
				exit();
		 
	}
		
	
			
	public function deletePage($id)
	{
		   $this->load->model('admin/pages_model');
			$delete=$this->pages_model->delete($id); 
			if($delete==true){ 
					echo json_encode(['success'=>'yes','response'=>$delete]);
			}else if(is_array($delete)){
					echo json_encode(['success'=>'no','response'=>$delete->error]);
			}
		exit();

	}				
	public function deleteStores($id)
	{
		   $this->load->model('admin/stores_model');
			$delete=$this->stores_model->delete($id); 
			if($delete==true){ 
					echo json_encode(['success'=>'yes','response'=>$delete]);
			}else if(is_array($delete)){
					echo json_encode(['success'=>'no','response'=>$delete->error]);
			}
		exit();

	}			

	public function deleteCategory($id)
	{
		   $this->load->model('admin/categories_model');
			$delete=$this->categories_model->delete($id); 
			if($delete==true){ 
					echo json_encode(['success'=>'yes','response'=>$delete]);
			}else if(is_array($delete)){
					echo json_encode(['success'=>'no','response'=>$delete->error]);
			}
		exit();

	}

	public function deleteCoupon($id)
	{
		   $this->load->model('admin/coupons_model');
			$delete=$this->coupons_model->delete($id); 
			if($delete==true){ 
					echo json_encode(['success'=>'yes','response'=>$delete]);
			}else if(is_array($delete)){
					echo json_encode(['success'=>'no','response'=>$delete->error]);
			}
		exit();

	}
	public function deleteUser($id)
	{
		   $this->load->model('admin/users_model');
			$delete=$this->users_model->delete($id); 
			if($delete==true){ 
					echo json_encode(['success'=>'yes','response'=>$delete]);
			}else if(is_array($delete)){
					echo json_encode(['success'=>'no','response'=>$delete->error]);
			}
		exit();

	}

	public function updatePage()
	{
		if($this->input->post('id')){
				$this->createPage(true,$this->input->post('id'));
		}
	}
	public function updateStore()
	{
		if($this->input->post('id')){
				$this->createStore(true,$this->input->post('id'));
		}
	}
	
	public function updateCoupon()
	{
		if($this->input->post('id')){
				$this->createCoupon(true,$this->input->post('id'));
		}
	}

	public function updateUser()
	{
		if($this->input->post('id')){
				$this->createUser(true,$this->input->post('id'));
		}
	}

	public function updateCategory()
	{
		// d($_FILES);
		// d($_SERVER['REQUEST_METHOD']);
		// d(getallheaders());
		// // dd($_POST);

		if($this->input->post('id')){
				$this->createCategory(true,$this->input->post('id'));
		}
	}
	public function updateSlide()
	{
		if($this->input->post('id')){
				$this->createSlide(true,$this->input->post('id'));
		}
	}


	public function createStore($update=false,$id=null)
	{

if(!empty($_FILES['feature_image']['name'])){

	   $config['upload_path']          = './assets/uploads/stores/';
   	   $config['allowed_types']        = 'gif|jpg|png';
     		    // $config['max_size']             = 100;
           //      $config['max_width']            = 1024;
           //      $config['max_height']           = 768;
    $this->load->library('upload');
$this->upload->initialize($config);
                if ( ! $this->upload->do_upload('feature_image'))
                {
                            $error = array('error' => $this->upload->display_errors());
                			echo json_encode(['success'=>'no','response'=>$error['error']]);
                			exit();
 
                }
                else
                {
                        $uploaded_file =$this->upload->data();
 
                }

 
}else{

$uploaded_file['file_name']='';
}
 
			$this->load->model('admin/stores_model');
			$add=$this->stores_model->add($uploaded_file['file_name'],$update,$id); 
			if($add){
						echo json_encode(['success'=>'yes','response'=>$add]);
			}else{
						echo json_encode(['success'=>'no','response'=>$add]);
			}

			
	
		exit();
	}
		

 
	public function createCategory($update=false,$id=null)
	{


if(!empty($_FILES['feature_image']['name'])){

	   $config['upload_path']          = './assets/uploads/categories/';
   	   $config['allowed_types']        = 'gif|jpg|png';
     		    // $config['max_size']             = 100;
           //      $config['max_width']            = 1024;
           //      $config['max_height']           = 768;
    $this->load->library('upload');
	$this->upload->initialize($config);
                if ( ! $this->upload->do_upload('feature_image'))
                {
                            $error = array('error' => $this->upload->display_errors());
                			echo json_encode(['success'=>'no','response'=>$error['error']]);
                			exit();
 
                }
                else
                {
                        $uploaded_file =$this->upload->data();
 
                }

 // dd(   $uploaded_file);
}else{

$uploaded_file['file_name']='';
}
 
			$this->load->model('admin/categories_model');
			$add=$this->categories_model->add($uploaded_file['file_name'],$update,$id); 
			if($add){
						echo json_encode(['success'=>'yes','response'=>$add]);
			}else{
						echo json_encode(['success'=>'no','response'=>$add]);
			}

			
	
		exit();
	}


	public function createSlide($update=false,$id=null)
	{
	
$uploaded_files=[];

foreach ($this->input->post('slider_link') as $i => $value) {
						$links=$this->input->post('slider_link');
 
 // d($_FILES['feature_image_'.$i]);
	if ( !empty($_FILES['feature_image_'.$i]['name'] ) ) { 

			 		$_FILES['file']['name']     = $_FILES['feature_image_'.$i]['name']; 
                    $_FILES['file']['type']     = $_FILES['feature_image_'.$i]['type']; 
                    $_FILES['file']['tmp_name'] = $_FILES['feature_image_'.$i]['tmp_name']; 
                    $_FILES['file']['error']     =$_FILES['feature_image_'.$i]['error']; 
                    $_FILES['file']['size']     = $_FILES['feature_image_'.$i]['size'];  

					   $config['upload_path']          = './assets/uploads/slides/';
				   	   $config['allowed_types']        = 'gif|jpg|png';
				     		    // $config['max_size']             = 100;
				           //      $config['max_width']            = 1024;
				           //      $config['max_height']           = 768;
				    $this->load->library('upload');
					$this->upload->initialize($config);
				                if ( ! $this->upload->do_upload('file'))
				                {
				                            $error = array('error' => $this->upload->display_errors());
				                			echo json_encode(['success'=>'no','response'=>$error['error']]);
				                			exit();
				 
				                }
				                else
				                {
				                        $uploaded_file =$this->upload->data();
				 
				                }
 				}else{
 					$uploaded_file=[];
 					$uploaded_file['file_name']=!empty($this->input->post('old_files')[$i])?$this->input->post('old_files')[$i]:'-';

 				}
		
		$uploaded[]=['file_name'=>$uploaded_file['file_name'],'link'=>$links[$i]];

}
  
 
 			$this->load->model('admin/slider_model');
			$add=$this->slider_model->add($uploaded,$update,$id); 
			if($add){
						echo json_encode(['success'=>'yes','response'=>$add]);
			}else{
						echo json_encode(['success'=>'no','response'=>$add]);
			}
 
	
		exit();
	}

 
	public function createPage($update=false,$id=null)
	{
 

			$this->load->model('admin/pages_model');
			$add=$this->pages_model->add($update,$id); 
			if($add){
						echo json_encode(['success'=>'yes','response'=>$add]);
			}else{
						echo json_encode(['success'=>'no','response'=>$add]);
			}

			
	
		exit();
	}


	public function createCoupon($update=false,$id=null)
	{

if(!empty($_FILES['feature_image']['name'])){

	   $config['upload_path']          = './assets/uploads/coupons/';
   	   $config['allowed_types']        = 'gif|jpg|png';
     		    // $config['max_size']             = 100;
           //      $config['max_width']            = 1024;
           //      $config['max_height']           = 768;
    $this->load->library('upload');
	$this->upload->initialize($config);
                if ( ! $this->upload->do_upload('feature_image'))
                {
                            $error = array('error' => $this->upload->display_errors());
                			echo json_encode(['success'=>'no','response'=>$error['error']]);
                			exit();
 
                }
                else
                {
                        $uploaded_file =$this->upload->data();
 
                }

 
			}else{

			$uploaded_file['file_name']='';
			}
 
			$this->load->model('admin/coupons_model');
			$add=$this->coupons_model->add($uploaded_file['file_name'],$update,$id); 
			if($add){
						echo json_encode(['success'=>'yes','response'=>$add]);
			}else{
						echo json_encode(['success'=>'no','response'=>$add]);
			}

			
	
		exit();
	}
		



	public function createUser($update=false,$id=null)
	{

if(!empty($_FILES['feature_image']['name'])){

	   $config['upload_path']          = './assets/uploads/coupons/';
   	   $config['allowed_types']        = 'gif|jpg|png';
     		    // $config['max_size']             = 100;
           //      $config['max_width']            = 1024;
           //      $config['max_height']           = 768;
    $this->load->library('upload');
	$this->upload->initialize($config);
                if ( ! $this->upload->do_upload('feature_image'))
                {
                            $error = array('error' => $this->upload->display_errors());
                			echo json_encode(['success'=>'no','response'=>$error['error']]);
                			exit();
 
                }
                else
                {
                        $uploaded_file =$this->upload->data();
 
                }

 
			}else{

			$uploaded_file['file_name']='';
			}
 
			$this->load->model('admin/users_model');
			$add=$this->users_model->add($uploaded_file['file_name'],$update,$id); 
			if($add){
						echo json_encode(['success'=>'yes','response'=>$add]);
			}else{
						echo json_encode(['success'=>'no','response'=>$add]);
			}

			
	
		exit();
	}
		
	
	//Common misc functions


	public function getSites()
	{

			$this->load->model('admin/f_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->f_model->get_sites()]);
			exit();
	}

	public function getRoles()
	{

			$this->load->model('admin/f_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->f_model->get_roles()]);
			exit();
	}

	public function getSettings()
	{

			$this->load->model('admin/f_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->f_model->get_settings()]);
			exit();
	}

	public function updateSettings()
	{

  
						$logo=null;
		  				if (isset($_FILES['logo']) && $_FILES['logo']['name']  ) {
		  				 
		  				
					   $config['upload_path']          = './assets/uploads/sites/';
				   	   $config['allowed_types']        = 'gif|jpg|png';
				     		    // $config['max_size']             = 100;
				           //      $config['max_width']            = 1024;
				           //      $config['max_height']           = 768;
				    $this->load->library('upload');
					$this->upload->initialize($config);
							
				                if ( ! $this->upload->do_upload('logo'))
				                {
				                            $error = array('error' => $this->upload->display_errors());
				                			echo json_encode(['success'=>'no','response'=>$error['error']]);
				                			exit(); 

				                }
				                else
				                {
				                        $logo =$this->upload->data(); 
				                }
				      }
 								
				                        $favicon=null;
 				if (isset($_FILES['favicon']) &&  $_FILES['favicon']['name']  ) {                
 								if ( ! $this->upload->do_upload('favicon'))
				                {
				                            $error = array('error' => $this->upload->display_errors());
				                			echo json_encode(['success'=>'no','response'=>$error['error']]);
				                			exit();
				 
				                }
				                else
				                {
				                        $favicon =$this->upload->data();
				 
				                }

				            }
 			
			$this->load->model('admin/f_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->f_model->update_settings($logo,$favicon)]);
			exit();
	}

	
}

?>