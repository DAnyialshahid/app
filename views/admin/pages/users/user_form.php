<div class="content-wrapper">
		<section class="content-header">
			<h1><?= $page == 'edit_user' ? 'Update User' : 'Add User'?></h1>
		</section>
		<section class="content">
			<div class="row">
			
				<div class="col-md-4">
				<div class="response_text"></div>
			
					
					<?php 
					$url = $page == 'edit_user' ? 'update/' : 'add/' ;
					echo form_open('functions/user_controller/'. $url, ['class' => 'submit_form']); ?>
						
						
						<?php if($page == 'edit_user'): ?>
							<input type="hidden" name="user_id" value="<?= $user_data->id?>"/>
						<?php endif; ?>
						
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="first_name">First Name</label>
							<input type="text" name="first_name" id="first_name" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="last_name">Last Name</label>
							<input type="text" name="last_name" id="last_name" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="contact">Contact</label>
							<input type="text" name="contact" id="contact" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" name="address" id="address" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="address">Password</label>
							<input type="password" name="password" id="password" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="role">Select Role</label>
							<select class="form-control" id="role" name="role">
								<?php foreach(GetRoles() as $roles): ?>
									<option value="<?= $roles->id?>"><?= $roles->name?></option>
								<?php endforeach; ?>
							</select>
						</div>
						
						
						<?php  if($page == 'edit_user' && getUserId() != $user_data->id): ?>
						<div class="form-group">
							<label for="role">Select Status</label>
							<select class="form-control" id="status" name="status">
								<option>Active</option>
								<option>Inactive</option>
							</select>
						</div>
						
						<?php endif; ?>
						
						<div class="form-group">
							<input type="submit" value="<?= $page == 'edit_user' ? 'Update user' : 'Add user'?>" class="btn btn-primary pull-right"/>
						</div>
						
						
					<?php echo form_close();?>
					
					
					
				</div>
				</div>
			</div>
		</section>
</div>
<?php if($page == 'edit_user'): ?>
<script>
	document.addEventListener("DOMContentLoaded", function(){
		
		$('#username').val('<?= $user_data->username?>')
		$('#first_name').val('<?= $user_data->first_name?>')
		$('#last_name').val('<?= $user_data->last_name?>')
		$('#contact').val('<?= $user_data->contact?>')
		$('#address').val('<?= $user_data->address?>')
		$('#role').val('<?= $user_data->role_id?>')
	
	
	})
</script>
<?php endif; ?>

