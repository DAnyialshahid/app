<?php 
	$image_url = '<a href="'.base_url('store/'. $coupons->custom_url).'">';
	if($page == 'single_store'){
		$image_url = '<a href="javascript:void(0)" class="copycodebtn" <?= AutoCopy($coupons)?>>';
	}
?>

<div class="fdc-box">
	<div class="fd_image_box">
		<?= $image_url?>
			<div class="web_imagebox">
				<img class="img-responsive lazy" data-src="<?= base_url('assets/uploads/stores/'.$coupons->file_name)?>">
			</div>
		</a>
	</div>
	
	<span class="coupon_used_widget">
		<i class="fa fa-user"></i> 3 used total
	</span>
	<?php if($coupons->verified == '1'): ?>
		<span class="span_seperator">•</span>
		<span class="verified-widget">
			<img src="<?= base_url('assets/theme/images/verified.png')?>" class="img-responsive"/>
			<span>Verified Offer!</span>
		</span>
	<?php endif;?>

	<div class="vtc_wrapper">

		<a href="javascript:void(0)" class="copycodebtn" <?= AutoCopy($coupons)?>><h2 class="vt_c_title"><?= $coupons->coupon_title?></h2></a>
		<div class="vt_c_desc"><?= CouponDesc(($coupons->coupon_description))?></div>

	</div>
	<span class="date_widget">
	
		<i class="fa fa-clock-o"></i> <?= CouponExpiryDate($coupons->expiry_date , $coupons->status)?>
	</span>
	<?= CouponActionBtn($coupons);?>	

</div>