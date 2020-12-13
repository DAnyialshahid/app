<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?= base_url('assets/uploads/required/'.WEB_FAVICON())?>" type="image/gif" >
<title><?= !empty($metas['meta_title']) ? $metas['meta_title'] : WEB_NAME() ?></title>
<?= !empty($metas['meta_description']) ? '<meta name="description" content="'.$metas['meta_description'].'"/>' : '' ?>
<?= !empty($metas['meta_keywords']) ? '<meta name="keywords" content="'.$metas['meta_keywords'].'"/>' : '' ?>
<link href="<?= base_url('assets/theme/css/min-bootstrap.css')?>" rel="stylesheet"/>
<link href="<?= base_url('assets/theme/css/owl.carousel.min.css')?>" rel="stylesheet"/>
<link href="<?= base_url('assets/theme/css/styles.css')?>" rel="stylesheet"/>
<link href="<?= base_url('assets/theme/css/responsive.css')?>" rel="stylesheet"/>
<?php $this->load->view('site/templates/head_include');?>
