<div id="grad1">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="fill:white;">
            <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7 c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4 c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
         </svg>
  <div  class="text-center pb-2"> 
      <h3 style="    font-weight: 700 !important;">  Popular Stores </h3>
       <span>Search any product and gear up your needs with astounding deals</span>
   </div>
    
   <div class="container"> 
  <div class="row popular_stores d-flex justify-content-center">

<?php 
// dd($data);
if (isset($data->popularStores)){
  foreach (array_slice($data->popularStores,0,21) as $store ) { 

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
 
          <div class="dropdown-divider"></div>
   <div class="row recommended_coupons d-flex justify-content-center">
    <div class="col-md-12">
                  <h2 align="center" class="popcat_head">  Featured Coupons & Deals   </h2>
               </div>
<?php 
// dd($data);
if (isset($data->recommendedCoupons)){
  foreach (array_slice($data->recommendedCoupons,0,11) as $coupon ) { 

?>
    <div class="card col-12 col-sm-6 col-md-4  col-lg-2 mb-2  "  >
 
  <div class="card-body">
   <h6><span class="badge  color-<?=$coupon->type?>"><?=$coupon->type?></span> <a href="/store/<?=$coupon->store->custom_url?>"><span class="small text-muted"><?=$coupon->store->name?></span></a></h6>
    <h5 class="card-title"><?=$coupon->name?></h5>
    <p class="card-text"><?=$coupon->description?></p>
    <?php if ($coupon->type=='coupon'){ ?>
      <a href="#" class="btn btn-primary">Copy <?=substr($coupon->coupon_code,0,3)?>***</a>
    <?php } else {?>
            <a href="#" class="btn btn-primary">Get Deal</a>
    <?php } ?>




  </div>

    <div class="card-footer">
   ♥<?=$coupon->visits?>   |  📅  <?=$coupon->expire_date?>
  </div>


</div>


  <?php 
    }
  }
?> 


  </div>



<div  class="pt-4">
 
  <div  class="text-center pb-2"> 
      <h3 style="    font-weight: 700 !important;">  Popular Categories </h3>
       <span>Search any product and gear up your needs with astounding deals</span>
   </div>
    
   <div class="container">
  <div class="row popular_stores d-flex justify-content-center">

<?php 

if (isset($data->popuplarCategories)){
  foreach (array_slice($data->popuplarCategories,0,21) as $cat ) { 

?>
      <div class="store col-md-2 col-sm-4 col-6 ">
                  <a href="/categories/<?=$cat->slug?>">
                     <p align="center" ><?=$cat->name?> </p>
                  </a>
               </div>

  <?php 
    }
  }
?> 
             <div class="cat col-md-2 col-sm-4 col-6 ">
                  <a href="/categories">
                     <p align="center" >See All Categories </p>
                  </a>
               </div>


             </div>
</div>
    
      


</div>






<div id="grad1">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="fill:white;">
            <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7 c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4 c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
         </svg>
         <div class="grad2" styled="background: url('https://www.sociablelabs.com/images/home-banner-bg.png') no-repeat;background-size: cover;height:450px;opacity:0.5;">
            <div class="container">
               <div class="row grad2_head" style="">
                  <div class="col-xs-1 col-md-2"></div>
                  <div class="col-xs-10 col-md-8">
                     <div class="banner-detail-inner pt-5">
                        <h1 class="text-white h2 grad2_h1" align="center" style=""> Save on everything you buy</h1>
                        <p align="center" class="grad2_herotext" style=""><span>Search any product and gear up your needs with astounding deals</span></p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-1 col-md-3"></div>
                  <div class="col-xs-10 col-md-6">
                     <form id="prdsearch" action="https://www.sociablelabs.com/search/result">
                        <div class="row">
                           <div class="col-xs-10 col-sm-11 no-padding"> <input type="search" name="qry" class="form-control no-border-radius no-outline home_search" id="rvwprdsearchhome" placeholder="What are you looking for?"> </div>
                           <div class="col-xs-2 col-sm-1 no-padding"> <button type="submit" class="btn btn-default no-border-radius home_search_btn"> <i class="fa fa-search"></i> </button> </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

      </div>









                   <div class="dropdown-divider"></div>




      


       








































































 