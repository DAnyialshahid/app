<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Pages List &nbsp; </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="col-md-1">Date</th>
                  <th>Page Name</th>
                  <th class="col-md-2">Url</th>
                  <th class="col-md-1">Action</th>
                </tr>
                </thead>
                <tbody>
					<?php foreach($list as $page): ?>
						<tr>
							<td><?= explode(' ',$page->added_date)[0]?></td>
							<td><?= $page->page_title?></td>
							<td>/<?= $page->url?></td>
							<td><a href="pages/<?=$page->id?>">Edit</a></td>
						</tr>
					<?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
				  <th class="col-md-1">Date</th>
                  <th>Page Name</th>
                  <th class="col-md-2">Url</th>
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

