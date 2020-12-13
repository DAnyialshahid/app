<?php 
	$total_deals = 0;
	$total_codes = 0;
	$active_coupons = array();
	$expired_coupons = array();
	$store_coupons = $this->Theme_model->GetTaxonomyCoupons($store->store_id,'store'); 
	foreach($store_coupons as $coupons):
		if(CouponExpiryDate($coupons->expiry_date , $coupons->status) != 'Expired'){
			if($coupons->coupon_type == 'Coupon Code'){
				$total_codes++;
			}else{
				$total_deals++;
			}
			$active_coupons[] = $coupons;
		}
		else{
			$expired_coupons[] = $coupons;
		}
	endforeach;
	
	$store_title = str_replace('%website-name%', WEB_NAME(), STORES_YELLOW_TITLE());
	$store_title = str_replace('%stores-count%', STORES_COUNT(), $store_title);
	$store_title = str_replace('%all-coupons-count%', COUPONS_COUNT(), $store_title);
	$store_title = str_replace('%store-name%', $store->name , $store_title);
	$store_title = str_replace('%store-coupons-count%', $store->post_count, $store_title);
?>
<div class="section bg md">

	<div class="container single-store-container-md">
		<div class="row">
			<div class="col-md-12">
				<h1 class="store-title">
					<?= $store_title?>
				</h1>
				<ul class="pg_bcrumbs">
					<li><a href="<?= base_url()?>">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><a href="<?= base_url('stores')?>">Stores list</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active"><?= $store->name?> Coupons</li>
				</ul>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-3 col-md-sidebar">
				<div class="single-store-bar">
					<div class="store-image">
						<div class="web_imagebox">
							<img class="img-responsive owl-lazy" src="<?= base_url('assets/uploads/stores/'.$store->file_name)?>">
						</div>
					</div>
					
					
					<div class="xs-md-store">
					<h1 class="store-title store-titlemd">
						<?= $store_title?>
					</h1>
					
					<?php if(!empty($store->website_url)):?>
					<div class="store_short_desc panel">
						<a target="_blank" href="<?= base_url('out/'.$store->custom_url)?>"><i class="fa fa-external-link"></i> <?= $store->website_url?></a>
					</div>
					<?php endif; ?>
					
					<?php if(!empty($store->description)): ?>
					<div class="store-description panel">
						<?= $store->description?>
					</div>
					<?php endif; ?>
					
					</div>
					
					<?php $st_categories = $this->Theme_model->GetStoreCategories($store->store_id)?>
					<?php if(!empty($st_categories)): ?>
					<div class="panel categories-panel">
						<h3>Store Categories</h3>
						<?php foreach($st_categories as $category): ?>
						<span class="single-pills">
							<a href="<?= base_url('categories/'.$category->custom_url)?>"><?= $category->name?></a>
						</span>
						<?php endforeach;?>
					</div>
					<?php endif; ?>
					
					<?php $rt_stores = $this->Theme_model->GetRelatedStores($st_categories, $store->store_id);?>
					<?php if(!empty($st_categories) && !empty($rt_stores)): ?>
						<div class="panel categories-panel">
						<h3>Similar Stores</h3>
						<?php foreach($rt_stores as $rt_store): ?>
							<span class="single-pills">
								<a href="<?= base_url('store/'.$rt_store->custom_url)?>"><?= $rt_store->name?></a>
							</span>
						<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-9 col-md-couponbar">
				
				<div class="filters-box">
					<a href="#" class="active">All (<?=($total_codes+$total_deals)?>)</a>
					<a href="#">Coupon Codes (<?= $total_codes?>)</a>
					<a href="#">Deals (<?= $total_deals?>)</a>
				</div>
				<?php if(!empty($active_coupons)): 
						foreach($active_coupons as $coupons): ?>
			
				<?php $this->load->view('site/templates/main-coupon', array('coupons'=> $coupons , 'page' => 'single_store', 'class' => 'single_store_coupon active_coupon'));?>
					
				<?php endforeach; else: ?>
					<p>No active Coupons..</p>
				<?php endif;?>
				
				
				<?php if(!empty($expired_coupons)): ?>
					
					<div class="expired-c-headings">
						<h2>Expired Coupons</h2>
					</div>
				
						
					
				
					<?php foreach($expired_coupons as $coupons):?>
					<?php $this->load->view('site/templates/main-coupon', array('coupons'=> $coupons, 'page' => 'single_store', 'type' => 'Expired' , 'class' => 'single_store_coupon expired_coupon'));?>
					
				
				<?php endforeach; endif; ?>
				
				
			</div>
		</div>
	</div>


</div>
<?php 	$this->load->view('site/templates/coupon-popup');?>