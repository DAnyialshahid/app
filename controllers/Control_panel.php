<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';
class Control_panel extends Theme_Controller{
	
		
	public $props = array(
		
		'title'		=> 'Untitled',
		'page'		=> '',
		'template'	=> '',
		'data'		=> array()
	);
	
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('admin/Taxonomies_model');
		$this->load->model('admin/Coupons_model');
				registered_webOptions();
		control_panelAuthentication();
		if(isset($_GET['debuger']) && $_GET['debuger']){
	        
	        $this->output->enable_profiler(TRUE);
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
			 	'content_page'=>'dashboard'
			 ]); 
		}
	 
	}

	public function stores($type='')
	{
		if($type=='list' || $type==''){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/stores_list',
			 	'js'=>'stores_list',

			 ]); 
		}
		if($type=='create'){
			 backend_page($this,'index.php',[
			 	'content_page'=>'sections/stores_create',
			 	'js'=>'stores_create',

			 ]); 
		}
	 

	}
	
			
	public function test()
	{

	 
	   add_page($this,'main.php'); 
	}
	
	
	
	public function taxonomies($type = '' , $todo = '', $id = ''){
		
		if($type != 'store' && $type != 'category'){ show_admin_Error('undefined taxonomy'); }
		
			
		$this->props['title'] = 'Admin - '.ucwords($todo . ' ' . $type);
		$this->props['template'] = 'pages/taxonomies/taxonomy_form';
		$this->props['data']['taxonomy_type'] = $type;
			
		if($todo == 'add'){
			
			
			$this->props['page'] = 'add_taxonomy';
			$this->props['activeLink'] = 'add_'.$type;
			if($type == 'category'){
				$this->props['data']['options'] = $this->Taxonomies_model->GenerateTaxonomyHierarchyOptions($type);
			}
		}else if($todo == 'update' && !is_null($id) && $id != ''){
			
			$this->props['page'] = 'update_taxonomy';
			$this->props['activeLink'] = 'update_'.$type;
			$this->props['data']['taxonomy_data'] = $this->Taxonomies_model->TaxonomyDataToUpdate($id, $type);
			if($type == 'category'){
				
				$this->props['data']['options'] = $this->Taxonomies_model->GenerateTaxonomyHierarchyOptions($type,0,0,$id);
			}
		}else if($todo == 'list'){
			//die;
			$this->props['title'] = 'Admin - '.ucwords($type . ' ' . $todo);
			$this->props['template'] = 'pages/taxonomies/taxonomies_list';
			$this->props['data']['options'] = '';
			$this->props['page'] = 'taxonomy_list';
			$this->props['activeLink'] = $type. '_list';
			$this->props['data']['taxonomy_type'] = $type;
			$this->props['data']['list_array'] = $this->Taxonomies_model->GenerateTaxonomiesTable($type);
			
		}
		else if($type == 'store' && $todo = 'assign-categories'){
			
			$this->props['title'] = 'Admin - '.ucwords($type . ' ' . $todo);
			$this->props['template'] = 'pages/taxonomies/store-assign-categories';
			$this->props['selected_data'] = $this->Taxonomies_model->GetStoresSelectedCategories();
			$this->props['page'] = 'assign-categories';
			$this->props['activeLink'] = 'assign-categories';
		
			
		}
		else{
			
			show_admin_Error('Error: url is not registered. invalid url');
		}
		
		
		render_template($this->props);
	}
	
	
	public function coupons($todo = '', $id = '', $extra_param = ''){
		
			
		if($todo == 'add'){
			
			$this->props['title'] = 'Admin - Add Coupon';
			$this->props['template'] = 'pages/coupons/coupon_form';
			$this->props['page'] = 'add_coupon';
			$this->props['activeLink'] = 'add_coupon';
			
			
			
		}else if($todo == 'update' && !is_null($id) && $id != ''){
			
			$GetCoupon = $this->Coupons_model->GetCoupon(array('id' => $id));
			
			if(empty($GetCoupon)){
				
				exit('coupon not found to update');
			}
			
			$this->props['title'] = 'Admin - Update Coupon';
			$this->props['template'] = 'pages/coupons/coupon_form';
			$this->props['page'] = 'update_coupon';
			$this->props['activeLink'] = 'update_coupon';
			$this->props['coupon_data'] =  $GetCoupon[0];
			$this->props['coupon_taxonomies'] = array_column($this->Coupons_model->GetCouponSelectedTaxonomies($id) , 'reference_id');
			
		}else if($todo == 'list'){
			
		
			
			$GetCouponsList = $this->Coupons_model->GetCouponsList();
			
			//echo $this->db->last_query();
			$this->props['title'] = 'Admin - Coupons List';
			$this->props['template'] = 'pages/coupons/coupons_list';
			$this->props['page'] = 'coupons_list';
			$this->props['activeLink'] = 'coupons_list';
			$this->props['data'] =  $GetCouponsList;
			
			//print_R($GetCouponsList);
			
			//here to work
			
		}
		
		else if($todo == 'sorting' &&  !empty($_GET['type']) && $_GET['type'] == 'featured'){
			
			$this->props['title'] = 'Admin - Coupons Sorting';
			$this->props['template'] = 'pages/coupons/coupon_sorting';
			$this->props['page'] = 'featured_coupons_sorting';
			$this->props['activeLink'] = 'featured_coupons_sorting';
			
			$this->props['sortingCoupons'] = $this->Theme_model->GetCouponsSections('featured', 'No');
			//echo $this->db->last_query();
			
		}
		else if($todo == 'sorting' && !empty($_GET['type']) && $_GET['type'] == 'new_coupon'){
			
			$this->props['title'] = 'Admin - Coupons Sorting';
			$this->props['template'] = 'pages/coupons/coupon_sorting';
			$this->props['page'] = 'new_coupon_sorting';
			$this->props['activeLink'] = 'new_coupon_sorting';
			$this->props['sortingCoupons'] = $this->Theme_model->GetCouponsSections('new_coupon', 'No');
			
		}
		else if($todo == 'sorting' && !empty($_GET['type']) && $_GET['type'] == 'top'){
			
			$this->props['title'] = 'Admin - Coupons Sorting';
			$this->props['template'] = 'pages/coupons/coupon_sorting';
			$this->props['page'] = 'top_coupon_sorting';
			$this->props['activeLink'] = 'top_coupon_sorting';
			$this->props['sortingCoupons'] = $this->Theme_model->GetCouponsSections('top_coupon', 'No');
			
		}
		else if($todo == 'sorting' && !is_null($id) && $id != '' && !is_null($extra_param)){
			
		
			if($extra_param != 'category' && $extra_param != 'store'){
				
				show_admin_Error('Error: Unknown Taxonomy name');
			}
			
			$taxonomy = $this->Taxonomies_model->GetTaxonomyArray(array('taxonomy_type' => $extra_param, 'id' => $id));
			
			if(empty($taxonomy)){
				
				show_admin_Error('There is no '.ucwords($extra_param).' Exist');
			}
			
			$this->props['title'] = 'Admin - Coupons Sorting';
			$this->props['template'] = 'pages/coupons/coupon_sorting';
			$this->props['page'] = 'taxonomy_coupons_sorting';
			$this->props['activeLink'] = 'taxonomy_coupons_sorting';
			$this->props['taxonomy_data'] = $taxonomy;
			$this->props['sortingCoupons'] =  $this->Theme_model->GetTaxonomyCoupons($id,'store');
		}
		
		else if($todo == 'sorting' && !empty($_GET['type']) && $_GET['type'] == 'store'){
			
			
			$this->props['title'] = 'Admin - Coupons Sorting';
			$this->props['template'] = 'pages/coupons/coupon_sorting';
			$this->props['page'] = 'coupons_sorting_select_Store';
			$this->props['activeLink'] = 'coupons_sorting_select_Store';
			$this->props['list'] = $this->Taxonomies_model->GetTaxonomyArray(array('taxonomy_type' => 'store'));
			
		}
		
		else if($todo == 'sorting' && !empty($_GET['type']) && $_GET['type'] == 'category'){
			
			
			$this->props['title'] = 'Admin - Coupons Sorting';
			$this->props['template'] = 'pages/coupons/coupon_sorting';
			$this->props['page'] = 'coupons_sorting_select_category';
			$this->props['activeLink'] = 'coupons_sorting_select_category';
			$this->props['list'] = $this->Taxonomies_model->GetTaxonomyArray(array('taxonomy_type' => 'category'));
			
		}
		
		else if($todo == 'sorting' && empty($_GET['type'])){
			
			$this->props['title'] = 'Admin - Coupons Sorting';
			$this->props['template'] = 'pages/coupons/coupon_sorting';
			$this->props['page'] = 'sorting_select_option';
			$this->props['activeLink'] = 'sorting_select_option';
			
		}
		else{
			
			show_admin_Error('Invalid URL Found.');
		}
		
		render_template($this->props);
	}
	
	
	
	
	
	
	public function developer_option($page_name = ''){
		
		if($page_name == 'head' || $page_name == 'footer'){
			
			$this->props['title'] = 'Admin - Edit '.ucwords($page_name);
			$this->props['template'] = 'pages/options/edit_head_footer';
			$this->props['page'] = 'edit_'.$page_name;
			$this->props['activeLink'] = 'developer_name';
			$this->props['type'] = $page_name;
			$this->props['content']	= $target_file = file_get_contents(APPPATH.'views/site/templates/'.$page_name.'_include.php');
			
			render_template($this->props);
		}
		else{
			
			show_admin_Error('Error: File to edit is invalid');
		}
		
	}
	
	public function pages($id = ''){
		
		
		if($id == '' || empty($id) ){
			
			$this->props['title'] = 'Admin - Pages List';
			$this->props['template'] = 'pages/options/pages_list';
			$this->props['page'] = 'pages_list';
			$this->props['activeLink'] = 'pages_list';
			$this->props['list'] = $this->Theme_model->GetPageContent(array());
			
		}
		else{
			
			$page_data = $this->Theme_model->GetPageContent(array('id' => $id), 'yes');
			
			if(!empty($page_data)){
				
				
				$this->props['title'] = 'Admin - Edit '.$page_data[0]->page_title;
				$this->props['template'] = 'pages/options/edit_single_page';
				$this->props['page'] = 'edit_page';
				$this->props['activeLink'] = 'edit_page';
				$this->props['page_content'] = $page_data;
				
			}
			else{
				
				show_admin_Error('Error: Page is invalid');
			}
			
		}
		
		render_template($this->props);
	}
	
	
	
	public function reviews($id = ''){
		
		if($id == '' || empty($id) ){
			
			$this->props['title'] = 'Admin - Reviews List';
			$this->props['template'] = 'pages/options/reviews';
			$this->props['page'] = 'reviews_list';
			$this->props['activeLink'] = 'reviews_list';
			$this->props['reviews_list'] = $this->Option_model->GetReviews(array());
			
		}
		else{
			
			$review_data = $this->Option_model->GetReviews(array('id' => $id));
			
			if(!empty($review_data)){
				
				
				$this->props['title'] = 'Admin - Edit '.$review_data[0]->subject;
				$this->props['template'] = 'pages/options/single_review';
				$this->props['page'] = 'review_page';
				$this->props['activeLink'] = 'review_page';
				$this->props['review_data'] = $review_data[0];
			}
			else{
				
				show_admin_Error('Error: Page is invalid');
			}
			
		}
		
		render_template($this->props);
		
	}
	
	public function siteconfig(){
		
		$this->props['title'] = 'Admin - Site Configuration ';
		$this->props['template'] = 'pages/siteconfig/siteconfig';
		$this->props['page'] = 'siteconfig';
		$this->props['activeLink'] = 'siteconfig';
		render_template($this->props);
	}

	
	public function users($todo = '' , $id = ''){
		
		if($todo == 'add'){
			
			$this->props['title'] = 'Admin - Add user';
			$this->props['template'] = 'pages/users/user_form';
			$this->props['page'] = 'add_new_user';
			$this->props['activeLink'] = 'add_new_user';
			
		}
		else if($todo == 'list'){
			
			$this->props['title'] = 'Admin - Users List';
			$this->props['template'] = 'pages/users/users_list';
			$this->props['page'] = 'users_list';
			$this->props['activeLink'] = 'users_list';
		}
		else if($todo == 'edit' && !is_null($id) && $id != ''){
			
			$userdata = GetUserData(array('id' => $id));
			
			if(!empty($userdata))
			{
				$this->props['title'] = 'Admin - Update User';
				$this->props['template'] = 'pages/users/user_form';
				$this->props['user_data'] = $userdata;
				$this->props['page'] = 'edit_user';
				$this->props['activeLink'] = 'edit_user';
			
			}else{
				
				show_admin_Error('Error: there is no user is in database with this id');
			}
		
		}
		else if($todo == 'subscriber' && empty($id)){
			
			$subscribers_list = $this->Option_model->GetSubscribers();
			$this->props['title'] = 'Admin - Subscribers List';
			$this->props['template'] = 'pages/options/subscriber_list';
			$this->props['list'] = $subscribers_list;
			$this->props['page'] = 'subscribers_list';
			$this->props['activeLink'] = 'subscribers_list';
		}
		else if($todo == 'subscriber' && !empty($id)){
			
			
			$subscriber_data = $this->User_model->GetSubscriberInfo(array('id' => $id));
			
			if(empty($subscriber_data)){
				
				
				show_admin_Error('Invalid Subscriber');
			}
			
			$this->props['title'] = 'Admin - Edit Subscriber';
			$this->props['template'] = 'pages/options/edit_subscriber';
			$this->props['subscriber_data'] = $subscriber_data;
			$this->props['page'] = 'update_subscriber';
			$this->props['activeLink'] = 'update_subscriber';
			
		}
		else{
			
			show_admin_Error('Invalid User');
		}
		
		
		render_template($this->props);
		
		
		
	}
	
	
	
	
}

?>