<?php
$featured_coupons = $this->Theme_model->GetCouponsSections('featured', FEATUREDCOUPONS_LIMITS());
$top_coupons = $this->Theme_model->GetCouponsSections('top_coupon', TOPCOUPONS_LIMITS());
$new_coupons = $this->Theme_model->GetCouponsSections('new_coupon', NEWCOUPONS_LIMITS());
?>

<div class="section">
<div class="container bf">
	<div class="row md-gutters">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<div class="mainpage-title">
			<?php
			
				$heading = str_replace('%website-name%', WEB_NAME() , HOME_PAGE_HEADING());
				$heading = str_replace('%stores-count%', STORES_COUNT() , $heading);
				$heading = str_replace('%all-coupons-count%', COUPONS_COUNT() , $heading);
			?>
				<h1><?= $heading ?></h1>
				<p>For <?= $this->Theme_model->GetSearchUnderCoupons(3)?> and thousands more</p>
			</div>
		</div>
	</div>

	<hr class="seperator">
	<?php $popular_stores = $this->session->userdata('popular_stores');?>
	<?php if(!empty($popular_stores)): ?>
	<div class="row owl-carousel popular_stores owl-theme">
		<?php foreach($popular_stores as $stores): ?>
		<div class="noPd">
			<div class="top-store">
				<a href="<?= base_url('store/'.$stores->custom_url)?>" style="text-decoration:none">
					<div class="web_imagebox">
						<img class="img-responsive owl-lazy" data-src="<?= base_url('assets/uploads/stores/'.$stores->file_name)?>">
					</div>
					<p class="psc_title"><?= $stores->name?></p>
				</a>
			</div>
		</div>
		<?php endforeach;?>
	</div>
	
	<?php endif; ?>
</div>
</div>

		
<?php if(!empty($featured_coupons)): ?>
<div class="section bg">
	<div class="container">
		<div class="row md-gutters">
			<div class="col-md-12">
				<div class="section-title">
					<h1>Featured Coupons!</h1>
				</div>
			</div>
			<?php foreach($featured_coupons as $coupons): ?>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 xs-100">
				<?php $this->load->view('site/templates/featured_coupons', array('coupons'=> $coupons, 'page' => 'main_page')); ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>
		
		
<?php if(!empty($top_coupons)): ?>		
<div class="section">
	<div class="container">
		<div class="row md-gutters">
			<div class="col-md-12">
				<div class="section-title">
					<h1>Top Used Coupons!</h1>
				</div>
			</div>
		</div>
		<div class="row md-gutters">
			<?php foreach($top_coupons as $coupons): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
				<?php $this->load->view('site/templates/top_coupons', array('coupons'=> $coupons, 'page' => 'main_page')); ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>


<div class="section bg">
	<div class="container">
		<div class="row md-gutters">
			
			<?php if(!empty($new_coupons)): ?>	
			<div class="col-md-9">
				<div class="section-title">
					<h1>Latest Offers with Great Discount!</h1>
				</div>
				<?php foreach($new_coupons as $coupons): ?>
					<?php $this->load->view('site/templates/main-coupon', array('coupons'=> $coupons, 'page' => 'main_page')); ?>
				<?php endforeach; ?>
			
			</div>
			<?php endif; ?>
			
			<?php $popular_categories = $this->session->userdata('popular_categories');?>
			
			<?php if(SHOW_POPULARCATEGORIES() == 1 && !empty($popular_categories)): ?>
				<div class="col-md-3">
				
					<div class="section-title hidden-lg hidden-md pcmd">
						<h1>Popular Categories</h1>
					</div>
					<div class="sidebar">
						<h2 class="hidden-sm hidden-xs">Popular Categories</h2>
						
						<?php foreach($popular_categories as $categories): ?>
						
						<div class="side-bar-cat-box">
							<a href="<?= base_url('categories/'.$categories->custom_url)?>"><p><?= $categories->name?> <span>(<?= $categories->post_count?> Stores)</span></p></a>
						</div>
						
						<?php endforeach; ?>
						
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php 	$this->load->view('site/templates/coupon-popup');?>
