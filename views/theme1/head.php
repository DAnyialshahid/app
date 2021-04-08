<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
 
 
<!---d-->


<?=head($page_name,(isset($slug)?$slug:null))?> 
<link rel="icon" href="<?=favicon?>">
<!---/d-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta content="width=640, initial-scale=0.47, maximum-scale=1.0, user-scalable=1" name="viewport"> -->
        <link rel="stylesheet" href="<?=theme_base_url?>/assets/css/style.css?v=1" media="all" />
		<script type="text/javascript" src="<?=theme_base_url?>/assets/js/jquery.js"></script>
          <script type="text/javascript" src="<?=theme_base_url?>/assets/js/jquery.ajax-retry.min.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/vue.js"></script> 
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/typeahead.bundle.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/handlebars.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            
        <script type="text/javascript">
        	var base_url='<?=base_url()?>';
        	var theme_base_url='<?=theme_base_url?>';
     
        	var site_id='<?=encrypt(site_id,"no_one_can_decrypt")?>'; 

        	var token_name='<?= $this->security->get_csrf_token_name()?>';
        	var token_hash='<?=$this->security->get_csrf_hash()?>'; 
        	var api_url='<?=front_api_base_url?>'; 
  
         

        </script>


<link rel="preconnect" href="https://fonts.gstatic.com">
   <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">



 <!-- development version, includes helpful console warnings -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>  -->






    </head>