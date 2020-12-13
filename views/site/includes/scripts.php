<?php 
	$ext_params = array();
	if(!empty($scripts)){
		
		$ext_params = $scripts;
	}
?>

<?php if(in_array('font-awesome', $ext_params)): ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<?php endif; ?>

<?php if(in_array('jquery', $ext_params)): ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php endif; ?>

<?php if(in_array('bootstrap', $ext_params)): ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php endif; ?>

<?php if(in_array('owl', $ext_params)): ?>
	<script src="<?= base_url('assets/theme/')?>js/owl.carousel.min.js"></script>
<?php endif; ?>

<?php if(in_array('clipboard', $ext_params)): ?>
	<script src="<?= base_url('assets/theme/')?>js/clipboard.min.js"></script>
<?php endif; ?>

<?php if(in_array('custom', $ext_params)): ?>
	<script src="<?= base_url('assets/theme/')?>js/custom.js"></script>
<?php endif; ?>

<?php if(isset($_GET['vr'])): ?>
	<script>
	$(function(){
		
		GetCouponInfo("<?= $_GET['vr']?>");
	})
	</script>
<?php endif; ?> 

<?php $this->load->view('site/templates/footer_include');?>
