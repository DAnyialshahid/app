<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';
class Admin extends Theme_Controller{
	
		
	public $props = array(
		
		'title'		=> 'Untitled',
		'page'		=> '',
		'template'	=> '',
		'data'		=> array()
	);
	
	
	public function __construct()
	{

		parent::__construct();
	


		// $this->load->model('admin/Taxonomies_model');
	 	// dd($_SESSION); 

		if(isset($_GET['debuger']) && $_GET['debuger']){
	        
	        $this->output->enable_profiler(TRUE);
	    }

	     if( $this->session->userdata('loggedIn')!=1){
	  
	     		if (!($this->uri->segment(1)=='admin' && $this->uri->segment(2)=='login') ) {
	     			redirect('authentication/login_panel');
	     					exit('Redirecting to login');
	     		}
		
			exit('Redirect to login');
		 }

	}

	
		
	public function index1()
	{

		$this->props['title'] = 'Admin - Dashboard';
		$this->props['page'] = 'dashboard';
		$this->props['activeLink'] = 'dashboard';
		$this->props['template'] = 'pages/dashboard';
		
		render_template($this->props);
	}
		
		
	public function index($type='')
	{


	if($type=='' || $type=='dashboard'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'dashboard',
			 	'js'=>'dashboard', 
			 	'title'=>'Dashboard',
			 ]); 
		}
	 
	}

	public function stores($type='',$id='')
	{
		if($type=='list' || $type==''){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/stores_list',
			 	'js'=>'stores_list',
			 	'title'=>'Stores ',

			 ]); 
		}
		if($type=='create'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/stores_create',
			 	'js'=>'stores_create', 
			 	'title'=>'Create Store',

			 ]); 
		}
		if($type=='edit'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/stores_create',
			 	'js'=>'stores_create',
			 	'id'=>$id, 
			 	'title'=>'Store Edit',

			 ]); 
		}
	 

	}
	
	public function categories($type='',$id='')
	{
		if($type=='list' || $type==''){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/categories_list',
			 	'js'=>'categories_list',
			 	'title'=>'Categories ',

			 ]); 
		}
		if($type=='create'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/categories_create',
			 	'js'=>'categories_create',
			 	'title'=>'Create Category',

			 ]); 
		}
		if($type=='edit'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/categories_create',
			 	'js'=>'categories_create',
			 	'id'=>$id,
			 	'title'=>'Edit Category',

			 ]); 
		}
	 

	}	

	public function sliders($type='',$id='')
	{
		if($type=='list' || $type==''){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/sliders_list',
			 	'js'=>'sliders_list',
			 	'title'=>'Sliders ',

			 ]); 
		}
		if($type=='create'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/sliders_create',
			 	'js'=>'sliders_create',
			 	'title'=>'Slider Create',

			 ]); 
		}
		if($type=='edit'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/sliders_create',
			 	'js'=>'sliders_create',
			 	'id'=>$id,
			 	'title'=>'Edit Slider',

			 ]); 
		}
	 

	}
	
	public function coupons($type='',$id='')
	{
		if($type=='list' || $type==''){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/coupons_list',
			 	'js'=>'coupons_list',
			 	'title'=>'Coupons ',

			 ]); 
		}
		if($type=='create'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/coupons_create',
			 	'js'=>'coupons_create',
			 	'title'=>'Coupon Create',

			 ]); 
		}
		if($type=='edit'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/coupons_create',
			 	'js'=>'coupons_create',
			 	'id'=>$id,
			 	'title'=>'Edit Coupon',

			 ]); 
		}
	 

	}
	 	
	public function users($type='',$id='')
	{
		if($type=='list' || $type==''){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/users_list',
			 	'js'=>'users_list',
			 	'title'=>'Users',

			 ]); 
		}
		if($type=='create'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/users_create',
			 	'js'=>'users_create',
			 	'title'=>'Create User',

			 ]); 
		}
		if($type=='edit'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/users_create',
			 	'js'=>'users_create',
			 	'id'=>$id, 
			 	'title'=>'Edit User',

			 ]); 
		}
	 

	}
	 
	 	public function pages($type='',$id='')
	{
		if($type=='list' || $type==''){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/pages_list',
			 	'js'=>'pages_list',
			 	'title'=>'Pages',

			 ]); 
		}
		if($type=='create'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/pages_create',
			 	'js'=>'pages_create',
			 	'title'=>'Create Page',

			 ]); 
		}
		if($type=='edit'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/pages_create',
			 	'js'=>'pages_create',
			 	'id'=>$id,
			 	'title'=>'Edit Page',

			 ]); 
		}
	 

	}
	  


	  public function config($type='',$id='')
	{
		if($type=='site' || $type==''){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/config/site_config',
			 	'js'=>'config/site_config',
			 	'title'=>'Configurations',

			 ]); 
		}
		if($type=='theme'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/config/site_theme',
			 	'js'=>'config/site_theme', 
			 	'title'=>'Themes',

			 ]); 
		} 

	}
	 
	 
	
}

?>