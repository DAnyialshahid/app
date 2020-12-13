<div class="section mdbck">
			<div class="container">
				<div class="row md-gutters">
					<div class="col-md-4 hidden-xs">
						<div class="footer-logo">
							<img src="<?= base_url('assets/uploads/required/'.WEB_LOGO())?>" class="img-responsive logo-img"/>
						</div>
						<div class="footer_desc"><?= FOOTER_TEXT();?> </div>
					</div>
					<div class="col-md-3 col-md-push-1">
						<h2 class="footer-heading">Popular Vouchers</h2>
						<ul class="footer-list-item">
							<?php $popular_stores = array_slice($this->session->userdata('popular_stores'), 0, 6);?>
							<?php foreach($popular_stores as $stores): ?>
							<li><a href="<?= base_url('store/'.$stores->custom_url)?>"><?= $stores->name?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="col-md-4 col-md-push-1 ">
						<h2 class="footer-heading">Get Touch with us.</h2>
						<p class="sbp">Subscribe to let us notify you the latest and great vouchers always.</p>
						<?php echo form_open('subscribers/add', array('class'=>'submit-form sb_form', 'form-type'=>'subscribeform'));?>
							<div class="response-box"></div>
							<div class="input-group footer_sub">
							  <input type="email" class="form-control" placeholder="Email Address.." name="email">
							  <div class="input-group-btn">
								<button class="btn btn-primary" type="submit">Notify me!</button>
							  </div>
							</div>
						<?php echo form_close();?>
						<ul class="list-inline social-small">
						
							<?php if(!empty(FACEBOOK_LINK())): ?>	
							<li><a href="<?= FACEBOOK_LINK() ?>"><i class="fa fa-facebook"></i></a></li>
							<?php endif; ?>
							
							<?php if(!empty(GOOGLEPLUS_LINK())): ?>
							<li><a href="<?= GOOGLEPLUS_LINK() ?>"><i class="fa fa-google-plus"></i></a></li>
							<?php endif; ?>
							
							<?php if(!empty(TWITTER_LINK())): ?>
							<li><a href="<?= TWITTER_LINK() ?>"><i class="fa fa-twitter"></i></a></li>
							<?php endif; ?>
							
							<?php if(!empty(PINTEREST_LINK())): ?>
							<li><a href="<?= PINTEREST_LINK() ?>"><i class="fa fa-pinterest"></i></a></li>
							<?php endif; ?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sec_footer">
			<div class="container">
				<div class="row md-gutters">
					<div class="col-md-12">
						<ul class="general_pages_ul">
							<li><a href="<?= base_url('about')?>">About</a></li>
							<li><a href="<?= base_url('terms')?>">Terms & Conditions</a></li>
							<li><a href="<?= base_url('privacy')?>">Privacy Policy</a></li>
							<li><a href="<?= base_url('contact')?>">Contact</a></li>
						</ul>
						
					</div>
				</div>
			</div>
			
		</div>
		<?php $this->session->unset_userdata('popular_stores');?>
		<?php $this->session->unset_userdata('popular_categories');?>
<?php $this->load->view('site/includes/scripts');?>