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
 //dd(site_id);
		if(isset($_GET['debuger']) && $_GET['debuger']){
	        
	        $this->output->enable_profiler(TRUE);
	    }
	}

	 
	public function home()
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/home',
			 	'js'=>'home',
			 	'page_name'=>'home',

			 ]); 

	}
	 
	public function stores()
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/all-stores',
			 	'js'=>'all-stores',
			 	'page_name'=>'stores',


			 ]); 

	}
	
	public function catagories()
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/categories',
			 	'js'=>'categories',
			 	'page_name'=>'catagories',
			 ]); 

	}
	

	public function single_store($slug)
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/single_store',
			 	'js'=>'single_store',
			 	'type'=>'single_store',
			 	'slug'=>$slug,
			 	'page_name'=>'single_store',

			 ]); 

	}
	public function catagory($slug)
	{
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/single_store',
			 	'js'=>'single_store',
			 	'type'=>'single_category',
			 	'slug'=>$slug,
			 	'page_name'=>'single_category',

			 ]); 

	}		

	 
	public function constant_page($slug)
	{

			 add_page($this,'index.php',[
			 	'content_page'=>'sections/pages/'.$slug,
			 	'js'=>$slug,
			 	'page_name'=>'constant_page',  

			 ]); 
			

	}	

	public function dynamic_page($slug)
	{

			 add_page($this,'index.php',[
			 	'content_page'=>'sections/pages/dynamic_page.php',
			 	'js'=>'dynamic_page',  
			 	'slug'=>$slug,
			 	'page_name'=>'dynamic_page',  

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