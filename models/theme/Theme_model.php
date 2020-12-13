<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Theme_model extends CI_Model{
	
	public function FilterPageMetas($page_title , $meta_title, $meta_description , $meta_keywords, $isForced = false, $page_type = null, $dynamic_postname = '',$dynamicpost_count  = 0){
		
		$_meta_title = $meta_title;
		$_meta_description = $meta_description;
		$_meta_keywords = $meta_keywords;
		if($page_type == 'single-store'){
			if(!empty(STORES_META_TITLE()) && !$isForced){
				$_meta_title = STORES_META_TITLE();
			}
			if(!empty(STORES_META_DESCRIPTION()) && !$isForced){
				$_meta_description = STORES_META_DESCRIPTION();
			}
			if(!empty(STORES_META_KEYWORDS()) && !$isForced){
				$_meta_keywords = STORES_META_KEYWORDS();
			}
		}
		else if($page_type == 'single-category'){
			
			if(!empty(CATEGORIES_META_TITLE()) && !$isForced){
				$_meta_title = CATEGORIES_META_TITLE();
			}
			if(!empty(CATEGORIES_META_DESCRIPTION()) && !$isForced){
				$_meta_description = CATEGORIES_META_DESCRIPTION();
			}
			if(!empty(CATEGORIES_META_KEYWORDS()) && !$isForced){
				$_meta_keywords = CATEGORIES_META_KEYWORDS();
			}
		}
		else{
			if(!empty(PAGES_META_TITLE()) && !$isForced){
				$_meta_title = PAGES_META_TITLE();
			}
			if(!empty(PAGES_META_DESCRIPTION()) && !$isForced){
				$_meta_description = PAGES_META_DESCRIPTION();
			}
			if(!empty(PAGES_META_KEYWORDS()) && !$isForced){
				$_meta_keywords = PAGES_META_KEYWORDS();
			}
		}
		$_meta_title = str_replace('%website-name%', WEB_NAME(), $_meta_title);
		$_meta_title = str_replace('%stores-count%', STORES_COUNT(), $_meta_title);
		$_meta_title = str_replace('%all-coupons-count%', COUPONS_COUNT(), $_meta_title);
		$_meta_title = str_replace('%all-categories-count%', CATEGORIES_COUNT(), $_meta_title);
		$_meta_title = str_replace('%page-title%', $page_title, $_meta_title);
		if($page_type == 'single-store' || $page_type == 'single-category'){
			$_meta_title = str_replace('%post-count%', $dynamicpost_count, $_meta_title);
			$_meta_title = str_replace('%store-name%', $dynamic_postname, $_meta_title);
			$_meta_title = str_replace('%category-title%', $dynamic_postname, $_meta_title);
		}
		
		$_meta_description = str_replace('%website-name%', WEB_NAME(), $_meta_description);
		$_meta_description = str_replace('%stores-count%', STORES_COUNT(), $_meta_description);
		$_meta_description = str_replace('%all-coupons-count%', COUPONS_COUNT(), $_meta_description);
		$_meta_description = str_replace('%all-categories-count%', CATEGORIES_COUNT(), $_meta_description);
		$_meta_description = str_replace('%page-title%', $page_title, $_meta_description);
		if($page_type == 'single-store' || $page_type == 'single-category'){
			$_meta_description = str_replace('%post-count%', $dynamicpost_count, $_meta_description);
			$_meta_description = str_replace('%store-name%', $dynamic_postname, $_meta_description);
			$_meta_description = str_replace('%category-title%', $dynamic_postname, $_meta_description);
		}
		
		$_meta_keywords = str_replace('%website-name%', WEB_NAME(), $_meta_keywords);
		$_meta_keywords = str_replace('%stores-count%', STORES_COUNT(), $_meta_keywords);
		$_meta_keywords = str_replace('%all-coupons-count%', COUPONS_COUNT(), $_meta_keywords);
		$_meta_keywords = str_replace('%all-categories-count%', CATEGORIES_COUNT(), $_meta_keywords);
		$_meta_keywords = str_replace('%page-title%', $page_title, $_meta_keywords);
		if($page_type == 'single-store' || $page_type == 'single-category'){
			$_meta_keywords = str_replace('%post-count%', $dynamicpost_count, $_meta_keywords);
			$_meta_keywords = str_replace('%store-name%', $dynamic_postname, $_meta_keywords);
			$_meta_keywords = str_replace('%category-title%', $dynamic_postname, $_meta_keywords);
		}
		
		return array('meta_title' => $_meta_title, 'meta_description' => $_meta_description, 'meta_keywords' => $_meta_keywords);
	}
	
	
	public function GetPopularTaxonomies($where_array = array()){
		$this->db->select('web_taxonomies.id as id , name, custom_url , file_name, post_count, taxonomy_type');
		$this->db->join('web_images', 'web_images.reference_id = web_taxonomies.id' , 'left');
		$this->db->where($where_array);
		$this->db->where('popular' , 'yes');
		$data = $this->db->get('web_taxonomies')->result();
		return $data;
	}
	
	public function GetTaxonomyCoupons($reference_id = '', $taxonomy_type = '' , $limit = null){
		
		$this->db->select('web_taxonomies.id as store_id, web_taxonomies.custom_url, web_coupons.id as coupon_id, file_name, short_title, coupon_title, coupon_description, web_coupons.status , coupon_code, coupon_type, expiry_date, verified, exclusive, coupon_url, web_coupons.added_date, used_format, sort_order');
		$this->db->join('web_selected_taxonomies', 'coupon_id = web_coupons.id','left');
		$this->db->join('web_taxonomies', 'web_taxonomies.id = web_selected_taxonomies.reference_id','left');
		$this->db->join('web_images', 'web_images.reference_id = web_taxonomies.id','left');
		$this->db->where('web_selected_taxonomies.reference_id' , $reference_id);
		$this->db->where('web_selected_taxonomies.type' , $taxonomy_type);
		$this->db->where('web_coupons.status != ' , 'Pending');
		$this->db->where('web_coupons.status != ' , 'Inactive');
		$this->db->order_by("case when `web_selected_taxonomies`.sort_order != '0' then `web_selected_taxonomies`.sort_order end asc, case when `web_selected_taxonomies`.sort_order = '0' then web_coupons.coupon_type end asc");
		$this->db->limit($limit);
		$store_coupons = $this->db->get('web_coupons')->result();
		return $store_coupons;
		
	}
	public function GetDiscountCoupons($discount_value = '', $limit = null, $taxonomy_type = ''){
		$query_string = "";
		$data = null;
		
		$this->db->select('web_taxonomies.id as store_id, web_taxonomies.custom_url, web_coupons.id as coupon_id, file_name, short_title, coupon_title, coupon_description, web_coupons.status , coupon_code, coupon_type, expiry_date, verified, exclusive, coupon_url, web_coupons.added_date, used_format');
		$this->db->from('web_coupons');
		$this->db->join('web_selected_taxonomies', 'coupon_id = web_coupons.id','left');
		$this->db->join('web_taxonomies', 'web_taxonomies.id = web_selected_taxonomies.reference_id','left');
		$this->db->join('web_images', 'web_images.reference_id = web_taxonomies.id','left');
		$this->db->where('str_to_date(web_coupons.expiry_date,\'%Y-%m-%d\') >= ' , 'CURDATE()', false);
		$this->db->where('web_coupons.status' , 'Active');
		$this->db->where('CHAR_LENGTH(coupon_description) <= ' , '80');
		$this->db->where('CHAR_LENGTH(coupon_title) <= ' , '60');
		
		
		if($discount_value == '20-off-coupons'){
			$query_string = "coupon_title LIKE '£20%' or coupon_title like '20%%'";
			$this->db->where($query_string);
			$this->db->where('web_taxonomies.taxonomy_type' , 'store');
			$this->db->where('str_to_date(web_coupons.expiry_date,\'%Y-%m-%d\') >= ' , 'CURDATE()', false);
			$this->db->where('web_coupons.status' , 'Active');
			$this->db->where('CHAR_LENGTH(coupon_description) <= ' , '80');
			$this->db->where('CHAR_LENGTH(coupon_title) <= ' , '60');
		}
		
		if($discount_value == 'verified-coupon-codes'){
			$this->db->where('web_coupons.verified' , '1');
			$this->db->where('web_taxonomies.taxonomy_type' , 'store');
			$this->db->where('str_to_date(web_coupons.expiry_date,\'%Y-%m-%d\') >= ' , 'CURDATE()', false);
			$this->db->where('web_coupons.status' , 'Active');
			$this->db->where('CHAR_LENGTH(coupon_description) <= ' , '80');
			$this->db->where('CHAR_LENGTH(coupon_title) <= ' , '60');
		}
		$this->db->group_by('web_taxonomies.id');
		
		if($limit != null){$this->db->limit($limit);}
		$this->db->order_by('web_coupons.added_date','desc');
		$data = $this->db->get()->result();
		
		return $data;
	}
	public function GetRecomendedVouchers(){
		$this->db->order_by('web_coupons.id' , 'desc');
		$this->db->select('web_coupons.id as coupon_id, web_taxonomies.id as store_id, file_name, coupon_title,coupon_code, coupon_type');
		$this->db->join('web_selected_taxonomies', 'coupon_id = web_coupons.id','left');
		$this->db->join('web_taxonomies', 'web_taxonomies.id = web_selected_taxonomies.reference_id','left');
		$this->db->join('web_images', 'web_taxonomies.id = web_images.reference_id','left');
		$this->db->where('str_to_date(web_coupons.expiry_date,\'%Y-%m-%d\') >= ' , date('Y-m-d'));
		$this->db->where('web_coupons.coupon_type ' , 'Coupon Code');
		$this->db->limit(30);
		$data = $this->db->get('web_coupons')->result();
		return $data;
	}
	public function GetCouponsSections($section_name = '', $limit = ''){
		$this->db->select('web_taxonomies.id as store_id, web_taxonomies.name, web_taxonomies.custom_url, web_coupons.id as coupon_id, file_name, short_title, coupon_title, coupon_description, web_coupons.status , coupon_code, coupon_type, expiry_date, verified, exclusive, coupon_url, web_coupons.added_date, used_format');
		$this->db->join('web_selected_taxonomies', 'web_selected_taxonomies.coupon_id = web_coupons.id', 'left');
		$this->db->join('web_taxonomies', 'web_taxonomies.id = web_selected_taxonomies.reference_id', 'left');
		$this->db->join('web_images', 'web_images.reference_id = web_taxonomies.id', 'left');
		$this->db->join('web_coupons_sorting', 'web_coupons_sorting.coupon_id = web_coupons.id', 'left');
		$this->db->where('str_to_date(web_coupons.expiry_date,\'%Y-%m-%d\') >=' , date('Y-m-d'));
	    $this->db->where('web_coupons.`status`' , 'Active');
	    $this->db->where('web_taxonomies.taxonomy_type' , 'store');
	    $this->db->where('web_coupons_sorting.`type`' , $section_name);
		$this->db->or_where('web_coupons.expiry_date','');
	    $this->db->where('web_coupons.`status`' , 'Active');
		$this->db->where('web_coupons_sorting.`type`' , $section_name);
		$this->db->where('web_taxonomies.taxonomy_type' , 'store');
		$this->db->from('web_coupons');
		$this->db->order_by('web_coupons_sorting.sort_order');
		$this->db->limit($limit);
		$data = $this->db->get()->result();
		
		return $data;
	}
	public function GetPopupModal($coupon_id = ''){
		$this->db->select('coupon_title, coupon_description, coupon_code, coupon_type, expiry_date, status');
		$this->db->where('id' , $coupon_id);
		$this->db->where('status' , 'Active');
		$coupon_data = $this->db->get('web_coupons')->result();
		$ajax_sender = array();
		if(!empty($coupon_data)){
			$coupon_data[0]->expiry_date = CouponExpiryDate($coupon_data[0]->expiry_date , $coupon_data[0]->status);
			$ajax_sender = array('ERROR' => 'FALSE' , 'DATA' => array('coupon' => $coupon_data[0]));
			$GetSingleStore = GetCouponsStoreGroupBy($coupon_id);
			if(!empty($GetSingleStore)){
				$store_id = $GetSingleStore[0]->reference_id;
				$ajax_sender['is_storeAppended']	= 'yes';
				$store_data = $this->Taxonomies_model->GetTaxonomyArray(array('id'	=> $store_id));
				if(!empty($store_data)){
					$ajax_sender['DATA']['store_data'] = array(
						'store_name'			=> $store_data[0]->name,
						'custom_url'			=> $store_data[0]->custom_url,
						'store_image'			=> GetImageFromDB($store_data[0]->id, 'store'),
					);
				}
			}
			else{
				$ajax_sender['is_storeAppended']	= 'no';
			}
			$this->addCouponsUsedCount($coupon_id);
		}else{
			$ajax_sender = array('ERROR' => 'TRUE' , 'DATA' => '');
		}
		return $ajax_sender;
	}
	public function addCouponsUsedCount($couponId = ''){
		$this->db->where('date_format(added_date, \'%Y-%m-%d\')' , '= CURDATE()', false);
		$this->db->where('coupon_id',  $couponId);
		$this->db->where('ip_addr',  $_SERVER['REMOTE_ADDR']);
		$couponInfo = $this->db->get('web_coupons_used')->result();
		//echo $this->db->last_Query();
		if(empty($couponInfo)){
			$this->db->insert('web_coupons_used', array('coupon_id' => $couponId, 'ip_addr' => $_SERVER['REMOTE_ADDR']));
		}
	}
	
	public function GetPageContent($params = array(), $getMeta = ''){
		
		$data = $this->db->get_where('web_pages', $params)->result();
		return $data;
	}
	
	public function SearchQuery(){
		
		$this->db->select('name,custom_url, post_count as coupon_count');
		$this->db->where('status', 'Active');
		$this->db->like('name', $this->input->post('query',true), 'after');
		$this->db->limit(12);
		$query = $this->db->get('web_taxonomies')->result();
		$return_array = array('stores' => $query);
		return $return_array;
	
	
	}
	public function insert_subscriber(){
		$conditions  =  array( 'email' => $this->input->post('email'));
		$checking = $this->db->get_where('web_subscriber', $conditions)->result();
		if(empty($checking)){
			$conditions += ['status' => 'Pending' , 'ip_address' => $_SERVER['SERVER_ADDR']];
			if(!empty($this->input->post('source_id'))){
				$taxonomy = $this->Taxonomies_model->GetTaxonomyArray(array('id' => $this->input->post('source_id') , 'taxonomy_type' => 'store'));
				if(!empty($taxonomy)){
					$conditions += ['source_id' => $this->input->post('source_id')];
				}
			}
			$this->db->insert('web_subscriber' , $conditions);
		}
			return $return_response = array(
				'ERROR'			=> FALSE,
				'MESSAGE'		=> '<div class="alert alert-success">You\'re Successfully Subscribed!</div>',
			);
	}
	public function GetHeaderCategories(){
		$this->db->order_by('id', 'desc');
		$categories = $this->db->get_where('web_taxonomies' , array('status' => 'Active' , 'taxonomy_type' => 'category') , 12)->result();
		return $categories;
	}
	public function GetCateogriesDataByPagination(){
		$this->db->select('web_coupons.id as  id, web_coupons.coupon_title, web_coupons.coupon_type, web_coupons.coupon_code, web_coupons.affiliate_link,  ');
	}
	public function GenerateCategories($taxonomy_type = '', $id = 0, $depth = 0, $not_equal_id = 0)
	{
		$html = "";
		$result = $this->db->get_where('web_taxonomies',array('parent_id' => $id,'id != ' => $not_equal_id,'taxonomy_type'	=> $taxonomy_type,'status'	=>	'Active'))->result();
		$class = '';
		$li_class = '';
		$a_class = '';
		$caret = '';
		$space_attr = '';
		$count=1;
		$background_image = '';
		$image_src = '';
		$span_image = '';
		$d = '';
		foreach($result as $rows) {
			if($depth == 0){
				// if($count%3==1){$html .= '<div class="row">';}
				$image_data =  GetImageInfo($rows->id , 'category');
				$image_src = !empty($image_data) ? base_url('assets/uploads/categories/'.$image_data->file_name) : base_url('assets/uploads/required/placeholder.png');
				$html .= '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6"><ul class="ctul" style="margin-bottom:20px">';
				$li_class = 'ct-heading';
				$a_class = 'ct-href';
				$caret= '';
			}
			else if($depth == 1) {
				$li_class = 'ct-ul-child-li-sh';
				$a_class = 'ct-ul-child-href-sh';
				$html .= '<ul class="ct-ul-child-sh ctul">';
			}else{
				$caret= '';
				$li_class = 'ct-ul-child-li';
				$a_class = 'ct-ul-child-href';
				$html .= '<ul class="ct-ul-child ctul">';
				$space_attr = 'child-pd="'.($depth*13-1).'"';
			}
			if($rows->has_child == 1){
			
				$d = $this->GenerateCategories($taxonomy_type, $rows->id, $depth+1,   $not_equal_id);
			}
			
			if($d != '' && $depth != 0){
				$caret = '<span class="caret"></span>';
			}	
			if($depth == 0){
				$background_image = $image_src;
				//$span_image = '<span class="pc-image"><img class="img-responsive store-img" src="'.$background_image.'"/></span>';
			}
			$html .= '<li class="'.$li_class.'"><a '.$space_attr.' class="'.$a_class.'" href="'.base_url().'categories/'.$rows->custom_url.'">'.$rows->name.$span_image.$caret.'</a>'.$d.'</li>';
			if( $depth == 0)
			{
				$html .= '</ul></div>';
				// if($count%3==0){$html .= '</div>';}
				$count=$count+1;
			}else{
				$html .= '</ul>';
			}	
		}
		return $html;
	}
	public function GetStoreCategories($id){
		$this->db->select('web_taxonomies.id as category_id, name, custom_url');
		$this->db->from('store_categories');
		$this->db->join('web_taxonomies', 'store_categories.category_id = web_taxonomies.id','left');
		$this->db->where('web_taxonomies.status' , 'Active');
		$this->db->where('store_categories.store_id' , $id);
		$result = $this->db->get()->result();
		return $result;
	}
	public function GetRelatedStores($categories_array = array(), $current_store_id){
		
		$this->db->select('name, custom_url');
		$this->db->from('store_categories');
		$this->db->join('web_taxonomies', 'store_categories.store_id = web_taxonomies.id','left');
		foreach($categories_array as $category){
			$this->db->or_where('category_id', $category->category_id);
		}
		$this->db->where('store_categories.store_id != ', $current_store_id);
		$this->db->where('web_taxonomies.status' , 'Active');
		$this->db->group_by('name');
		$result = $this->db->get()->result();
		return $result;
	}
	public function GetSubCategories($category_id = ''){
		$data = $this->db->get_where('web_taxonomies', array('parent_id' => $category_id, 'status' => 'Active'))->result();
		return $data;
	}
	public function GetSingleCategoryStores($id = null){
		$this->db->select('web_taxonomies.id as category_id, name, custom_url, file_name ');
		$this->db->from('store_categories');
		$this->db->join('web_taxonomies', 'store_categories.store_id = web_taxonomies.id', 'left');
		$this->db->join('web_images', 'web_images.reference_id = web_taxonomies.id', 'left');
		$this->db->where('web_taxonomies.status','Active');
		$this->db->where('web_taxonomies.taxonomy_type','store');
		$this->db->where('store_categories.category_id',$id);
		$result = $this->db->get()->result();
		return $result;
	}
	public function insert_review(){
		$this->db->insert('web_reviews', array('email' => $this->input->post('useremail',true), 'username' => $this->input->post('username',true), 'subject' => $this->input->post('subject', true), 'message' => $this->input->post('message',true)));
		return $return_response = array(
			'ERROR'			=> FALSE,
			'MESSAGE'		=> '',
		);
	}	
	public function GetPopularStoresCoupons($reference_id = '', $type = ''){
		$this->db->order_by('web_coupons.coupon_type','asc');
		$this->db->select('web_coupons.id as coupon_id, web_coupons.coupon_type, web_coupons.coupon_code, web_coupons.short_title, web_coupons.coupon_description, web_coupons.coupon_title, web_coupons.verified, web_coupons.exclusive, web_coupons.expiry_date,web_coupons.status,web_taxonomies.custom_url as store_url, web_coupons.coupon_url');
		$this->db->from('web_coupons');
		$this->db->join('web_selected_taxonomies', 'coupon_id = web_coupons.id', 'left');
		$this->db->join('web_taxonomies', 'web_taxonomies.id = web_selected_taxonomies.reference_id', 'left');
		$this->db->where('str_to_date(web_coupons.expiry_date,\'%Y-%m-%d\') >= ' , date('Y-m-d'));
		$this->db->where('web_selected_taxonomies.reference_id' , $reference_id);
		$this->db->where('web_taxonomies.taxonomy_type' , $type);
		$this->db->where('web_coupons.status' , 'Active');
		$this->db->or_where('web_coupons.expiry_date' , '');
		$this->db->where('web_selected_taxonomies.reference_id' , $reference_id);
		$this->db->where('web_taxonomies.taxonomy_type' , $type);
		$this->db->where('web_coupons.status' , 'Active');
		$this->db->limit(6);
		$data = $this->db->get()->result();
		return $data;
	}
	public function GetSearchUnderCoupons($limit){
		$this->db->order_by('id','desc');
		$this->db->select('name,custom_url');
		$this->db->where('taxonomy_type' ,'store');
		$data = $this->db->get('web_taxonomies',$limit)->result();
		$class = '';
		$i = 0;
		foreach($data as $row){
			if($i > 2){$class = 'hhidexss';}
			echo '<a class="'.$class.'" href="'.base_url('store/'.$row->custom_url).'">'.$row->name.'</a>';
			echo (($i+1)==count($data)) ? '' : ' , ';
			$i++;
		}
	}
	public function GetSingleCouponWithStore($coupon_url = null, $store_url = null){
		$this->db->select('*, web_coupons.id as CouponId');
		$this->db->from('web_coupons');
		$this->db->join('web_selected_taxonomies', 'web_selected_taxonomies.coupon_id = web_coupons.id','left');
		$this->db->join('web_taxonomies', 'web_taxonomies.id = web_selected_taxonomies.reference_id','left');
		$this->db->where('web_coupons.coupon_url', $coupon_url);
		$this->db->where('web_taxonomies.custom_url',$store_url);
		$this->db->where('web_selected_taxonomies.type' , 'store');
		$data = $this->db->get()->result();
		return $data;		
	}
	public function GetSingleTaxonomy($params = array()){
		$this->db->select('web_taxonomies.id as store_id , name, custom_url, description, post_count, file_name, meta_title, meta_description, meta_keywords, forced_to_used, website_url');
		$this->db->join('web_pages_metas', 'web_pages_metas.reference_id = web_taxonomies.id' , 'left');
		$this->db->join('web_images', 'web_images.reference_id = web_taxonomies.id' , 'left');
		$this->db->join('web_stores_props', 'web_stores_props.reference_id = web_taxonomies.id','left');
		$this->db->where($params);
		$this->db->where('status' , 'Active');
		$store_data = $this->db->get('web_taxonomies')->result();
		return $store_data;
	}
}