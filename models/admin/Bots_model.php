<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bots_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();

	} 
	 

 	public function get_all($where=null){

 
		$this->db->order_by('name','asc');  
		if($where){ $this->db->where($where);	 }	   
			$data = $this->db->get_where('bots',[
						'company_id'=>$this->session->userdata('user_company_id')
			])->result();
		
		return $data;


	}

	public function details($id){
		$this->db->order_by('name','asc');   
		$data = $this->db->get_where('bots_stores',[
						'bot_id'=>$id
			])->result();
		
		return $data;


	}
 	public function pause($id){

  
			 $this->db->set('status','pause');	   
			 $this->db->where('id',$id);	   
			 $update=$this->db->update('bots');	    

		return $update;


	}

 	public function run($id){

  
			 $this->db->set('status','running');	   
			 $this->db->where('id',$id);	   
			 $update=$this->db->update('bots');	    
			 
		return $update;


	}

 
	public function reset($id){

  
			 $this->db->set('status','reset');	   
			 $this->db->set('last_position',null);	   
			 $this->db->where('id',$id);	   
			 $update=$this->db->update('bots');	    
			 
		return $update;


	}

 
 
	public function paste($bot_id,$site_id){

	$this->db->trans_strict(FALSE);
	ignore_user_abort(true);
	set_time_limit(0);

	$stores=$this->db->limit(2)->get_where('bots_stores',[
'bot_id'=>$bot_id,
])->result();


$site_stores=$this->db->limit(2)->get_where('stores',[
'site_id'=>$site_id,
])->result();

$site_stores_slugs=[];
foreach ($site_stores as $key => $store) {
	$site_stores_slugs[]=$store->name;
}
// echo $this->db->last_query();

unset($site_stores);


if (!empty($stores)) {
	foreach ($stores as $store) {
 
if (in_array($store->name, $site_stores_slugs))
  {


  	continue;
  }

$this->db->trans_start();
		 		$store_id=$store->id;
		 	   unset($store->id);
		 	   unset($store->bot_id);
		 	   unset($store->custom_url);
		 	   $store->custom_url= strtolower( str_ireplace(' ', '_',  str_ireplace('.', '_',str_ireplace('-', '_', $store->name))));
		 	   $store->inserted_from='bot';
		 	   $store->site_id=$site_id;
			   $this->db->insert('stores',$store);	    
			   $insert_store_id=$this->db->insert_id();

			   $coupons=$this->db->get_where('bots_stores_coupons',[
				'store_id'=>$store_id,
				])->result();
			   	foreach ($coupons as &$coupon) {
			   		
			   			   unset($coupon->id);
			   			$coupon->site_id=$site_id;
			   			$coupon->store_id=$insert_store_id;
			   			$coupon->expire_date=$coupon->expire_date?$coupon->expire_date:date('y-m-d',strtotime('now +45 days'));
			   		$this->db->insert('coupons',$coupon);	

			   	}
			   	unset($coupons); 
			   	 // $this->db->insert_batch('coupons',$coupons);	    

$this->db->trans_complete();
unset($store); 
		 	
	}
} 
			 
		return true;


	}

 



	
}
?>