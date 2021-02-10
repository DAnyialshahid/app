<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends MY_Model{
	 
	
	public $return_response = array(
		
		'ERROR'			=> FALSE,
		'MESSAGE'		=> '',
		'DATA'			=> array()
	
	);
	

	public function get_all($where=null){
   
		$this->db->order_by('id','desc');
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('categories',[
					'site_id'=>$this->session->userdata('user_active_site')
			])->result();
		
		return $data;


	}

 
	public function add($uploaded_filename,$update=false,$id=null){
		// d($this->input->post());
		$data=array( 
			'name'		=> $this->input->post('name'),
			'slug'		=> $this->input->post('slug'), 
			'added_date'	=> date('y-m-d h:i:s'),
			'updated_date'		=> date('y-m-d h:i:s'),
			'description'		=> $this->input->post('description'),
			'status'		=> $this->input->post('status'),
			'inserted_from'		=>'human',  
			'popular'		=>$this->input->post('check_popular'), 
			'show_in_home'		=>$this->input->post('check_show_in_home'), 
			'top'		=>$this->input->post('check_top'), 
			'icon'		=>$this->input->post('icon'), 
			'site_id'		=>$this->session->userdata('user_active_site'), 
			'seo_category_meta_title'		=>$this->input->post('seo_category_meta_title'), 
			'seo_category_meta_keywords'		=>$this->input->post('seo_category_meta_keywords'), 
			'seo_category_meta_description'		=>$this->input->post('seo_category_meta_description'),  
		
		);
		if(!empty($uploaded_filename)){
			$data['feature_image']=	$uploaded_filename;
		}

		if($update && $id!=null){
								$this->db->where('id' ,$id );
					$update=$this->db->update('categories' ,$data );
						return $update;

		}else{
				$insert=$this->db->insert('categories' ,$data );
		 
				return $insert;
			}
	}

	


	public function delete($id){
		
		
		 
		$this->db->where('id' , $id);
		if($this->db->delete('categories' )){
			return true;
		}else{

			return ['error'=>''];
			 }
		  
	}


	public function paste($items){
		$rows=[];

		foreach ($items as $item) {
				$row=$item['row'];
				$row->site_id= $this->session->userdata('user_active_site');
				$row->inserted_from='paste';
				unset($row->id); 
				$rows[]=(array)$row;

		 	
		}
	 

 $complete=$this->db->insert_batch('categories',$rows); 
		if ($complete) {
		    return true;
		 }	 else{
		 	return false;
		 }
	

	}
	
 
	public function add_dummy_categories($site_id){

 

$this->db->set('category_id',null)->where('site_id',$site_id)->update('stores'); 
$this->db->set('category_id',null)->where('site_id',$site_id)->update('coupons'); 
$this->db->where('site_id',$site_id)->delete('categories'); 
$categories=[
	['name'=>'Accessories',
	'slug'=>'accessories',
	'description'=>'',
	'feature_image'=>'accessories.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Auto',
	'slug'=>'auto',
	'description'=>'',
	'feature_image'=>'auto.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Baby',
	'slug'=>'baby',
	'description'=>'',
	'feature_image'=>'baby.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Beauty',
	'slug'=>'beauty',
	'description'=>'',
	'feature_image'=>'beauty.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'0',
	'top'=>'1'
	],
	['name'=>'Books',
	'slug'=>'books',
	'description'=>'',
	'feature_image'=>'books.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Clothing',
	'slug'=>'Clothing',
	'description'=>'',
	'feature_image'=>'clothing.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Electronics',
	'slug'=>'electronics',
	'description'=>'',
	'feature_image'=>'electronics.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Entertainment',
	'slug'=>'entertainment',
	'description'=>'',
	'feature_image'=>'entertainment.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Flowers',
	'slug'=>'flowers',
	'description'=>'',
	'feature_image'=>'flowers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'0',
	'top'=>'1'
	],
	['name'=>'Food & Dining',
	'slug'=>'food_and_dining',
	'description'=>'',
	'feature_image'=>'food_and_dining.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Gifts',
	'slug'=>'gifts',
	'description'=>'',
	'feature_image'=>'gifts.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Pets',
	'slug'=>'pets',
	'description'=>'',
	'feature_image'=>'pets.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Photos',
	'slug'=>'photos',
	'description'=>'',
	'feature_image'=>'photos.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Shoes',
	'slug'=>'shoes',
	'description'=>'',
	'feature_image'=>'shoes.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Small Appliances',
	'slug'=>'small_appliances',
	'description'=>'',
	'feature_image'=>'small_appliances.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'0',
	'top'=>'1'
	],
	['name'=>'Sports',
	'slug'=>'sports',
	'description'=>'',
	'feature_image'=>'sports.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Toys',
	'slug'=>'toys',
	'description'=>'',
	'feature_image'=>'toys.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'Travel',
	'slug'=>'travel',
	'description'=>'',
	'feature_image'=>'travel.png',
	'icon'=>'pencil-ruler',
	'popular'=>'1',
	'show_in_home'=>'1',
	'top'=>'1'
	],
	['name'=>'ac',
	'slug'=>'ac',
	'description'=>'',
	'feature_image'=>'ac.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'all fashion',
	'slug'=>'all_fashion',
	'description'=>'',
	'feature_image'=>'all fashion.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'amusement and water parks',
	'slug'=>'amusement_and_water_parks',
	'description'=>'',
	'feature_image'=>'amusement and water parks.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'baby care',
	'slug'=>'baby_care',
	'description'=>'',
	'feature_image'=>'baby care.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'bed & bath',
	'slug'=>'bed_&_bath',
	'description'=>'',
	'feature_image'=>'bed & bath.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'bill payment',
	'slug'=>'bill_payment',
	'description'=>'',
	'feature_image'=>'bill payment.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'blank',
	'slug'=>'blank',
	'description'=>'',
	'feature_image'=>'blank.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'broadband bill',
	'slug'=>'broadband_bill',
	'description'=>'',
	'feature_image'=>'broadband bill.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'bus ticket',
	'slug'=>'bus_ticket',
	'description'=>'',
	'feature_image'=>'bus ticket.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'buy 1 get 1free.png',
	'slug'=>'buy_1_get_1_free',
	'description'=>'',
	'feature_image'=>'buy1get1free.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'camera & accessories',
	'slug'=>'camera_&_accessories',
	'description'=>'',
	'feature_image'=>'camera & accessories.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'car & motorbikes',
	'slug'=>'car_&_motorbikes',
	'description'=>'',
	'feature_image'=>'car & motorbikes.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'car rental',
	'slug'=>'car_rental',
	'description'=>'',
	'feature_image'=>'car rental.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'confectionery',
	'slug'=>'confectionery',
	'description'=>'',
	'feature_image'=>'confectionery.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'customize',
	'slug'=>'customize',
	'description'=>'',
	'feature_image'=>'customize.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'data card',
	'slug'=>'data_card',
	'description'=>'',
	'feature_image'=>'data card.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'desktop & laptops',
	'slug'=>'desktop_&_laptops',
	'description'=>'',
	'feature_image'=>'desktop & laptops.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'diapers',
	'slug'=>'diapers',
	'description'=>'',
	'feature_image'=>'diapers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'doctor appointment',
	'slug'=>'doctor_appointment',
	'description'=>'',
	'feature_image'=>'doctor appointment.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'domains',
	'slug'=>'domains',
	'description'=>'',
	'feature_image'=>'domains.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'domestic air ticket',
	'slug'=>'domestic_air_ticket',
	'description'=>'',
	'feature_image'=>'domestic air ticket.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'drinks & beverages',
	'slug'=>'drinks_&_beverages',
	'description'=>'',
	'feature_image'=>'drinks & beverages.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'dth',
	'slug'=>'dth',
	'description'=>'',
	'feature_image'=>'dth.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'ebooks',
	'slug'=>'ebooks',
	'description'=>'',
	'feature_image'=>'ebooks.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'editors pick',
	'slug'=>'editors_pick',
	'description'=>'',
	'feature_image'=>'editors pick.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'electricity bill',
	'slug'=>'electricity_bill',
	'description'=>'',
	'feature_image'=>'electricity bill.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'events & concerts',
	'slug'=>'events_&_concerts',
	'description'=>'',
	'feature_image'=>'events & concerts.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'exchange offer',
	'slug'=>'exchange_offer',
	'description'=>'',
	'feature_image'=>'exchange offer.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'footwear',
	'slug'=>'footwear',
	'description'=>'',
	'feature_image'=>'footwear.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'freecharge wallet offers',
	'slug'=>'freecharge_wallet_offers',
	'description'=>'',
	'feature_image'=>'freecharge wallet offers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'furniture',
	'slug'=>'furniture',
	'description'=>'',
	'feature_image'=>'furniture.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'gas bill',
	'slug'=>'gas_bill',
	'description'=>'',
	'feature_image'=>'gas bill.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'gift cards',
	'slug'=>'gift_cards',
	'description'=>'',
	'feature_image'=>'gift cards.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'gold & silver coins',
	'slug'=>'gold_&_silver_coins',
	'description'=>'',
	'feature_image'=>'gold & silver coins.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'grocery',
	'slug'=>'grocery',
	'description'=>'',
	'feature_image'=>'grocery.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'headphones & speakers',
	'slug'=>'headphones_&_speakers',
	'description'=>'',
	'feature_image'=>'headphones & speakers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'health and beauty',
	'slug'=>'health_and_beauty',
	'description'=>'',
	'feature_image'=>'health and beauty.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'health devices',
	'slug'=>'health_devices',
	'description'=>'',
	'feature_image'=>'health devices.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'health supplements',
	'slug'=>'health_supplements',
	'description'=>'',
	'feature_image'=>'health supplements.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'holiday package',
	'slug'=>'holiday_package',
	'description'=>'',
	'feature_image'=>'holiday package.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'home decor',
	'slug'=>'home_decor',
	'description'=>'',
	'feature_image'=>'home decor.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'home furnishing',
	'slug'=>'home_furnishing',
	'description'=>'',
	'feature_image'=>'home furnishing.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'home services',
	'slug'=>'home_services',
	'description'=>'',
	'feature_image'=>'home services.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'hotels',
	'slug'=>'hotels',
	'description'=>'',
	'feature_image'=>'hotels.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 		
	['name'=>'international air ticket',
	'slug'=>'international_air_ticket',
	'description'=>'',
	'feature_image'=>'international air ticket.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'jewellery & accessories',
	'slug'=>'jewellery_&_accessories',
	'description'=>'',
	'feature_image'=>'jewellery & accessories.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'kids clothing',
	'slug'=>'kids_clothing',
	'description'=>'',
	'feature_image'=>'kids clothing.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'kids footwear',
	'slug'=>'kids_footwear',
	'description'=>'',
	'feature_image'=>'kids footwear.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'kitchen & dining',
	'slug'=>'kitchen_&_dining',
	'description'=>'',
	'feature_image'=>'kitchen & dining.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'landline bill',
	'slug'=>'landline_bill',
	'description'=>'',
	'feature_image'=>'landline bill.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'lighting',
	'slug'=>'lighting',
	'description'=>'',
	'feature_image'=>'lighting.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'local services',
	'slug'=>'local_services',
	'description'=>'',
	'feature_image'=>'local services.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'magazines',
	'slug'=>'magazines',
	'description'=>'',
	'feature_image'=>'magazines.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'media, gaming & software',
	'slug'=>'media,_gaming_&_software',
	'description'=>'',
	'feature_image'=>'media, gaming & software.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'medicine',
	'slug'=>'medicine',
	'description'=>'',
	'feature_image'=>'medicine.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'metro card',
	'slug'=>'metro_card',
	'description'=>'',
	'feature_image'=>'metro card.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'mixer juicer grinders',
	'slug'=>'mixer_juicer_grinders',
	'description'=>'',
	'feature_image'=>'mixer juicer grinders.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'mobikwik wallet offers',
	'slug'=>'mobikwik_wallet_offers',
	'description'=>'',
	'feature_image'=>'mobikwik wallet offers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'mobile & tablet cases and covers',
	'slug'=>'mobile_&_tablet_cases_and_covers',
	'description'=>'',
	'feature_image'=>'mobile & tablet cases and covers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'mobile recharge',
	'slug'=>'mobile_recharge',
	'description'=>'',
	'feature_image'=>'mobile recharge.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'mobiles',
	'slug'=>'mobiles',
	'description'=>'',
	'feature_image'=>'mobiles.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'movie ticket offers',
	'slug'=>'movie_ticket_offers',
	'description'=>'',
	'feature_image'=>'movie ticket offers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'new year offers',
	'slug'=>'new_year_offers',
	'description'=>'',
	'feature_image'=>'new year offers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'others',
	'slug'=>'others',
	'description'=>'',
	'feature_image'=>'others.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'perfumes & deos',
	'slug'=>'perfumes_&_deos',
	'description'=>'',
	'feature_image'=>'perfumes & deos.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'personal and healthcare ',
	'slug'=>'personal_and_healthcare_',
	'description'=>'',
	'feature_image'=>'personal and healthcare .png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'pizza',
	'slug'=>'pizza',
	'description'=>'',
	'feature_image'=>'pizza.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'postpaid mobile bill',
	'slug'=>'postpaid_mobile_bill',
	'description'=>'',
	'feature_image'=>'postpaid mobile bill.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'recharge',
	'slug'=>'recharge',
	'description'=>'',
	'feature_image'=>'recharge.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'refrigerators',
	'slug'=>'refrigerators',
	'description'=>'',
	'feature_image'=>'refrigerators.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'restaurants offers',
	'slug'=>'restaurants_offers',
	'description'=>'',
	'feature_image'=>'restaurants offers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'school supplies',
	'slug'=>'school_supplies',
	'description'=>'',
	'feature_image'=>'school supplies.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'sports and fitness equipments',
	'slug'=>'sports_and_fitness_equipments',
	'description'=>'',
	'feature_image'=>'sports and fitness equipments.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'staionary',
	'slug'=>'staionary',
	'description'=>'',
	'feature_image'=>'staionary.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'stationery & office supplies',
	'slug'=>'stationery_&_office_supplies',
	'description'=>'',
	'feature_image'=>'stationery & office supplies.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'storage devices',
	'slug'=>'storage_devices',
	'description'=>'',
	'feature_image'=>'storage devices.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'study material & online courses',
	'slug'=>'study_material_&_online_courses',
	'description'=>'',
	'feature_image'=>'study material & online courses.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'sunglasses',
	'slug'=>'sunglasses',
	'description'=>'',
	'feature_image'=>'sunglasses.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'televisions',
	'slug'=>'televisions',
	'description'=>'',
	'feature_image'=>'televisions.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'tools & hardware',
	'slug'=>'tools_&_hardware',
	'description'=>'',
	'feature_image'=>'tools & hardware.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'train ticket',
	'slug'=>'train_ticket',
	'description'=>'',
	'feature_image'=>'train ticket.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'velintine',
	'slug'=>'velintine',
	'description'=>'',
	'feature_image'=>'velintine.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'wallet offers',
	'slug'=>'wallet_offers',
	'description'=>'',
	'feature_image'=>'wallet offers.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'washing machine',
	'slug'=>'washing_machine',
	'description'=>'',
	'feature_image'=>'washing machine.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'watches',
	'slug'=>'watches',
	'description'=>'',
	'feature_image'=>'watches.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'water bill',
	'slug'=>'water_bill',
	'description'=>'',
	'feature_image'=>'water bill.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	
	['name'=>'web hosting',
	'slug'=>'web_hosting',
	'description'=>'',
	'feature_image'=>'web hosting.png',
	'icon'=>'pencil-ruler',
	'popular'=>'0',
	'show_in_home'=>'0',
	'top'=>'0'
	], 	 

];

foreach ($categories as $key => $category) {
	$category['site_id']=$site_id;
	$category['status']='active';
$this->db->insert('categories',$category); 
}
return true;


	

	}
	
 

	
}