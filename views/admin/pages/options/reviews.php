<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Reviews List &nbsp; </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="col-md-1">Date</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th class="col-md-2">Subject</th>
                  <th class="col-md-1">Action</th>
                </tr>
                </thead>
                <tbody>
					<?php foreach($reviews_list as $review): ?>
						<tr>
							<td><?= explode(' ',$review->added_date)[0]?></td>
							<td><?= $review->username?></td>
							<td><?= $review->email?></td>
							<td><?= $review->subject?></td>
							<td><a href="<?= base_url('control_panel/reviews/'.$review->id)?>">Edit</a></td>
						</tr>
					<?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
				  <th class="col-md-1">Date</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th class="col-md-2">Subject</th>
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

