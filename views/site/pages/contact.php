<div class="section pagemd with-border">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="page_title">
					<h1>Contact <?=WEB_NAME()?></h1>
				</div>
				<ul class="pg_bcrumbs">
					<li><a href="<?= base_url()?>">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="section bg">
	<div class="container single-store-container-md">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-10 col-xs-12">
			
					<div class="contact-info-box">
						<h3 class="cib-heding">Get in Touch!</h3>

						<?php if(!empty(ADDRESS()) || !empty(CITY())): ?>
							<p class="cib-infop"><i class="fa fa-map-marker" aria-hidden="true"></i> <?= ADDRESS() . ', ' . CITY() ?></p>
						<?php endif; ?>

							<?php if(!empty(EMAIL_ADDRESS())): ?>
								<p class="cib-infop">Email: <?= EMAIL_ADDRESS()?></p>
							<?php endif; ?>

						<?php if(!empty(CONTACT())): ?>
							<p class="cib-infop"><i class="fa fa-phone" aria-hidden="true"></i> <?= CONTACT()?></p>
						<?php endif; ?>
					</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-10 col-xs-12">
				<?php echo form_open('web/mail', array('class'=>'submit-form', 'form-type'=>'contact_form'));?>
			
				<div class="response-box contact"></div>
			
				<div class="col-md-6 form-group noPadding">
					
					
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" />
					
					<br>
					<label for="email">Email</label>
					<input type="text" name="email" id="email" class="form-control" />
					
					<br>
					<label for="subject">Subject</label>
					<input type="text" name="subject" id="subject" class="form-control" />
				

				</div>
				
				
				<div class="col-md-6 form-group ">
					<label for="message">Message</label>
					<textarea name="message" id="message" class="form-control"  rows="5"></textarea>
					<button class="btn btn-primary send-btn pull-right">SEND EMAIL!</button>
				</div>
				
				
				
		
			<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>