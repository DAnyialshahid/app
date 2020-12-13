<style>h4{margin-bottom:20px}</style>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Website Settings</h1>
		
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
			<div class="response_text" style=""></div>
				
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
				  <li class="active"><a href="?tab=tab_1" >Site Options</a></li>
				  <li class=""><a href="?tab=tab_2" >Home Page Setting</a></li>
				  <li class=""><a href="?tab=tab_3">SEO Options</a></li>
				  <li class=""><a href="?tab=tab_4">Footer Options</a></li>
				  <li class=""><a href="?tab=tab_5">Sitemap Options</a></li>
				  <li class=""><a href="?tab=tab_6">Refresh Counters</a></li>
				  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
				</ul>
            <div class="tab-content">
             

				<div class="tab-pane active" id="tab_1">
						<?php echo form_open('functions/option_controller/UpdateWebSetting', array('class' => 'submit_form')); ?>
					
						<input type="hidden" value="generalsettings" name="settingtype"/>
					
					<div class="row">
					
						<div class="col-md-12">
							<h4>General Setting</h4>
						</div>
						
						<div class="col-md-5">
						
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">
								<label for="web_name">Website Name</label>
								<input type="text" name="web_name" id="web_name" class="form-control"  value="<?= htmlentities((WEB_NAME()))?>"/>
							</div>
							
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">
								<label for="email">Email Address</label>
								<input type="text" name="email" id="email" class="form-control " value="<?= addslashes(EMAIL_ADDRESS())?>"/>
							</div>
							
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">
								<label for="contact">Contact</label>
								<input type="text" name="contact" id="contact" class="form-control " value="<?= addslashes(CONTACT())?>"/>
							</div>
							
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">
								<label for="address">Address</label>
								<input type="text" name="address" id="address" class="form-control "  value="<?= addslashes(ADDRESS())?>"/>
							</div>
							
							
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">
								<label for="city">City</label>
								<input type="text" name="city" id="city" class="form-control " value="<?= addslashes(CITY())?>"/>
							</div>
							
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">
								<label for="city">Country</label>
								<input type="text" name="country" id="country" class="form-control" value="<?= addslashes(COUNTRY())?>"/>
							</div>
						
						</div>
						
						<div class="col-md-3 col-xs-12">
							<div class="stored-featured-box" >
								<?php $this->load->view('admin/templates/image-seo-box', array('title' => 'Logo Option'));?>
							</div>
						</div>
						
						<div class="col-md-12">
							<h4>Logo Options</h4>
						</div>
						
						<div class="col-md-4">
						
							<?php if(!empty(WEB_LOGO())): ?>
									<input type="hidden" name="deleteImage" value="no">
							<?php endif; ?>
							
							<?php if(!empty(WEB_FAVICON())): ?>
									<input type="hidden" name="deletefavicon" value="no">
							<?php endif; ?>
							
							<div class="form-group col-md-5 col-xs-5">
								<img id="web-logo" class="img-responsive img-thumbnail" src="<?= base_url('assets/uploads/required/'.WEB_LOGO())?>"/>
							</div>
							
							<div class="form-group col-md-12">
								<label>Website Logo</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-default btn-file">
											Browse… <input type="file" id="upload_image" name="upload_image" data-for="web-logo">
										</span>
									</span>
									
									<button type="button" class="btn btn-info img-optBtn imgAdvBtn dd" ><i class=" fa fa-cog"></i></button>
									<button type="button" class="btn btn-danger img-optBtn dltImg dd" id="removeTheImage" data-for="web-logo" ><i class=" fa fa-times"></i></button>
								
								</div>
								<hr>
							</div>
						
							<div class="form-group col-md-5">
								<img id="fav-ico" class="img-responsive" src="<?= base_url('assets/uploads/required/'.WEB_FAVICON())?>"/>
							</div>
						
							<div class="form-group col-md-12">
								<label>Upload Fav ico</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-default btn-file">
											Browse… <input type="file" id="favUpImg" name="faviConimg" data-for="fav-ico">
										</span>
									</span>
									<button type="button" class="btn btn-danger img-optBtn" id="removeFavImg" data-for="fav-ico" ><i class=" fa fa-times"></i></button>
								</div>
							</div>
						
						</div>
						
						
						
						<div class="col-md-12">
							<input type="submit" class="btn btn-info pull-right" value="Update Setting"/>
						</div>
						
						
					</div>
					
						<?php echo form_close();?>
				</div>
            
              <div class="tab-pane" id="tab_2">
				
				<?php echo form_open('functions/option_controller/UpdateWebSetting', array('class' => 'submit_form')); ?>
					
						<input type="hidden" value="mainpageSettings" name="settingtype"/>
			  
					<div class="row">
						<div class="col-md-12">
							<h4>Headings Options</h4>
						</div>
						<div class="col-md-6">
							<div class="col-md-12 form-group">
								<label for="mainHeading">Main heading</label>
								<input type="text" name="mainHeading" id="mainHeading" class="form-control" value="<?= HOME_PAGE_HEADING()?>"/>
								<?php
								$params2 = array('storescount' => 'true' , 'allcouponscount' => 'true');
								$this->load->view('admin/templates/shortcodes-pallets',$params2); ?>
							</div>
							<div class="col-md-12 form-group">
								<label for="mainPara">Main Para</label>
								<textarea type="text" name="mainPara" id="mainPara" rows="4" class="form-control"><?= HOME_PAGE_PARA()?></textarea>
								
								<?php $this->load->view('admin/templates/shortcodes-pallets',$params2); ?>
							</div>
						</div>
						
						<div class="col-md-12">
							<h4>Advanced Options</h4>
						</div>
						<div class="col-md-6">
							<div class="col-md-12 form-group">
								<label for="limitNewCoupon">Limits of new Coupons on main page</label>
								<input type="number" min="0" name="limitNewCoupon" id="limitNewCoupon" class="form-control" value="<?= NEWCOUPONS_LIMITS()?>"/>
							</div>
							
							<div class="col-md-12 form-group">
								<label for="limitFeaturedCoupons">Limits of Featured Coupons on main page</label>
								<input type="number" min="0" name="limitFeaturedCoupons" id="limitFeaturedCoupons" class="form-control" value="<?= FEATUREDCOUPONS_LIMITS()?>"/>
							</div>
							
							<div class="col-md-12 form-group">
								<input type="checkbox"  id="submitPanel" value="1" name="submitPanel" <?= USER_CANSUBMIT_COUPONS() == '1' ? 'checked' : ''?>/>
								<label for="submitPanel">User can submit Coupons ? </label>
							</div>
							
							<div class="col-md-12 form-group">
								<input type="checkbox"  id="showPopCategories" value="1" name="showPopCategories" <?= SHOW_POPULARCATEGORIES() == '1' ? 'checked' : ''?>/>
								<label for="showPopCategories">Show Popular Categories </label>
							</div>
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-info pull-right" value="Update Setting">
						</div>
					</div>
					
					
					
					<?php echo form_close();?>
              </div>
              
              
			  <div class="tab-pane " id="tab_3">
                <?php echo form_open('functions/option_controller/UpdateWebSetting', array('class' => 'submit_form'));?>	
				<input type="hidden" value="seooption_settings" name="settingtype"/>
				<div class="row">
						
					
						
					<div class="col-md-12">
						<div  style="width:40%; margin:auto">
							<label for="SelOption">Select Option</label>
							<select class="form-control" id="selectOption" style="margin-bottom:30px">
								<option>--None--</option>
								<option value="pageSEOoption">Pages SEO Option</option>
								<option value="storeSEOoption">Stores SEO Option</option>
								<option value="categorySEOoption">Categories SEO Option</option>
							</select>
						</div>
					</div>
						
					
					
					
					<div class="seoHiddenDivs" id="pageSEOoption">
					
						<div class="col-md-12">
							<h4>Pages SEO Options</h4>
						</div>
					
						<div class="col-md-8">
							
							<div class="col-md-12 form-group">
								<label for="pageMetaTitle">Pages Meta Title</label>
								<input type="text" name="pageMetaTitle" id="pageMetaTitle" class="form-control" value="<?= PAGES_META_TITLE();?>"/>
								<?php 
								
								$params = array('storename' => 'false', 'storecouponcount' => 'false', 'storescount' => 'true', 'pagemetatitle'=> 'true', 'allcouponscount' => 'true' ); 
								
								$this->load->view('admin/templates/shortcodes-pallets', $params); ?>
							</div>
							
							<div class="col-md-12 form-group">
								<label for="pageMetaDescription">Pages Meta Description</label>
								<textarea rows="5" name="pageMetaDescription" id="pageMetaDescription" class="form-control"><?= PAGES_META_DESCRIPTION();?></textarea>
								<?php 
								$this->load->view('admin/templates/shortcodes-pallets', $params); ?>
							</div>
						</div>
					
					</div>
					
					
					
					<div class="seoHiddenDivs" id="storeSEOoption">
					
						<div class="col-md-12">
							<h4>Store SEO Options</h4>
						</div>
					
						<div class="col-md-8">
							<div class="col-md-12 form-group">
								<label for="storeDisplayTitle">Store Display Title (on yellow bar)</label>
								<input type="text" name="storeDisplayTitle" id="storeDisplayTitle" class="form-control" value="<?= STORES_YELLOW_TITLE();?>"/>
								<?php 
								
								$params = array('storename' => 'true', 'storecouponcount' => 'true', 'storescount' => 'false', 'pagemetatitle'=> 'false' , 'allcouponscount' => 'false'); 
								$this->load->view('admin/templates/shortcodes-pallets', $params); ?>
							</div>
							
							<div class="col-md-12 form-group">
								<label for="storeMetaTitle">Store Meta Title</label>
								<input type="text" name="storeMetaTitle" id="storeMetaTitle" class="form-control" value="<?= STORES_META_TITLE();?>"/>
								<?php 
								$params = array('storename' => 'true', 'storecouponcount' => 'true', 'storescount' => 'false','pagemetatitle'=> 'false','allcouponscount' => 'false' ); 
								$this->load->view('admin/templates/shortcodes-pallets', $params); ?>
							</div>
							
							<div class="col-md-12 form-group">
								<label for="storeMetaDescription">Store Meta Description</label>
								<textarea rows="5" name="storeMetaDescription" id="storeMetaDescription" class="form-control"><?= STORES_META_DESCRIPTION();?></textarea>
								<?php 
								$this->load->view('admin/templates/shortcodes-pallets', $params); ?>
							</div>
						</div>
					
					</div>
					
					
					
				
				
				
				<div class="seoHiddenDivs" id="categorySEOoption">
					
					<div class="col-md-12">
						<h4>Categories Meta Options</h4>
					</div>
					
					<div class="col-md-8">
						
						<div class="col-md-12 form-group">
							<label for="categoryMetaTitle">Categories Meta Title</label>
							<input type="text" name="categoryMetaTitle" id="categoryMetaTitle" class="form-control" value="<?= CATEGORIES_META_TITLE();?>"/>
							<?php 
							$params = array('storename' => 'false', 'storecouponcount' => 'false', 'storescount' => 'false', 'categorytitle' => 'true' ,'allcouponscount' => 'false'); 
							$this->load->view('admin/templates/shortcodes-pallets', $params); ?>
						</div>
						
						<div class="col-md-12 form-group">
							<label for="categoryMetaDescription">Categories Meta Description</label>
							<textarea rows="5" name="categoryMetaDescription" id="categoryMetaDescription" class="form-control"><?= CATEGORIES_META_DESCRIPTION();?></textarea>
							<?php 
							$this->load->view('admin/templates/shortcodes-pallets', $params); ?>
						</div>
					</div>
				
				</div>
				
					<div class="col-md-12">
						<input type="submit" class="btn btn-info pull-right" value="Update Setting">
					</div>
				
				
				<?php echo form_close();?>
				
				
				
				</div>
			  </div>
			  
			  
			  
			  <div class="tab-pane " id="tab_4">
			  
			   <?php echo form_open('functions/option_controller/UpdateWebSetting', array('class' => 'submit_form'));?>	
				<input type="hidden" value="footer_settings" name="settingtype"/>
				<div class="row">
					
				
					<div class="col-md-12">
						<h4>Footer Option</h4>
					</div>
					<div class="col-md-6">
					
						<div class="col-md-12 form-group">
							<label for="allowFooterLogo"><input type="checkbox" name="allowFooterLogo" id="allowFooterLogo" value="1"/> Show Logo in footer </label>
						</div>
					
						<div class="col-md-12 form-group">
							<label for="footerTextbox">Footer Text</label>
							<textarea class="form-control" rows="4" name="footerTextbox" id="footerTextbox"></textarea>
							<?php
								$params2 = array('storescount' => 'true' , 'allcouponscount' => 'true', 'categorytitle' => 'false');
								$this->load->view('admin/templates/shortcodes-pallets',$params2); ?>
						</div>
					
					</div>
					
					<div class="col-md-12">
						<h4>Social Links</h4>
					</div>
					
					
					<div class="col-md-6 form-group">
						<label for="fblink">Facebook Link</label>
						<input class="form-control"  name="fblink" id="fblink"/>
					</div>
					
					<div class="col-md-6 form-group">
						<label for="gpluslink">Google Plus Link</label>
						<input class="form-control"  name="gpluslink" id="gpluslink"/>
					</div>
					
					<div class="col-md-6 form-group">
						<label for="twitterlink">Twitter Link</label>
						<input class="form-control"  name="twitterlink" id="twitterlink"/>
					</div>
					
					<div class="col-md-6 form-group">
						<label for="pinterestlink">Pinterest Link</label>
						<input class="form-control"  name="pinterestlink" id="pinterestlink"/>
					</div>
					
					
					<div class="col-md-12">
						<h4>Bottom Footer</h4>
					</div>
					
					
					<div class="col-md-6 form-group">
						<label for="cpysecion">Bottom Footer Text</label>
						<textarea class="form-control" rows="3" name="cpysecion" id="cpysecion"></textarea>
					</div>
					
					
					
					<div class="col-md-12">
						<input type="submit" class="btn btn-info pull-right" value="Update Setting">
					</div>
				
				</div>
			  
			  
			  <?php echo form_close();?>
			  
			  </div>
			  
			  
			  
			  <div class="tab-pane " id="tab_5">
				
				<div class="row">
				
				 <?php echo form_open('functions/option_controller/generate_sitemap', array('class' => 'submit_form'));?>	
				
					<div class="col-md-12">
						<h4>Store Sitemap option</h4>
					</div>
					
					
					<div class="col-md-6 form-group">
						<label for="freq_store">Change frequency tag of Stores</label>
						<select name="freq_store" id="freq_store"  class="form-control">
							<option>Daily</option>
							<option>Weekly</option>
							<option>Monthly</option>
							<option>Yearly</option>
						</select>
					</div>
					
					
					
					
					<?php $stores_list = $this->Taxonomies_model->GetTaxonomyArray(array('taxonomy_type' => 'store')); ?>
					<div class="col-md-6 form-group">
						
						<label>Exclude Stores from Sitemap</label>
						<select class="js-example-basic-multiple " id="storeselect2" name="taxonomies[]" multiple="multiple">
							<?php foreach($stores_list as $store): ?>
								<option value="<?= $store->id?>"><?= $store->name?></option>
							<?php endforeach; ?>
						</select>
						
						<button type="button" class="btn btn-info selectallbtn btn-sm"  data-id="storeselect2">Select all</button>
						<button type="button" class="btn btn-danger deselectallbtn btn-sm"  data-id="storeselect2">Deselect all</button>
					</div>
					
					
					
					<div class="col-md-12">
						<h4>Categories Sitemap option</h4>
					</div>
					
					
					<div class="col-md-6 form-group">
						<label for="freq_categories">Change frequency tag of Categories</label>
						<select name="freq_categories" id="freq_categories"  class="form-control">
							<option>Daily</option>
							<option>Weekly</option>
							<option>Monthly</option>
							<option>Yearly</option>
						</select>
					</div>
					
					<?php $categories_list = $this->Taxonomies_model->GetTaxonomyArray(array('taxonomy_type' => 'category')); ?>
					<div class="col-md-6 form-group">
						<label >Exclude Categories from Sitemap</label>
						<select class="js-example-basic-multiple " id="categoriesselect2" name="taxonomies[]" multiple="multiple">
							<?php foreach($categories_list as $category): ?>
								<option value="<?= $category->id?>"><?= $category->name?></option>
							<?php endforeach; ?>
						</select>
						
						<button type="button" class="btn btn-info selectallbtn btn-sm"  data-id="categoriesselect2">Select all</button>
						<button type="button" class="btn btn-danger deselectallbtn btn-sm"  data-id="categoriesselect2">Deselect all</button>
					</div>
					
					
					
					
					<div class="col-md-12">
						<h4>Pages Sitemap option</h4>
					</div>
					
					
					<div class="col-md-6 form-group">
						<label for="freq_pages">Change frequency tag of Pages</label>
						<select name="freq_pages" id="freq_pages"  class="form-control">
							<option>Daily</option>
							<option>Weekly</option>
							<option>Monthly</option>
							<option>Yearly</option>
						</select>
					</div>
					
					<?php $pages_list = $this->Theme_model->GetPageContent(array()) ?>
					<div class="col-md-6 form-group">
						<label>Exclude Pages from Sitemap</label>
						<select class="js-example-basic-multiple " id="pagesselect2" name="pages[]" multiple="multiple">
							<?php foreach($pages_list as $page): ?>
								<option value="<?= $page->id?>"><?= $page->page_title?></option>
							<?php endforeach; ?>
						</select>
						
						<button type="button" class="btn btn-info selectallbtn btn-sm"  data-id="pagesselect2">Select all</button>
						<button type="button" class="btn btn-danger deselectallbtn btn-sm"  data-id="pagesselect2">Deselect all</button>
					</div>
					
					
					<div class="col-md-12 form-group">
						<input  type="submit" class="btn btn-primary" value="Refresh Sitemap">
					</div>
					
					
					<?php echo form_close()?>
					
					
					
					
				
				
				</div>
				
			  </div>
			  
			  <div class="tab-pane active" id="tab_6">
			  
					<div class="row">
						<div class="col-md-12">
							<a href="<?= base_url('functions/option_controller/refresh_controller');?>" class="btn btn-lg btn-info">Refresh Counters</a>
						</div>
					</div>
			  
			  </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
		  
		  
		  
			
			</div>
		</div>
	</section>
</div>


<script>
	
	document.addEventListener("DOMContentLoaded", function(){
		<?php if(isset($_GET) && !empty($_GET['tab'])): ?>
		
		$('.nav-tabs li').removeClass('active')
		$('.tab-content .tab-pane').removeClass('active')
		$('a[href="?tab=<?= $_GET['tab']?>"]').parents('li').addClass('active')
		$('#<?= $_GET['tab']?>').addClass('active')
		
		<?php endif; ?>
		
		<?php if(!empty(WEB_LOGO())): ?>
			$('.dd').fadeIn()
			<?php $imageinfo = GetImageInfo('0' , 'weblogo');?>
			<?php if(!empty($imageinfo)): ?>
				$('#alt_text').val(<?= (addslashes( $imageinfo->alt_text))?>);
				$('#caption').val(<?= (addslashes($imageinfo->caption))?>);
				$('#img_description').val(<?= (addslashes($imageinfo->image_description))?>);
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(!empty(WEB_FAVICON())): ?>
		$('#removeFavImg').fadeIn()
			
		<?php endif; ?>
		
		<?php if(SHOW_LOGO_FOOTER() == '1'):?>
		$('#allowFooterLogo').attr('checked','true')
		<?php endif; ?>
		
		$('#footerTextbox').val(<?= json_encode(( FOOTER_TEXT()))?>);
		$('#fblink').val(<?= json_encode(( FACEBOOK_LINK()))?>);
		$('#gpluslink').val(<?= json_encode(( GOOGLEPLUS_LINK()))?>);
		$('#twitterlink').val(<?= json_encode(( TWITTER_LINK()))?>);
		$('#pinterestlink').val(<?= json_encode(( PINTEREST_LINK()))?>);
		$('#cpysecion').val(<?= json_encode(( SEC_FOOTER_TEXT()))?>);
		
		
		<?php if(isset($_GET['tab']) && $_GET['tab'] == 'tab_5'): ?>
		
			<?php if(!empty(EXCLUDED_TAXONOMIES())): ?>
				$('select[name="taxonomies[]"]').val(<?= EXCLUDED_TAXONOMIES() ?>).change();
			<?php endif; ?>
			
			<?php if(!empty(EXCLUDED_PAGES())): ?>
					$('select[name="pages[]"]').val(<?= EXCLUDED_PAGES() ?>).change();
			<?php endif; ?>
			
		
			$('#freq_store').val('<?= SITEMAP_STORES_FREQUENCY(); ?>');
			$('#freq_categories').val('<?= SITEMAP_CATEGORIES_FREQUENCY(); ?>');
			$('#freq_pages').val('<?= SITEMAP_PAGES_FREQUENCY(); ?>');
		<?php endif; ?>
	});

</script>

		