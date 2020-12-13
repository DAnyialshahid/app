<div class="page_wrapper">
	<div class="pg_title_wrapper with-border" style="padding:10px 0px">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="page_title">
						<!--<h2><?= $category_data[0]->name?> Vouchers</h2>-->
						<ul class="pg_bcrumbs">
							<li><a href="<?= base_url()?>">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li><a href="<?= base_url('categories')?>">Categories List</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li class="active"><?= $category_data[0]->name?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-9 col-md-9 col-sm-8 ">
				
					<div class="st-acthead noPadding">
						<h2><?= $category_data[0]->name?>'s Stores</h2>
						<hr>
					</div>
				
					<?php if(!empty($category_stores)): ?>
					<ul class="sc-storeslist">
						<?php foreach($category_stores as $stores): ?>
						<li class="sc-storebox">
							<a  href="<?= base_url('store/'.$stores->custom_url)?>">
								<div class="web_imagebox">
									<img class="img-responsive lazy_image" data-src="<?= base_url('assets/uploads/stores/'.$stores->file_name)?>">
								</div>
								<p class="sc_boxtitle"><?= $stores->name?></p>
							</a>
						</li>
						<?php endforeach; ?>
						
						
						
					</ul>
					<?php endif; ?>
				
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<?php if(!empty($category_data[0]->description)): ?>
						<div class="contact-info-box">
							<h3 class="cib-heding">Description</h3>
							<?= $category_data[0]->description?>
						</div>
					<?php endif;?>
					
					<?php $st_categories = $this->Theme_model->GetSubCategories($category_data[0]->category_id)?>
					<?php if(!empty($st_categories)): ?>
						<div class="contact-info-box">
							<h3 class="cib-heding">Categories</h3>
							<ul class="cstm-pillsul">
							<?php foreach($st_categories as $category): ?>
								<li class="custom-pilles">
									<a href="<?= base_url('categories/'.$category->custom_url)?>"><?= $category->name?></a>
								</li>
							<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
							
				</div>
			</div>
		</div>
	</div>
</div>