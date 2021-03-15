<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webgains_model extends MY_Model{
	
	public function __construct(){
		
		parent::__construct();
		$this->load->helper('simple_html_dom_helper');
		// $this->load->helper('curl_helper');
			ignore_user_abort(true);
				set_time_limit(0);
	} 
	 
 
 

	public function run(){
		echo "<form action='' method='post'>

</form>
		";
			echo '<pre>';
	//	$bot_id=$this->db->select('id')->where('',$site_id)->get('bot_stores')->first_row()->id;
			$bot_id=27;
		$stores1=$this->db->select('name')->where('bot_id',$bot_id)->get('bots_stores')->result();


$f_name=__DIR__.'/webgains/stores_list.txt';
$file = fopen($f_name,"r");
$webgains_stores=fread($file,filesize($f_name));
$webgains_stores=explode("\n",$webgains_stores);
fclose($file);
foreach ($webgains_stores as $ws) {
	$sn=explode(' ',$ws)[0];
	$sn=explode('.',$sn)[0];

	if ($sn) {
			 $stores=$this->db->select('*')->like('name',trim($sn),'both')->where('bot_id',$bot_id)->get('bots_stores')->result();
			 if (!empty( $stores)) {
			 	
			echo  $ws.  ' => [';
			foreach ($stores as $store) {
				echo $store->name.',';
			}
		echo   ']';
			echo  "\n";
			 }
		


		# code...
	}
}
// print_r($webgains_stores);
// 		$f=fopen(__DIR__.'/abdaaaaaaaaaaaaa.txt', 'a+');

// fwrite($file, 'string');


	
// print_r(	$stores);

	}

 



	
}
?>