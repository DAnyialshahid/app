
  <?php //exit(base_url());?>
<head  >

<!---d-->
 

<?=head($page_name,(isset($slug)?$slug:null))?> 
<!---/d-->

<meta charset="utf-8">
 
 


 
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1,user-scalable=no">
  
   
<link rel="icon" href="<?=favicon?>">

 


    
    
  
    <link rel="stylesheet" crossorigin href='<?=theme_base_url?>/assets/css/all.css '>
        <link rel="stylesheet" href="<?=theme_base_url?>/assets/css/d-style.css?s" media="all" />
 

     
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style type="text/css">
            body{font-family: 'Noto Sans JP', sans-serif;}
        </style>  

    
  

             

          <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    
    
		<script type="text/javascript" src="<?=theme_base_url?>/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/jquery.ajax-retry.min.js"></script>

        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/vue3.js"></script>  
         <!-- <script type="text/javascript" src="https://momentjs.com/downloads/moment.js"></script> -->
          <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --> 
                <!-- Flickity CSS -->
            <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

        
        
        <script type="text/javascript">

                var base_url='<?=base_url()?>';
            var theme_base_url='<?=theme_base_url?>';
     
            var site_id='<?=encrypt(site_id,"no_one_can_decrypt")?>'; 

            var token_name='<?= $this->security->get_csrf_token_name()?>';
            var token_hash='<?=$this->security->get_csrf_hash()?>'; 
            var api_url='<?=front_api_base_url?>'; 
  
         



        </script>


<!-- 
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/typeahead.bundle.js"></script>
        <script type="text/javascript" src="<?=theme_base_url?>/assets/js/handlebars.js"></script>
 -->


 



    </head>