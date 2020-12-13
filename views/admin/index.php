<!DOCTYPE html>
<html>
<head>
 
  <?php $this->load->view('admin/includes/head');?>
 
</head>
<body class="hold-transition skin-red sidebar-mini" >


	<?php $this->load->view('admin/includes/header')?>




<div class="wrapper">
 
	<?php $this->load->view('admin/includes/navigation');?>
  
  
	<?php
			
			$this->load->view('admin/'.$template);
	?>

	
</div>


<?php $this->load->view('admin/includes/footer');?>

</body>
</html>
