<a class="rc_href copycodebtn" href="javascript:void(0)" <?= AutoCopy($coupons)?>>
	<div class="rc_coupon">
		<div class="web_imagebox">
			<img class="img-responsive" src="<?= base_url('assets/uploads/stores/'.$coupons->file_name)?>">
		</div>
	</div>
	<div class="rc_title">
		<p><?= $coupons->coupon_title?></p>
	</div>
</a>
