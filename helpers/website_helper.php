<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

	if( ! function_exists('registered_webOptions')){
		
		function registered_webOptions(){
			
			$ci =& get_instance();
	
			$web_options = $ci->db->get_where('web_options')->result();
			foreach($web_options as $options){
				//echo $options->command;
				if(! function_exists($options->command)){
					$text=addcslashes($options->value,"\"");
					$code=<<<EOF
					function $options->command(){
						return "$text";
						}
EOF;
		        	eval($code);
				}
			}
		}
	}
	
	
	function _stringStrip($string = ''){
		
		$text = addcslashes($string,"\"");
		$return_string = <<<EOF
		$text
EOF;
		
		return $return_string;
	}
	
	function AutoCopy($coupon = ''){
		
		
		return 'data-id="'.$coupon->coupon_id.'" data-clipboard-text="'.($coupon->coupon_type == 'Coupon Code' ? $coupon->coupon_code.'' : ' ').'"';
	}
	
	function isLinkActive($pagename = '', $activeArray = array()){
		
		
		if(in_array($pagename, $activeArray)){
		
			return 'active';
		}
	}
	
	function render_template($params){
		
		
		$ci =& get_instance();
		$ci->load->view('admin/index', $params);
		
		
	}
	
	
	function render_theme($params){
		
		$ci =& get_instance();
		$ci->load->view('site/index', $params);
	}
	
	
	function GenerateURL($url = ''){
			
		$data = str_replace('%','',$url);
		$data = str_replace('£','',$data);
		$data = str_replace('$','',$data);
		$data = str_replace('.','-',$data);
		$data = str_replace(' ','-',$data);
		$data = str_replace('/','',$data);
		$data = str_replace(',','-',$data);
		$data = str_replace('\/','',$data);
		$data = str_replace('!','',$data);
		$data = str_replace('*','',$data);
		$data = str_replace('(','',$data);
		$data = str_replace(')','',$data);
		$data = str_replace('+','',$data);
		$data = str_replace(':','',$data);
		$data = str_replace('"','',$data);
		$data = str_replace('?','',$data);
		$data = str_replace('&','and',$data);
		$data = str_replace('amp;','',$data);
		$data = str_replace('--;','-',$data);
		$data = str_replace('---;','-',$data);
		$data = str_replace('\'','',$data);
		
		return strtolower($data );
	}
	
	
	function GetImageInfo($id = '', $ref_type = ''){
		
		$ci =& get_instance();
		$image_data = $ci->db->get_where('web_images' , array('reference_id' => $id , 'reference_type' => $ref_type))->result();
		return !empty($image_data) ? $image_data[0] : $image_data;
		
	}
	
	
	function GetStoresProps($id = ''){
		
		$ci =& get_instance();
		
		$array = $ci->db->get_where('web_stores_props', array('reference_id' => $id))->result_array();
		
		return empty($array) ? $array : $array[0];
		
	}
	
	
	function GetPagesMetas($id, $type){
		
		$ci =& get_instance();
		
		$meta_Array = $ci->db->get_where('web_pages_metas' , array('reference_id' => $id , 'reference_type' => $type))->result_array();
		
		return !empty($meta_Array) ? $meta_Array[0] : $meta_Array;
	}
	
	
	
	function show_admin_Error($message = ''){
		
		$ci =& get_instance();
		
		echo $ci->load->view('admin/templates/error', ['message' => $message],TRUE);
		
		exit();
	}
	
	
	function UploadFile($file_name = 'userfile', $path = ''){
	
		$response_array = array(
			
			'ERROR' => FALSE,
			'MESSAGE' => '',
			'FILE_NAME' => ''
			
			
		);
		
		$ci =& get_instance();
		
		
		$config['upload_path'] = empty($path) ? './assets/uploads/' : './assets/uploads/'.$path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
		$config['file_name']	 = rand().'_'.$_FILES[$file_name]['name'];
		
		$ci->upload->initialize($config);
	
	
		if (!$ci->upload->do_upload($file_name))
		{
			$response_array['ERROR'] = TRUE;
			$response_array['MESSAGE'] = $ci->upload->display_errors();
			$response_array['FIELDS'] = '';
			return $response_array;
				
				
		}else{
			
			$uploaded_data = $ci->upload->data();
			$file_name = $uploaded_data['file_name'];
			$response_array['ERROR'] = FALSE;
			$response_array['MESSAGE'] = '';
			$response_array['FILE_NAME'] = $file_name;
			return $response_array;
			
		}
	}
	
	
	
	function GetImageFromDB($reference_id = '', $reference_type = ''){
		
		$ci =& get_instance();
		
		$path = $reference_type == 'store' ? 'stores' : '';
		 $ci->db->select('file_name');
	    $ci->db->where('reference_id' , $reference_id );
		$ci->db->where('reference_type' , $reference_type );
		$data_array = $ci->db->get('web_images')->result();
		if(!empty($data_array)){
			
			return base_url('assets/uploads/'.$path.'/'.$data_array[0]->file_name);
		}
		
		return base_url('assets/uploads/required/placeholder.png');
	}
	
	
	function validate_date($date = ''){
		
		$checkdate =  (bool)strtotime($date);
		
		if($checkdate){
			
			return true;
		}
		else{
			
			return false;
		}
		
	}
	
	function GetStoreInfo($id = ''){
		
		$ci =& get_instance();
		
		return $ci->db->get_where('web_taxonomies', array('taxonomy_type' => 'store', 'id' => $id))->result();
		
	}
	
	
	function GetCouponsStoreGroupBy($coupon_id = ''){
		
		$ci =& get_instance();
		$ci->db->group_by('coupon_id');
		
		$data = $ci->db->get_where('web_selected_taxonomies', array(
			'coupon_id'		=> $coupon_id,
			'type'			=> 'store'
		),1)->result();
			
		return $data;
	}
	
	
	function GetCouponsStores($coupon_id = '', $status = ''){
		
		$ci =& get_instance();
		$ci->db->select('web_taxonomies.name,web_taxonomies.custom_url, web_taxonomies.id as taxonomyId');
		$ci->db->from('web_selected_taxonomies');
		$ci->db->join('web_taxonomies', 'web_taxonomies.id = web_selected_taxonomies.reference_id');
		$ci->db->where('web_selected_taxonomies.coupon_id' , $coupon_id);
		$ci->db->where('web_selected_taxonomies.type' , 'store');
		if($status == 'Active'){ $ci->db->where('web_taxonomies.status' , 'Active');}
		$data = $ci->db->get()->result();
		
		return $data;
	}
	
	
	function do_pagination($url = '', $rowsCount = '', $totalRows = ''){
		
		//echo $rowsCount . ' : ' .$totalRows ;
		
		$ci =& get_instance();
		$ci->load->library('pagination');
		$config['base_url'] = base_url($url);
		$config['total_rows'] = $totalRows;
		$config['per_page'] = 10 ;
		$config['num_links'] = 3;
		$config['reuse_query_string'] = TRUE;
		$config['enable_query_strings'] = TRUE;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		
		//$data["links"] = explode('&nbsp;',$str_links );

		$ci->pagination->initialize($config);
		
		return explode('&nbsp;',$ci->pagination->create_links());
	}
	
	
	function GetAllCouponsCount(){
		
		$ci =& get_instance();
		
		return $ci->db->get_where('web_coupons', array('status != ' => 'Pending', 'status !=' => 'Inactive'))->num_rows();
		
	}
	
	
	function getStoresCount(){
		
		$ci =& get_instance();
		
		return $ci->db->get_where('web_taxonomies', array('taxonomy_type' => 'store'))->num_rows();
		
	}
	
	
	function SortedCoupons($coupon_id = '', $type = ''){
		$ci =& get_instance();
		$check = $ci->db->get_where('web_coupons_sorting', array('coupon_id' => $coupon_id, 'type' => $type))->result();
		
		if(!empty($check)){
			
			return true;
		}
		
		return false;
	}
	
	function StripString($string){
		
		
		$string = strip_tags($string);
		$orignalString = $string;
		if (strlen($string) > 35) {

			// truncate string
			$stringCut = substr($string, 0, 35);
			$endPoint = strrpos($stringCut, ' ');
			$remainedText = '';
			
			$contentWidth = imagefontwidth(15) * strlen($orignalString);
			
			if($endPoint){
			
				$string = substr($stringCut, 0, $endPoint);
				$remainedText = substr($orignalString, $endPoint, strlen($string)-1);
				
				$string .= '... <a data-toggle="tooltip" title="'.$orignalString.'" content-width="'.$contentWidth	.'" data-placement="bottom" href="javascript:void(0)">View More</a>';
				
			}else{
				
				$string = substr($stringCut, 0);
			}
			
		}
		return $string;
	}

	
	 function SvgIcon($for_string = '')
	{
		$return_string = '';
		
		if($for_string == 'search_icon'){
			
			$return_string = '	<svg class="icon icon-search"><use xlink:href="#icon-search">
								<svg viewBox="0 0 16 16" id="icon-search" width="100%" height="100%"><path d="M15.9 15.1l-3.6-3.6C13.4 10.4 14 8.8 14 7c0-3.9-3.1-7-7-7S0 3.1 0 7s3.1 7 7 7c1.8 0 3.4-.6 4.6-1.7l3.6 3.6c.2.2.5.2.7 0 .1-.2.1-.6 0-.8zM7 13c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></use></svg>';
		
		}
		else if($for_string == 'home_icon')
		{
			
			$return_string = '<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="40" height="35" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none"><path d="M1275 3735 c-698 -569 -1270 -1041 -1270 -1049 0 -16 426 -546 437 -543 3 1 478 387 1055 857 576 470 1055 854 1063 854 8 0 487 -384 1063 -854 577 -470 1052 -856 1055 -857 9 -2 436 523 440 541 3 14 -2540 2086 -2560 2085 -7 0 -584 -466 -1283 -1034z"/><path d="M3450 4405 l0 -184 415 -338 c229 -186 420 -339 425 -341 7 -2 10 184 10 522 l0 526 -425 0 -425 0 0 -185z"/><path d="M1688 2992 l-867 -707 -1 -972 0 -973 550 0 550 0 0 950 0 950 640 0 640 0 0 -950 0 -950 550 0 550 0 0 973 -1 972 -866 705 c-476 388 -869 706 -872 707 -3 1 -396 -317 -873 -705z"/></g></svg>';
		
		}
		else if($for_string == 'stores_icon'){
			
			$return_string = '<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="35" height="35" viewBox="0 0 980.000000 874.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,874.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none"><path d="M540 8185 l0 -545 4360 0 4360 0 0 545 0 545 -4360 0 -4360 0 0 -545z"/><path d="M267 5732 l-268 -1367 1 -547 0 -548 270 0 270 0 0 -1635 0 -1635 2728 2 2727 3 3 1632 2 1633 1085 0 1085 0 0 -1635 0 -1635 545 0 545 0 0 1635 0 1635 270 0 270 0 0 548 1 547 -268 1367 -268 1368 -4365 0 -4365 0 -268 -1368z m4633 -3547 l0 -1085 -1632 2 -1633 3 -3 1083 -2 1082 1635 0 1635 0 0 -1085z"/></g></svg>';
		
		}
		else if($for_string == 'categories_icon'){
			
			$return_string = '<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="35" height="35" viewBox="0 0 980.000000 982.000000" preserveAspectRatio="xMidYMid meet">

			<g transform="translate(0.000000,982.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
			<path d="M440 9800 c-124 -4 -236 -11 -250 -15 -43 -13 -96 -62 -145 -134 l-47 -68 5 -1159 c5 -1219 7 -1276 50 -1364 18 -36 33 -51 78 -73 52 -26 67 -28 245 -37 238 -12 1744 -12 2080 -1 277 10 293 13 354 76 59 60 60 78 71 745 6 333 8 857 6 1165 -6 597 -11 676 -56 749 -28 45 -103 92 -171 106 -65 14 -1857 22 -2220 10z m1863 -580 c2 -3 7 -389 11 -858 l7 -852 -873 2 -873 3 -3 859 -2 858 864 -4 c476 -2 867 -6 869 -8z"/>
			<path d="M3990 9800 c-354 -12 -409 -23 -459 -86 -57 -72 -61 -171 -61 -1474 l0 -1145 78 -78 77 -77 1275 0 1275 0 78 78 77 77 0 1145 c0 1321 -4 1406 -65 1478 -40 48 -82 61 -226 73 -162 13 -1743 20 -2049 9z m1770 -1430 l0 -860 -860 0 -860 0 0 860 0 860 860 0 860 0 0 -860z"/>
			<path d="M7285 9800 c-82 -4 -164 -13 -182 -18 -57 -18 -120 -69 -141 -114 -45 -93 -47 -158 -47 -1313 0 -1159 2 -1202 48 -1295 56 -113 77 -115 1392 -115 1126 0 1254 5 1330 50 109 63 114 137 115 1566 l0 1026 -49 69 c-69 99 -107 125 -195 136 -94 11 -2078 18 -2271 8z m1943 -1427 l-3 -858 -874 -3 -874 -2 5 837 c3 461 9 846 13 855 5 12 21 18 53 21 26 2 415 4 865 5 l817 2 -2 -857z"/>
			<path d="M4310 6339 c-758 -12 -776 -16 -817 -187 -15 -59 -17 -196 -20 -1147 -4 -1099 0 -1295 32 -1386 50 -140 86 -144 1395 -144 1309 0 1345 4 1395 144 32 91 36 287 32 1386 -3 951 -5 1088 -20 1147 -8 37 -23 78 -33 93 -27 42 -87 66 -188 76 -78 8 -1176 31 -1276 27 -19 -1 -244 -5 -500 -9z m1450 -1429 l0 -860 -860 0 -860 0 0 860 0 860 860 0 860 0 0 -860z"/>
			<path d="M97 6258 l-87 -83 -3 -1180 c-2 -1259 -1 -1299 46 -1395 33 -67 91 -99 203 -110 136 -13 1621 -22 2049 -12 424 10 420 9 494 83 50 50 69 119 81 291 13 181 12 1938 0 2113 -14 187 -29 237 -90 297 -27 26 -66 52 -87 59 -30 10 -307 14 -1278 16 l-1240 3 -88 -82z m2223 -1348 l0 -860 -875 0 -875 0 0 860 0 860 875 0 875 0 0 -860z"/>
			<path d="M7168 6330 c-85 -8 -127 -29 -177 -85 -42 -48 -59 -116 -71 -280 -12 -177 -13 -1945 0 -2118 12 -171 31 -235 83 -286 74 -74 68 -73 492 -83 428 -10 1913 -1 2049 12 158 16 212 71 238 240 10 67 12 341 11 1265 l-3 1180 -87 82 -88 83 -1185 -2 c-652 0 -1220 -4 -1262 -8z m2062 -1420 l0 -860 -875 0 -875 0 0 860 0 860 875 0 875 0 0 -860z"/>
			<path d="M515 2879 c-322 -6 -355 -12 -420 -73 -36 -33 -48 -53 -60 -101 -26 -102 -35 -417 -35 -1275 0 -1035 10 -1230 69 -1310 10 -14 47 -40 82 -58 59 -30 75 -33 209 -42 184 -12 2055 -13 2212 0 99 7 126 13 169 36 101 55 124 110 139 334 20 301 4 2201 -20 2308 -16 72 -66 124 -140 146 -33 10 -122 20 -225 26 -202 11 -1580 17 -1980 9z m1799 -1421 c-3 -464 -7 -849 -10 -855 -3 -10 -183 -13 -858 -13 l-854 0 -6 73 c-3 39 -7 424 -9 855 l-3 782 873 0 874 0 -7 -842z"/>
			<path d="M3714 2870 c-94 -10 -132 -30 -194 -101 l-51 -59 4 -1222 c3 -923 7 -1236 16 -1277 20 -87 43 -124 99 -154 45 -24 66 -28 199 -37 190 -12 2102 -13 2250 0 184 15 245 61 274 206 9 43 13 398 16 1274 l4 1216 -73 71 c-51 49 -86 74 -113 82 -46 13 -2311 13 -2431 1z m2046 -1430 l0 -860 -860 0 -860 0 0 860 0 860 860 0 860 0 0 -860z"/>
			<path d="M7170 2869 c-135 -17 -208 -72 -230 -173 -24 -106 -40 -2015 -20 -2311 15 -218 39 -274 139 -329 43 -23 70 -29 169 -36 152 -12 1985 -12 2209 0 117 6 181 13 200 24 34 17 85 71 132 139 l33 48 -5 1152 c-5 1166 -8 1272 -43 1355 -20 48 -60 91 -103 109 -19 8 -94 18 -175 23 -175 12 -2217 11 -2306 -1z m2060 -1429 l0 -860 -862 6 c-475 4 -866 9 -869 13 -4 3 -10 387 -13 854 l-7 847 875 0 876 0 0 -860z"/>
			</g>
			</svg>';
		
		}
		else if($for_string == 'contact_icon'){
			
			$return_string = '<svg fill="#fff" id="Layer_1" width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M2.4 20.9c-.2.1-.3.3-.4.6-.1.2-.1.3-.1.5l2 1.1L6 24.3V18l-3.6 2.9zm4.1 6l-2.7-1.5-2-1.1v14.8c0 1.4.3 2.7.9 3.9l1.7-1.2 12.3-9.1-10.2-5.8zm37.9 16.5l-13.5-10-5.9-4-5.9 4.1-13.4 9.9L4 44.6c1.4 1.2 3.3 1.9 5.2 1.8H41c1.9.1 3.8-.6 5.2-1.8l-1.8-1.2zM25.6 3.8c-.4-.3-.9-.3-1.3 0l-8 6.2h17.4l-8.1-6.2zm22.5 17.6c-.1-.2-.2-.4-.4-.6L44.1 18v6.2l2.1-1.2 2-1.1c0-.1 0-.3-.1-.5zm-1.9 4.1l-12.9 7.2 12.3 9.1 1.7 1.2c.6-1.2.9-2.5.9-3.9V24.3l-2 1.2z"></path><path d="M8 12.1v13.3l10.5 6 6-4.1c.3-.2.8-.2 1.2 0l5.9 4.1 10.5-6V12.1H8zm4.6 4.2h16.7c.6 0 1 .4 1 1s-.4 1-1 1H12.6c-.6 0-1-.4-1-1s.5-1 1-1zm24.8 7.5H12.6c-.6 0-1-.4-1-1s.5-1 1-1h24.8c.6 0 1 .4 1 1s-.4 1-1 1z"></path></svg>';
			
		}
		
		return $return_string;
	}

	function GetWebOption($property_name = ''){
		$ci =& get_instance();
		$option = $ci->db->get_where('web_options', array(
			
			'command'	=> $property_name
		
		))->result();
		
		
		if(!empty($option)){
			
			return $option[0]->value;
		}
		
		return '';
	}



	function sitemap_generation(){
		
	
 
		$ci =& get_instance();
		$main_string = '<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
		
		$limit_int = 5000;
		$page_count = 1;
		
		$count = $ci->db->query('select count(*) as c from web_taxonomies ')->first_row()->c;
			
		for($i = 0; $i < $count; $i++){
			
			if($i % $limit_int == 1){
					
				$rows_string  = '<?xml version="1.0" encoding="UTF-8"?>';
				$rows_string .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
			
					
				$ci->db->order_by('id' , 'asc'); 
				
				if(is_array(json_decode(GetWebOption('EXCLUDED_TAXONOMIES')))){
					
					foreach(json_decode(GetWebOption('EXCLUDED_TAXONOMIES')) as $taxonomies_id){
						
						$ci->db->where('id !=', $taxonomies_id);
					}
				}
				$taxonomies_array = $ci->db->get('web_taxonomies' ,$limit_int, $i);
				
				
				$taxonomies_array = $taxonomies_array->result();
				
				foreach($taxonomies_array as $taxonomy){
					
					$goto_url = $taxonomy->taxonomy_type == 'store' ? 'store' : 'categories';
					$freq = $taxonomy->taxonomy_type == 'store' ? SITEMAP_STORES_FREQUENCY() : SITEMAP_CATEGORIES_FREQUENCY();
					$rows_string .= '<url>' . PHP_EOL;
					$rows_string .= '<loc>'.base_url($goto_url.'/'.str_replace('&','&amp;',$taxonomy->custom_url)).'</loc>' . PHP_EOL;
					$rows_string .= '<changefreq>'.$freq.'</changefreq>' . PHP_EOL;
					$rows_string .= '<lastmod>'. date('c', strtotime($taxonomy->updated_date)) .'</lastmod>';
					$rows_string .= '</url>' . PHP_EOL;
				
				}
				
				$rows_string .= '</urlset>' . PHP_EOL;
				$file = fopen('sitemap/sitemap'.$page_count.'.xml','w');
				fwrite($file, $rows_string);
				fclose($file);

				$main_string.= '<sitemap>
									<loc>'.base_url().'sitemap/sitemap'.$page_count.'.xml</loc>
									<lastmod>'. date('c').'</lastmod>
								</sitemap>';
				$page_count++;	
			}
				
				
				
		}

		
		
		$main_string .= '<sitemap>
							<loc>'.base_url().'sitemap/others.xml</loc>
							<lastmod>'. date('c').'</lastmod>
						</sitemap>';
						
						
		$main_string .=  '</sitemapindex>';
		$f = fopen('sitemap.xml','w');
		fwrite($f,$main_string);
		fclose($f);
		
		GeneratePagesSitemap();
		GenerateCouponsSitemap();
	}
	
	function GenerateCouponsSitemap(){
		$ci =& get_instance();
		$MainSitemap = '<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
		
		$dividByEvery = 2000;
		
		$pageCount = 1;
		
		$count = $ci->db->query('select count(*) as c from web_coupons')->first_row()->c;
		
		for($i = 0; $i < $count; $i++){
			
			if($i % $dividByEvery == 1){
				
				$row = '<?xml version="1.0" encoding="UTF-8"?>';
				$row .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
				
				$ci->db->select('web_taxonomies.custom_url, web_coupons.coupon_url, web_coupons.added_date');
				$ci->db->from('web_coupons');
				$ci->db->join('web_selected_taxonomies' , 'web_selected_taxonomies.coupon_id = web_coupons.id');
				$ci->db->join('web_taxonomies', 'web_selected_taxonomies.reference_id = web_taxonomies.id');
				$ci->db->limit($dividByEvery , $i  );
				$coupon_array = $ci->db->get()->result();
				foreach($coupon_array as $coupon){
					
					$row.= '<url>' . PHP_EOL;
					$row.= '<loc>'.base_url($coupon->custom_url.'/coupon/'.$coupon->coupon_url).'</loc>' . PHP_EOL;
					$row.= '<changefreq>weekly</changefreq>' . PHP_EOL;
					$row.= '<lastmod>'. date('c', strtotime($coupon->added_date)) .'</lastmod>';
					$row.= '</url>' . PHP_EOL;
				}
				
				$row.= '</urlset>' . PHP_EOL;
						$file=fopen('sitemap/coupons-list-'.$pageCount.'.xml','w');
						fwrite($file,$row);
						fclose($file);
					$MainSitemap.= '<sitemap>
					<loc>'.base_url().'sitemap/coupons-list-'.$pageCount.'.xml</loc>
					  <lastmod>'. date('c').'</lastmod>
					</sitemap>';
					$pageCount++;
			}
		}
	}
	
	
	function GeneratePagesSitemap(){
		
		
		$ci =& get_instance();
		
		
		$main_string  = '<?xml version="1.0" encoding="UTF-8"?>';
		$main_string = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
		
		
		if(is_array(json_decode(GetWebOption('EXCLUDED_PAGES')))){
			
			foreach(json_decode(GetWebOption('EXCLUDED_PAGES')) as $page_id){
				
				$ci->db->where('id !=', $page_id);
			}
		}
		
		$pages_array = $ci->db->get('web_pages')->result();
		
		foreach($pages_array as $page){
			
			$loc = base_url($page->url);
			
			if($page->url == 'homepage'){
				
				$loc = base_url();
			}
			else if($page->page_type == 'static-discount-page'){
				
				$loc = base_url('coupons/'.$page->url);
			}
			$main_string .= '<url>' . PHP_EOL;
			$main_string .= '<loc>'.$loc.'</loc>' . PHP_EOL;
			$main_string .= '<changefreq>'.SITEMAP_PAGES_FREQUENCY().'</changefreq>' . PHP_EOL;
			$main_string .= '<lastmod>'. date('c', strtotime($page->updated_date)) .'</lastmod>';
			$main_string .= '</url>' . PHP_EOL;
		}
		
		$main_string .= '</urlset>' . PHP_EOL;
		
		
		$f = fopen('sitemap/others.xml','w');
		fwrite($f,$main_string);
		fclose($f);
		
	}

	function GetCouponsCountByTaxonomy($taxonomy_id = '', $taxonomy_type = ''){
		
		$ci =& get_instance();
		$count = $ci->db->get_where('web_selected_taxonomies' , array('reference_id' => $taxonomy_id , 'type' => $taxonomy_type))->num_rows();
		return $count;
		
	}
	
	
	
	
	function CouponDesc($string){
		
		return $string != strip_tags($string) ? $string : '<p>'.$string.'</p>';
	}
	
	
	function CouponExpiryDate($expiry_date = '', $coupon_type = ''){
		
		$return_value = '';
		
		if($coupon_type == 'Expired'){
			
			$return_value = 'Expired';
		}
		else if(validate_date($expiry_date)){
			
			$formated_date = date_format(date_create($expiry_date),"d, M");
			$firstDate = date('Y-m-d');
			$secondDate =  date_format(date_create($expiry_date),"Y-m-d");
			
			if($firstDate == $secondDate){
				
				$return_value =  'Expires today';
			}
			else if(strtotime("now") > strtotime($expiry_date) ){
				
				$return_value = 'Expired';
			}
			else{
				
				$return_value = 'End on: '. $formated_date;
			}
		}else{
			
			$return_value = 'Offer on going';
		}
	
		
		
		return $return_value;
	}
	
	
	function CouponActionBtn($coupon = '', $extra_class = ''){
		
		$return_value = '';
		
		if($coupon->coupon_type == 'Coupon Code'){
			
			$return_value  = '<div class="coupon-cta '.$extra_class.'">
						<a href="javascript:void(0)" class="copycodebtn ccbtn" '.AutoCopy($coupon).'>
							<span class="o-button c-button">View Code <span class="code">'.$coupon->coupon_code.'</span></span>
						</a>
					</div>';
		}
		else{
			
			$return_value = '<div class="coupon-cta dealbtn'.$extra_class.'">
						<a href="javascript:void(0)" class="copycodebtn ccbtn" '.AutoCopy($coupon).'>
							<span class="o-button c-button ">Get Deal</span>
						</a>
					</div>';
			
		}
		
		return $return_value;
	}
	
	function the_excerpt($string, $cutOffLength) {

		$charAtPosition = "";
		$titleLength = strlen($string);

		do {
			$cutOffLength++;
			$charAtPosition = substr($string, $cutOffLength, 1);
		} while ($cutOffLength < $titleLength && $charAtPosition != " ");

		return substr($string, 0, $cutOffLength) . '...';

	}
	
	function CouponShortTitle($coupon_title = ''){
		
		$regex_Array = array(
		'/Free Returns/i',
		'/Free UK Delivery/i',
		'/Free UK Returns/i',
		'/Free (UK|US) Standard Delivery/i',
		'/Free Standard Shipping/i',
		'/Massive Savings/i',
		'/Free Delivery/i',
		'/Free Shipping/i',
		'/Free UK Shipping/i',
		'/Free Gift/i',
		'/Free Entry/i',
		'/Huge Savings/i',
		'/Great Discounts/i',
		'/Great Savings/i',
		'/Free Cancellation/i',
		'/(\d+) for (\d+) Offers/i',
		'/\$(\d+) off/i',
		'/from £(\d+) /i',
		'/from \$(\d+) /i',
		'/from \€(\d+) /i',
		'/Save money /i',
		'/Free UK Mainland Delivery/i',
		'/for £(\d+) /i',
		'/for \$(\d+) /i',
		'/Under £(\d+) /i',
		'/£(\d+) off/i',
		'/£(\d+(.|,)+(\d)) off/i',
		'/$(\d+(.|,)+(\d)) off/i',
		'/Over £(\d+) /i',
		'/Up to £(\d+(.|,))+(\d)/i',
		'/Up to (\d+)% off/i',
		'/Up to (\d+)%/i',
		'/Free Parking/i',
		'/Up to (\d+)% and More off/i',
		'/Up to (\d+)£ off/i',
		'/Up to £(\d+) off/i',
		'/up to half price/i',
		 '/Up to £(\d+)/i',
		 '/Up to $(\d+)/i',
		'/Earn $(\d+)/i',
		'/Earn £(\d+)/i',
		'/£(\d+) Rewards/i',
		'/$(\d+) Rewards/i',
		'/Extra (\d+)% off/i',
		'/get extra £(\d+)/i',
		'/(\d+)% Off/i',
		'/Exclusive (\d+)% Off/i',
		'/(\d+)% Everything/i',
		'/(\d+)% Discount/i',
		'/(\d+)% off Student Discount/i',
		'/(\d+)% off Student Discount/i',
		'/(\d+)% Student Discount/i',
		'/Only £(\d+) /i',
		'/Get £(\d+) Voucher /i',
		'/Get $(\d+) Voucher /i',
		'/Lowest price/i',
		'/lower price/i',
		'/free app/i',
		'/free wi-fi/i',
		'/sign up/i',
		'/£(\d+) Amazon Voucher/i',
		'/$(\d+) Amazon Voucher/i',
		'/(\d+)% Amazon Voucher/i',
		'/just £(\d+)/i',
		'/just $(\d+)/i',
		'/buy one get one half price/i',
		'/great prices/i',
		'/great price/i',
		'/Only $(\d+) /i',
		'/from £[0-9]+(\.[0-9]{1,2})/i',
		'/for £[0-9]+(\.[0-9]{1,2})/i',
		'/Special Offers/i',
		'/Win a £(\d+) Gift/i',
		'/Win up to £(\d+)/i',
		'/Win £(\d+)/i',
		'/Save (\d+)% off/i',
		'/Save (\d+)%/i',
		'/Save \$(\d+)/i',
		'/Save £(\d+)/i',
		'/Save up to (\d+)%/i',
		'/Free Next Day Delivery/i',
		'/Free Next Day Shipping/i',
		'/Free Standard Delivery/i',
		'/Free £(\d+) Voucher/i',
		'/£(\d+) Voucher/i',
		'/Save an Extra (\d+)%/i',
		'/exclusive offers	/i',
		'/Amazing Offers/i',
		'/(\d+)% off Sitewide/i',
		'/Buy (\d+) Get (\d+) Half Price/i',
		'/Buy (\d+) Get (\d+) free/i',
		'/Buy (\d+) Get (\d+)/i',
		'/low prices/i',
		'/(\d+) for (\d+)/i',
		'/Earn (\d+) Bonus/i');
		
		foreach($regex_Array as $regex_format){
			
			if(preg_match($regex_format,$coupon_title, $matched))
			{
				return $matched[0];
			}
		}
	}
	
	
	
	
	function url_generator($string = ''){
		
		$real_string = strtolower($string);
		$real_string = str_replace(' ' , '-',trim( $real_string));
		$real_string = str_replace('%' , '',( $real_string));
		$real_string = str_replace('£' , '',( $real_string));
		$real_string = str_replace('$' , '',( $real_string));
		$real_string = str_replace('€' , '',( $real_string));
		$real_string = utf8_encode(str_replace('€' , '',( $real_string)));
		$real_string = utf8_encode(str_replace('Â' , '',( $real_string)));
		$real_string = str_replace('.' , '-',( $real_string));
		$real_string = str_replace(',' , '',( $real_string));
		$real_string = str_replace('\'' , '',( $real_string));
		$real_string = str_replace('’' , '',( $real_string));
		$real_string = str_replace('"' , '',( $real_string));
		$real_string = str_replace("&quot;" , '',( $real_string));
		$real_string = str_replace("”" , '',( $real_string));
		$real_string = str_replace("+" , '',( $real_string));
		$real_string = str_replace("?" , '',( $real_string));
		$real_string = str_replace("amp;" , '',( $real_string));
		$real_string = str_replace("&" , '',( $real_string));
		$real_string = str_replace("*" , '',( $real_string));
		$real_string = str_replace('-–-' , '-',( $real_string));
		$real_string = str_replace('--' , '-',( $real_string));
		$real_string = str_replace(")" , '',( $real_string));
		$real_string = str_replace("(" , '',( $real_string));
		$real_string = str_replace("!" , '',( $real_string));
		$real_string = str_replace("/" , '-',( $real_string));
		$real_string = str_replace("⅓-" , '1-3',( $real_string));
		$real_string = str_replace("’" , '',( $real_string));
	
		return $real_string;
		
	}
	
	
	function refr_counters(){
		
		$ci =& get_instance();
		$ci->db->query("UPDATE web_taxonomies as webt  SET post_count =  (SELECT COUNT(*) FROM web_selected_taxonomies LEFT join web_coupons ON web_selected_taxonomies.coupon_id = web_coupons.id WHERE str_to_date(web_coupons.expiry_date,'%Y-%m-%d') >= CURDATE() AND  reference_id = webt.id AND `status` = 'Active' OR web_coupons.expiry_date = '' AND  reference_id = webt.id AND `status` = 'Active' ) ;");
		$ci->db->query("UPDATE web_taxonomies as webt  SET post_count =  (SELECT COUNT(*) FROM store_categories WHERE category_id = webt.id) where taxonomy_type = 'category';");
		$ci->db->query("UPDATE web_options set `value` = (SELECT COUNT(*) FROM web_taxonomies WHERE taxonomy_type = 'store') WHERE command = 'STORES_COUNT';");
		$ci->db->query("UPDATE web_options set `value` = (SELECT COUNT(*) FROM web_taxonomies WHERE taxonomy_type = 'category') WHERE command = 'CATEGORIES_COUNT';");
		$ci->db->query("UPDATE web_options set `value` = (SELECT COUNT(*) FROM web_coupons) WHERE command = 'COUPONS_COUNT';");
	}
	
	

	
?>

