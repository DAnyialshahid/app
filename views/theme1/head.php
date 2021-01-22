<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
       <meta name="google-site-verification" content="t4fujYB8gUePnWu-OI1HfT1xI4Z6_sSZ_z38jqEk3hY" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?=head($page_name,(isset($slug)?$slug:null))?> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta content="width=640, initial-scale=0.47, maximum-scale=1.0, user-scalable=1" name="viewport"> -->
        <link rel="stylesheet" href="<?=theme_base_url?>/assets/css/style.css?v=1" media="all" />
		<script type="text/javascript" src="<?=theme_base_url?>/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/vue.js"></script> 
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/typeahead.bundle.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/handlebars.js"></script>
     
        <script type="text/javascript">
        	var base_url='<?=base_url()?>';
        	var theme_base_url='<?=theme_base_url?>';
     
        	var site_id='<?=encrypt(site_id,"no_one_can_decrypt")?>'; 

        	var token_name='<?= $this->security->get_csrf_token_name()?>';
        	var token_hash='<?=$this->security->get_csrf_hash()?>'; 
        	var api_url='<?=front_api_base_url?>'; 
  
         

        </script>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
    body{font-family: 'Noto Sans JP', sans-serif;}
</style>

 <!-- development version, includes helpful console warnings -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>  -->


	<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">





    </head>