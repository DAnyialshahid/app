<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Option_model extends MY_Model{
	
	public $return_response = array(
		
		'ERROR'			=> FALSE,
		'MESSAGE'		=> '',
		'DATA'			=> array()
	
	);


	public function update_page($page_id = ''){
		
		$this->db->where('id', $page_id);
		$this->db->update('web_pages', array(
		
			'page_title'	=> stripslashes($this->input->post('page_title')),
			'page_content'	=> stripslashes($this->input->post('description') == '<p><br></p>' ? '' : $this->input->post('description')),
			'meta_title'		=> empty($this->input->post('meta_title')) ? stripslashes($this->input->post('name')) : stripslashes($this->input->post('meta_title')),
			'meta_description'	=> stripslashes($this->input->post('meta_description')),
			'meta_keywords'		=> stripslashes($this->input->post('meta_keywords'))
		));
	
		
		$this->return_response['ERROR']	= FALSE;
		$this->return_response['MESSAGE']	= 'Successfully Updated';
		return $this->return_response;
	}
	
	
	public function updateSetting(){
		
		if(isset($_POST['settingtype'])){
			
			
			if($_POST['settingtype'] == 'generalsettings'){
				
				$this->deleteImage();
				
				$this->FinishingImagesSetup();
				
				$this->db->where('command' , 'WEB_NAME');
				$this->db->update('web_options' , array('value' => $this->input->post('web_name')));
				
				$this->db->where('command' , 'EMAIL_ADDRESS');
				$this->db->update('web_options' , array('value' => $this->input->post('email')));
				
				$this->db->where('command' , 'CONTACT');
				$this->db->update('web_options' , array('value' => $this->input->post('contact')));
				
				$this->db->where('command' , 'ADDRESS');
				$this->db->update('web_options' , array('value' => $this->input->post('address')));
				
				$this->db->where('command' , 'CITY');
				$this->db->update('web_options' , array('value' => $this->input->post('city')));
				
				$this->db->where('command' , 'COUNTRY');
				$this->db->update('web_options' , array('value' => $this->input->post('country')));
				
				
				$this->return_response['ERROR']	= FALSE;
				$this->return_response['MESSAGE']	= 'Successfully Updated';
				return $this->return_response;
					
			}
			
			else if($_POST['settingtype'] == 'mainpageSettings'){
				
				$this->db->where('command' , 'HOME_PAGE_HEADING');
				$this->db->update('web_options' , array('value' => $this->input->post('mainHeading')));
				
				$this->db->where('command' , 'HOME_PAGE_PARA');
				$this->db->update('web_options' , array('value' => $this->input->post('mainPara')));
				
				$this->db->where('command' , 'NEWCOUPONS_LIMITS');
				$this->db->update('web_options' , array('value' => $this->input->post('limitNewCoupon')));
				
				$this->db->where('command' , 'NEWCOUPONS_LIMITS');
				$this->db->update('web_options' , array('value' => $this->input->post('limitNewCoupon')));
				
				$this->db->where('command' , 'FEATUREDCOUPONS_LIMITS');
				$this->db->update('web_options' , array('value' => $this->input->post('limitFeaturedCoupons')));
				
				$this->db->where('command' , 'USER_CANSUBMIT_COUPONS');
				$this->db->update('web_options' , array('value' => !empty($this->input->post('submitPanel')) ? '1' : '' ));
				
				$this->db->where('command' , 'SHOW_POPULARCATEGORIES');
				$this->db->update('web_options' , array('value' => !empty($this->input->post('showPopCategories')) ? '1' : ''));
				
				$this->return_response['ERROR']	= FALSE;
				$this->return_response['MESSAGE']	= 'Successfully Updated';
				return $this->return_response;
				
		}
		else if($_POST['settingtype'] == 'seooption_settings'){
			
			$this->db->where('command' , 'PAGES_META_TITLE');
			$this->db->update('web_options' , array('value' => $this->input->post('pageMetaTitle')));
			
			$this->db->where('command' , 'PAGES_META_DESCRIPTION');
			$this->db->update('web_options' , array('value' => $this->input->post('pageMetaDescription')));
			
			$this->db->where('command' , 'STORES_META_TITLE');
			$this->db->update('web_options' , array('value' => $this->input->post('storeMetaTitle')));
			
			$this->db->where('command' , 'STORES_YELLOW_TITLE');
			$this->db->update('web_options' , array('value' => $this->input->post('storeDisplayTitle')));
			
			$this->db->where('command' , 'STORES_META_DESCRIPTION');
			$this->db->update('web_options' , array('value' => $this->input->post('storeMetaDescription')));
			
			$this->db->where('command' , 'CATEGORIES_META_TITLE');
			$this->db->update('web_options' , array('value' => $this->input->post('categoryMetaTitle')));
			
			$this->db->where('command' , 'CATEGORIES_META_DESCRIPTION');
			$this->db->update('web_options' , array('value' => $this->input->post('categoryMetaDescription')));
			
			$this->return_response['ERROR']	= FALSE;
			$this->return_response['MESSAGE']	= 'Successfully Updated';
			return $this->return_response;
			
			
		}else if($_POST['settingtype'] == 'footer_settings'){
			
			$this->db->where('command' , 'FOOTER_TEXT');
			$this->db->update('web_options' , array('value' => $this->input->post('footerTextbox')));
			
			$this->db->where('command' , 'FACEBOOK_LINK');
			$this->db->update('web_options' , array('value' => $this->input->post('fblink')));
			
			$this->db->where('command' , 'GOOGLEPLUS_LINK');
			$this->db->update('web_options' , array('value' => $this->input->post('gpluslink')));
			
			$this->db->where('command' , 'TWITTER_LINK');
			$this->db->update('web_options' , array('value' => $this->input->post('twitterlink')));
			
			$this->db->where('command' , 'PINTEREST_LINK');
			$this->db->update('web_options' , array('value' => $this->input->post('pinterestlink')));
			
			$this->db->where('command' , 'SHOW_LOGO_FOOTER');
			$this->db->update('web_options' , array('value' => !empty($this->input->post('allowFooterLogo')) ? '1' : ''));
		
			$this->db->where('command' , 'SEC_FOOTER_TEXT');
			$this->db->update('web_options' , array('value' => $this->input->post('cpysecion')));
			
			$this->return_response['ERROR']	= FALSE;
			$this->return_response['MESSAGE']	= 'Successfully Updated';
			return $this->return_response;
		
		}
			
		}else{
			
			
			$this->return_response['ERROR']	= TRUE;
			$this->return_response['MESSAGE']	= 'Nothing to Update';
			return json_encode($this->return_response);
		}
		
	}
	
	
	
	public function FinishingImagesSetup(){
		
		
		$this->ValidatingFiles();
		
		if(!empty($_FILES['upload_image']['name'])){
			
			$this->deleteImage('weblogo');
			
			$UploadedImage = $this->file_uploading('upload_image', 'required');	
			
			
			$this->db->insert('web_images', array(
				
				'reference_type' 	=> 'weblogo',
				'reference_id'		=> '0',
				'file_name'			=> '',
				'alt_text'			=> $this->input->post('alt_text'),
				'caption'			=> $this->input->post('caption'),
				'image_description'	=> $this->input->post('img_description'),
				
			));
			
			$this->db->where('command', 'WEB_LOGO');
			$this->db->update('web_options', array('value' => $UploadedImage));
		
		
		}
		
		
		if(!empty($_FILES['faviConimg']['name'])){
			
			
			$this->deleteImage('favIco');
			$UploadedImage = $this->file_uploading('faviConimg', 'required');	
			$this->db->where('command', 'WEB_FAVICON');
			$this->db->update('web_options', array('value' => $UploadedImage));
		}
		
		
	}
	
	
	public function ValidatingFiles(){
		
		if(!empty($_FILES['upload_image']['name'])){
			
			if( pathinfo($_FILES['upload_image']['name'])['extension'] != 'jpg' && pathinfo($_FILES['upload_image']['name'])['extension'] != 'png' && pathinfo($_FILES['upload_image']['name'])['extension'] != 'jpeg'){
				
				echo json_encode(array(
			
						'ERROR' => TRUE,
						'MESSAGE' => 'The filetype you are attempting to upload is not allowed.',
						'FILE_NAME' => 'upload_image'
						
					));
				
				exit();
			}
		}

		if(!empty($_FILES['faviConimg']['name'])){
			
			
			if( pathinfo($_FILES['faviConimg']['name'])['extension'] != 'jpg' && pathinfo($_FILES['faviConimg']['name'])['extension'] != 'png' && pathinfo($_FILES['faviConimg']['name'])['extension'] != 'jpeg'){
				
				echo json_encode(array(
			
					'ERROR' => TRUE,
					'MESSAGE' => 'The filetype you are attempting to upload is not allowed.',
					'FILE_NAME' => 'faviConimg'
					
				));
				return;
			}
			
		}
		
	}
	
	public function deleteImage($type = ''){
		
		if(!empty($_POST['deleteImage']) && $_POST['deleteImage'] == 'yes' || $type == 'weblogo'){
			
			if(!empty(WEB_LOGO())){
				
				
				if(file_exists('./assets/uploads/required/'.WEB_LOGO())){
					
					
					unlink('./assets/uploads/required/'.WEB_LOGO());
				}
				
				$this->db->where('reference_type' , 'weblogo');
				$this->db->delete('web_images');
				$this->db->where('command', 'WEB_LOGO');
				$this->db->update('web_options', array('value' => ''));
			}
		}
		
		if(!empty($_POST['deletefavicon']) && $_POST['deletefavicon'] == 'yes' || $type == 'favIco'){
			
			if(!empty(WEB_FAVICON())){
				
				
				if(file_exists('./assets/uploads/required/'.WEB_FAVICON())){
					
					
					unlink('./assets/uploads/required/'.WEB_FAVICON());
				}
			}
			
			$this->db->where('command', 'WEB_FAVICON');
			$this->db->update('web_options', array('value' => ''));
		}
	}
	
	
	public function UpdateSitemap(){
		
		if(!empty($this->input->post('taxonomies'))){
			
			
			$this->db->where('command', 'EXCLUDED_TAXONOMIES');
			$this->db->update('web_options', array('value' => json_encode($this->input->post('taxonomies'))));
		
		}else{
			
			$this->db->where('command', 'EXCLUDED_TAXONOMIES');
			$this->db->update('web_options', array('value' => ''));
		}
		
		if(!empty($this->input->post('pages'))){
		
			$this->db->where('command', 'EXCLUDED_PAGES');
			$this->db->update('web_options', array('value' => json_encode($this->input->post('pages'))));
		}
		else{
			
			$this->db->where('command', 'EXCLUDED_PAGES');
			$this->db->update('web_options', array('value' => ''));
		}
		
		$this->db->where('command', 'SITEMAP_STORES_FREQUENCY');
		$this->db->update('web_options', array('value' => $this->input->post('freq_store')));
		
		
		$this->db->where('command', 'SITEMAP_CATEGORIES_FREQUENCY');
		$this->db->update('web_options', array('value' => $this->input->post('freq_categories')));
		
		$this->db->where('command', 'SITEMAP_PAGES_FREQUENCY');
		$this->db->update('web_options', array('value' => $this->input->post('freq_pages')));
		
		
		sitemap_generation();
		
		$this->return_response['ERROR']	= FALSE;
		$this->return_response['MESSAGE']	= 'Successfully Updated';
		return $this->return_response;
		
	}
	
	
	public function GetReviews($param = array()){
		
		return  $this->db->get_where('web_reviews', $param)->result();
		
	}
	
}