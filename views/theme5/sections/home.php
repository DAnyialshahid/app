<main class="main" id="home">

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
</div>


    



  <div class="section bg">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <h1 class="section-title">Recommended Offers for You</h1>

        <div class="recommended-coupon-carousel hot-deals-carousel featured-coupon-carousel main-carousel flickity-enabled is-draggable">


   <div v-for="coupon in recommended_coupons"   class="featured-coupon offer_single carousel-cell"  >
   
   <div class="section-carousel-item section-carousel-inline-item active" data-carousel-slide="">
            <div class="section-carousel-item-inner section-carousel-inline-item-inner">
                <div class="section-carousel-content section-carousel-inline-content">
                    

<div class="grid tile tile-block tile-block-carousel" id="3312772">
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



<!-- {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}}
 {{coupon.description}} 
 -->


                                     


     
 
   

   
 
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

        <div class="popular-coupon-carousel hot-deals-carousel featured-coupon-carousel main-carousel flickity-enabled is-draggable">


   <div v-for="coupon in popular_coupons"   class="featured-coupon offer_single carousel-cell"  >
   
   <div class="section-carousel-item section-carousel-inline-item active" data-carousel-slide="">
            <div class=" ">
                <div class="section-carousel-content section-carousel-inline-content">
                    

<div class="grid tile tile-block tile-block-carousel" >
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



<!-- {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}}
 {{coupon.description}} 
 -->


                                     


     
 
   

   
 
</div>  






</div>
</div>

</div>
</div>  
</div>
<div class="section bg noBottomPadding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-title">Best Deals by Departments</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                                <div class="dbyd-wrapper">
                    <div class="stores-sidebar effect2">
                        <ul class="dbyd-stores-list">
                                                        
                            
                                                            
                                <li data-sid="410">
                                    <a href="javascript:;" class="active" data-processed="1">
                                        <div class="web_imagebox">
                                            <img class="lazy" data-src="https://www.verifieddeals.co.uk/assets/uploads/stores/982342695.png" alt="Everlast-discount-codes" src="https://www.verifieddeals.co.uk/assets/uploads/stores/982342695.png">
                                        </div>
                                        Elemis                                  </a>
                                </li>
                                                        
                            
                                                            
                                <li data-sid="54">
                                    <a href="javascript:;" data-processed="1">
                                        <div class="web_imagebox">
                                            <img class="lazy" data-src="https://www.verifieddeals.co.uk/assets/uploads/stores/196314582.png" alt="Everlast-discount-codes" src="https://www.verifieddeals.co.uk/assets/uploads/stores/196314582.png">
                                        </div>
                                        Ancestry                                    </a>
                                </li>
                                                        
                            
                                                            
                                <li data-sid="1822">
                                    <a href="javascript:;" data-processed="1">
                                        <div class="web_imagebox">
                                            <img class="lazy" data-src="https://www.verifieddeals.co.uk/assets/uploads/stores/1435400052_cytopaln.png" alt="Everlast-discount-codes" src="https://www.verifieddeals.co.uk/assets/uploads/stores/1435400052_cytopaln.png">
                                        </div>
                                        Cytoplan                                    </a>
                                </li>
                                                        
                            
                                                            
                                <li data-sid="713">
                                    <a href="javascript:;" data-processed="1">
                                        <div class="web_imagebox">
                                            <img class="lazy" data-src="https://www.verifieddeals.co.uk/assets/uploads/stores/997102008.png" alt="Everlast-discount-codes" src="https://www.verifieddeals.co.uk/assets/uploads/stores/997102008.png">
                                        </div>
                                        Jack Wolfskin                                   </a>
                                </li>
                                                        
                            
                                                            
                                <li data-sid="1769">
                                    <a href="javascript:;" data-processed="1">
                                        <div class="web_imagebox">
                                            <img class="lazy" data-src="https://www.verifieddeals.co.uk/assets/uploads/stores/709160058_anns.jpg" alt="Everlast-discount-codes" src="https://www.verifieddeals.co.uk/assets/uploads/stores/709160058_anns.jpg">
                                        </div>
                                        Anns Cottage                                    </a>
                                </li>
                                                        
                            
                                                            
                                <li data-sid="17">
                                    <a href="javascript:;" data-processed="1">
                                        <div class="web_imagebox">
                                            <img class="lazy" data-src="https://www.verifieddeals.co.uk/assets/uploads/stores/1141733144.png" alt="Everlast-discount-codes" src="https://www.verifieddeals.co.uk/assets/uploads/stores/1141733144.png">
                                        </div>
                                        ASDA Tyres                                  </a>
                                </li>
                                                        
                            
                                                            
                                <li data-sid="1768">
                                    <a href="javascript:;" data-processed="1">
                                        <div class="web_imagebox">
                                            <img class="lazy" data-src="https://www.verifieddeals.co.uk/assets/uploads/stores/441393532_weekend.png" alt="Everlast-discount-codes" src="https://www.verifieddeals.co.uk/assets/uploads/stores/441393532_weekend.png">
                                        </div>
                                        Weekend Offender                                    </a>
                                </li>
                                                    </ul>
                    </div>  
                        <div class="offers-list">


    <div class="main-offer offer_single active" data-sid="410" data-sort="code">
      <div class="offer-wrapper">
        <div class="main_wrapper">
          <a href="https://www.verifieddeals.co.uk/merchant/elemis-timetospa-discount-codes">      <div class="web_imagebox">
                    <img data-src="https://www.verifieddeals.co.uk/assets/uploads/stores/982342695.png" class="img-responsive lazy" alt="Elemis-discount-codes" src="https://www.verifieddeals.co.uk/assets/uploads/stores/982342695.png">
                  </div>
          </a>
          <div class="offer-headline">
            <div class="widgets">
                        <span class="badge small">
              CODE          </span>
            </div>
            <div class="offer-title copycodebtn" data-id="20427" data-clipboard-text="VIPBA">
              20% Off Orders        </div>
            <div class="coupon-description">
              <p>Get 20% Off Your Any Order at <a href="//elemis.com" class="skimlinks-unlinked" data-skimwords-word="elemis.com" data-skim-creative="500005" title="" data-processed="1" style="">elemis.com</a></p>        </div>
            <div class="widgets">
              <span class="expired_date badge">
              <img src="https://www.verifieddeals.co.uk/assets/theme/images/dda.png" class="exp-icon"> 
                          Valid till: 30, Mar          </span>
            </div>
          </div>
        </div>
        <!--main_wraper-->
        <div class="action-box">
          <div class="copycodebtn action-code " data-id="20427" data-clipboard-text="VIPBA">
                            <span class="js-offer-out">
                                <span class="action-cta">Get Coupon</span>
                            </span>
                            <div class="action-cta-code"> VIPBA 
                                <span class="action-cta-peel"></span>
                            </div>
                        </div>    </div>
      </div>
      <!--offer_wrapper-->
      <div class="likeandcomments">
        <div class="icons-wrapper">
          <span class="likebtn likeOffer " data-id="20427" data-like="2">
             
                    <span class="txt">2 likes</span>
                  </span>
          <span class="commentbtn" data-coupon-id="20427"><i class="fa fa-comments-o" aria-hidden="true"></i> Comments</span>
          <span class="emailcoupon">
            <div class="clickcmnt">
              <i class="fa fa-envelope-o"></i> <span class="txt">   Send to my Email</span>
            </div>
            <div class="email-popup">
              <div class="email-popup-title form-loading">Send this Offer to your Email</div>
              <form method="POST" action="https://www.verifieddeals.co.uk/async/ajax/offer-email/20427" class="ep_form submit-form" form-type="offer-email-form">
                <input type="hidden" name="_token" value="0004f9f8d2a6274d9e822f4a93cd974c">
                <input type="text" name="email-input" placeholder="Enter your email address" class="form-control">
                <button type="submit" class="btn btn-send ">Send Offer</button>
              </form>
              <p class="ep_p">
                By clicking "Send", you authorize us to send you an automated text with a link to the coupon. 
              </p>
            </div>
          </span>
        </div>
        <div class="comments-box">
          <form action="https://www.verifieddeals.co.uk/async/ajax/comment/20427" class="submit-form" form-type="comment-form" method="post" accept-charset="utf-8">
    <input type="hidden" name="_token" value="0004f9f8d2a6274d9e822f4a93cd974c">                                        
          <textarea name="comment" rows="2" class="form-control comment-text" placeholder="Comment on this offer"></textarea>
          <div class="comment-user-submit">
            <input type="text" class="form-control user-name-comment" name="username" placeholder="Post as, First name or Nickname">
            <button class="btn btn-submit"><i class="fa fa-angle-right"></i></button>
            <span class="form-loading"></span>
          </div>
          </form>      <div class="users-comments-wrapper">
            <h2>Comments</h2>
          </div>
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

        <div class="popular-coupon-carousel hot-deals-carousel featured-coupon-carousel main-carousel flickity-enabled is-draggable">


   <div v-for="coupon in popular_coupons"   class="featured-coupon offer_single carousel-cell"  >
   

<!-- {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}} -->


                                     


    <a :href="base_url+'store/'+coupon.store.custom_url"   >   
        <div class="web_imagebox">
                
        <img v-if="coupon.feature_image"  :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"  >
        <img v-if="!coupon.feature_image && coupon.store.feature_image"  :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"  >



    </div>
    </a>
<div class="content-box">
        <span class="badge offer-used-badge ">
        <i class="fa fa-user"></i> {{coupon.visits}} uses


<span v-if="coupon.type=='coupon'"   style="font-size:12px;color:orange;">  <b> Code </b>  </span>
<span v-if="coupon.type=='deal'"   style="font-size:12px;color:blue;"> <b>Deal  </b></span>

    </span>
    <div class="title  "  > {{coupon.name}} </div>
    <div class="coupon-description">
        <p>
       {{coupon.description}}   </p>
    </div>
</div>
<div class="widgets">
    <span class="expired_date badge">
       

            <span class="ribbon ribbon1" v-if="coupon.exclusive"><b>Exclusive </b></span>
            <span class="ribbon ribbon2" v-if="coupon.verified"><b style="color: #2bc089;">Verified </b></span>
            <span class="ribbon ribbon3" v-if="coupon.featured"><b style="color: #c0842b;">Featured </b></span>
</div>  

<div class="widgets">
    <span class="expired_date badge">
           <a :href="base_url+'store/'+coupon.store.custom_url"   >
<span>See all  <b>{{coupon.store.name}}</b> Offers - </span>

            </a>
        <img src="https://www.verifieddeals.co.uk/assets/theme/images/dda.png" class="exp-icon" > 
                    Valid till: 31, Mar </span>

                      
</div>  

<div class="action-box">
    <div class="copycodebtn action-code " data-id="20586" data-clipboard-text="DUNFEB20">



            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass  "
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  > 

<span class="js-offer-out">
                            <span class="action-cta deal">View Offer</span>
                        </span>

                         
                              </a>

                <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass "
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >
                        <span class="js-offer-out">
                            <span class="action-cta">Get Coupon</span>
                        </span>
                        <div class="action-cta-code">{{coupon.coupon_code}} 
                            <span class="action-cta-peel"></span>
                        </div>

                    </a>

 
                    





                    </div>  

</div>  
</div>  






</div>
</div>

</div>
</div>  
</div>


        
 <div class="offer-tabs">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <ul class="tabs z-depth-1" style="width: 100%;">
                 <li   v-for="category in popular_categories" class="tab col s2 waves-effect"><a rel="nofollow" :href="base_url+'category/'+category.slug"    >{{category.name}}</a></li>

                                                            <div class="indicator" style="right: 1097.14px; left: 0px;"></div></ul>
            </div>
        </div>
         











                 
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
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