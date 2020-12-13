<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<h3>Delete Confirmation</h3>
				
				<?php if($data['dlttype'] == 'coupons'): ?>
				
					<p>Are you sure you want to delete the selected Coupons ? </p>
				
					<?php echo form_open('functions/option_controller/handleDeletion'); ?>
					
					
						<input type="hidden" name="OptionsIDS" id="OptionsIDS" value='<?= $data['OptionsIDS']?>'/>
						<input type="hidden" name="type" value="<?= $data['dlttype']?>"/>
						<input type="submit" value="Confirm" class="btn btn-primary btn-sm"/>
						<a href="<?= base_url('control_panel/coupons/list')?>" class="btn btn-danger btn-sm" >Cancel</a>
						
					<?php echo form_close(); ?>
				
				<?php else: ?>
				
				
					<?php 
					
						$taxonomyPlural = '';
						
						if($data['dlttype'] == 'category'){
							
							$taxonomyPlural = 'Categories';
						}
						else{
							
							$taxonomyPlural = 'Stores';
						}
					?>
				
					<p>Are you sure you want to delete the selected items ? please select the option below </p>
					
					<?php 
						
						
					
						$ids = json_decode($_POST['OptionsIDS']);
						foreach($ids as $id){
							
							
							$this->db->where('id != ',$id->value);
						
						}
						$this->db->where('taxonomy_type' ,  $data['dlttype']);
						$options_array = $this->db->get('web_taxonomies')->result();
						
						
					?>
					
					
					
					<?php echo form_open('functions/option_controller/handleDeletion'); ?>
					
					
						
						<input type="hidden" name="OptionsIDS" id="OptionsIDS" value='<?= $data['OptionsIDS']?>'/>
						<input type="hidden" name="type" value="<?= $data['dlttype']?>"/>
						
						<div class="row">
							<div class="form-group col-md-5">
								<input type="radio" name="optrd" value="1" id="dltRd" onchange="$('.txono').attr('disabled','true')"/>
								<label for="dltRd">Only Delete the selected <?=$taxonomyPlural?> </label>
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-md-5">
								<input type="radio" name="optrd" value="2" id="dltCp" onchange="$('.txono').attr('disabled','true')"/>
								<label for="dltCp">Delete the coupons of these <?= $taxonomyPlural?> too</label>
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-md-5">
								<input type="radio" name="optrd" value="3" id="shftcp" onchange="$('.txono').removeAttr('disabled')"/>
								<label for="shftcp">Shift the coupons of these <?= $taxonomyPlural?> to other <?= $taxonomyPlural?></label>
								<select class="form-control txono"  name="SelectedTaxonomies" disabled >
									<?php foreach($options_array as $option): ?>
										<option value="<?= $option->id?>"><?=$option->name?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						
						
						<input type="submit" value="Confirm" class="btn btn-primary btn-sm"/>
						<a href="<?= base_url('control_panel/taxonomies/'.$data['dlttype'].'/list')?>" class="btn btn-danger btn-sm" >Cancel</a>
						
					<?php echo form_close(); ?>
					
					
				
				<?php endif; ?>
			
			</div>
		
		</div>
	</section>
</div>
		