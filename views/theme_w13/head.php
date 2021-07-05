
  <?php //exit(base_url());?>
<head lang="en">

    <!---d-->
 
<?=head($page_name,(isset($slug)?$slug:null))?> 
<!---/d-->
      <link rel="icon" href="<?=favicon?>">


        <link rel="stylesheet" type="text/css" href="<?=theme_base_url?>/assets/css/site.min.css">
          <script src="<?=theme_base_url?>/assets/js/site.min.js"></script>
        
        <script type="text/javascript"> 
            var base_url='<?=base_url()?>';
            var theme_base_url='<?=theme_base_url?>';
     
            var site_id='<?=encrypt(site_id,"no_one_can_decrypt")?>'; 

            var token_name='<?= $this->security->get_csrf_token_name()?>';
            var token_hash='<?=$this->security->get_csrf_hash()?>'; 
            var api_url='<?=front_api_base_url?>';  
        </script>

 



    </head>