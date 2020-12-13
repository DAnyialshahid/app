<?php $CouponSelectedTaxonomy = array();?>
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			<?= $page == 'update_coupon' ? 'Update Coupon' : 'Add Coupon'?>
			<?php if($page == 'update_coupon'): ?>
				<a href="<?= base_url('control_panel/coupons/add')?>" class="btn btn-primary">Add new</a>
			<?php endif; ?>
		</h1>
		
	
	</section>
	<section class="content">
	
		<div class="row">
		
			<?php
							
				$url = $page == 'update_coupon' ? 'update/'.$coupon_data['id'] : 'add';
				
				echo form_open_multipart('functions/coupons_controller/'.$url , ['class' => 'submit_form'])
						
			?>
			
				<div class="col-md-9">
				<div class="response_text"></div>
					<div class="box box-primary">
					
						<div class="box-header with-border">
							<h3 class="box-title">General Options</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding">
						
						
							<div class="form-group col-md-12">
								<label for="coupon_title">Coupon Title</label>
								<input type="text" class="form-control input-md" id="coupon_title" name="coupon_title" />
							</div>
							
							<div class="form-group col-md-12">
								<label for="short_title">Short Title</label>
								<input type="text" class="form-control input-md" id="short_title" name="short_title" />
							<p class="info-p"> Add " | " for seperation heading Wise. <strong>example: 50% | Off</strong></p>
							</div>
							
							<div class="form-group col-md-12">
								<label for="coupon_description">Description</label>
								<div id="editor">
									<?php if($page == 'update_coupon'): ?>
										<?php echo _stringStrip($coupon_data['coupon_description'])?>
									<?php endif; ?>
								</div>
							</div>
							
							
						</div>
					</div>
					
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Advanced Options</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding">
						
						
							<div class="form-group col-md-10">
								<label for="affiliate_link">Affiliate Link</label>
								<input type="text" class="form-control " id="affiliate_link" name="affiliate_link" />
								<p class="info-p"> The Store affiliate link will work automatically if this field will be blank. </p>
							</div>
							
							<!--<div class="form-group col-md-4">
								<label for="coupon_type">Coupon Type</label>
								<select class="form-control" name="coupon_type" id="coupon_type">
									<option>Coupon Code</option>
									<option>Deal</option>
								</select>
							</div>-->
							
							<div class="form-group col-md-5">
								<label for="coupon_code">Coupon Code</label>
								<input type="text" class="form-control " id="coupon_code" name="coupon_code" />
								<p class="info-p">if the Coupon code is empty, the coupon will show as deal in website. </p>
							</div>
							
							<div class="form-group col-md-5">
								<label for="expiry_date">Expiry Date</label>
								<input type="text" class="form-control datepicker" id="expiry_date" name="expiry_date" autocomplete="off"/>
								
							</div>
						
							
							<div class="form-group col-md-8">
								<label for="usedFormat">Select used Format</label>
								<select class="form-control" name="usedFormat" id="usedFormat">
									<option>Total</option>
									<option>Daily</option>
									<option>Weekly</option>
									<option>Monthly</option>
									<option>Yearly</option>
								</select>
								<p class="info-p">it shows the used count of coupon by the format  </p>
							</div>
							
						</div>
						<div class="box-footer"></div>
					</div>
					
					
					
				
				</div>
				
				<div class="col-md-3 ">
					
					<div class="box box-primary publisBox">
						<div class="box-header with-border">
							<h3 class="box-title">Publish</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding">
						
						
							<div class="form-group col-md-12">
								<label for="status">Status</label>
								<select class="form-control" name="status" id="status">
									<option>Active</option>
									<option>Pending</option>
									<option>Inactive</option>
									<option>Expired</option>
								</select>
							</div>
							
							
						
							<div class="form-group col-md-12">
								<input type="checkbox" id="newCoupon" name="newCoupon"/>
								<label for="newCoupon"><i> Show this coupon on homepage ?</i></label>
							</div>
							
								
							<div class="form-group col-md-12">
								<input type="checkbox" id="featured_coupon" name="featured_coupon"/>
								<label for="featured_coupon"><i> This is Featured Coupon ?</i></label>
							</div>
							
							<div class="form-group col-md-12">
								<input type="checkbox" id="top_coupon" name="top_coupon"/>
								<label for="top_coupon"><i> This is Top Coupon ?</i></label>
							</div>
							
							
							<div class="form-group col-md-12">
								<input type="checkbox" id="verifiedCoupon" name="verifiedCoupon"/>
								<label for="verifiedCoupon"><i> Verified Coupon?</i></label>
							</div>
							
							
							<div class="form-group col-md-12">
								<input type="checkbox" id="exclusiveCoupon" name="exclusiveCoupon"/>
								<label for="exclusiveCoupon"><i> Exclusive Coupon ?</i></label>
							</div>
							
						</div>
						<div class="box-footer">
							<input type="submit" value="<?= $page == 'update_coupon' ? 'Update' : 'Add'?> Coupon" class="btn btn-primary pull-right"/>
						</div>
					</div>
					
					<?php if($this->Taxonomies_model->TaxonomyExist(array('taxonomy_type' => 'store'))): ?>
						
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Coupon Stores</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding taxonomiesBody" style="max-height: 225px; overflow-y:scroll">
						
							<?php 
								
								
								if($page == 'update_coupon'){
									
									$CouponSelectedTaxonomy = $coupon_taxonomies;
								}
							?>
						
							<?php echo $this->Taxonomies_model->taxonomy_checkbox_generator('store', 0, $CouponSelectedTaxonomy);?>
						
						</div>
						
					</div>
						
					
					<?php endif;?>
					
					
					<?php if($this->Taxonomies_model->TaxonomyExist(array('taxonomy_type' => 'category'))): ?>
						
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Coupon Categories</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding taxonomiesBody" style="max-height: 225px; overflow-y:scroll">
						
							<?php echo $this->Taxonomies_model->taxonomy_checkbox_generator('category', 0, $CouponSelectedTaxonomy);?>
						
						</div>
						
					</div>
						
					<?php endif;?>
				</div>
			
			
			<?php echo form_close(); ?>
		
		</div>
	</section>	
</div>

<?php if($page == 'update_coupon'):?>

	<script>
		
		document.addEventListener("DOMContentLoaded",function(){
			
			$('#coupon_title').val(<?= json_encode($coupon_data['coupon_title'])?>)
			$('#short_title').val(<?= json_encode($coupon_data['short_title'])?>)
			$('#affiliate_link').val(<?= json_encode($coupon_data['affiliate_link'])?>)
			$('#coupon_type').val(<?= json_encode($coupon_data['coupon_type'])?>)
			$('#coupon_code').val(<?= json_encode($coupon_data['coupon_code'])?>)
			
			
			
			<?php if(validate_date($coupon_data['expiry_date'])): ?>
				$('#expiry_date').val('<?= $coupon_data['expiry_date']?>')
			<?php endif; ?>
			
			
			
			<?php if($coupon_data['exclusive'] == '1'): ?>
				$('#exclusiveCoupon').attr('checked','true');
			<?php endif; ?>
			
			<?php if($coupon_data['verified'] == '1'): ?>
				$('#verifiedCoupon').attr('checked','true');
			<?php endif; ?>
			
				<?php if(SortedCoupons($coupon_data['id'], 'featured')): ?>
					$('#featured_coupon').attr('checked','true');
				<?php endif; ?>
				
				<?php if(SortedCoupons($coupon_data['id'], 'new_coupon')): ?>
					$('#newCoupon').attr('checked','true');
				<?php endif; ?>
				
				<?php if(SortedCoupons($coupon_data['id'], 'top_coupon')): ?>
					$('#top_coupon').attr('checked','true');
				<?php endif; ?>
				
				
				$('#status').val('<?= $coupon_data['status']?>')
				$('#usedFormat').val('<?= $coupon_data['used_format']?>')
		
			
			<?php if(!empty($coupon_taxonomies)) : ?>
				<?php foreach($coupon_taxonomies as $taxonomies): ?>
				
					$('.taxonomies-ul li input[value="<?= $taxonomies?>"]').attr('checked','true')
				
				<?php endforeach;?>
			<?php endif;?>
			
			
			
			
			
			
			
		})
	
	</script>

<?php endif;?>