<div class="content-wrapper">
		<section class="content-header">
			<h1>Review <?= $review_data->subject?></h1>
		</section>
		<section class="content">
			<div class="row">
			
				<div class="col-md-4">
				<div class="response_text"></div>
			
					
					<div class="form-group">
						<label for="username">User Name</label>
						<input type="text" name="username" id="username" value="<?= $review_data->username?>" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="email">User Email</label>
						<input type="text" name="email" id="email" value="<?= $review_data->email?>" class="form-control"/>
					</div>
					
					
					<div class="form-group">
						<label for="subject">Subject</label>
						<input type="text" name="subject" id="subject" value="<?= $review_data->subject?>" class="form-control"/>
					</div>
					
					
					<div class="form-group">
						<label for="message">Subject</label>
						<textarea class="form-control" name="message" id="message"><?= $review_data->message?></textarea>
					</div>
					
					
					
				</div>
				</div>
			</div>
		</section>
</div>

