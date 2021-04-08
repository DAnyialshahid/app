<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/Theme_Controller.php';
class front_api extends Theme_Controller{
	public $direct_access=false;
 
	public function __construct($direct_access=false,$call_by_controller=false)
	{
	
		parent::__construct();
		if (isset($_POST['site_id'])) {
				$_POST['site_id']=site_id;
		}
$this->direct_access=$direct_access;
  flush(); 
   		

	 	
		if (!( ! empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
		   				 if(strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false){  
								

						 }else{
						 	   
						 	   if (!isset($_GET['development'])) {
							 	   if ($call_by_controller ==false) {
										exit('No direct script access allowed');
									}
								}
						 }
		// echo strpos($_SERVER['HTTP_ACCEPT'], 'json') ;
		}
	// $_POST['limit']=1;
 
 	if( isset($_GET['debugger']) && ($_GET['debugger']=='false') ) {
	    	    $this->session->set_userdata('debugger','no');
	    }

		if( (isset($_GET['debugger']) && $_GET['debugger']=='true') ||  ($this->session->userdata('debugger')=='yes') ){ 
	        $this->output->enable_profiler($this->config->item('profiler')); 
	         $this->session->set_userdata('debugger','yes');
	        echo 'Debugging <hr>'."\n";
	    }
 
	    

	}

	   
	public function load_dynamic_page_content($slug=null,$site_id=null)
	{
		
		$slug=$slug?$slug:$this->input->post('slug');
		$site_id=$site_id?$site_id:$this->input->post('site_id'); 
		$this->db->where('slug',$slug); 
  

		 			 
			$data = $this->db->get('pages')->first_row();   
			$data=(['success'=>'yes','response'=>$data]);
			if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();
	}

	  	public function getCoupons($store_id,$site_id=null,$return=false)
	{
		
		$store_id=$store_id?$store_id:$this->input->post('store_id');
		$site_id=!empty($site_id)?$site_id:$this->input->post('site_id'); 


		$this->side_bar_where_coditions();
		if (isset($store_id)) {
				$this->db->where('store_id',$store_id); 
					 $this->db->order_by('position','ASC');
		}
	
		  
		 
  		$this->db->where('site_id',$site_id); 
			$data = $this->db->get_where('coupons',[])->result();  
			 
			// echo $this->db->last_query();
			if($return){return $data;}
			$data=(['success'=>'yes','response'=>$data]);
			if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();
	}
	   

	public function side_bar_where_coditions()
	{


			 $side_bar_post = array();
			 parse_str($this->input->post('side_bar'), $side_bar_post);

					if (isset($side_bar_post['verified'])) {
		 				$this->db->where('verified',1);
		 			}
		 			if (isset($side_bar_post['featured'])) {
		 				$this->db->where('featured',1);
		 			}
		 			if (isset($side_bar_post['exclusive'])) {
		 				$this->db->where('exclusive',1);
		 			}
		 			if (isset($side_bar_post['top'])) {
		 				$this->db->where('top',1);
		 			}
		 			if (isset($side_bar_post['popular'])) {
		 				$this->db->where('popular',1);
		 			}
		 			if (isset($side_bar_post['show_in_home'])) {
		 				$this->db->where('show_in_home',1);
		 			}
		 			if (isset($side_bar_post['offer_type'])) {
		 				$this->db->where_in('type',$side_bar_post['offer_type']);
		 			}
		 			 
		 		
			 			 
		 			if (isset($side_bar_post['seasonal_type'])) {
		 				$this->db->where_in('seasonal_type',$side_bar_post['seasonal_type']);
		 			}
		 			if (isset($side_bar_post['short_title'])) {
		 				$this->db->group_start();
		 				foreach ($side_bar_post['short_title'] as $key => $short_title) {
		 				 		$this->db->or_like('short_title',$short_title,'both');
		 				 		//echo $short_title;
		 				}
		 				$this->db->group_end();
		 			}
	}
	public function getCouponsByCategory($category_slug=null,$site_id=null,$return=false)
	{
		
		$category_slug=$category_slug?$category_slug:$this->input->post('slug');
		$site_id=$site_id?$site_id:$this->input->post('site_id'); 

			$category=$this->db->select('*')->where('slug',$category_slug)->where('site_id',$site_id)->get('categories')->first_row();
if (empty($category) && $return==false) {
	 	$data=(['success'=>'no','response'=>'category not found']);
	 	if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();
}
			$category_id=$category->id;

		 	// $store_ids=$this->db->select('group_concat(id,",") as ids')->where('category_id',$category_id)->where('site_id',$site_id)->get('stores')->first_row()->ids;

			$this->db->where('category_id',$category_id);  
			$data = [];  
	
			$data['name']=$category->name;  
			$data['id']=$category->id;  
			$data['feature_image']=$category->feature_image?$category->feature_image:'blank.png';  
			$data['icon']=$category->icon;  
				$this->side_bar_where_coditions();
					$this->db->where('site_id',$site_id); 
			$data['coupons'] = $this->db->get_where('coupons',[])->result();  
			foreach ($data['coupons'] as $key => &$coupon) { 
			$coupon->store=$this->db->where(['site_id'=>$site_id,'id'=>$coupon->store_id ])->get('stores')->first_row() ;
				# code...
			}

			$data['affiliate_link']=$category->id;  

			$data['popular_stores'] =$this->db->where(['site_id'=>$site_id,'category_id'=>$category->id,'popular'=>1 ])->limit(10)->get('stores')->result(); 
		    $data['relative_stores'] =$this->db->where(['site_id'=>$site_id,'category_id'=>$category->id, ])->limit(10)->get('stores')->result(); 



				$totalCoupons=0;
				$totalDeals=0;
				$last_update=  0; 
						foreach ($data['coupons']  as   &$coupon) { 
							 if($coupon->type=='coupon'){
							 		$totalCoupons=$totalCoupons+1;
							 }
							 if($coupon->type=='deal'){
							 		$totalDeals=$totalDeals+1;
							 }
							 if ($last_update<strtotime($coupon->added_date)) {
							 	$last_update=strtotime($coupon->added_date); 
							 }
						}

					$count=new stdClass;
					$count->coupons=intval($totalCoupons);
					$count->deals=intval($totalDeals);
					$count->all=intval($totalCoupons)+intval($totalDeals);

					$count->last_update=date('d-M-yy',$last_update); 
					 $data['count']=$count;

			
		

			if($return){return $data;}
			//dd($data);
			$data=(['success'=>'yes','response'=>$data ]);
			if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();
	}

	 
	 	public function getCommon()
	{
		
			
	     	$site_id=$this->input->post('site_id'); 

			$data['popular_stores'] =$this->db->where(['site_id'=>$site_id,'popular'=>1 ])->limit(10)->get('stores')->result();  
			$data['popular_categories'] =$this->db->where(['site_id'=>$site_id,'popular'=>1 ])->limit(10)->get('categories')->result();  
			$configs_rows =$this->db->where(['site_id'=>$site_id])->get('configs')->result();  
			$configs =[] ;
			foreach ($configs_rows as $key => $value) {
				$configs[$value->name]=$value->value;
			}
			$data['configs']=$configs;

			$data['seo']=head_javascript($this->input->post('page_name'),$this->input->post('page_slug'));
 
			$data=(['success'=>'yes','response'=>$data]);
			if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();
	}

	 
	 

	public function getCategories($where=null,$with=null,$return=false)
	{

		$alphabet=$this->input->post('alphabet');
		$site_id=$this->input->post('site_id');
		if($alphabet){
					  $this->db->like('name', $alphabet, 'after'); 
					  	  $this->db->order_by('name', 'asc'); 
		}	
		$limit=$this->input->post('limit');
		if($where){$this->db->where($where);}
		$page_no=$this->input->post('page_no')?$this->input->post('page_no'):1; 
 		$this->db->limit($limit,$limit*($page_no-1));
		$categories=$data = $this->db->get_where('categories',[
				'site_id'=>$site_id
		])->result(); 

		if(isset( $with) && in_array('stores', $with)){
			foreach ($categories as &$category) {
					$store->coupons=$this->getCoupons($store->id,$site_id,true);
				}
		}  
		
			if($return){return $data;}
		$data=(['success'=>'yes','response'=>$categories]);
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
		$this->exit2();
	}



	public function getCategoriesByGroups($where=null,$with=null,$return=false)
	{

	 
		$site_id=$this->input->post('site_id');
		$limit=$this->input->post('limit');
		 
		$categories_groups=$data = $this->db->get_where('categories_group',[
				'site_id'=>$site_id
		])->result(); 
	 
		foreach ($categories_groups as   &$group) {
					$this->db->limit($limit);
					$categories=$this->db->get_where('categories',[
								'categories_group_id'=>$group->id,
								'site_id'=>$site_id,
						])->result();
			 	$group->categories=$categories; 
			 	$group->count=count($categories); 

		}

		 
			if($return){return $data;}
		$data=(['success'=>'yes','response'=>$categories_groups]);
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
		$this->exit2();
	}




		
	public function getStores($where=null,$with=['counts2'],$return=false)
	{

	 
 		
//dd($side_bar_post);
		$alphabet=$this->input->post('alphabet');
		$site_id=$this->input->post('site_id');
		if($alphabet=='0-9'){
					 	  $this->db->where('name REGEXP', '^[0-9].*');  
					 	  $this->db->order_by('name', 'asc'); 
		}else if($alphabet){
			 			  $this->db->like('name', $alphabet, 'after'); 
					  	  $this->db->order_by('name', 'asc'); 
		}
		$limit=$this->input->post('limit');
		if($where){$this->db->where($where);}
		$page_no=$this->input->post('page_no')?$this->input->post('page_no'):1; 
 		$this->db->limit($limit,$limit*($page_no-1));
		$stores= $this->db->get_where('stores',[
				'site_id'=>$site_id
		])->result(); 

		if(isset( $with) && in_array('coupons', $with) && isset($stores)){
			foreach ($stores as $key=>&$store) { 

				
				$store->feature_image=$store->feature_image?$store->feature_image:'blank.png';  

				 $store->coupons=$this->getCoupons($store->id,$site_id,true);
				 // echo $this->db->last_query();
				  $thisStore=$this->db->where(['site_id'=>$site_id,'id'=>$store->id])->get('stores')->first_row() ; 
					foreach ($store->coupons as   &$coupon) { 
					 $coupon->store=$thisStore;	 
					 $coupon->name=html_entity_decode($coupon->name);	 
					 $coupon->short_title=html_entity_decode($coupon->short_title);	 
					 $coupon->description=html_entity_decode($coupon->description);	 	 

						}
				}
		}
		if(isset( $with) &&  in_array('popular_stores', $with) && isset($stores)){
			foreach ($stores as &$store) { 
					$store->popular_stores=$this->db->where(['site_id'=>$site_id,'category_id'=>$store->category_id,'popular'=>1 ])->limit(10)->get('stores')->result(); 
				}
		}
		if(isset( $with) &&  in_array('relative_stores', $with) && isset($stores)){
			foreach ($stores as &$store) { 
					$store->relative_stores=$this->db->where(['site_id'=>$site_id,'category_id'=>$store->category_id, ])->limit(10)->get('stores')->result(); 
				}
		}	
		if(isset( $with) &&  in_array('counts', $with) && isset($stores)){

			foreach ($stores as &$store) { 
				$totalCoupons=0;
				$totalDeals=0;
				$last_update=  0; 
						foreach ($store->coupons as   &$coupon) { 
							 if($coupon->type=='coupon'){
							 		$totalCoupons=$totalCoupons+1;
							 }
							 if($coupon->type=='deal'){
							 		$totalDeals=$totalDeals+1;
							 }
							 if ($last_update<strtotime($coupon->added_date)) {
							 	$last_update=strtotime($coupon->added_date); 
							 }
						}
					$store->count=new stdClass;
					$store->count->coupons=intval($totalCoupons);
					$store->count->deals=intval($totalDeals);
					$store->count->all=intval($totalCoupons)+intval($totalDeals);
					$store->count->last_update=date('d-M-yy',$last_update); 

				}
		}	 
		if(isset( $with) &&  in_array('counts2', $with) && isset($stores)){

			foreach ($stores as &$store) { 

$totalCoupons=$this->db->select('count(*) as count','',false)->where('type','coupon')->where('store_id',$store->id)->get('coupons')->first_row()->count;
$totalDeals=$this->db->select('count(*) as count','',false)->where('type','deal')->where('store_id',$store->id)->get('coupons')->first_row()->count;
 
					$store->count=new stdClass;
					$store->count->coupons=intval($totalCoupons);

					$store->count->deals=intval($totalDeals);
					$store->count->all=intval($totalCoupons)+intval($totalDeals);
				 
				}
		}	 


		// d($stores);
			if($return){return $stores;}
		$data=(['success'=>'yes','response'=>$stores]);
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
		$this->exit2();
	}
		

	public function getStore()
	{

		$slug=$this->input->post('slug'); 
		$site_id=$this->input->post('site_id'); 
	
		$store=$this->getStores([
				'custom_url'=>$slug,
		],['coupons','popular_stores','relative_stores','counts'],true);

		if (empty($store) ) {
			 	$data=(['success'=>'no','response'=>'Store not found']);
			 	if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
					$this->exit2();
		}

		$store=$store[0];
		$data=(['success'=>'yes','response'=>$store]);  
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}


		$visit=$this->input->post('visit');
		$coupon_id=$this->input->get('coupon_id');
		if($coupon_id=='' &&  $visit){
				$this->db->where(['id'=>$store->id, ])->set('visits','visits+1',false)->update('stores'); 
				$this->db->set('type','store')->set('reffrence_id',$store->id)->set('site_id',$site_id)->set('raw',json_encode([$_SERVER,$_POST,$_GET]))->insert('visits'); 

		} 

		$this->exit2();
	}
	
//show only check if show_in_home =1 
	public function getTopStores()
	{

	 
		$site_id=$this->input->post('site_id'); 

		$stores=$this->getStores([
				'site_id'=>$site_id,
				'top'=>1,
				'show_in_home'=>1,
		],['counts2'],true);
		// dd($this->db->last_query());
		$data=(['success'=>'yes','response'=>$stores]);   
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
		 

		$this->exit2();
	}
	

//show only check if popular =1 
	public function getPopularStores()
	{

	 
		$site_id=$this->input->post('site_id'); 

		$stores=$this->getStores([
				'popular'=>1,
			 
				'site_id'=>$site_id,
		],['counts2'],true);
		$data=(['success'=>'yes','response'=>$stores]);   
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
		 

		$this->exit2();
	}
	


	public function getRecommendedCoupons()
	{
	 

		$site_id=$this->input->post('site_id'); 
		$limit=$this->input->post('limit');
		if (isset($limit)) {
			$this->db->limit($limit);	
		}
		// dd($_POST);
	//$this->db->limit(1);	

		$coupons=$this->getCoupons(null,$site_id,true);
	 
		 // echo $this->db->last_query();
		// d(	$coupons);

		if (!empty($coupons)) {
			foreach ($coupons as $key => &$coupon) { 
			$store=$this->db->where(['site_id'=>$site_id,'id'=>$coupon->store_id ])->get('stores')->first_row() ;
			$coupon->store=$store;
			$coupon->name=html_entity_decode($coupon->name);
			$coupon->short_title=html_entity_decode($coupon->short_title);
		 
 
				if (empty($coupon->store)) {
					echo $this->db->last_query();
					unset($coupons[$key]);
				}
			}
		} 
		$data=(['success'=>'yes','response'=>$coupons]);  
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}

		 

		$this->exit2();
	}
	

	public function getPopuplarCategories()
	{
		$site_id=$this->input->post('site_id'); 
		$limit=$this->input->post('limit');
		if (isset($limit)) {
			$this->db->limit($limit);	
		}
		
	
		$coupons=$this->db->get_where('categories',[
			'popular'=>1,
			'show_in_home'=>1,
			'site_id'=>$site_id,
	])->result();
		 
		$data=(['success'=>'yes','response'=>$coupons]);  
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}

		 

		$this->exit2();
	}

	public function getSlides()
	{
		$site_id=$this->input->post('site_id'); 
		$limit=$this->input->post('limit');
		if (isset($limit)) {
			$this->db->limit($limit);	
		}
		
	
		$this->db->select('slider_slides.*');
		$this->db->join('slider_slides','slider_slides.slide_id=slider.id');
		$slider=$this->db->get_where('slider',[
			'type'=>'home',
			'site_id'=>$site_id,
		])->result();
		 
		$data=(['success'=>'yes','response'=>$slider]);  
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}

		 

		$this->exit2();
	}


	public function getPopuplarStores()
	{
		$site_id=$this->input->post('site_id'); 
		$limit=$this->input->post('limit');
		if (isset($limit)) {
			$this->db->limit($limit);	
		}
		
	
		$stores=$this->db->get_where('stores',[
			'popular'=>1,
			'show_in_home'=>1,
			'site_id'=>$site_id,
	])->result();
		 
		$data=(['success'=>'yes','response'=>$stores]);  
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}

		 

		$this->exit2();
	}
	

	public function getSites()
	{

			$this->load->model('admin/f_model'); 
			$data=(['success'=>'yes','response'=>$this->f_model->get_sites()]);
			if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();
	}

	public function getRoles()
	{

			$this->load->model('admin/f_model'); 
			$data=(['success'=>'yes','response'=>$this->f_model->get_roles()]);
			if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();
	}
	public function votecoupon()
	{

		 
			$data=(['success'=>'yes','response'=>'y']);
			if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();
	}
	public function contact_us_details()
	{
	 
		$site_id=$this->input->post('site_id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$question=$this->input->post('question');
		$message=$this->input->post('message');  

		$this->db->set('name',$name)->set('email',$email)->set('question',$question)->set('message',$message)->set('site_id',$site_id)->insert('contacts'); 
 
		$data=(['success'=>'yes','response'=>'submited']);
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();

	}	
	public function submit_offer_details()
	{
	 
		$site_id=$this->input->post('site_id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$store=$this->input->post('store_name');
		$coupon_title=$this->input->post('coupon_title');
		$coupon_code=$this->input->post('coupon_code');
		$message=$this->input->post('message');  

		$this->db->set('name',$name)->set('email',$email)->set('store',$store)->set('coupon_title',$coupon_title)->set('coupon_code',$coupon_code)->set('message',$message)->set('site_id',$site_id)->insert('submit_offers'); 
 
		$data=(['success'=>'yes','response'=>'submited']);
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();

	}		

	public function subscribe_email()
	{
	 
		$site_id=$this->input->post('site_id');
		$subscribe_email=$this->input->post('subscribe_email'); 

		$this->db->set('email',$subscribe_email)->set('site_id',$site_id)->insert('subscribes'); 
 
		$data=(['success'=>'yes','response'=>'submited']);
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();

	}	
	public function visit_coupon()
	{
	 
		$site_id=$this->input->post('site_id');
		$reffrence_id=$this->input->post('reffrence_id');
		$type=$this->input->post('type');
		 
		$this->db->where(['id'=>$reffrence_id, ])->set('visits','visits+1',false)->update('coupons'); 
		$this->visit($site_id,$reffrence_id,$type);
		$data=(['success'=>'yes','response'=>'y']);
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();

	}

		public function visit($site_id,$reffrence_id,$type)
	{  
 			$this->db->set('type',$type)->set('reffrence_id',$reffrence_id)->set('site_id',$site_id)->set('raw',json_encode([$_SERVER,$_POST,$_GET]))->insert('visits');  
			
	}



  public function notification()
	{  
 			$site_id=$this->input->post('site_id');
 			$coupon_id=$this->input->post('coupon_id');

 					$store=$this->db->where('id','(select store_id from coupons where coupons.id="'.$coupon_id.'")',false)->get('stores')->first_row();
 
 			$this->load->model('admin/notification_model'); 

 			 	 $this->notification_model->add([
				'title'=>$store->name.' don\'t have affialiate link  !',
				'type'=>'error',
				'from_user_id'=>1,
				'to_user_id'=>1,
				'status'=>'unread',
				'close_button'=>'0',
				'progress_bar'=>'0',
				'reason'=>'aff_link_error',
				'reason_details'=>json_encode(['store_id'=>$store->id,'coupon_id'=>$coupon_id]),
				'position'=>'toast-bottom-left',
				'site_id'=>$site_id,
		]);
	$data=(['success'=>'yes','response'=>'submited']);
	if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			$this->exit2();

 	}

  public function search($site_id,$query)
	{  
 			  
 	 $this->db->like('name', $query, 'both'); 
 		 $this->db->limit(10); 
 		$site_id= str_ireplace('plus', '+', $site_id);
 		$site_id= str_ireplace('minus', '-', $site_id);
 		$site_id= str_ireplace('email', '@', $site_id);
 		$site_id= str_ireplace('dot', '.', $site_id);
 		$site_id= str_ireplace('equal', '=', $site_id);
 
		$_POST['site_id']=decrypt($site_id,"no_one_can_decrypt");
 
		$stores=$this->getStores([ 
				 
		],['counts2'],true);

// echo $this->db->last_query();
		$data=($stores);
		if ($this->direct_access) {
			return $data;
		}else{
			echo json_encode($data);
		}
			
	}


  public function exit2()
	{
		if (($this->session->userdata('debugger')=='yes')) {
			# code...
		}else{
			exit();
		}
	}
	
}

?>