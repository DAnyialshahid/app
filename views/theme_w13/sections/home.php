<div class="section first bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="section_title border">Popular Brands</h1>
        <div class="astrodivider">
          <div class="astrodividermask"></div>
          <span><i>☆</i></span>
        </div>
      </div>
    </div>
        
        <div class="owl-carousel owl-theme topstores_carousel owl-loaded owl-drag">
           <?php 
// dd($data);
if (isset($data->popularStores)){
  foreach (array_slice($data->popularStores,0,21) as $store ) { 

?><div class="owl-item" style="width: 122.711px; margin-right: 15px;"><div class="top_brand_block">
            <a href="https://www.savified.com/store/zipcar-promo-codes">
              <div class="web_imagebox">
                <img class="img-responsive owl-lazy" src="<?=$store->img_src?>" style="opacity: 1;">
              </div>
              <h2 class="tbb_title">
                <?=$store->name?>             </h2>
            </a>
          </div></div>
               

  <?php 
    }
  }
?>
    </div>
  </div>
</div>


        
  
   




        <div class="section">
  <div class="container">
        <div class="row">
      <div class="col-lg-12">
        <h1 class="section_title">Popular Categories</h1>
        <div class="astrodivider"><div class="astrodividermask"></div><span><i>☆</i></span></div>
      </div>
      <div class="col-lg-12">
        <ul class="latest_list stores">
             
             
             <?php 

if (isset($data->popuplarCategories)){
  foreach (array_slice($data->popuplarCategories,0,21) as $cat ) { 

?>
      

               <li class="">
            <a href="/categories/<?=$cat->slug?>">
              <div class="web_imagebox">
                <img class="img-responsive lazy" src="<?=$cat->img_src?>"></div>
                <?=$cat->name?>            </a>
          </li>

  <?php 
    }
  }
?>


          
          

        </ul>
      </div>
    </div>
      </div>
</div>




           








       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="fill:white;">
            <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7 c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4 c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
         </svg>



<div class="section">
<div class="container">
    
   <div class="row">
      <div class="col-lg-12">
        <h1 class="section_title">Featured Coupons & Deals</h1>
        <div class="astrodivider"><div class="astrodividermask"></div><span><i>☆</i></span></div>
      </div>

  </div>
</div>



<div class="section bg">
  <div class="container store-container">
    <div class="row">
      <div class="col-lg-12">
        <div class="single-category-wrapper">
          
          <div class="right-side">
            
              <div class=" row">
                
                  <!--item-->



                 <?php 
// dd($data);
if (isset($data->recommendedCoupons)){
  foreach (array_slice($data->recommendedCoupons,0,8) as $coupon ) { 
//dd($coupon);
?>

    
<div class="coup_container col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
  <div class="card active">
    <div class="face face1">
      <div class="content web_imagebox">
         <a href="/store/<?=$coupon->store->custom_url?>"> 
          <img class="img-responsive lazy" src="<?=$coupon->store->img_src?>">
        </a>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p>
          <span class="widget">
          <i class="fa fa-user"></i> <?=$coupon->visits?> Total Used
        </span>
        </p>
        <h3><?=$coupon->name?> </h3>
        <p class="fc_description short-desc" str-length="33" >
          <?=substr($coupon->description,0,100)?>
           <span class="more-text">ll Order&nbsp;At Jewelry Affairs        </span><a href="javascript:;" class="read-more show-more-text "> Read Terms &nbsp;<i class="fa fa-angle-right"></i> </a></p>
      </div>
    
        <?php if ($coupon->type=='coupon'){ ?>
      

      <div class="btn button-code deal copycodebtn " data-id="17698" data-clipboard-text=" ">
        <div class="btn-label">Copy <?=substr($coupon->coupon_code,0,3)?>***</div>
      </div> 
    <?php } else {?>



      <div class="btn button-code deal copycodebtn " data-id="17698" data-clipboard-text=" ">
        <div class="btn-label">GET DEAL</div>
      </div> 

<?php } ?>
     <div class="fd_date_widgets">
        <span class="widget date_widget"><i class="fa fa-clock-o"></i>Added:  <?=date('d M',strtotime($coupon->added_date))?>  </span>
        <span class="widget expired_widget"><i class="fa fa-clock-o"></i>Expire: <?=date('d M',strtotime($coupon->expire_date))?> </span>
      </div>
    </div>
  </div>
</div>

<!--/item-->
<?php }}?>
              </div>

                            
                          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 


 