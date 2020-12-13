<?php $alphabets = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");?>

<?php $numbersStoresQuery = $this->db->query("SELECT custom_url, web_taxonomies.id as id, name, file_name FROM web_taxonomies left join web_images on web_images.reference_id = web_taxonomies.id WHERE taxonomy_type = 'store' and status = 'Active' order BY `name`")->result_array();?>


<div class="section pagemd with-border">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="page_title">
					<h1>Stores List</h1>
				</div>
				<p class="page_short_description">Browse Thousands of Stores in <?= WEB_NAME()?></p>
			</div>
		</div>
	</div>
</div>
<div class="section bg">

	<div class="container single-store-container-md">
		<div class="row">
			<div class="col-lg-12">
				
				<div class="alpha_sidebar">
					<?php foreach($alphabets as $alpha):?>
						<p><?= $alpha?></p>
					<?php endforeach; ?>
				</div>
			
			</div>
			<?php if(!empty($numbersStoresQuery)):?>
			<div class="col-lg-12 noPadding ">
				<?php foreach($alphabets as $alpha):?>
				<div class="row noMargin">
				
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 stickyelement col-st-md">
					<div class="alphabox">
						<h2><?= $alpha?></h2>
					</div>
				</div>
				
				<?php $matches = preg_grep ('/^'.$alpha.'(\w+)/i', array_Values(array_column($numbersStoresQuery, 'name')));
					foreach($matches as $key => $values): ?>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-st-md">
						<div class="store_list-image_box">
							<a href="<?= base_url('store/'.$numbersStoresQuery[$key]['custom_url'])?>">
								<div class="web_imagebox">
									<img class="img-responsive lazy" data-src="<?= base_url('assets/uploads/stores/'.$numbersStoresQuery[$key]['file_name'])?>">
								</div>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
				
				</div>
				<hr class="stores_list_sep">
				<?php endforeach;?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>