<div class="page_wrapper">
	<div class="pg_title_wrapper with-border">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="page_title">
						<h2>Categories List</h2>
						<ul class="pg_bcrumbs">
							<li><a href="<?= base_url()?>">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li class="active">Categories</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12 col-xs-12">
					<?php echo  $this->Theme_model->GenerateCategories('category')?>
				</div>
			</div>
		</div>
	</div>
</div>