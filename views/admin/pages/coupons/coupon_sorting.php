<?php
	$active_coupons = array();
	if(!empty($sortingCoupons)){
		foreach($sortingCoupons as $coupons):
		if(CouponExpiryDate($coupons->expiry_date , $coupons->status) != 'Expired'){
			
			$active_coupons[] = $coupons;
		}
		
		endforeach;
	}

?>

<div class="content-wrapper">
	<?php if($page == 'sorting_select_option'): ?>
		<section class="content-header">
			<h1>Sorting Select Option</h1>
		</section>
	<?php endif; ?>
	<section class="content">
		<div class="row">
			
				<?php if($page == 'sorting_select_option'): ?>
				
					
					<div class="col-md-12">
					
						
						<p class="SelectStoreP"><a href="<?= base_url('control_panel/coupons/sorting?type=store')?>">Sort Stores Coupons</a></p>
						<p class="SelectStoreP"><a href="<?= base_url('control_panel/coupons/sorting?type=category')?>">Sort Categories Coupons</a></p>
						<p class="SelectStoreP"><a href="<?= base_url('control_panel/coupons/sorting?type=featured')?>">Sort Featured Coupons</a></p>
						<p class="SelectStoreP"><a href="<?= base_url('control_panel/coupons/sorting?type=top')?>">Sort Top Coupons</a></p>
						<p class="SelectStoreP"><a href="<?= base_url('control_panel/coupons/sorting?type=new_coupon')?>">Sort Latest Offers Coupons</a></p>
					</div>
			
				<?php elseif($page == 'coupons_sorting_select_Store' || $page == 'coupons_sorting_select_category'): ?>
				<div class="col-md-5 col-md-push-3">
					<div class="box">
						<?php echo form_open('functions/coupons_controller/sorted');?>
						<input type="hidden" name="type" value="<?= $page?>"/>
						<div class="box-header with-border">
							<h3 class="box-title">Select <?= $page == 'coupons_sorting_select_Store' ? 'Store' : 'Category'?> to Coupon Sorting</h3>
						</div>
						<div class="box-body no-right-padding no-left-padding">
							<div class="col-md-12 form-group">
								<label>Select <?= $page == 'coupons_sorting_select_Store' ? 'Store' : 'Category'?></label>
								<select class="form-control" name="select_taxonomy" id="select_taxonomy">
								<option value="0"></option>
									<?php foreach($list as $stores): ?>
										<option value="<?= $stores->id?>"><?= $stores->name?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<input type="submit" class="btn btn-primary pull-right" value="Submit"/>
							</div>
						</div>
						<?php form_close(); ?>
					</div>
				</div>
				<?php elseif($page == 'taxonomy_coupons_sorting' || $page == 'featured_coupons_sorting' || $page == 'new_coupon_sorting' || $page == 'top_coupon_sorting'): ?>
				
				<div class="col-md-8">
				
					<div class="box">
						
						<div class="box-header with-border">
							<h3 class="box-title"> 
								<?php 
								if($page == 'taxonomy_coupons_sorting'){
									
									echo $taxonomy_data[0]->name . ' Coupons Sorting';
								
								}else if($page == 'featured_coupons_sorting'){
									
										echo 'Featured Coupons Sorting';
								}
								else if($page == 'new_coupon_sorting'){
									
										echo 'New Coupons Sorting';
								}
								else if($page == 'top_coupon_sorting'){
									
										echo 'Top Coupon Sortings';
								}
								?>
							</h3>
						</div>
						
						<?php echo form_open(base_url('functions/coupons_controller/sorted/'), array('class' => 'SortingForm'));?>
							
							<input type="hidden" name="SortingIdsText" />
							<input type="hidden" name="type" value="<?= $page?>"/>
							<?php if($page == 'taxonomy_coupons_sorting'): ?>
							<input type="hidden" name="store_id" value="<?= $taxonomy_data[0]->id?>"/>
							<?php endif; ?>
						
						<?php echo form_close();?>
						
						<div class="box-body">
							
							<?php if(!empty($active_coupons)): ?>
							
							<ul id="sortable" >
							
							<?php foreach($active_coupons as $coupons): ?>
							
							  <li class="ui-state-default grabbable" data-id="<?= $coupons->coupon_id?>"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?= $coupons->coupon_title?>
								<span class="SortingCoupType pull-right"><?= $coupons->coupon_type?> &nbsp; &nbsp; - &nbsp; &nbsp; <a style=" color:#337ab7" target="_blank" href="<?= base_url('control_panel/coupons/update/'.$coupons->coupon_id)?>"> Edit</a></span> 
							  </li>
							 
							<?php endforeach; ?>
							
							</ul>
							
							<?php else: ?>
							
							<p>Empty Coupons List</p>
							
							<?php endif; ?>
							
						</div>
						
					</div>
				</div>
				<?php endif; ?>
				
		
		
		</div>
	</section>	
</div>
