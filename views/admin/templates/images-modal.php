				<div id="image_model" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><?=isset($title) ? $title : 'Untitled'?></h4>
					  </div>
					  <div class="modal-body">
						<div class="row">
						  <div class="col-md-4 form-group">
							<img  class="img-responsive" id="modal-image"/>
						  </div>
						  <div class="col-md-12 form-group">
							<label>Alt Text</label>
							<input type="text" <?= isset($image_alt_text) ? 'value="'.$image_alt_text.'"' : ''?> name="alt_text" class="form-control"/>
						  </div>
						  <div class="col-md-12 form-group">
							<label>Caption</label>
							<input type="text" name="caption" <?= isset($image_caption) ? 'value="'.$image_caption.'"' : ''?> class="form-control"/>
						  </div>
						  <div class="col-md-12 form-group">
							<label>Description</label>
							<textarea class="form-control" name="img_description" row="5"><?= isset($image_description) ? $image_description : ''?></textarea>
						  </div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" id="galleryModelSave" class="btn btn-default" data-dismiss="modal">Save</button>
					  </div>
					</div>

				  </div>
				</div>