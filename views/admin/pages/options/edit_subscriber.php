<div class="content-wrapper">
		<section class="content-header">
			<h1>Edit Subscriber</h1>
		</section>
		<section class="content">
			<div class="row">
			
				<div class="col-md-4">
				<div class="response_text"></div>
			
					
					<?php 
					
					echo form_open('functions/user_controller/update_subscriber', ['class' => 'submit_form']); ?>
						
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control"/>
						</div>
						
						<input type="hidden" value="<?= $subscriber_data[0]->id?>" name="update_id"/>
						
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" class="form-control"/>
						</div>
						
						
						
						
						<div class="form-group">
							<label for="ip_address">Ip Address</label>
							<input type="text" readonly name="ip_address" id="ip_address" class="form-control"/>
						</div>
						
						
						
						
						
						<div class="form-group">
							<label for="role">Select Status</label>
							<select class="form-control" id="status" name="status">
								<option>Checked</option>
								<option>Pending</option>
							</select>
						</div>
						
						
						
						<div class="form-group">
							<input type="submit" value="Update" class="btn btn-primary pull-right"/>
						</div>
						
						
					<?php echo form_close();?>
					
					
					
				</div>
				</div>
			</div>
		</section>
</div>
<?php if($page == 'update_subscriber'): ?>
<script>
	document.addEventListener("DOMContentLoaded", function(){
		
		$('#username').val('<?= $subscriber_data[0]->username?>')
		$('#email').val('<?= $subscriber_data[0]->email?>')
		$('#ip_address').val('<?= $subscriber_data[0]->ip_address?>')
		$('#status').val('<?= $subscriber_data[0]->status?>')
		
	
	})
</script>
<?php endif; ?>

