<?php 
	$image_url = '<a href="'.base_url('store/'. $coupons->custom_url).'">';
	if($page == 'single_store'){
		$image_url = '<a href="javascript:void(0)" class="copycodebtn" <?= AutoCopy($coupons)?>>';
	}
?>
<div class="small-coupon">
	<?= $image_url?>
		<div class="web_imagebox">
			<img class="img-responsive lazy" data-src="<?= base_url('assets/uploads/stores/'.$coupons->file_name)?>">
		</div>
	</a>
	<a href="<?= base_url('store/'.$coupons->custom_url)?>"><div class="store-name"> <?= $coupons->name?></div></a>
	<div class="sc-title">
		<span class="sc-code-span"><?= ($coupons->coupon_type == 'Coupon Code') ? 'Code' : 'Deal'?> <span class="span_seperator">• </span></span>
		<a href="javascript:void(0)" class="copycodebtn" <?= AutoCopy($coupons)?>><?= $coupons->coupon_title?></a>
	</div>
</div>