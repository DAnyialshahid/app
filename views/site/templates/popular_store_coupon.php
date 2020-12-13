<?php 
$coupon_title = CouponTitle($coupon->coupon_title);
	$coupon_description = CouponDesc($coupon->coupon_title);
	
	if(!empty($coupon_title)){
		
		$coupon_description = CouponDesc($coupon->coupon_title);
	}
	else{
		
		$coupon_title = $coupon->coupon_title;
		$coupon_description = CouponDesc($coupon->coupon_description);
	}
	
?>

<div class="col-md-12">
	<div class="ps_coupon">
	
			<div class="psc_st_title">
				<div class="psc_sttitle_wrapper">
					<span class="thumb-padding">
						<?= CouponShortTitle($coupon)?>  
					</span>
				</div>
			</div>
		<div class="psc_wrapper">
			<div class="psc_title">
				<h1><a href="<?= base_url($coupon->store_url.'/coupon/'.$coupon->coupon_url)?>" class="copycodebtndd" <?= AutoCopy($coupon)?>><?= $coupon->coupon_title?></a></h1>
			</div>
			<div class="psc_desc">
				<?= CouponDesc(($coupon->coupon_description))?>
			</div>
		</div>
		<div class="mcactpart psc">
			<div class="tc_expdt"><?php if($coupon->verified == '1'): ?><span class="verspan">Verified</span><?php endif;?> <span class="expiry_date"><i class="fa fa-clock-o"></i> <?= CouponExpiryDate($coupon->expiry_date , $coupon->status)?></span></div>
			<?= CouponActionBtn($coupon );?>
		</div>
	</div>
</div>