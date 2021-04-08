<main class="main" id="home">
  <!--
    <div class="section bg slider-box">
    <div class="container">
         <div class="owl-carousel owl-theme">

            <a v-for="slide in slides"  :href="slide.link">
              <img class="owl-lazy"   :data-src="api_url+'/assets/uploads/slides/'+slide.file_name"   alt="" style="height: 320px">
             </a>
            </div>
    </div>
</div>

             

  
<div class="section bg seperator-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><hr class="sepertor"></div>
        </div>
    </div>
</div>


 <div class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-title">Hot Stores of the Week</h1>
                <a href="#" class="showmore-expbtn">
                    <i class="fa fa-arrow-right icon"></i>
                    <span>Show more</span>
                </a>
            </div>
            <div class="col-lg-10 col-md-10 md-resp-col-hotstores">
                <div class="hot-stores   main-carousel run-carousel flickity-enabled is-draggable">
               
               <div v-for="store in show_in_home_stores"   class="hot-store-box carousel-cell"  >
                        <a :href="base_url+'store/'+store.custom_url">
                            <div class="web_imagebox">                      
                                <img    class="img-responsive lazyLoad lazy"  v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image"   v-bind:alt="store.name" >
                            </div>
                            <div class="store-name">{{store.name}}</div>
                            <p class="offers-count">({{store.count.all}} Offers)</p>
                        </a>
                    </div>

 
                </div>

                 
            </div>
            <div class="col-lg-2 col-md-2 md-resp-col-showmore">
                <div class="show-more-box">
                    <p class="show-more-wrapper">
                        <a    :href="base_url+'stores'" >
                            <span class="fa fa-arrow-right icon"></span>
                            <span class="text">Show more...</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> -->


    



  <div class="section bg">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <h1 class="section-title">Recommended Offers for You</h1>

 <div class="recommended-coupon-carousel   featured-coupon-carousel main-carousel flickity-enabled is-draggable" >


    <div  v-for="coupon in recommended_coupons"   class="col-3 col-xs-12 col-sm-4 col-lg-3 tile-inline"  >
    <div  class=" grid tile tile-block tile-block-carousel"  >
    <div class="tile-block-inner">

        <div class="tile-block-content">
                <a :href="base_url+'store/'+coupon.store.custom_url"class="tile-block-logo">
                    

 
        <img v-if="coupon.feature_image"  :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"   width="175" height="175"  class="tile-block-logo-image lazyloaded">
        <img v-if="!coupon.feature_image && coupon.store.feature_image"  :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"   width="175" height="175"  class="tile-block-logo-image lazyloaded">



                </a>
                        <h2 class="tile-block-title" >
                




   
     <em class="exclusive ribbon ribbon1" v-if="coupon.exclusive"><b>Exclusive </b></em>
            <em class="exclusive ribbon ribbon2" v-if="coupon.verified"><b style="color: #2bc089;">Verified </b></em>
            <em class="exclusive ribbon ribbon3" v-if="coupon.featured"><b style="color: #c0842b;">Featured </b></em>


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
</div>



<div class="section bg">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <h1 class="section-title">Today's Most Popular Coupons & Deals</h1>

 <div class="popular-coupon-carousel   featured-coupon-carousel main-carousel flickity-enabled is-draggable" >


    <div  v-for="coupon in popular_coupons"   class="col-3 col-xs-12 col-sm-4 col-lg-3 tile-inline"  >
    <div  class=" grid tile tile-block tile-block-carousel"  >
    <div class="tile-block-inner">

        <div class="tile-block-content">
                <a :href="base_url+'store/'+coupon.store.custom_url"class="tile-block-logo">
                    

 
        <img v-if="coupon.feature_image"  :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"   width="175" height="175"  class="tile-block-logo-image lazyloaded">
        <img v-if="!coupon.feature_image && coupon.store.feature_image"  :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"   width="175" height="175"  class="tile-block-logo-image lazyloaded">



                </a>
                        <h2 class="tile-block-title" >
                




   
     <em class="exclusive ribbon ribbon1" v-if="coupon.exclusive"><b>Exclusive </b></em>
            <em class="exclusive ribbon ribbon2" v-if="coupon.verified"><b style="color: #2bc089;">Verified </b></em>
            <em class="exclusive ribbon ribbon3" v-if="coupon.featured"><b style="color: #c0842b;">Featured </b></em>


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
</div>  






 

 <div class="panel panel-vertical bg-colour-none">
    <div class="container">
        <p class="intro-heading text-center">Popular brands</p>
      
  <a   v-for="category in popular_categories"  :href="base_url+'category/'+category.slug"  title="ASOS" class="link link-light link-top-merchant-home">
         {{category.name}}
        </a>
 
    </div>
</div>
 




 


        
  
</div>    
<div class="container home-email-container">
    <div class="home-email card hoverable">
        <div class="row">
            <div class="col s12 m12 l6 home-email-text-container valign-wrapper">
                <div class="valign">Subscribe Now !</div>
            </div>
            <div class="col s12 m12 l6 home-email-form-container valign-wrapper">
                <div id="mc_embed_signup">
                    <form class="valign" target="_blank" action="#" method="POST" accept-charset="utf-8">
                        <input type="email" value="" name="subscribe_email" class="email" id="email" placeholder="Enter Your Email" required="">
                  
                        <button class="subs-home-btn" type="button"  onclick="subscribes_email();" name="action"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
    <div id="browser-ext-dnld" class="container">
    <div class="extension card hoverable hide-on-med-and-down">
        <div class="row">
            <div class="col s8 valign-wrapper">
                <div class="extension-container valign">
                    <div>Download {{configs.site_name}} Extension</div>
                    <div>Never pay more. Get latest coupons and deals of your favourite online store.<br> Download {{configs.site_name}} BrowserExtension Now.</div>
                    <div class="extension-btn">
                        <a class="ext-chrome" rel="nofollow"><i class="fa fa-chrome"></i>Download for Chrome</a>
                        
                    </div>
                </div>
            </div>
            <div class="col s4 valign-wrapper"><img    :src="theme_base_url+'/assets/images/extension-back.png'"  class="valign"></div>
        </div>
    </div>
</div>    <!-- About -->
 
<!-- END About --> 


 
   </main>