

<script src="<?= base_url('assets/control_panel/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/jquery-ui.min.js')?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?= base_url('assets/control_panel/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/adminlte.min.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/dashboard.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/demo.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/bootstrap-datepicker.min.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/jquery-menu.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/iconset-fontawesome-4.2.0.min.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/icon-picker.js')?>"></script>
<script src="<?= base_url('assets/control_panel/js/file_upload.js')?>"></script>

	<script src="<?= base_url('assets/control_panel/js/quill.core.js')?>"></script>
	<script src="<?= base_url('assets/control_panel/js/quill.min.js')?>"></script>
	
	
	
	<?php if($page == 'assign-categories' || $page == 'siteconfig' && !empty($_GET['tab']) && $_GET['tab'] == 'tab_5' ): ?>
		<script src="<?= base_url('assets/control_panel/js/select2.min.js')?>"></script>
		<script>
		
		document.addEventListener("DOMContentLoaded",function(){
			
			$('.js-example-basic-multiple').select2()
		})
		</script>
	<?php endif;  ?>

<script src="<?= base_url('assets/control_panel/js/sortable.js')?>"></script>

<?php $this->load->view('admin/includes/initial_javascripts')?>
 
 
<script src="<?= base_url('assets/control_panel/js/custom.js')?>"></script>