<div class="section pagemd with-border">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="page_title">
					<h1><?= $page_title?></h1>
				</div>
				<p class="page_short_description"><?= WEB_NAME()?> is always care for our users and sorted the best <?= $page_title?> for you. </p>
			</div>
		</div>
	</div>
</div>
<div class="section bg">
	<div class="container single-store-container-md">
		<div class="row">
			<div class="col-lg-12 md-gutters">
			
				<?php foreach($discount_coupons as $coupons): ?>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<?php $this->load->view('site/templates/featured_coupons', array('coupons'=> $coupons, 'page' => 'discount_page')); ?>
					</div>
				<?php endforeach; ?>
			
			
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('site/templates/coupon-popup');?>