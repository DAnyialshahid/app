<?php $image_src =  GetImageFromDB($data->id , 'store');?>
<div class="page_wrapper">
	<div class="pg_title_wrapper st-md">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="page_title">
						<ul class="pg_bcrumbs">
							<li><a href="<?= base_url()?>">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li><a href="<?= base_url('store/'.$data->custom_url)?>"><?= $data->name?></a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li class="active"><?= $data->coupon_title?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-12 col-xs-12">
					<div class="single-coupon">
						
						<a href="<?= base_url('store/'.$data->custom_url)?>">
							<div class="web_imagebox">
								<img class="img-responsive" src="<?= $image_src?>">
							</div>
						</a>
						<div class="sc_titlearea">
							<h2 class="coupon_title"><a href="javascript:void(0)"<?= AutoCopy($data)?> class="copycodebtn"><?= $data->coupon_title?></a></h2>
							<div class="coupon_description"><?= CouponDesc($data->coupon_description)?></div>
						<?php if($data->verified == '1'): ?>
		
							<span class="tc_verified">Verified </span>
							
							<span class="sp_seperator">|</span><?php endif;?>
							
							<span class="activate_span"> <i class="fa fa-clock-o"></i> Added date: <?= date_format(date_create($data->added_date),"d, M")?></span>
							<p class="expired_span exp-hdn-xs"><i class="fa fa-clock-o"></i> <?= CouponExpiryDate($data->expiry_date , $data->status)?></p>
		
						
						</div>
						<div class="sc_actionarea">
							<?= CouponActionBtn($data, 'stc');?>
							<ul class="divider">
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li class="hd-xs"></li>
								<li class="hd-xs"></li>
								<li class="hd-xs"></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('site/templates/coupon-popup');?>