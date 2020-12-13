  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?= base_url('assets/uploads/required/'.WEB_FAVICON())?>" type="image/gif" >
  <title><?= isset($title) ? $title : "Untitled";?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/font-awesome.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/ionicons.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/bootstrap-datepicker.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/_all-skins.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/dataTables.bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/loadings.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/dashicons.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/icon-picker.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/quill.core.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/quill.snow.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/sortable.css')?>">
  <?php if($page == 'assign-categories' || $page == 'siteconfig' && !empty($_GET['tab']) && $_GET['tab'] == 'tab_5'): ?>
	<link rel="stylesheet" href="<?= base_url('assets/control_panel/css/select2.min.css')?>">
  <?php endif; ?>
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/custom.css')?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

