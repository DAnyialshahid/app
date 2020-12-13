
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Edit - <?= $page_content[0]->page_title?>
		</h1>
		
	
	</section>
	<section class="content">
		<div class="row">
		
			<?php
							
				
				
				echo form_open_multipart('functions/Option_controller/update_page/'.$page_content[0]->id , ['class' => 'submit_form'])
						
			?>
			
				<div class="col-md-9">
				<div class="response_text"></div>
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">General Options</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding">
						
						
							<div class="form-group col-md-12">
								<label for="page_title">Page Title</label>
								<input type="text" class="form-control input-md" id="page_title" name="page_title" value="<?= $page_content[0]->page_title?>"/>
							</div>
							
							<div class="form-group col-md-12">
								<label for="coupon_description">Description</label>
								<div id="editor">
									<?php echo $page_content[0]->page_content?>
								</div>
							</div>
							
							
						</div>
					</div>
					
					
					
					
					
				
				</div>
				
				<div class="col-md-3 ">
					
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Update Options</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding">
						
							<div class="col-md-12 form-group">
								<input type="submit" value="Update Page" class="btn btn-primary pull-right"/>
							</div>
						</div>
						
					</div>
					
					<?php $this->load->view('admin/templates/seo-option-box')?>
					
				</div>
			
			
			<?php echo form_close(); ?>
		
		</div>
	</section>	
</div>
<script>
	
	document.addEventListener("DOMContentLoaded",function(){
		
		$('#meta_title').val(<?= json_encode(addslashes($page_content[0]->meta_title))?>)
		$('#meta_keywords').val(<?= json_encode(addslashes($page_content[0]->meta_keywords))?>)
		$('#meta_description').val(<?= json_encode(addslashes($page_content[0]->meta_description))?>)
	})

</script>
