<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';
  require_once APPPATH . 'controllers/Front_api.php';
class Frontend extends front_api{
	
 
	public $direct_access;
 
 
	public function __construct()
	{
 
 
		$this->direct_access=  getallheaders()['direct_access']=='true'?true:false;

		if ($this->direct_access) {
			if (empty($_POST['site_id'])) {
				 $_POST['site_id']=site_id;
			}
		
		}
	 	parent::__construct($this->direct_access,true); 
		ob_clean(); 
  
		// header("Title:"); // HTTP 1.1.


// $config['base_url'] = 'APP_URL';
	 // d($_COOKIE);
 
	 // d($_SERVER);
 //dd(site_id);
		if(isset($_GET['debuger']) && $_GET['debuger']){
	        
	        $this->output->enable_profiler(TRUE);
	    }
	}

	 
	public function direct_access_data($page_name)
	{	 

		if ($this->direct_access) {
			if ($page_name=='home') {
				

				 $common=$this->getCommon()['response'] ;

				 $slides=$this->getSlides()['response'] ;

				 $_POST['limit']=10; 
				  $_POST['side_bar']='top=1&show_in_home=1';
				 $recommendedCoupons=$this->getRecommendedCoupons()['response'] ;

 

				 $_POST['limit']=10;
				 $_POST['side_bar']='popular=1&show_in_home=1';
				 $popularCoupons=$this->getRecommendedCoupons()['response'] ;

		         $_POST['limit']=15;
				 $popuplarCategories=$this->getPopuplarCategories()['response'] ;

				 $_POST['limit']=15;
				 $popularStores=$this->getPopularStores()['response'];

				  $_POST['limit']=15;
				  $topStores=$this->getTopStores()['response'] ;
 
				 
		 		$return = (object)[
		 			'common'=> $common, 
		 			'slides'=> $slides, 
		 			'recommendedCoupons'=> $recommendedCoupons, 
		 			'popularCoupons'=> $popularCoupons, 
		 			'popuplarCategories'=>$popuplarCategories, 
		 			'popularStores'=> $popularStores, 
		 			'topStores'=> $topStores, 
		 		];
		 		return $return ;
			}			

			if ($page_name=='stores') {
				 $common=$this->getCommon()['response'] ;

				 $_POST['limit']=10;
				 $popularStores=$this->getPopularStores()['response'];
			
				 $_POST['limit']=9999999;

				 $stores=$this->getStores()['response'] ;


		 		$return = (object)[
		 			'common'=> $common, 
		 			'popularStores'=> $popularStores, 
		 			'stores'=>$stores, 
		 		];
		 		return $return ;
			}	

			if ($page_name=='categories') {
				 $common=$this->getCommon()['response'] ;

				 $_POST['limit']=10;
				 $categoriesByGroups=$this->getCategoriesByGroups()['response'];
			
			 

		 		$return = (object)[
		 			'common'=> $common, 
		 			'categoriesByGroups'=> $categoriesByGroups, 
		 		 
		 		];
		 		return $return ;
			}		
			if ($page_name=='constant_page') {
				 $common=$this->getCommon()['response'] ;   

		 		$return = (object)[
		 			'common'=> $common, 
		 			 
		 		 
		 		];
		 		return $return ;
			}	

			if ($page_name=='single_store') {
				 
				 $_POST['limit']=9999999;
				 $store=$this->getStore()['response'] ;
		 		$return = (object)[
		 			 
		 			'store'=>$store, 
		 		];
		 		return $return ;
			}
		}
		
 
	}

	public function loadByAjax($pagename)
	{
		$this->direct_access=true;
		echo json_encode(['success'=>'yes','response'=>$this->direct_access_data($pagename)]);
	}


	public function home()
	{
 
//	  dd($this->direct_access_data('home'));

			 add_page($this,'index.php',[
			 	'content_page'=>'sections/home',
			 	'js'=>'home',
			 	'page_name'=>'home',
			 	'data'=>$this->direct_access_data('home'),

			 ]); 

	}
	 
	public function stores($alphabet='a')
	{
		if ($this->direct_access && $alphabet!='all' && !empty($alphabet)) {
				 $_POST['alphabet']=$alphabet;
		}
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/all-stores',
			 	'js'=>'all-stores',
			 	'page_name'=>'stores',
			 	'data'=>$this->direct_access_data('stores'),


			 ]); 

	}
	
	public function catagories()
	{


			 add_page($this,'index.php',[
			 	'content_page'=>'sections/categories',
			 	'js'=>'categories',
			 	'page_name'=>'catagories',
			 		'data'=>$this->direct_access_data('categories'),
			 ]); 

	}
	

	public function single_store($slug)
	{
		if ($this->direct_access) {
			$_POST['slug']=$slug;
		}

			 add_page($this,'index.php',[
			 	'content_page'=>'sections/single_store',
			 	'js'=>'single_store',
			 	'type'=>'single_store',
			 	'slug'=>$slug,
			 	'page_name'=>'single_store',
			 	'data'=>$this->direct_access_data('single_store'),

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

			 		'data'=>$this->direct_access_data('catagory'),

			 ]); 

	}		

	 
	public function constant_page($slug)
	{

			 add_page($this,'index.php',[
			 	'content_page'=>'sections/pages/'.$slug,
			 	'js'=>$slug,
			 	'page_name'=>'constant_page',  

			 		'data'=>$this->direct_access_data('constant_page'),

			 ]); 
			

	}	

	public function dynamic_page($slug)
	{

			 add_page($this,'index.php',[
			 	'content_page'=>'sections/pages/dynamic_page.php',
			 	'js'=>'dynamic_page',  
			 	'slug'=>$slug,
			 	'page_name'=>'dynamic_page',  

			 		'data'=>$this->direct_access_data('dynamic_page'),

			 ]); 

	}	


	public function sitemap()
	{
		
//exit('1');
	$site_id=site_id;


				 header("Content-type: text/xml");
				   
				        $output = '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">  ' . "\n";
				     
            	$limit=100;
			 	$stores = $this->db->where('site_id',site_id)->get('stores')->result();
				$total=count($stores)/$limit;
			 	for ($i=0;$i<$total;$i++) {
			 							$offset=$i*$limit;
			 							$output .= '<url>'."\n";
			 					        $output .= '<loc>'.base_url().'sitemap_stores_'.$limit.'_'.$offset.'.xml'.'</loc>'."\n";
			 					        $output .= '<lastmod>'.date('y-m-d').'</lastmod>'."\n";;
			 							$output .= '</url>'."\n"."\n";
			 	
			 	}
			 	$limit=20;
			 	$categories = $this->db->where('site_id',site_id)->get('categories')->result();
				$total=count($categories)/$limit;
			 	for ($i=0;$i<$total;$i++) {
			 							$offset=$i*$limit;
			 							$output .= '<url>'."\n";
			 					        $output .= '<loc>'.base_url().'sitemap_categories_'.$limit.'_'.$offset.'.xml'.'</loc>'."\n";
			 					        $output .= '<lastmod>'.date('y-m-d').'</lastmod>'."\n";;
			 							$output .= '</url>'."\n"."\n";
			 	
			 	}



$output .= '<url>'."\n";
$output .= '<loc>'.base_url().'page/contact_us</loc>'."\n";
$output .= '<lastmod>'.date('y-m-d').'</lastmod>'."\n";;
$output .= '</url>'."\n"."\n";
			 
				exit( $output.'</urlset>');	
		 exit('');

	}	

	public function sitemap_stores($limit,$offset)
	{
		
//exit($offset);
	$site_id=site_id;


				 header("Content-type: text/xml");
				   
				        $output = '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">  ' . "\n";
				     

			 	$stores = $this->db->where('site_id',site_id)->order_by('name','asc')->limit($limit,$offset)->get('stores')->result();

 	foreach($stores as $store) {  
 			    		 
 							$output .= '<url>'."\n";
 					        $output .= '<loc>'.base_url().'store/'.$store->custom_url.'</loc>'."\n";
 					        $output .= '<lastmod>'.date('y-m-d',strtotime($store->updated_date)).'</lastmod>'."\n";
 							$output .= '</url>'."\n"."\n";
 	
 	}

			 
				exit( $output.'</urlset>');	


		 
		 exit('');

	}	

	public function sitemap_categories($limit,$offset)
	{
		
//exit($offset);
	$site_id=site_id;


				 header("Content-type: text/xml");
				   
				        $output = '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">  ' . "\n";
				     

			 	$categories = $this->db->where('site_id',site_id)->order_by('name','asc')->limit($limit,$offset)->get('categories')->result();

 	foreach($categories as $cat) {  
 			    		 
 							$output .= '<url>'."\n";
 					        $output .= '<loc>'.base_url().'category/'.$cat->slug.'</loc>'."\n";
 					        $output .= '<lastmod>'.date('y-m-d',strtotime($cat->updated_date)).'</lastmod>'."\n";
 							$output .= '</url>'."\n"."\n";
 	
 	}

			 
				exit( $output.'</urlset>');	


		 
		 exit('');

	}	


public function test()
	{
		exit('my test page');
			 add_page($this,'index.php',[
			 	'content_page'=>'sections/single_store_2.php',
			 	'js'=>'test',  
			 	'slug'=>$slug,  

			 ]); 


	}	


	 
	
}

?>