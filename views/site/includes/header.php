<input type="hidden" value="<?= base_url()?>" id="sitebase_url"/>
  <div class="header">
			<div class="container md">
				<div class="row">
					<div class="col-md-12">
						<div class="header-wrapper">
							<a href="<?= base_url()?>">
							<div class="logo">
								<img src="<?= base_url('assets/uploads/required/'.WEB_LOGO())?>" class="img-responsive logo-img"/>
							</div>
							</a>
							<span class="hd-seperator"></span>

							<ul class="site-nav">
								<li><a href="<?= base_url('stores')?>">Stores </a></li>
								<li><a href="<?= base_url('categories')?>">Categories </a></li>
								<li><a href="<?= base_url('20-off-coupons')?>">20 Off Coupons </a></li>
								<li><a href="<?= base_url('verified-coupon-codes')?>">Verified Codes </a></li>
							</ul>
							<button class="open-navbtn" onclick="$('.site-nav').slideToggle()">Menu <i class="fa fa-bars"></i></button>
							<div class="searchbox">
								<?php echo form_open('main/get_searchResult', array('class' => 'form-search search-form')); ?>
								  <div class="input-group">
									<span class="input-group-addon">	<svg class="icon icon-search"><use xlink:href="#icon-search">
										<svg viewBox="0 0 16 16" id="icon-search" ><path d="M15.9 15.1l-3.6-3.6C13.4 10.4 14 8.8 14 7c0-3.9-3.1-7-7-7S0 3.1 0 7s3.1 7 7 7c1.8 0 3.4-.6 4.6-1.7l3.6 3.6c.2.2.5.2.7 0 .1-.2.1-.6 0-.8zM7 13c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></use></svg>	</span>
									<input id="email" name="query" type="text" class="form-control search-input"  name="email" placeholder="Search Thousand of Stores in <?= WEB_NAME()?>" autocomplete="off" >
								  </div>
								  <div class="search_resultbox"></div>
								 <?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>