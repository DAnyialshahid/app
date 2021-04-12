<main class="main" id="home">
 

    <div class="section bg slider-box">
    <div class="container">

 
    <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="mainpage-title">
              <h1> {{configs.site_name}} have some Special Offers for you!</h1>
        <p>Free Online Coupons and Promo Codes for the Store You Love!</p>
      </div>
    </div>
 <hr class="seperator">


<div class="row  "   >
  <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>  Pouplar Stores </span> </h3>
        </div>
      </div>

</div>
<div class="row hot-stores"   >

<div class="col-md-2 col-xs-12"  v-for="store in show_in_home_stores" >
<div class="noPd">
      <div class="top-store">
        <a :href="base_url+'store/'+store.custom_url" style="text-decoration:none">
          <div class="web_imagebox">
            <img class="img-responsive owl-lazy" v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" style="opacity: 1;">
          </div>
          <p class="psc_title">{{store.name}}</p>
         
        </a>
      </div>
    </div>
    </div>
</div>
 


         
    </div>


    <div class="col-md-12 col-xs-12"     v-if="slides.length!=0">
      <hr>
      <div class="owl-carousel owl-theme">

            <a v-for="slide in slides"  :href="slide.link">
              <img class="owl-lazy"   :data-src="api_url+'/assets/uploads/slides/'+slide.file_name"   alt="" style="height: 320px">
             </a>
            </div>
    </div>


</div>

             

  <div class="featured-coupons bgwhite pdTop30 pdBtm30 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>   Featured Coupons & Deals </span> </h3>
        </div>
      </div>
    </div>
    <div class="row   recommended-coupon-carousel hot-deals-carousel featured-coupon-carousel main-carousel flickity-enabled is-draggable"> 
            <div v-for="coupon in recommended_coupons"  class="col-sm-6 col-md-4 col-lg-3 col-xs-6 col-xxs-12  d-responsivecoupons ">
                      

                        <!--    <span class="ribbon ribbon1" v-if="coupon.exclusive!=0"><b>Exclusive </b></span>
            <span class="ribbon ribbon2" v-if="coupon.verified!=0"><b style="color: #2bc089;">Verified </b></span>
            <span class="ribbon ribbon3" v-if="coupon.featured!=0"><b style="color: #c0842b;">Featured </b></span>

 {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}} 
 <span v-if="coupon.type=='coupon'"   style="font-size:12px;color:orange;">  <b> Code </b>  </span>
<span v-if="coupon.type=='deal'"   style="font-size:12px;color:blue;"> <b>Deal  </b></span>
<span>See all  <b>{{coupon.store.name}}</b> Offers - </span>
             -->
            <div class="featured-coupons-box">
              <div class="featured-coupons-img">
                <a :href="base_url+'store/'+coupon.store.custom_url" >   

                 <img v-if="coupon.feature_image"  :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"   class="lazy">
        <img v-if="!coupon.feature_image && coupon.store.feature_image"  :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"   class="lazy">


                </a>
              </div>
              <div class="featured-content-box">
                <div class="expired-info">
                  <span class="p-5 fw-600"><i class="fa fa-user"></i>{{coupon.visits}} Used</span>
                      </div>
                <!--<p class="code-type">Code</p>-->
                <a href="javascript:void(0)" target="_blank" class="show_coupon copycodebtn" data-id="19798" data-clipboard-text=" ">
                  <p class="featured-coupon-title">{{coupon.name}}</p>
                </a>
                <div class="featured-coupon-desc" v-if="coupon.description"> {{coupon.description.substring(0,92)}}  <span class="moreellipses">...</span><span class="morecontent"> 
                  <a :href="base_url+'store/'+coupon.store.custom_url"  class="morelink">Read more</a></span>
                </div>
               
              </div>
              <p class="expired-info pleft">
                <span class="p-5 fw-600"><i class="fa fa-clock-o"></i> {{coupon.expire_date}}</span>
              </p>
              <div class="action-block " target="_blank">
               


            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass  "
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  > 

                         <p class="btn-code" data-type="deal"> 
                        <span class="btn-hover fix-btn">Get Deal</span> 
                      </p>

                </a>

                <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass "
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >


                   <p class="btn-code" data-type="deal"> 
                        <span class="btn-hover fix-btn">Get Coupon</span> 
                      </p>  

                  <!-- {{coupon.coupon_code}} -->

                    </a>

 

                  </div></div>        
              </div>

    </div>
  </div>
</div>








<div class="section newsletterbox   seperator-wrapper" >
    <div class="container">
        <div class="row">
            
        <div class="row text-center">
            <div class="col-md-12">
                <h2 style="color:white">Subscribe Our Newsletter !</h2>
            </div>
            <div class="col-md-12">
                <div id="mc_embed_signup" style="width:364px;padding:10px;margin-left: auto; margin-right: auto;"> <div  style="height: 43px; " class="row">
                      <input type="email" name="subscribe_email" class="email email col-xs-8 col-md-8 " id="email" placeholder="Enter Your Email" required="" style="     padding: 8px; height: 100%; background: #fffdfd; border: none; color: white; font-size: 24px; ">

                      <span class="col-xs-2 col-md-2 " type="" onclick="subscribes_email();" name="action" style="padding: 8px;   height: 100%; background: red; border: none; color: white; font-size: 24px; ">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                      </span>
                    </div> </div>
            </div>
        </div>
    
        </div>
    </div>
</div>




<div class="featured-coupons bgwhite pdTop30 pdBtm30 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>Weekly Most Popular Coupons & Deals </span> </h3>
        </div>
      </div>
    </div>
    <div class="row   popular-coupon-carousel hot-deals-carousel featured-coupon-carousel main-carousel flickity-enabled is-draggable"> 
            <div v-for="coupon in popular_coupons"  class="col-sm-6 col-md-4 col-lg-3 col-xs-6 col-xxs-12  d-responsivecoupons">
                      

                        <!--    <span class="ribbon ribbon1" v-if="coupon.exclusive!=0"><b>Exclusive </b></span>
            <span class="ribbon ribbon2" v-if="coupon.verified!=0"><b style="color: #2bc089;">Verified </b></span>
            <span class="ribbon ribbon3" v-if="coupon.featured!=0"><b style="color: #c0842b;">Featured </b></span>

 {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}} 
 <span v-if="coupon.type=='coupon'"   style="font-size:12px;color:orange;">  <b> Code </b>  </span>
<span v-if="coupon.type=='deal'"   style="font-size:12px;color:blue;"> <b>Deal  </b></span>
<span>See all  <b>{{coupon.store.name}}</b> Offers - </span>
             -->
            <div class="featured-coupons-box">
              <div class="featured-coupons-img">
                <a :href="base_url+'store/'+coupon.store.custom_url" >   

                 <img v-if="coupon.feature_image"  :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"   class="lazy">
        <img v-if="!coupon.feature_image && coupon.store.feature_image"  :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"   class="lazy">


                </a>
              </div>
              <div class="featured-content-box">
                <div class="expired-info">
                  <span class="p-5 fw-600"><i class="fa fa-user"></i> {{coupon.visits}} Used</span>
                      </div>
                <!--<p class="code-type">Code</p>-->
                <a href="javascript:void(0)" target="_blank" class="show_coupon copycodebtn" data-id="19798" data-clipboard-text=" ">
                  <p class="featured-coupon-title">{{coupon.name}}</p>
                </a>
                <div class="featured-coupon-desc" v-if="coupon.description"> {{coupon.description.substring(0,92)}}  <span class="moreellipses">...</span><span class="morecontent"> 
                  <a :href="base_url+'store/'+coupon.store.custom_url"  class="morelink">Read more</a></span>
                </div>
               
              </div>
              <p class="expired-info pleft">
                <span class="p-5 fw-600"><i class="fa fa-clock-o"></i> {{coupon.expire_date}}</span>
              </p>
              <div class="action-block " target="_blank">
               


            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass  "
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  > 

                         <p class="btn-code" data-type="deal"> 
                        <span class="btn-hover fix-btn">Get Deal</span> 
                      </p>

                </a>

                <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass "
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >


                   <p class="btn-code" data-type="deal"> 
                        <span class="btn-hover fix-btn">Get Coupon</span> 
                      </p>  

                  <!-- {{coupon.coupon_code}} -->

                    </a>

 

                  </div></div>        
              </div>

    </div>
  </div>
</div>


 
<div class="container-fluid  ">
   <div class="row">
      <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>Top Categories </span> </h3>
        </div>
      </div>
    </div>

      <div class="col-xs-6 col-sm-4 item col-md-3 item"  v-for="category in popular_categories"  >
            <a class="thumbnail custom-thumb"  :href="base_url+'category/'+category.slug" >
              <img class="img-responsive store-img owl-lazy"    v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image"   style="opacity: 1;">
            </a>
            <p class="pbname"><a href="store/bluebella-discount-codes">{{category.name}}</a></p>
          </div>
</div>


 
 


 
   </main>