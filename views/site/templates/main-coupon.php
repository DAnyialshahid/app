<?php 
	$image_url = '<a href="'.base_url('store/'. $coupons->custom_url).'">';
	if($page == 'single_store'){
		$image_url = '<a href="javascript:void(0)" class="copycodebtn"  '.AutoCopy($coupons).'>';
	}
?>

<div class="mc-coupon mc-column <?= !empty($class) ? $class : ''?>">

	<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 noPadding mc-image-column">
		<div class="mc_image_box">
			<?= $image_url?>
				<div class="web_imagebox">
					<img class="img-responsive lazy" data-src="<?= base_url('assets/uploads/stores/'.$coupons->file_name)?>">
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-8 col-md-7 col-sm-7 col-sm-12 noPadding mc-wrapper-column">
		<div class="mc-wrapper">
			<span class="short_title_widget">
				<?php 
				$short_title = CouponShortTitle($coupons->coupon_title);
				if(empty($short_title)){
					$short_title = ($coupons->coupon_type == 'Coupon Code') ? 'Code' : 'Deal';
				}
				echo $short_title;
				?>
			</span>
			<?php if($coupons->verified == '1'): ?>
			<span class="span_seperator">• </span>
			<span class="verified-widget mc-md">
				<img src="<?= base_url('assets/theme/images/verified.png')?>" class="img-responsive"/>
				<span>Verified Offer!</span>
			</span>
			<?php endif;?>
			
			<a href="javascript:void(0)" class="copycodebtn" <?= AutoCopy($coupons)?>><h1 class="mc-title"><?= $coupons->coupon_title?></h1></a>
			<div class="mc_description">
				<?= CouponDesc(($coupons->coupon_description))?>
			</div>

		</div>
	</div>
	<div class="col-lg-2 col-md-3 col-sm-3 col-sm-12 noPadding mc-action-colmn" >
		<div class="mc-actionbx">
			<?php if($coupons->verified == '1'): ?>
			<span class="verified-widget hiddenAt12">
				<img src="<?= base_url('assets/theme/images/verified.png')?>" class="img-responsive"/>
				<span>Verified Offer!</span>
			</span>
			<?php endif;?>
			<?= CouponActionBtn($coupons);?>	
		</div>
	</div>
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12 noPadding">
		<div class="mc-widgets_area">
			<ul>
				<li class="no-left-border"><span class="date_widget"><i class="fa fa-clock-o"></i> <?= date_format(date_create($coupons->added_date),"d/m/Y")?></span></li>
				<li><span class="coupon_used_widget"><i class="fa fa-user"></i> 3 used total</span></li>
				<li><span class="date_widget"><i class="fa fa-clock-o"></i> <?= CouponExpiryDate($coupons->expiry_date , $coupons->status)?></span></li>
			</ul>
		</div>
	</div>

</div>
