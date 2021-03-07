<main class="main" id="home">
             <div class="owl-carousel owl-theme">

            <a v-for="slide in slides"  :href="slide.link">
              <img class="owl-lazy"   :data-src="api_url+'/assets/uploads/slides/'+slide.file_name"   alt="" style="height: 320px">
             </a>
            </div>

  
            
        <div class="top-stores-home">   
            <div class="container">
              <h1 class="home-h1">Top Online Shopping Stores</h1>
               <a v-for="store in show_in_home_stores" :href="base_url+'store/'+store.custom_url"   ><img class="card hoverable responsive-img"  v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image"   v-bind:alt="store.name" ></a>
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
    
    <div    class="card coupon cboxsq  hoverable promotion"  >
                       <div class="ribbon ribbon1" v-if="coupon.exclusive"><span>Exclusive</span></div>
            <div class="ribbon ribbon2" v-if="coupon.verified"><span style="background: #2bc089;">Verified</span></div>
            <div class="ribbon ribbon3" v-if="coupon.featured"><span style="background: #c0842b;">Featured</span></div>
                <div class="cboxsq-img-container">
                 <a :href="base_url+'store/'+coupon.store.custom_url"   >
                <img class="responsive-img" v-if="coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"  >
                <img class="responsive-img" v-if="!coupon.feature_image && coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"  >
        


            </a>
        </div>
                    <div  v-if="coupon.short_title"  class="cboxsq-head flow-text truncate"><span>    {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}}
                                      <div v-if="coupon.type=='coupon'"   style="font-size:12px;color:orange;">  <b> Code </b>  </div>
                                         <div v-if="coupon.type=='deal'"   style="font-size:12px;color:blue;"> <b>Deal  </b></div>
                    </span></div>


                <div class="clear"></div>
        <p class="cboxsq-title text-center">{{coupon.name}} </p>
        <div class="cboxsq-btn">
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

 
                    </div>

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
                 <a :href="base_url+'store/'+coupon.store.custom_url"   >
                <img class="responsive-img" v-if="coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image" style="width: 82px" >
                <img class="responsive-img" v-if="!coupon.feature_image && coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image" style="width: 82px"  >
    
<div>See all  <b>{{coupon.store.name}}</b> Offers</div>

            </a>
 
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
</div>    <div class="container home-email-container">
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