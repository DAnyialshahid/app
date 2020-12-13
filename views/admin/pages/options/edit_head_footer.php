<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-6">
			<div class="response_text"></div>
			<div class="box box-primary">
				
				<div class="box-header">
				  <h3 class="box-title"><?= $page == 'edit_footer' ? 'Add Scripts in footer - Site Footer' : 'Add Links, CSS in head - Site Head'?></h3>
				</div>
				
				<div class="box-body">
					
					<?php echo form_open('functions/option_controller/edit_file/'.$type , ['class' => 'submit_form']); ?>
					<div class="form-group col-md-12">
						<label for="textbox">Edit Textbox</label>
						<textarea class="form-control" rows="10" name="edit_box"><?= $content?></textarea>
					</div>
					
					<div class="form-group col-md-12">
						<input type="submit" class="btn btn-primary pull-right" value="Save File"/>
					</div>
					
					<?php echo form_close();?>
					
					<p class="info-p" style="margin-bottom:5px">"This process is directly edit a Website File. becareful while edit something."</p>
				</div>
			</div>
			</div>
		</div>
	</section>
</div>

