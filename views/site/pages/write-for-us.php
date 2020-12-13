<div class="wfu-box  pdBtm30 bg-grey">


	<div class="pg-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">
						<h1>Write for Us</h1>
					</div>
					<div class="pg-breadcrumbs">
						<ul>
							<li><a href="<?= base_url()?>" class="active">Home</a></li>
							<span class="bc-nav"><i class="fa fa-angle-right"></i></span>
							<li><a href="#" class="inactive"> Write for us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="pg-wrapper pdTop30">
		<div class="container">
			<div class="row wfuc">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
					<div class="section-title-block">
						<h2 class="section-title">Disclaimer!</h2>
					</div>
					<ul class="dcl-ul">
						<li>The publication date may change depending upon any required edits.</li>
						<li>Our editorial team is authorized to edit or reject the submission if it does not meet our requirements.</li>
					</ul>
					<p class="dc-p">Before you start writing, kindly pitch us some ideas through the contact form below.</p>
				</div>
			</div>
			<hr>
			<div class="row sbtcfrm">
				<?php echo form_open('review/send-wfu', array('class' => 'submit-form', 'form-type' => 'wfu-form'))?>
					
					<div class="col-md-12">
						<div class="response-box"></div>
					</div>
				
				
					<div class="form-group col-md-12">
						<label>Your Name</label>
						<input type="text" name="username" class="form-control" placeholder="Your name">
					</div>
					
					<div class="form-group col-md-12">
						<label>Email Address</label>
						<input type="email" name="useremail" class="form-control" placeholder="Your Email">
					</div>
					
					<div class="form-group col-md-12">
						<label>Subject</label>
						<input type="text" name="subject" class="form-control" placeholder="Subject">
					</div>
					
					<div class="form-group col-md-12">
						<label>Message</label>
						<textarea name="message" class="form-control" rows="6"></textarea>
					</div>
					
					<div class="form-group col-md-12">
						<input type="submit" class="btn btn-primary sbtbtn" value="Complete Review"/>
					</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>