<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Coupons List &nbsp; <a href="<?= base_url('control_panel/coupons/add')?>" class="btn btn-primary btn-sm "> Add New</a>
			  
			  <?php echo form_open('functions/option_controller/deletion',['class' => 'OptionForm']); ?>
			
				<input type="hidden" name="OptionsIDS" id="OptionsIDS"/>
				<input type="hidden" name="dlttype" id="dlttype" value="coupons"/>
				<input type="submit" class="btn btn-danger btn-sm DltTng" value="Delete Selected Coupons"/>
			
			 <?php echo form_close();?>
			  
			  
			  </h3>
            </div>
			
            <div class="box-body">
				
				
			  <?php echo form_open(base_url('control_panel/coupons/list'), array('method' => 'GET')); ?>
					<?php $this->db->order_by('name', 'asc');?>
					<?php $stores_list = $this->Taxonomies_model->GetTaxonomyArray(array('taxonomy_type' => 'store')); ?>
					
					<div class="form-group col-md-3">
						<label for="title">Coupon Title</label>
						<input type="text" name="title" id="title" class="form-control input-sm"/>
					</div>
					
					<div class="form-group col-md-3">
						<label for="store">Select Store</label>
						<select class="form-control" name="store" id="store">
							<option value="0"></option>
							<?php foreach($stores_list as $store): ?>
								<option value="<?= $store->id?>"><?= $store->name?></option>
							<?php endforeach; ?>
						</select>
					</div>
					
					<div class="form-group col-md-3">
						<label for="coupon_type">Coupon Type</label>
						<select class="form-control" name="coupon_type" id="coupon_type">
							<option></option>
							<option>Coupon Code</option>
							<option>Deal</option>
						</select>
					</div>
					
					<div class="form-group col-md-3">
						<label for="status">Status</label>
						<select class="form-control" name="status" id="status">
							<option></option>
							<option>Active</option>
							<option>Pending</option>
							<option>Inactive</option>
							<option>Expired</option>
						</select>
					</div>
					
					
					<div class="form-group col-md-12">
						<input type="submit" class="btn btn-info pull-right" value="Filter Coupons" />
						<?php if(!empty($_GET)): ?>
							<a href="<?= base_url('control_panel/coupons/list')?>" class="btn btn-danger pull-right" style="margin-right:10px">Clear filter</a>
						<?php endif ; ?>
					</div>
					
			  <?php echo form_Close(); ?>
			
              <table id="coupontablelist" class="table table-bordered table-striped">
			
                <thead>
                <tr>
                  <th><input type="checkbox" class="SelectAllCheckbox" /></th>
                  <th class="col-md-1">Date</th>
                  <th class="col-md-4">Coupon Title</th>
                  <th class="col-md-1">Author</th>
				  <th class="col-md-2">Stores</th>
				  <th class="col-md-2">Expiry Date</th>
				  <th class="col-md-2">Type</th>
                  <th class="col-md-1">Status</th>
                  <th class="col-md-1">Action</th>
                </tr>
                </thead>
				
                <tbody>
					
					<?php if(!empty($data['coupons_list'])): ?>
					
					<?php foreach($data['coupons_list'] as $coupon):?>
					<?php 
						$status = '';
						
						if($coupon['status'] == 'Active'){
							
							
							$status = '<small class="label bg-green">Active</small>';
						}
						else if($coupon['status'] == 'Pending'){
							
							$status = '<small class="label bg-blue">Pending</small>';
						
						}else if($coupon['status'] == 'Expired' || $coupon['status'] == 'Inactive'){
							
							$status = '<small class="label bg-blue">'.$coupon['status'].'</small>';
						}
						
						$author = $coupon['author'];
						
						if(is_numeric($coupon['author'])){
							
							
							$GetData =  GetUserData(array('id' => $coupon['author']));
							
							if(!empty($GetData)){
								
								
								$author = $GetData->username;
							
							}else{
								
								$author = 'unidentified.';
							
							}
							
						
						}
						$GetStores = GetCouponsStores($coupon['coupon_id']);
					?>
						
						<tr>
							<td><input type="checkbox" name="toDelete" class="toDelete" value="<?= $coupon['coupon_id']?>" /></td>
							<td><?= explode(' ',$coupon['added_date'])[0] ?></td>
							<td><a href="<?= base_url('control_panel/coupons/update/'.$coupon['coupon_id'])?>"><?= $coupon['coupon_title'] ?></a></td>
							<td><?= $author ?></td>
							<td>
								<?php if(!empty($GetStores)): $i = 0;?>
								   
									<?php foreach($GetStores as $store):  $i++;?>
										<a href="<?= base_url('control_panel/taxonomies/store/update/'.$store->taxonomyId)?>"><?= $store->name ?> </a>
								<?php if($i < count($GetStores)){echo ",";}?>										
									<?php endforeach; ?>
								<?php else: ?>
									<span>No selected Stores</span>
								<?php endif; ?>
							</td>
							<td><?= validate_date($coupon['expiry_date']) ? date_format(date_create($coupon['expiry_date']), 'd M, Y') : '<span style="color:#b1b0b0">No Expiry Date</span>'?>
								<?php
									if(validate_date($coupon['expiry_date'])){
										
										if((date_format(date_create($coupon['expiry_date']), 'Y-m-d')) < date('Y-m-d') ){
											
											echo '<span style="color:red"> (Expired)</span>';
										}
										
									}
								?>
							</td>
							<td ><span><?= $coupon['coupon_type'] ?></span></td>
							<td><span><?= $status  ?></span></td>
							<td><a href="<?= base_url('control_panel/coupons/update/'.$coupon['coupon_id'])?>">Edit <i class="fa fa-angle-double-right"></i></a> </td>
						</tr>
					<?php endforeach;?>
					
					<?php else: ?>
					
					<tr class="odd"><td colspan="12" class="dataTables_empty" valign="top">No Coupons Found</td></tr>
					
					<?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th><input type="checkbox" class="SelectAllCheckbox" /></th>
                  <th class="col-md-1">Date</th>
                  <th>Coupon Title</th>
				  <th>Author</th>
				  <th>Stores</th>
				  <th>Expiry Date</th>
				  <th class="col-md-2">Type</th>
                  <th class="col-md-2">Status</th>
                  <th class="col-md-1">Action</th>
                </tr>
                </tfoot>
              </table>
				
				
				
				<ul class="pagination-links">
				
				 <?php 
				 
					
					foreach($data['pagingation_data'] as $links){
						
						echo '<li>'.$links.'</li>';
					}
					
				  ?>
				  
				</ul>
			  
				
			  
			  <p class="resultP">Total <?= ($data['total_rows'])?> results found.</p>
			  
			  
            </div>
            <!-- /.box-body -->
          </div>
			</div>
		</div>
	</section>
</div>
<?php if(!empty($_GET)): ?>
	
	<script>
	
		document.addEventListener("DOMContentLoaded" , function(){
			
			<?php if(!empty($_GET['title'])): ?>
				$('#title').val('<?= addslashes(urldecode($_GET['title']))?>')
			<?php endif; ?>
			
			<?php if(!empty($_GET['store'])): ?>
				$('#store').val('<?= addslashes(urldecode($_GET['store']))?>')
			<?php endif; ?>
			
			<?php if(!empty($_GET['coupon_type'])): ?>
				$('#coupon_type').val('<?= addslashes(urldecode($_GET['coupon_type']))?>')
			<?php endif; ?>
			
			<?php if(!empty($_GET['status'])): ?>
				$('#status').val('<?= addslashes(urldecode($_GET['status']))?>')
			<?php endif; ?>
		})
	</script>
	
<?php endif; ?>
