
<div id=" ">
       <hr>
  <div  class="text-center pb-2"> 
      <h3 style="    font-weight: 700 !important;">  Popular Stores </h3>
       <span>Search any product and gear up your needs with astounding deals</span>
   </div>
    
   <div class="container">
  <div class="row popular_stores d-flex justify-content-center">

<?php 

if (isset($data->popular_stores)){
  foreach (array_slice($data->popular_stores,0,21) as $store ) { 

?>
      <div class="store col-md-2 col-sm-4 col-6 ">
                  <a href="/<?=$store->custom_url?>">
                     <p align="center" ><?=$store->name?> </p>
                  </a>
               </div>

  <?php 
    }
  }
?> 
             <div class="store col-md-2 col-sm-4 col-6 ">
                  <a href="/stores">
                     <p align="center" >See All </p>
                  </a>
               </div>


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
</div>
    
      


</div>





  