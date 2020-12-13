<div class="categories-list pdBtm30  bg-grey">
	<div class="pg-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">
						<h1>Submit Coupons</h1>
					</div>
					<div class="pg-breadcrumbs">
						<ul>
							<li><a href="<?= base_url()?>" class="active">Home</a></li>
							<span class="bc-nav"><i class="fa fa-angle-right"></i></span>
							<li><a href="#" class="inactive"> Submit Coupon</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pg-wrapper pdTop30">
		<div class="container">
			<div class="row sbtcfrm">
				<?php echo form_open('coupon/submit-coupon', array('class' => 'submit-form', 'form-type' => 'coupons-submit'))?>
				<div class="col-md-12">
					<div class="response-box"></div>
				</div>
				
				<div class="col-md-12">
					<div class="section-title-block md">
						<h2 class="section-title">General Fields...</h2>
					</div>
				</div>
			
				<div class="form-group col-md-12">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="form-group col-md-12">
					<label>Coupon Title</label>
					<input type="text" name="coupon_title" class="form-control" placeholder="Coupon Title (required)">
				</div>
				<div class="form-group col-md-6">
					<label>Select Store</label>
					<select class="form-control" name="store_id">
						<option></option>
						
						<?php $list = $this->Taxonomies_model->GetTaxonomyArray(array('status' => 'Active'));?>
						<?php foreach($list as $data): ?>
						
							<option value="<?= $data->id?>"><?= $data->name?></option>
							
						<?php endforeach;?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Coupon Code</label>
					<input type="text" name="coupon_code" class="form-control" placeholder="Coupon Code (optional)">
				</div>
				<div class="form-group col-md-12">
					<label>Expiry Date</label>
					<input type="date" name="expiry_date" class="form-control" placeholder="Expiry Date">
				</div>
				
				<div class="form-group col-md-12">
					<input type="submit" class="btn btn-primary sbtbtn" value="Submit Coupon"/>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>