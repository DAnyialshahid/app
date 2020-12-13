<?php $stores_list = $this->Taxonomies_model->GetTaxonomyArray(array('taxonomy_type' => 'store')); 
$taxonomy_store_list = $stores_list;
?>

<div class="content-wrapper">

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
				<div class="box-header">
				  <h3 class="box-title">
					Assign Categories to Stores
				  </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-lg-12">
						<div class="response_text"></div>
						<?php echo form_open_multipart('functions/taxonomies_controller/assign_categories' , ['class' => 'submit_form'])?>
							<?php $taxonomy_array = $this->Taxonomies_model->GetTaxonomyArray(array('taxonomy_type' => 'category'));?>
							
							<?php
								foreach($taxonomy_array as $data):
							?>
							
							<h2><?= $data->name?></h2>
								<input type="hidden" name="category_id[]" value="<?= $data->id?>"/>
						
								
								<label>Select Stores for <?=$data->name?></label>
								<select class="js-example-basic-multiple" id="<?= $data->id . 'select2'?>" name="taxonomies_<?= $data->id?>[]" multiple="multiple">
									<?php foreach($taxonomy_store_list as $store): ?>
										<option value="<?= $store->id?>"><?= $store->name?></option>
									<?php endforeach; ?>
								</select>
								
								<button type="button" class="btn btn-info selectallbtn btn-sm"  data-id="<?= $data->id . 'select2'?>">Select all</button>
								<button type="button" class="btn btn-danger deselectallbtn btn-sm"  data-id="<?= $data->id . 'select2'?>">Deselect all</button>
						
								
							<?php endforeach;?>
								<br>
								<input type="submit" value="Assign Categories" class="btn btn-primary pull-right"/>
							
							<?php echo form_close();?>
						</div>
					</div>
				</div>
			 </div>
			</div>
		</div>
		
	</section>
	
</div>


<?php if(!empty($selected_data)):?>

<script>

document.addEventListener("DOMContentLoaded", function(){
	
	
	
	<?php //foreach($selected_data as $cats_id): ?>
		
		
		
		//$('#<?= $cats_id[0]?>select2').val(<?= json_encode($cats_id['category_id'])?>);
		//$('#<?= $cats_id[0]?>select2').trigger('change');
	
	<?php //endforeach; ?>
	
	
	
	
	
})

</script>

<?php endif; ?>

