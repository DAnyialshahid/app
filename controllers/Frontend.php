<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';
class Frontend extends Theme_Controller{
	
 
	
	public function __construct()
	{
		
		parent::__construct();
// $config['base_url'] = 'APP_URL';
	 // d($_COOKIE);
 
	// d(getallheaders());
	 // d($_SERVER);
// dd(site_id);
		if(isset($_GET['debuger']) && $_GET['debuger']){
	        
	        $this->output->enable_profiler(TRUE);
	    }
	}

	 
	public function home()
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/home',
			 	'js'=>'home',

			 ]); 

	}
	 
	public function stores()
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/all-stores',
			 	'js'=>'all-stores',

			 ]); 

	}
	
	public function catagories()
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/categories',
			 	'js'=>'categories',
			 ]); 

	}
	

	public function single_store($slug)
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/single_store',
			 	'js'=>'single_store',
			 	'type'=>'single_store',
			 	'slug'=>$slug,

			 ]); 

	}
	public function catagory($slug)
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/single_store',
			 	'js'=>'single_store',
			 	'type'=>'single_category',
			 	'slug'=>$slug,

			 ]); 

	}		

	 
	public function constant_page($slug)
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/pages/'.$slug,
			 	'js'=>$slug,  

			 ]); 

	}	

	public function dynamic_page($slug)
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/pages/dynamic_page.php',
			 	'js'=>'dynamic_page',  
			 	'slug'=>$slug,  

			 ]); 

	}	


	public function test($slug)
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/single_store_2.php',
			 	'js'=>'test',  
			 	'slug'=>$slug,  

			 ]); 

	}	


	 
	
}

?>