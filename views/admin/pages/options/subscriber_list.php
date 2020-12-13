<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Subscribers List &nbsp; </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="col-md-1">Date</th>
                  <th>Subscriber Name</th>
                  <th class="col-md-2">Email</th>
                  <th class="col-md-2">Source</th>
                  <th class="col-md-2">Ip Address</th>
                  <th class="col-md-2">Status</th>
                  <th class="col-md-1">Action</th>
                </tr>
                </thead>
                <tbody>
					<?php foreach($list as $subsciber): 
						$color = '';
						
						$status = '';
						
						if($subsciber->status == 'Checked'){
							
							$status = '<small class="label bg-green">Active</small>';
						}
						else if($subsciber->status == 'Pending'){
							
							$status = '<small class="label bg-blue">Pending</small>';
						}
					
					?>
						<tr>
							<td><?= explode(' ',$subsciber->added_date)[0]?></td>
							<td><?= $subsciber->username?></td>
							<td><?= $subsciber->email?></td>
							<td><?php 
							
								if(!empty($subsciber->source_id) && is_numeric($subsciber->source_id) && $subsciber->source_id != '0'){
									
									$source = $this->Taxonomies_model->GetTaxonomy(array('id' => $subsciber->source_id));
									
									if(!empty($source)){
										
										echo '<a href="'.base_url('control_panel/taxonomies/store/update/'.$source['id']).'">'.$source['name'].'</a>';
									}
								
								}else {
									
									echo 'No Source';
								}
							
							?></td>
							<td><?= $subsciber->ip_address?></td>
							<td><span ><?= $status ?></span></td>
							<td><a href="<?= base_url('control_panel')?>/users/subscriber/<?=$subsciber->id?>">Edit</a></td>
						</tr>
					<?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
				   <th class="col-md-1">Date</th>
                  <th>Subscriber Name</th>
                  <th class="col-md-2">Email</th>
                  <th class="col-md-2">Source</th>
                  <th class="col-md-2">Ip Address</th>
                  <th class="col-md-2">Status</th>
                  <th class="col-md-1">Action</th>
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

