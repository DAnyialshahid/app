  <link rel="stylesheet" href="<?=theme_base_url?>/assets/css/bootstrap.css" type="text/css" media="all">
  <?php //exit(base_url());?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      
<!---d-->
 

<?=head($page_name,(isset($slug)?$slug:null))?> 
<!---/d-->
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?=theme_base_url?>/assets/css/bootstrap.css" type="text/css" media="all">
        <!-- <meta content="width=640, initial-scale=0.47, maximum-scale=1.0, user-scalable=1" name="viewport"> -->
        <link rel="stylesheet" href="<?=theme_base_url?>/assets/css/style.css" media="all" />
        <link rel="stylesheet" href="<?=theme_base_url?>/assets/css/d-style.css" media="all" />

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
     
        <style type="text/css">
            body{font-family: 'Noto Sans JP', sans-serif;}
        </style>
<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

  <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


		<script type="text/javascript" src="<?=theme_base_url?>/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/jquery.ajax-retry.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/vue3.js"></script>  
        
        
        <script type="text/javascript">

                var base_url='<?=base_url()?>';
            var theme_base_url='<?=theme_base_url?>';
     
            var site_id='<?=encrypt(site_id,"no_one_can_decrypt")?>'; 

            var token_name='<?= $this->security->get_csrf_token_name()?>';
            var token_hash='<?=$this->security->get_csrf_hash()?>'; 
            var api_url='<?=front_api_base_url?>'; 
  
         



        </script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/typeahead.bundle.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/handlebars.js"></script>

    </head>