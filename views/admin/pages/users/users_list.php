<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Users List <a href="<?= base_url('control_panel/users/add')?>" class="btn btn-primary">Add New</a></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="table_list" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th class="col-md-1"><input type="checkbox" class="SelectAllCheckbox"></th>
					  <th class="col-md-4">Username</th>
					  <th class="col-md-2">First Name</th>
					  <th class="col-md-2">Last Name</th>
					  <th class="col-md-1">Contact</th>
					  <th class="col-md-1">Status</th>
					  <th class="col-md-1">Action</th>
					</tr>
					</thead>
					<tbody>
						
						<?php $users_Array = $this->User_model->GetUsersList();?>
						<?php foreach($users_Array as $user): ?>
						
							<tr>
								<td><input type="checkbox" name="toDelete" class="toDelete" value="<?= $user->id?>"></td>
								<td><?= $user->username?></td>
								<td><?= $user->first_name?></td>
								<td><?= $user->last_name?></td>
								<td><?= $user->contact?></td>
								<td><?= $user->status?></td>
								<td><a href="<?= base_url('control_panel/users/edit/'.$user->id)?>">Edit <i class="fa fa-angle-double-right"></i></a></td>
							</tr>
						
						<?php endforeach; ?>
					
					</tbody>
					<tfoot>
					<tr>
					  <th class="col-md-1"><input type="checkbox" class="SelectAllCheckbox"></th>
					  <th class="col-md-4">Username</th>
					  <th class="col-md-2">First Name</th>
					  <th class="col-md-2">Last Name</th>
					  <th class="col-md-1">Contact</th>
					  <th class="col-md-1">Status</th>
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

