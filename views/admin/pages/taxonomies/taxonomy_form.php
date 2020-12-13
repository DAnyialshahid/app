<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $page == 'add_taxonomy' ? 'Add '. ucwords($data['taxonomy_type']) : 'Update '.ucwords($data['taxonomy_type'])?>
			<?php if($page == 'update_taxonomy'): ?>
			
			<a href="<?= base_url('control_panel/taxonomies/'.$data['taxonomy_type'].'/add')?>" class="btn btn-primary">Add New</a>
			
			<?php endif; ?>
		</h1>
		
		<?php if($page == 'update_taxonomy'): ?>
			<h4><a href="<?= base_url($data['taxonomy_type'] . '/'. $data['taxonomy_data']['custom_url'])?>" target="_blank"><?= base_url($data['taxonomy_type'] . '/'. $data['taxonomy_data']['custom_url'])?></a></h4>
		<?php endif; ?>
		<p class="info-p" style="font-weight:bold">"All fields are Optional instead of <?= ucwords($data['taxonomy_type'])?> Name Field."</p>		
	</section>
	
	<section class="content">
		<div class="row">
				<?php
							
					$url = isset($data['taxonomy_data']) ? 'update/'.$data['taxonomy_data']['id'] : 'add';
					
					echo form_open_multipart('functions/taxonomies_controller/'.$url , ['class' => 'submit_form'])
							
				?>
				
				
				
				<div class="col-md-5 col-xs-12 ">
				<div class="response_text"></div>
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">General Option</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding">
							
							<?php if(isset($data['taxonomy_data']) && $page == 'update_taxonomy'): ?>
								<input type="hidden" name="update" value="<?= $data['taxonomy_data']['id']?>"/>
							<?php endif; ?>
							
							<div class="form-group col-md-12">
								<label for="name"><?= ucwords($data['taxonomy_type'])?> Name</label>
								<input type="text" class="form-control" id="name" name="name" />
								<p class="info-p">The name is how it appears on your site.</p>
							</div>
							
							<input type="hidden" name="taxonomy_type" value="<?= $data['taxonomy_type']?>"/>
						
				
							<div class="advance-option">
							
							<div class="form-group col-md-12">
								<label for="custom_slug">Custom Slug</label>
								<input type="text" class="form-control" id="custom_slug" name="custom_slug"/>
								<p class="info-p">The “slug” is the URL-friendly version of the name.</p>
							</div>
							
							<?php if($data['taxonomy_type'] == 'category'): ?>
						
							<div class="form-group col-md-12">
								<label for="parent_category">Parent <?= ucwords($data['taxonomy_type'])?></label>
								<select class="form-control" id="parent_category" name="parent_category">
									<option value="0">--- None ---</option>
									<?= $data['options'] ?>
								</select>
								<p class="info-p">Assign a parent term to create a hierarchy.</p>
							</div>
							
							<?php endif ;?>
							
							</div>
						
							<?php if($data['taxonomy_type'] == 'store'): ?>
							
							
							<div class="form-group col-md-12">
								<label for="custom_slug">Website URL</label>
								<input type="text" class="form-control" id="website_url" name="website_url" />
								<p class="info-p">You need to use a Store's website Url like 'http://www.abc.com'</p>
							</div>
							
							
							<div class="form-group col-md-12">
								<label for="custom_slug">Affiliate Link</label>
								<input type="text" class="form-control" id="affiliate_link" name="affiliate_link" />
								<p class="info-p">Use Networks Affiliate Link here.</p>
							</div>
							
						<?php endif; ?>
						
						
		
				
				
						
							
								<?php if($page == 'update_taxonomy' ): ?>
								<input type="hidden" name="deleteImage" value="no"/>
							<?php endif;?>
								
							<div class="form-group col-md-3">
								<img id="store-img" class="img-responsive"/>
							</div>
							
							<div class="form-group col-md-12">
								<label>Upload Featured image</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-default btn-file">
											Browse… <input type="file" id="upload_image" name="upload_image" data-for="store-img">
										</span>
									</span>
									
									<button type="button" class="btn btn-info img-optBtn imgAdvBtn"><i class=" fa fa-cog"></i></button>
									<button type="button" class="btn btn-danger img-optBtn dltImg"data-for="store-img"><i class=" fa fa-times"></i></button>
								
								</div>
							</div>
							
							
							
							<div class="form-group col-md-12">
								<label for="is_popular"><input type="checkbox" name="is_popular" id="is_popular"/> This <?= ucwords($data['taxonomy_type']) ?> is popular ? </label>
							</div>
							
							<div class="form-group col-md-12">
								<label for="taxonomy_desc">Description</label>
								<textarea class="form-control" name="taxonomy_desc" rows="5" id="taxonomy_desc"></textarea>
								<p class="info-p" style="margin-bottom:5px">The description is not prominent by default; however, some themes may show it.</p>
				
							</div>
							
							
							<div class="col-md-12">
								<button type="button" class="btn btn-danger adv-btn">Advance Options <i class="fa fa-plus"></i></button>
								<input type="submit" class="btn btn-primary pull-right" value="<?= $page == 'add_taxonomy' ? 'Insert '. ucwords($data['taxonomy_type']) : 'Update '.ucwords($data['taxonomy_type']) ?>"/>
							</div>
							
						</div>
					</div>
					
				</div>
				<div class="col-md-4 ">
				
				<div class="advance-option">
					
					<?php $this->load->view('admin/templates/seo-option-box'); ?>
					
				</div>
					
			
					
					<div class="stored-featured-box">
						
						<?php $this->load->view('admin/templates/image-seo-box', array('title' => 'Featured Image Options')); ?>
					</div>	
					
				
			
				</div>
				<?php echo form_close();?>
			</div>
	</section>
</div>



<?php

	//print_r($data);

	if(isset($data['taxonomy_data']) && $page == 'update_taxonomy'):
?>
	<script>
		
		document.addEventListener("DOMContentLoaded",function(){
			
			$('#parent_category').val(<?= ($data['taxonomy_data']['parent_id'])?>)
			$('#name').val(<?= json_encode($data['taxonomy_data']['name'])?>)
			$('#custom_slug').val(<?= json_encode($data['taxonomy_data']['custom_url'])?>)
			$('#taxonomy_desc').val(<?= json_encode($data['taxonomy_data']['description']) ?>)
			$('#meta_title').val(<?= json_encode($data['taxonomy_data']['meta_title'])?>)
			$('#meta_keywords').val(<?= json_encode(($data['taxonomy_data']['meta_keywords']))?>)
			$('#meta_description').val(<?= json_encode(($data['taxonomy_data']['meta_description']))?>)
			
			<?php if($data['taxonomy_data']['popular'] == 'yes'): ?>
				
				$('#is_popular').attr('checked','true')
			
			<?php endif; ?>
			
			
		
			
			<?php if($data['taxonomy_type'] == 'store'): ?>
			<?php  if(!empty($data['taxonomy_data']['website_url'])): ?>
			$('#website_url').val(<?= json_encode($data['taxonomy_data']['website_url'])?>);
			<?php endif; ?>
			<?php  if(!empty($data['taxonomy_data']['affiliate_link'])): ?>
			$('#affiliate_link').val(<?= json_encode($data['taxonomy_data']['affiliate_link'])?>);
			<?php endif; ?>
			<?php endif; ?>
			
			
			<?php if(isset($data['taxonomy_data']['file_name'])):?>
				
				<?php $path = $data['taxonomy_type'] == 'store' ? 'stores' : 'categories';?>
				$('#store-img').attr('src','<?= base_url('assets/uploads/'.$path.'/'.$data['taxonomy_data']['file_name'])?>')
				$('#alt_text').val(<?=json_encode($data['taxonomy_data']['alt_text'])?>)
				$('#caption').val(<?=json_encode($data['taxonomy_data']['caption'])?>)
				$('#img_description').val(<?=json_encode(($data['taxonomy_data']['image_description']))?>)
				$('.img-optBtn').show();
				$('.dltImg').attr('id','removeTheImage')
			<?php endif; ?>
			
		})
		
	</script>
<?php endif;?>
