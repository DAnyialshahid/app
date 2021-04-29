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

		  	if (!( ! empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') ) {
		   				 if(strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false){  
						 }else{
						 	if (!isset($_GET['development'])) {
						 		 exit('No direct script access allowed');
						 	}
						 	  
						 }
			}

			
		 if( $this->session->userdata('loggedIn')!=1 && 	(!isset($_GET['development']) ) ){ 
				 		echo json_encode(['success'=>'no','response'=>'OAuth Failed']);
						exit(); 
				 		 
				 	  }


			


		if(isset($_GET['debuger']) && $_GET['debuger']){ 
	        $this->output->enable_profiler(TRUE);
	    }
	}

	

public function getNotifications()
	{
					$this->db->limit(20);
					$this->db->order_by('id','desc');
					$notifications=$this->db->get_where('notifications',[
							'to_user_id'=>$this->session->userdata('user_id')
					])->result();
					if ($notifications) {
						foreach ($notifications as  $row) {
										if ( $row->status=='unread') {
											$this->db->set('status','notified')->where('id',$row->id)->update('notifications');
										}
							
							}
					}
					
	return $notifications;
  }

public function getIntervals()
	{

				
					
		      echo json_encode(['success'=>'yes','response'=>[
		      	'notifications'=>$this->getNotifications(),
	 
		      	]]);
 exit();
  }
public function getClipboard()
	{


         $this->load->library('cart'); 
         
		 $group_items=[];
		      foreach ($this->cart->contents() as $item){  
 
		      	if ( $this->input->post('skip_current_site_item')=='yes' && ($item['site_id']==$this->session->userdata('user_active_site')) ) {
		      		 
		      			continue;
		      	}

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
  public function pasteClipboard()
	{

    $this->load->library('cart'); 
	$type=$this->input->post('type');
     $group_items=[];
	  foreach ($this->cart->contents() as $item){  
	     if ($item['type']==$type) {
	      	 $group_items[]=$item;
	      }
	  	   
	  }

			if ($type=='Stores') { 
			$withCoupons=$this->input->post('withCoupons');
			$this->load->model('admin/stores_model');
			$this->stores_model->paste($group_items,$withCoupons);  
			}
		  if ($type=='Coupons') {  
			$this->load->model('admin/coupons_model');
			$this->coupons_model->paste($group_items);  
			 
			}
		  if ($type=='Categories') {  
			$this->load->model('admin/categories_model');
			$this->categories_model->paste($group_items);  
			 
			}

			 //$this->cart->remove($id); 

         
			echo json_encode(['success'=>'yes','response'=>'Pasted Successfully']);
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
	public function getBots($where=null,$return=false)
	{
			$this->load->model('admin/bots_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->bots_model->get_all()]);
			exit();
	}	
	public function pauseBot($where=null,$return=false)
	{
			$this->load->model('admin/bots_model'); 

			echo json_encode(['success'=>'yes','response'=>$this->bots_model->pause($this->input->post('id'))]);
			exit();

	
	}
	public function pasteBotDataToSite($where=null,$return=false)
	{
			$this->load->model('admin/bots_model'); 

			echo json_encode(['success'=>'yes','response'=>$this->bots_model->paste($this->input->post('id'),$this->session->userdata('user_active_site'))]);
			exit();

	
	}
	public function botFetchStoresImages($where=null,$return=false)
	{
			$this->load->model('admin/bots_model'); 

			echo json_encode(['success'=>'yes','response'=>$this->bots_model->fetch_images($this->input->post('id'),$this->session->userdata('user_active_site'))]);
			exit();

	
	}
	public function resetBot($where=null,$return=false)
	{
			$id=$this->input->post('id');
			$this->load->model('admin/bots_model'); 
			//get bot name	
			$bot_details=$this->db->get_where('bots',['id'=>$id])->first_row();
			
			if (!empty($bot_details)) {
				//get bot model by name
				if ($bot_details->name=='couponfollow.com') {
				 		$this->load->model('admin/bots/couponfollow_model'); 
				 		$this->couponfollow_model->resync($id);
				}
			}
			echo json_encode(['success'=>'yes','response'=>$this->bots_model->reset($id)]);
			exit();

	
	}
	public function getBotCoupons($bot_id,$store_id)
	{

			$this->load->model('admin/bots_model'); 
			//get bot name	
			$bot_details=$this->db->get_where('bots',['id'=>$bot_id])->first_row(); 
			 
			if (!empty($bot_details)) {
				//get bot model by name
				if ($bot_details->name=='couponfollow.com') {
				 		$this->load->model('admin/bots/couponfollow_model'); 
				 		if($this->couponfollow_model->fetchCoupons($bot_details,$bot_id,$store_id)){
				 				$this->db->set('status','completed')->where('id',$store_id)->update('bots_stores');

				 			}
				}
			} 
	}

	public function runBot($where=null,$return=false)
	{
			$this->load->model('admin/bots_model');  
			echo json_encode(['success'=>'yes','response'=>$this->bots_model->run($this->input->post('id'))]);
			exit();

	
	}	

	public function runAjaxBotPHP($bot_id=null,$last_position=null)
	{

		$limit=$this->input->post('limit');
		$offset= $this->input->post('offset');
		if ($limit && $offset) {
				$this->db->limit($limit,$offset);
		}
		$bot_stores=$this->db->select('id')->get_where('bots_stores',['bot_id'=>$this->input->post('id'),'status'=>'not fetch'])->result();
 // dd($bot_stores);
		foreach ($bot_stores as  $store) {
			$this->runAjaxBot($this->input->post('id'),$store->id,true);
		}
	}
	public function runAjaxBot($bot_id=null,$last_position=null,$return=false)
	{
			//$this->load->model('admin/bots_model');  
		if ($last_position=='null' || $last_position==null|| $last_position=='0') {
			$last_position=$this->db->limit(1)->select('id')->get_where('bots_stores',['id >'=>$last_position])->first_row()->id;
		}
		$this->db->set('last_position',$last_position)->set('updated_date',date('Y-m-d h:i:s'))->where('id',$bot_id)->update('bots');
		$this->getBotCoupons($bot_id,$last_position);
		$new_last_position=$this->db->limit(1)->select('id')->get_where('bots_stores',['id >'=>$last_position])->first_row();
		if (!empty($new_last_position)) {
			$new_last_position=$new_last_position->id;
		}else{ 
				$new_last_position='completed';
				$this->db->set('status','completed')->where('id',$bot_id)->update('bots');
		}
		if ($return) {
			return ['last_position'=>$new_last_position];
		}else{
					echo json_encode(['success'=>'yes','response'=>['last_position'=>$new_last_position]]);
					exit();
				}
	}	



public function getBotDetails($where=null,$return=false)
	{
			$this->load->model('admin/bots_model'); 
			$bot=$this->db->get_where('bots',['id'=>$this->input->post('id')])->first_row();
			echo json_encode(['success'=>'yes','response'=>[
																'stores'=>$this->bots_model->details($this->input->post('id')),
																'bot'=>$bot,
															]
			]);
			exit();

		
	}	

	public function getSitesForBot($where=null,$return=false)
	{
			$this->load->model('admin/f_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->f_model->get_sites_for_bot()]);
			exit();

			$this->load->model('admin/pages_model');
			$pages=$this->pages_model->get_all($where); 
				if($return){return $pages;}
			echo json_encode(['success'=>'yes','response'=>$pages]);
			exit();
	}	
	public function getCoupons($where=null,$return=false)
	{

			$this->load->model('admin/coupons_model');
			$store_id=$this->input->post('store_id');
			if ($store_id) {
				$this->db->where('store_id',$store_id);
				$this->db->order_by('position','ASC');

			}else{
				$this->db->order_by('coupons.id','desc');
			}
			$stores=$this->coupons_model->get_all($where); 

				if($return){return $stores;}
			echo json_encode(['success'=>'yes','response'=>$stores,'q'=>$this->db->last_query()]);
			exit();
	}
	public function sortCoupon()
	{

			$this->load->model('admin/coupons_model');
			$store_id=$this->input->post('store_id');
			$coupon_ids=$this->input->post('coupon_ids');
			if ($store_id && $coupon_ids) { 
				$sorted=$this->coupons_model->sort($store_id,$coupon_ids); 
							echo json_encode(['success'=>'yes','response'=>$sorted]);
			}else{
			 
			echo json_encode(['success'=>'no','response'=>'failed']);
			exit();
			}
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
	public function getCategoriesGroups($where=null,$return=false)
	{

			$this->load->model('admin/categories_model');
			$stores=$this->categories_model->get_all_groups($where); 
				if($return){return $stores;}
			echo json_encode(['success'=>'yes','response'=>$stores]);
			exit();
	}

	public function insertDummyCategories()
	{
		set_time_limit(0);
		
		$this->load->model('admin/categories_model');
			$this->load->model('admin/coupons_model');
				$this->categories_model->add_dummy_categories($this->input->post('id')); 
			$this->coupons_model->add_dummy_categories_stores($this->input->post('id')); 
			$this->coupons_model->add_dummy_categories_coupons($this->input->post('id')); 
		
			echo json_encode(['success'=>'yes','response'=>true]);
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
				$limit=$this->input->post('limit');
				$search_query=$this->input->post('search_query');
				$myworkonly=$this->input->post('myworkonly');
					if ($limit) {
						$this->db->limit($limit);
					}
					if ($search_query) {
						$this->db->like('name',$search_query);
					}
					if ($myworkonly=='true') {
						$this->db->where('id in','(select store_id from stores_task where to_user_id='.$this->session->userdata('user_id').' and status="pending" )',false);
					}

			$this->load->model('admin/stores_model');
			$stores=$this->stores_model->get_all($where); 
			// echo $this->db->last_query();
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

	public function getCategoryGroup($id)
	{

			$category=$this->getCategoriesGroups([
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
			        'site_name'=>$this->db->get_where('sites',['id'=>$this->session->userdata('user_active_site')])->first_row()->name,
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
 				$categories=$this->db->get_where('categories',['id'=>$id])->first_row();
 				$data = array(
			        'id'      => $id,
			        'type'=>'Categories',
			        'site_id'=>$this->session->userdata('user_active_site'),
			        'site_name'=>$this->db->get_where('sites',['id'=>$this->session->userdata('user_active_site')])->first_row()->name,
			        'row'     => $categories,
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
 				$coupons=$this->db->get_where('coupons',['id'=>$id])->first_row();
 				$data = array(
			        'id'      => $id,
			        'type'=>'Coupons',
			        'site_id'=>$this->session->userdata('user_active_site'),
			        'site_name'=>$this->db->get_where('sites',['id'=>$this->session->userdata('user_active_site')])->first_row()->name,
			        'row'     => $coupons,
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
			        'site_name'=>$this->db->get_where('sites',['id'=>$this->session->userdata('user_active_site')])->first_row()->name,
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
	public function deleteSlider($id)
	{

		$this->load->model('admin/slider_model');
		 

		   $this->load->model('admin/pages_model');
			$delete=$this->slider_model->delete($id); 
			if($delete){ 
					echo json_encode(['success'=>'yes','response'=>$delete]);
			}else{
					echo json_encode(['success'=>'no','response'=>$delete]);
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
	public function deleteSiteStoresAndCouponsByBot($site_id)
	{


		   $this->load->model('admin/stores_model');
			$delete=$this->stores_model->deleteBySiteId($site_id); 
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
	public function deleteCategoryGroup($id)
	{
		   $this->load->model('admin/categories_model');
			$delete=$this->categories_model->delete_group($id); 
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

	public function clean_all_coupon_of_store($id)
	{
		  	$this->load->model('admin/coupons_model');
			$delete=$this->coupons_model->delete_by_store_id($id); 
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
		public function updateCategoryGroup()
	{
		// d($_FILES);
		// d($_SERVER['REQUEST_METHOD']);
		// d(getallheaders());
		// // dd($_POST);

		if($this->input->post('id')){
				$this->createCategoryGroup(true,$this->input->post('id'));
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


	public function createCategoryGroup($update=false,$id=null)
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
			$add=$this->categories_model->add_group($uploaded_file['file_name'],$update,$id); 
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
if (!empty($this->input->post('slider_link'))) {
	# code...

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

}

  if (!empty($uploaded)   ) {
  		$this->load->model('admin/slider_model');
		$add=$this->slider_model->add($uploaded,$update,$id); 
  }else{
  		$add='All Slides Empty';
  }
 
 		
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

		public function taskStoreUpdateComplete()
	{

				$store_id=$this->input->post('store_id');
			 
	 
			$this->load->model('admin/stores_model'); 
			$this->load->model('admin/notification_model'); 
			$response=$this->stores_model->task_complete($store_id);

		
			echo json_encode(['success'=>'yes','response'=>$response]);
			exit();
	}

		public function tasksAssignToUsers()
	{
			$store_id=$this->input->post('store_id');
			$status=$this->input->post('status');
			$users=$this->input->post('users');
			$this->load->model('admin/stores_model'); 
				$this->load->model('admin/notification_model'); 
			$response=$this->stores_model->task_assign($store_id,$status,$users);

		
			echo json_encode(['success'=>'yes','response'=>$response]);
			exit();
	}


	public function network_add()
	{
 
 			
			$this->load->model('admin/networks_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->networks_model->add()]);
			exit();
	}
	public function network_connect()
	{
 
 			
			$this->load->model('admin/networks_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->networks_model->network_connect()]);
			exit();
	}
	public function recaptcha__en()
	{
 
 			
			$this->load->model('admin/networks_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->networks_model->recaptcha__en()]);
			exit();
	}
	public function test()
	{
 
 			
			$this->load->model('admin/networks_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->networks_model->recaptcha__en()]);
			exit();
	}

	public function olx_auth()
	{
 
 			
			$this->load->model('admin/olx/olx_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->olx_model->auth($this->input->post('id'))]);
			exit();
	}
	public function olx_sign_up()
	{
 
 			
			$this->load->model('admin/olx/olx_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->olx_model->sign_up($this->input->post('id'))]);
			exit();
	}
public function olx_sign_up_verifiy_pin()
	{
 
 			
			$this->load->model('admin/olx/olx_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->olx_model->sign_up_verifiy_pin($this->input->post('id'),$this->input->post('pin'))]);
			exit();
	}

	public function olx_post_ads()
	{
 
 			
			$this->load->model('admin/olx/olx_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->olx_model->post_ads($this->input->post('id'))]);
			exit();
	}

	public function getOlxAccounts()
	{
 
 			
			$this->load->model('admin/olx/olx_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->olx_model->get_all()]);
			exit();
	}
	public function getOlxMessages()
	{
 
 			
			$this->load->model('admin/olx/olx_model'); 
			echo json_encode(['success'=>'yes','response'=>$this->olx_model->get_messages($this->input->post('id'))]);
			exit();
	}

	public function getOlxScript()
	{
 
 			
			$this->load->model('admin/olx/olx_model'); 
	
			exit($this->olx_model->script_get());
	}

	
}

?>