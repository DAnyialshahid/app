<main class="main" id="home">

    <div class="section bg slider-box">
    <div class="container-fluid">
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

                            <li  v-for="category in popular_categories.slice(0,10)" >
                                    <a href="javascript:;" :onclick="'getCouponsByCategory(0,\''+category.slug+'\')'" class="active">
                                        <div class="web_imagebox">
                                             <img v-if="category.feature_image" v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image"  class="img-responsive">
                                              <img v-if="!category.feature_image" :src="theme_base_url+'/assets/images/blank.png'" class="img-responsive">

                                        
                                        </div>
                                    {{category.name}}                           </a>
                                </li>

                        </ul>
                    </div>  
                        <div class="offers-list">




 




                  <div v-for="coupon in category_coupons.slice(0,4)"     class="main-offer offer_single active"   >

                    <div class="offer-wrapper">
                      <div class="main_wrapper">
                        <a href="https://www.verifieddeals.co.uk/merchant/elemis-timetospa-discount-codes">      <div class="web_imagebox">
                                  <img  v-bind:src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image">
                                </div>
                        </a>
                        <div class="offer-headline">
                          <div class="widgets">
                           <span class="badge small">
                             <span v-if="coupon.type=='coupon'"   style="font-size: 16px;color:#aa3552;"><b> Code </b>  </span>
                               <span v-if="coupon.type=='deal'"    style="font-size: 16px;color:#5858c7;"><b>Deal  </b></span>          

                          </span>
                                  <span class="ribbon ribbon1" v-if="coupon.exclusive"><span style="color: #aa3552;"> Exclusive </span></span>
                                  <span class="ribbon ribbon2" v-if="coupon.verified"><span style="color: #2bc089;"> Verified </span></span>
                                  <span class="ribbon ribbon3" v-if="coupon.featured"><span style="color: #c0842b;"> Featured </span></span>

                          </div>
                          <div class="offer-title copycodebtn" data-id="20427" data-clipboard-text="VIPBA">
                                   </div>
                          <div class="coupon-description">
                            <p>{{coupon.description}} </div>
                          <div class="widgets">
                             
                          </div>
                        </div>
                      </div>
                      <!--main_wraper-->
                      


                      <div class="action-box">

            <a v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass  "
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                       > 

               
                  <span class="action-cta deal">Get Deal</span>


                        </a>

                              <a   v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass "
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?category_coupon_id='+coupon.id+'&category_slug='+lastCategorySlug"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >
                                 

                                <div class="copycodebtn action-code " >
                        <span class="js-offer-out">
                            <span class="action-cta">Copy  {{coupon.coupon_code.slice(0,2)}}***</span>
                        </span>
                        <div class="action-cta-code"> {{coupon.coupon_code}} 
                            <span class="action-cta-peel"></span>
                        </div>
                    </div>    
                    


                               </a>

    

             
                </div>


                    </div>
                    <!--offer_wrapper-->
                    <div class="likeandcomments"> 

    
                  <img src="https://www.verifieddeals.co.uk/assets/theme/images/dda.png" class="exp-icon">   Expire on {{coupon.expire_date}}    
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

 
 
<!-- END About --> 


 
   </main>