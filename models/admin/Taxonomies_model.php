<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Taxonomies_model extends MY_Model{
	
	
	public $return_response = array(
		
		'ERROR'			=> FALSE,
		'MESSAGE'		=> '',
		'DATA'			=> array()
	
	);
	
	public function insert($id = '', $image_name = ''){
		
		
		
		$upload_path = $this->input->post('taxonomy_type') == 'store' ? 'stores' : 'categories' ;
		
		$UploadedImage = $this->file_uploading('upload_image', $upload_path);
		
		
		$parentchecking = $this->TaxonomyExist(array('id' => $this->input->post('parent_category')));
		if($parentchecking){
			
			$this->db->where('id',$this->input->post('parent_category'));
			$this->db->update('web_taxonomies', array('has_child' => '1'));
		}
		
		$this->db->insert('web_taxonomies' , $this->InputFields($id));
		
		$last_id = $this->db->insert_id();
		
		$this->StorePagesMetas($last_id, $id);
		
		$this->StoreImageDataToDb($last_id, $UploadedImage, $id);
		
		$this->Store_StoresLinks($last_id, $id);
		
		$this->return_response['ERROR']	= FALSE;
		$this->return_response['MESSAGE']	= 'Successfully Inserted';
		
		return $this->return_response;
		
	}
	
	
	public function update($id){
	
		$storeImage = '';
		
		$this->db->select('parent_id');
		$this->db->where('id', $id);
		$checking_parent_id = $this->db->get('web_taxonomies')->result();
		if(!empty($checking_parent_id)){
			
			if( $this->input->post('parent_category') != $checking_parent_id[0]->parent_id){
				
				$this->db->where('id', $checking_parent_id[0]->parent_id);
				$this->db->update('web_taxonomies' , array('has_child' => '0'));
				
			}
		}
		
		$taxonomy_type = $this->input->post('taxonomy_type') == 'store' ? 'store' : 'category' ;
		
		$ImageArray = GetImageInfo($id , $taxonomy_type);
		
		if($this->input->post('deleteImage') == 'yes' || isset($_FILES['upload_image']['tmp_name']) && !empty($_FILES['upload_image']['tmp_name'])){
			
			$image_folder = $taxonomy_type == 'store' ? 'stores' : 'categories';
			
			if(!empty($ImageArray)){
				
				if(file_exists('./assets/uploads/'.$image_folder .'/'.$ImageArray->file_name)){
				
					unlink('./assets/uploads/'.$image_folder .'/'.$ImageArray->file_name);
				}
				
				$this->db->where('reference_id' , $id);
				$this->db->where('reference_type' , $taxonomy_type);
				$this->db->delete('web_images');
			}
			
		}else if(!empty($ImageArray) && $this->input->post('deleteImage') != 'yes' && empty($_FILES['upload_image']['tmp_name'])){
			
			$this->update_web_images($id);
			
		}
		
		
		
		
		$this->db->where('reference_id' , $id);
		$this->db->where('reference_type' , $this->input->post('taxonomy_type'));
		$this->db->delete('web_pages_metas');
		
		//die($this->db->last_query());
		
		$this->db->where('reference_id' , $id);
		$this->db->delete('web_stores_props');
		
		$this->db->where('id' , $id);
		$this->db->delete('web_taxonomies');
		$this->return_response['MESSAGE']	= 'Successfully Updated';
		return $this->insert($id);
		
		
	}
	
	
	public function update_web_images($id){
		
		$this->db->where('reference_id', $id);
		$this->db->where('reference_type' , $this->input->post('taxonomy_type'));
		$this->db->update('web_images', array(
			'caption' => $this->input->post('caption'),
			'alt_text' => $this->input->post('alt_text'),
			'image_description' => $this->input->post('img_description')
		));
	}
	
	
	
	public function StoreImageDataToDb($id, $image_name){
		
		if(isset($_FILES['upload_image']['tmp_name']) && !empty($_FILES['upload_image']['tmp_name'])){
			
			$reference_type = $this->input->post('taxonomy_type') == 'store' ? 'store' : 'category' ;
			
			$this->db->insert('web_images', array(
				
				'reference_type' 	=> $reference_type,
				'reference_id'		=> $id,
				'file_name'			=> $image_name,
				'alt_text'			=> $this->input->post('alt_text'),
				'caption'			=> $this->input->post('caption'),
				'image_description'	=> $this->input->post('img_description'),
				
				
			));
		}
	}
	
	
	public function Store_StoresLinks($id){
		
		if($this->input->post('taxonomy_type') == 'store'){
			
			$data_array = array(
				
				'reference_id'	 => $id,
				'website_url'	 => $this->input->post('website_url'),
				'affiliate_link' => $this->input->post('affiliate_link'),
				
				
			);
		
			$this->db->insert('web_stores_props' , $data_array);
			
		}
	}
	
	public function StorePagesMetas($id){
		
		$data_array = array(
		
			'reference_type'	=> $this->input->post('taxonomy_type'),
			'reference_id'		=> $id,
			'meta_title'		=> empty($this->input->post('meta_title')) ? $this->input->post('name') : $this->input->post('meta_title'),
			'meta_description'	=> $this->input->post('meta_description'),
			'meta_keywords'		=> $this->input->post('meta_keywords'),
			
			
		);
		
		$this->db->insert('web_pages_metas', $data_array);
	}
	
	public function InputFields($id = ''){
		
		
		$fields = array(
		
			'name' 			=> 		$this->input->post('name'),
			
			'custom_url'	=> 		!empty($this->input->post('custom_slug')) ? GenerateURL($this->input->post('custom_slug')) : GenerateURL($this->input->post('name')),
			
			'description'	=> 		$this->input->post('taxonomy_desc',true),
			
			'parent_id'		=>		$this->TaxonomyExist(array('id' => $this->input->post('parent_category'))) ? $this->input->post('parent_category') : 0 ,
			
			'status'		=>		'Active',
			
			'taxonomy_type' => 		$this->input->post('taxonomy_type'),
			
			'popular'		=> 		!empty($this->input->post('is_popular')) ? 'yes' : '' 
			
		);
		
		if(isset($id) || !empty($id)){
			
			$fields += array('id' => $id);
		}
		
		return $fields;
		
	}
	
	
	
	
	public function GetStoresSelectedCategories(){
		
		$this->db->select('category_id');
		$this->db->group_by('category_id');
		$category_ids = $this->db->get('store_categories')->result();
		$data_array = array();
		$category_counter = 0;
		foreach($category_ids as $c_ids){
			
			$data_array[][] = $c_ids->category_id;
			
			$this->db->select('store_id');
			$this->db->where('category_id' , $c_ids->category_id);
			$store_ids = $this->db->get('store_categories')->result();
			$store_id_array = array();
			foreach($store_ids as $s_ids){
				
				array_push($store_id_array , $s_ids->store_id);
			}
			
			$data_array[$category_counter]['category_id'] = $store_id_array;
			
			$category_counter++;
		}
		//echo '<pre>';
		//print_r($data_array);
		//die;
		
		return ($data_array);
		
	}
	
	
}
