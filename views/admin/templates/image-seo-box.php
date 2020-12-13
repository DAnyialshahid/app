<div class="box box-primary image_options_box">
		<div class="box-header with-border">
			<h3 class="box-title"><?= isset($title) ? $title : 'Featured Image Options'?></h3>
		</div>
		<div class="box-body no-right-padding no-left-padding">
		
			<div class="form-group col-md-12">
				<label for="alt_text">Alt Text</label>
				<input type="text" class="form-control" id="alt_text" name="alt_text" />
			</div>
			
			<div class="form-group col-md-12">
				<label for="caption">Caption</label>
				<input type="text" class="form-control" id="caption" name="caption" />
			</div>
			
			<div class="form-group col-md-12">
				<label for="img_description">Image Description</label>
				<textarea class="form-control" id="img_description" name="img_description" rows="3"></textarea>
			</div>
		
		</div>
	</div>