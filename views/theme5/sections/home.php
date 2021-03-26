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
            <svg class="styles__ThumbsUp-sc-8tgwcx-0 cIfREJ" viewBox="0 0 16 16">
              <path class="cls-1" d="M13.7 5.33h-2.37v-3A2.3 2.3 0 0 0 9 0H8a1.28 1.28 0 0 0-1.33 1.25c0 2.58-.6 4.3-1.45 4.47a3.3 3.3 0 0 0-1.13.44A1.16 1.16 0 0 0 3.5 6H1.17A1.17 1.17 0 0 0 0 7.17v7a1.17 1.17 0 0 0 1.17 1.17H3.5a1.16 1.16 0 0 0 .72-.25 5.9 5.9 0 0 0 3.4.9h6.08a2.3 2.3 0 0 0 2.3-2.3V7.85a2.5 2.5 0 0 0-2.3-2.52zm-12.37 2h2V14h-2zm13.34 6.37a1 1 0 0 1-1 1H7.62a4.12 4.12 0 0 1-3-.9V7.4c0-.05.2-.24.83-.37C7.5 6.6 8 3.7 8 1.33h1a1 1 0 0 1 1 1v3.2a1 1 0 0 0 1.13 1.13h2.57a1.18 1.18 0 0 1 1 1.2z"></path>
            </svg>
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
        <div class="cboxsq-container">
   <div id="recommended_coupons" class="col s12">
                    <div class="row">
      <h1 class="h3">Recommended Offers for You</h1>
  <div class="col s12 m6 l4"  v-for="coupon in recommended_coupons"  >
    
     
                    <div  v-if="coupon.short_title"  class="cboxsq-head flow-text truncate"><span>    
                    </span></div>


                <div class="clear"></div>
        <p class="cboxsq-title text-center">{{coupon.name}} </p>
        <div class="cboxsq-btn"></div>

<a class="row" title=" ">
                                                   


        <div class="cboxsq-footer"><a :href="base_url+'store/'+coupon.store.custom_url"  >See all  <b>{{coupon.store.name}}</b> Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>
                    </div>
                </div>











                <div id="popular_coupons" class="col s12">
                    <div class="row">
      <h1 class="h3">Today's Most Popular Coupons & Deals</h1>
  <div class="col-12"  v-for="coupon in popular_coupons"  >
    
    <div    class="card coupon cboxsq  hoverable promotion"  style="height:  156px" >
            <div class="ribbon ribbon1" v-if="coupon.exclusive"><span>Exclusive</span></div>
            <div class="ribbon ribbon2" v-if="coupon.verified"><span style="background: #2bc089;">Verified</span></div>
            <div class="ribbon ribbon3" v-if="coupon.featured"><span style="background: #c0842b;">Featured</span></div>
    

     <div class="col-md-3 cboxsq-footer">

                <img class="responsive-img" v-if="coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image" style="width: 82px" >
                <img class="responsive-img" v-if="!coupon.feature_image && coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image" style="width: 82px"  >
                  
 
        </div>

          

                <!-- <div class="clear"></div> -->
        <div class="col-md-7  text-center">
          <b class="title" style="font-size: 30px;">  {{coupon.name}}</b>
            <div  style="font-size: 15px;"> {{coupon.description}}</div>

         </div>
        <div class="col-md-2">
                      <div  v-if="coupon.short_title"  class="col-md-12  flow-text truncate"><span>    {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}}
                  </span></div>

            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass btn  go-cpn btn-offer waves-effect waves-light"
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  > View Offer</a>

                <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass btn  go-cpn btn-offer waves-effect waves-light"
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >Get code</a>

 <span style="margin-left: auto;margin-right: auto;font-size:12px"><i class="far fa-eye"></i>{{coupon.visits}} Views </span> 
 <span style="margin-left: auto;margin-right: auto;font-size:12px"><i class="far fa-clock"></i>  Expire:{{coupon.expire_date}}</span>

                    </div>

                   
                                                   


       
        
            </div>
</div>
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