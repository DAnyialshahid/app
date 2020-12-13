<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
				<div class="box-header">
				  <h3 class="box-title"><?= ucwords($data['taxonomy_type']). ' List &nbsp;'?> <a href="<?= base_url('control_panel/taxonomies/'.$data['taxonomy_type'].'/add')?>" class="btn btn-primary btn-sm ">Add New</a> 
				  
				    <?php echo form_open('functions/option_controller/deletion',['class' => 'OptionForm']); ?>
			
				<input type="hidden" name="OptionsIDS" id="OptionsIDS"/>
				<input type="hidden" name="dlttype" id="dlttype" value="<?= $data['taxonomy_type']?>"/>
				<input type="submit" class="btn btn-danger btn-sm DltTng" value="Delete Selected Coupons"/>
			
			<?php form_close();?>
				  </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="table_list" class="table table-bordered table-striped">
					<thead>
					<tr>
					 <th class="col-md-1"><input type="checkbox" class="SelectAllCheckbox"></th>
					  <?php if($data['taxonomy_type'] == 'store'): ?>
					 
					  <th class="col-md-1">Store Image</th> <?php endif; ?>
					  <th class="col-md-1">Date</th>
					  <th><?= ucwords($data['taxonomy_type']) . ' Name'?></th>
					  <th class="col-md-2">Status</th>
					  <th class="col-md-1">Action</th>
					</tr>
					</thead>
					<tbody>
					
						<?php echo $data['list_array']?>
					
					</tbody>
					<tfoot>
					<tr>
					 <th class="col-md-1"><input type="checkbox" class="SelectAllCheckbox"></th>
					  <?php if($data['taxonomy_type'] == 'store'): ?>
					  <th>Store Image</th><?php endif;?>
					  <th>Date</th>
					  <th><?= ucwords($data['taxonomy_type']) . ' Name'?></th>
					  <th>Status</th>
					  <th>Action</th>
					</tr>
					</tfoot>
				  </table>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
		</div>
	</section>
</div>

