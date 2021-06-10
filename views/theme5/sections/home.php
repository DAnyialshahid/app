<main class="main" id="home"> 
  <br>
  <br>
    <div class="section bg slider-box" v-if="slides.length!=0">
    <div class="container">
         <div class="owl-carousel owl-theme">

            <a v-for="slide in slides"  :href="slide.link">
              <img class="owl-lazy"   :data-src="api_url+'/assets/uploads/slides/'+slide.file_name"   alt="" style="height: 320px">
             </a>
            </div>
              <br>
  <br>
    </div>
</div>

             

  
<div class="section bg seperator-wrapper">
    <div class="container">
                <h1 class="section-title">Top Merchants</h1>
        <div class="hot-stores   main-carousel run-carousel flickity-enabled is-draggable">
               
               <div  v-for="store in show_in_home_stores"   class="hot-store-box carousel-cell col-3 col-xs-12 col-sm-4 col-lg-3 tile-inline"    >
    <div  class=" grid tile tile-block tile-block-carousel"  style="height: 200px !important; "> <div class="tile-block-inner">

        <div class="tile-block-content">
                <a :href="base_url+'store/'+store.custom_url" class="tile-block-logo">  
                 <img    class="img-responsive lazyLoad lazy"  v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image"   v-bind:alt="store.name" >

                </a>
                        <h2 class="tile-block-title" > 
 
    <!-- <span class="hover-over">{{store.name}}</span> -->

            <!-- <p class="offers-count">({{store.count.all}} Offers)</p> -->


            </h2>
        </div>

        <div class="tile-block-footer">
 
 
     

        </div>

    </div>
</div>  
</div>




                

 
                </div>
                <a    :href="base_url+'stores'" >
                            <span class="fa fa-arrow-right icon"></span>
                            <span class="text">Show more...</span>
                        </a>

    </div>

</div>


   


    



  <div class="section bg">
    <div class="container">
      <div class="col-lg-12">
            <h1 class="section-title">Recommended Offers for You</h1>

 <div class="recommended-coupon-carousel   featured-coupon-carousel main-carousel flickity-enabled is-draggable" >


    <div  v-for="coupon in recommended_coupons"   class="col-3 col-xs-12 col-sm-4 col-lg-2 tile-inline" style="margin: 0px;"  >
    <div  class=" grid tile tile-block tile-block-carousel"  style="   height: 300px;">
    <div class="tile-block-inner">

        <div class="tile-block-content">
                <a :href="base_url+'store/'+coupon.store.custom_url"class="tile-block-logo">
                    

 
        <img v-if="coupon.feature_image"  :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"   width="175" height="175"  class="tile-block-logo-image lazyloaded">
        <img v-if="!coupon.feature_image && coupon.store.feature_image"  :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"   width="175" height="175"  class="tile-block-logo-image lazyloaded">



                </a>
                        <h2 class="tile-block-title" >
                




   
          <em class="exclusive ribbon ribbon1"   v-if="coupon.exclusive!=0"><b>Exclusive </b></em>
            <em class="exclusive ribbon ribbon2" v-if="coupon.verified!=0"><b style="color: #2bc089;">Verified </b></em>
            <em class="exclusive ribbon ribbon3" v-if="coupon.featured!=0"><b style="color: #c0842b;">Featured </b></em>


<br>
    <span class="hover-over">{{coupon.name}} </span>




            </h2>
        </div>

        <div class="tile-block-footer">
            

    <span class="tile-expires">Ends in 5 days</span>

            

    <a class="tile-terms" href="#" >
       <span v-if="coupon.type=='coupon'"   style="font-size:12px;color:orange;">  <b> Code </b>  </span>
    <span v-if="coupon.type=='deal'"   style="font-size:12px;color:blue;"> <b>Deal  </b></span>
    </a>

            


    <a class="button button-border tile-save text-state" href="#">
       <i class="fa fa-users"></i> {{coupon.visits}} 
    </a>

            



            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass button tile-redeem"
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  >  
 
                                <span class="button-text">Get Deal</span>
             

                         
                              </a>

                <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass button button-peel tile-redeem"
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >
                        <span class="button-text">Get Code</span>
                        <span class="button-peel-code">
                            <em class="button-peel-text">{{coupon.coupon_code}} </em>
                        </span>
                    </a>


     

        </div>

    </div>
</div>  
</div>  






</div>
</div>
         
</div>  
</div>



<div class="section bg">
    <div class="container">
         <div class="col-lg-12">
            <h1 class="section-title">Today's Most Popular Coupons & Deals</h1>

 <div class="popular-coupon-carousel   featured-coupon-carousel main-carousel flickity-enabled is-draggable" >


    <div  v-for="coupon in popular_coupons"   class="col-3 col-xs-12 col-sm-4 col-lg-3 tile-inline" style="margin: 0px;"    >
    <div  class=" grid tile tile-block tile-block-carousel"    style="   height: 350px;">
    <div class="tile-block-inner">

        <div class="tile-block-content">
                <a :href="base_url+'store/'+coupon.store.custom_url"class="tile-block-logo">
                    

 
        <img v-if="coupon.feature_image"  :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"   width="175" height="175"  class="tile-block-logo-image lazyloaded">
        <img v-if="!coupon.feature_image && coupon.store.feature_image"  :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"   width="175" height="175"  class="tile-block-logo-image lazyloaded">



                </a>
                        <h2 class="tile-block-title" >
                




   
     <em class="exclusive ribbon ribbon1" v-if="coupon.exclusive!=0"><b>Exclusive </b></em>
            <em class="exclusive ribbon ribbon2" v-if="coupon.verified!=0"><b style="color: #2bc089;">Verified </b></em>
            <em class="exclusive ribbon ribbon3" v-if="coupon.featured!=0"><b style="color: #c0842b;">Featured </b></em>


<br>
    <span class="hover-over">{{coupon.name}} </span>




            </h2>
        </div>

        <div class="tile-block-footer">
            

    <span class="tile-expires">Ends in 5 days</span>

            

    <a class="tile-terms" href="#" >
       <span v-if="coupon.type=='coupon'"   style="font-size:12px;color:orange;">  <b> Code </b>  </span>
    <span v-if="coupon.type=='deal'"   style="font-size:12px;color:blue;"> <b>Deal  </b></span>
    </a>

            


    <a class="button button-border tile-save text-state" href="#">
       <i class="fa fa-users"></i> {{coupon.visits}} 
    </a>

            



            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass button tile-redeem"
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  >  
 
                                <span class="button-text">Get Deal</span>
             

                         
                              </a>

                <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass button button-peel tile-redeem"
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >
                        <span class="button-text">Get Code</span>
                        <span class="button-peel-code">
                            <em class="button-peel-text">{{coupon.coupon_code}} </em>
                        </span>
                    </a>


     

        </div>

    </div>
</div>  
</div>  






</div>
</div>
</div>  
</div>  






 

 <div class="panel panel-vertical bg-colour-none">
    <div class="container">
         <p class="intro-heading text-center">Popular Categories</p>
    <center class="row ">



    <div class="col-2"   v-for="category in popular_categories" >
     
      
  <a  :href="base_url+'category/'+category.slug"  title="ASOS" class="link link-light link-top-merchant-home">
         {{category.name}}
        </a>
 
    </div>


    </center>
    </div>
</div>
 




 


         


     
 <div class="container home-email-container">
    <div class="home-email card hoverable">
        <div class="row">


 <div class="tile tile-signup" style="background-color: rgb(3, 170, 166);"><div class="tile-signup-inner">

  <img class="tile-signup-logo-image"  :src="theme_base_url+'/assets/images/mail.png'" width="82" height="82"  >


  <p class="tile-signup-title">Never miss out <span> Our Latest Updates</span></p><newsletter-signup  ><form class="form form-tilesignup "><div class="form-tilesignup-inner"><div class="form-row form-tilesignup-details"><label for="tilesignup-email" class="sr-only">Email</label><input name="subscribe_email" type="email" class="input form-tilesignup-input" name="Email" placeholder="Email"></div><div class="form-row form-tilesignup-submit"><button type="submit" class="button"  onclick="subscribes_email();" >Subscribe</button><span class="form-tilesignup-tooltip">45 people have recently Subscribe </span></div></div> 
  </form></newsletter-signup></div></div>




             
             



            </div>
    </div>
    </div> 

<br>
 
   </main>