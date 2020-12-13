<div class="section pagemd with-border">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="page_title">
					<h1><?= $content->page_title?></h1>
				</div>
				<ul class="pg_bcrumbs">
					<li><a href="http://localhost/sc_develpoment/">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active"><?= $content->page_title?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="section bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if(!empty($content->page_content)):?>
				<div class="cp-box">
					<?php  echo $content->page_content?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>