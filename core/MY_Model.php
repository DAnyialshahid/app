<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model{
	
	
	public function GenerateTaxonomyHierarchyOptions($taxonomy_type = '', $id = 0, $depth = 0, $not_equal_id = 0)
	{
		$html = "";
		
		$result = $this->db->get_where('web_taxonomies',[
		
			'parent_id' => $id,
			'id != ' => $not_equal_id,
			'taxonomy_type'	=> $taxonomy_type
			
		])->result();
		
		foreach($result as $rows) {
			
			$html .= "<option  value=\"". $rows->id ."\"".">". str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $depth) . $rows->name ."</option>";
			
			if($rows->has_child == '1'){
				$html .= $this->GenerateTaxonomyHierarchyOptions($taxonomy_type, $rows->id, $depth+1,   $not_equal_id);
			}
		}
		return $html;
	}
	
	
	public function file_uploading($file_name = '', $path = ''){
		
		if(isset($_FILES[$file_name]['tmp_name']) && !empty($_FILES[$file_name]['tmp_name'])){
			
			
			$uploaded = UploadFile($file_name, $path);
			
			$uploadedFileName = '';
			
			if($uploaded['ERROR']){
				
				echo json_encode($uploaded);
				
				die();
				
			}else{
				
				return $uploaded['FILE_NAME'];
			}
		}
	}
	
	
	
	public function TaxonomyExist($params = array()){
		
		$db_Data = $this->db->get_where('web_taxonomies',$params)->result();
		
		if(count($db_Data) > 0){
			
			
			return true;
		}
		
		return false;
	}
	
	
	public function GetTaxonomy($param = array()){
		
		$data = $this->db->get_where('web_taxonomies', $param)->result_array();
		// echo $this->db->last_query();
		if(empty($data)){
			
			show_admin_Error('Error: Data Not Exist '  );
		}
		
		return $data[0];
	}
	
	

	
	
	
	
	public function TaxonomyDataToUpdate($update_id = '', $type = ''){
		
		$taxonomyData = $this->GetTaxonomy(array('id' => $update_id, 'taxonomy_type' => $type));
		
		$taxonomyData += (array) GetImageInfo($update_id, $type);
		
		return (array) $taxonomyData + GetPagesMetas($update_id, $type) + GetStoresProps($update_id);
		
	}
	
	public function GenerateTaxonomiesTable($taxonomy_type = '', $id = 0, $depth = 0){
		
		$this->db->order_by('id','desc');
		$result = $this->db->get_where('web_taxonomies',[
		
			'parent_id' => $id,
			'taxonomy_type'	=> $taxonomy_type
			
		])->result();
		
		$html = "";
		
		foreach($result as $stores) {
			
			$html .= "<tr>";
			
			$html .= '<td><input type="checkbox" name="toDelete" class="toDelete" value="'.$stores->id.'"></td>';
			
			if($taxonomy_type == 'store'){
				
				$html .= "<td></td>";
				
			}
			
			$html .= "<td>". explode(' ',$stores->added_date)[0]. "</td>";
			$html .= "<td>". str_repeat("——— ", $depth) .$stores->name."</td>";
			$html .= "<td>".  $stores->status."</td>";
			$html .= "<td><a href=\" ".base_url('control_panel/taxonomies/'.$taxonomy_type.'/update/'.$stores->id)."\">Edit <i class=\"fa fa-angle-double-right\"></i></a></td>";
			
				if($stores->has_child == 1){
					$html .= $this->GenerateTaxonomiesTable($taxonomy_type, $stores->id,  $depth+1);
				}
				
		}
		
		
		return $html;
	
	}
	
	
	public function taxonomy_checkbox_generator($taxonomy_type = '', $parent_id = 0, $orderByTaxonomies = array()){
		
		if(! empty($orderByTaxonomies) ){
			
			$this->db->order_by('FIELD(web_taxonomies.id, '.implode(', ', $orderByTaxonomies).')  desc');
		}
		
		$this->db->where('taxonomy_type' , $taxonomy_type);
		$this->db->where('parent_id' , $parent_id);
		$data = $this->db->get('web_taxonomies')->result();
		
		$html_data = '';
		
		if(!empty($data)){
			
			$class = $parent_id != 0 ? 'taxonomies-child-ul' : 'parent-ul';
			
			$html_data = '<ul class="taxonomies-ul '.$class.'">';
		
			foreach($data as $taxonomies){
				
				
				$html_data .= '<li><input type="checkbox" value="'.$taxonomies->id.'" name="taxonomies[]" id="tax-input-checkbox-'.$taxonomies->id.'"/><label for="tax-input-checkbox-'.$taxonomies->id.'" style="font-weight:400 !important; margin-left:5px; margin-bottom:7px" >'.$taxonomies->name.'</label>';
				if($taxonomies->has_child == '1'){
					
					$html_data .= $this->taxonomy_checkbox_generator($taxonomies->taxonomy_type , $taxonomies->id);
				}
				$html_data .= '</li>';
			}
				
			$html_data .= '</ul>';
			
		
			return $html_data;
			
		}else{
			
		
			//$html_data = '';
		
			
		}
		
		return $html_data;
	}
	
	
	public function GetCoupon($params = array()){
		
		$this->db->order_by('id','desc');
		
		$data = $this->db->get_where('web_coupons' , $params)->result_array();
		
		return $data;
	}
	
	public function GetTaxonomyArray($params){
		
		
		$data = $this->db->get_where('web_taxonomies', $params)->result();
		
		return $data;
	}
	
	
	public function GetSubscribers($params = array()){
		
		return $this->db->get_where('web_subscriber', $params)->result();
	}
	
	public function UpdateWebCountersOption(){
		
		//$this->db->query('');
	}
	
	
}

?>