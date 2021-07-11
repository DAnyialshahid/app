
<div id=" ">
       <hr>
  <div  class="text-center pb-2"> 
      <h3 style="    font-weight: 700 !important;">  Popular Stores </h3>
       <span>Search any product and gear up your needs with astounding deals</span>
   </div>
    
   <div class="container">
  <div class="row popular_stores d-flex justify-content-center">

<?php 

if (isset($data->popularStores)){
  foreach (array_slice($data->popularStores,0,21) as $store ) { 

?>
      <div class="store col-md-2 col-sm-4 col-6 ">
                  <a href="/store/<?=$store->custom_url?>">
                     <p align="center" ><?=$store->name?> </p>
                  </a>
               </div>

  <?php 
    }
  }
?> 
           


             </div>
</div>
    
      

</div>
 
<div  class="pt-4">
 
  <div  class="text-center pb-2"> 
      <h3 style="    font-weight: 700 !important;">Stores List </h3>
       <span>Search any product and gear up your needs with astounding deals</span>
   </div>
    
   <div class="container">
  <div class="row popular_stores d-flex justify-content-center"> 

      <div class="store col-md-2 col-sm-4 col-6 ">
                  <a href="/stores/all">
                     <p align="center" >See All Stores </p>
                  </a>
               </div>


    <?php 

    if (isset($data->stores)){
      foreach (array_slice($data->stores,0,9999999) as $store ) { 

    ?>
          <div class="store col-md-2 col-sm-4 col-6 ">
                      <a href="/store/<?=$store->custom_url?>">
                         <p align="center" ><?=$store->name?> </p>
                      </a>
                   </div>

      <?php 
        }
      }
    ?> 
           

             </div>


             <div class="row popular_stores d-flex justify-content-center"> 
 
    <?php   foreach (['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']as $alphbets ) {    ?>
                      <a   href="/stores/<?=$alphbets?>" class="pagination_alphabets col-md-1 col-sm-1 col-1 " href="/store/buildabear_com">
                         <p align="center"><?=$alphbets?></p>
                      </a>
                
     <?php  }  ?> 
           

             </div>


             
</div>
    
      


</div>





  