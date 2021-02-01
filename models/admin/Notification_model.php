<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_model extends MY_Model{
	
	
	  
	public function add($row){
 $this->db->insert('notifications',$row);

	}
 
 }