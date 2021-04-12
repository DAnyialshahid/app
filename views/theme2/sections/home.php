<div id="home"> 
<section class="hero " style="padding-top: 4px; padding-bottom: 5px;padding-left: 5px;padding-right: 5px;"    v-if="slides.length!=0">

          <div class="owl-carousel owl-theme">

            <a v-for="slide in slides"  :href="slide.link">
              <img class="owl-lazy"   :data-src="api_url+'/assets/uploads/slides/'+slide.file_name"   alt="" style="height: 320px">
             </a>
            </div>
 
</section>


<section class="container">
    <div class="popular-stories">
        <h3>Free Online Coupons and Promo Codes for the Store You Love!</h3>
        <hr class="border-line"> 
        <div class="row">
          <div  v-for="store in show_in_home_stores"  class="col-md-2 col-sm-2 col-xs-4 stores-item"  ><a :href="base_url+'store/'+store.custom_url" >
            <img v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" 
             style=" width: 150px;height:  150px;  box-shadow:#00000069 0px 0px 11px 0px; border-radius: 8px;  " 
              v-bind:alt="store.name" class="img-responsive" >
          </a></div>  

      </div>

     
    </div>
</section>
 

<section class="main-content content-section homepage-section"  style="padding: 0px">
    <div class="container">
    <div class="row">
    <div class="article">
        <h1 class="h3">Recommended Offers for You</h1>
 <div  v-for="coupon in recommended_coupons"  class="col-md-6 col-xs-12 "  style="height: 178px;margin-bottom: 38px;"> 
  <div  class=" tw-m-2  tw-rounded-sm tw-shadow tw-bg-white sm:tw-p-4 tw-p-2 sm:tw-mb-4 tw-mb-2 xl:tw-h-full1">
                                <div class="tw-flex   tw-h-full1">
                                    <div class="tw-text-center xl:tw-w-1/6 tw-w-1/4 xl:tw-min-w-1/6 tw-min-w-1/4">
                                   <a :href="base_url+'store/'+coupon.store.custom_url" class="row" title=" ">
                                       <div    v-if="coupon.short_title"   class="coupon-label-context coupon roboto-slab tw-font-bold tw-leading-tight tw-my-0 ">
                                            <div class="tw-inline-block cdroboto-slab tw-text-orange sm:tw-text-4xl  ">
                                                {{coupon.short_title.split(' ')[0]}}
                                            </div>
                                            <div class="off__label">   {{coupon.short_title.split(' ')[1]}}</div>

                                        </div> 


                                        <img
                                            v-if="!coupon.short_title && coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image" class="lazy-load img-responsive"
                                                   style="width: 100px; height: 72px;" 
                                             />

                                        <img
                                            v-if="!coupon.short_title && !coupon.feature_image && coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image" class="lazy-load img-responsive"
                                                   style="width: 100px; height: 72px;" 
                                             />
                                           </a>

                                 <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">           
                                        <div v-if="coupon.type=='coupon'"   style="color:orange;">  <b> Code </b>  </div>
                                         <div v-if="coupon.type=='deal'"   style="color:blue;"> <b>Deal  </b></div>
                                   </p>
                          
 
                                       
                                    </div>
                                    <div class="r-flex tw-leading-tight tw-w-5/6 sm:tw-ml-6 tw-ml-4">
                                        <div class="tw-flex-grow tw-pr-4 coupon-card-inner-container">
                                        

                                                <p class="tw-text-grey sm:tw-text-base tw-text-xs ">     <a :href="base_url+'store/'+coupon.store.custom_url" class="row" title=" ">
                                                    {{coupon.store.name}}
                                                  </a></p>
                                            <span  href="#" rel="nofollow" class="coupon-card-label tw-text-grey-darker sm:tw-text-xl tw-text-lg tw-font-medium hover:tw-text-blue ">
                                              {{coupon.name}}
                                            </span>
                                             
                                        </div>
                                        <div class=" md:tw-flex tw-items-start tw-whitespace-no-wrap tw-min-w-1/4">
                                            <div rel="nofollow" class="tw-relative tw-rounded-sm tw-overflow-hidden tw-cursor-pointer tw-w-full ">


                          <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="btn"
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto;width: 100%" 
                                  >
                             <div v-if="coupon.type=='deal'" class="ohop deal">
                                    <div class="r-button r-padding  tw-bg-blue hover:tw-bg-blue-dark tw-text-center tw-text-white tw-py-2 tw-px-4">Get Deal
                                                </div>

                            </div>
                        </a>

                              <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass"
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >
                                       <div class="tw-bg-grey-lighter tw-border tw-text-grey-dark tw-text-right tw-w-full tw-p-1">{{coupon.coupon_code.slice(0,4)}}*****</div> 
                                                <div class="r-button r-padding tw-pin-t tw-pin-l tw-bg-blue hover:tw-bg-blue-dark tw-border tw-border-blue tw-text-center tw-text-white tw-min-w-5/6 ">Show Code
                                                </div>


                               

                               </a>


                                           

                                            

                                            </div>
                                        </div>


                                         

                                    </div>


                           

                                </div>

                               
                        <table style=" width: 100%;margin: 5px auto;">
                          <tr>
                              <!-- <td><i class="far fa-calendar "></i>  {{coupon.updated_date.split(' ')[0]}}</td> -->
                              <td><i class="far fa-eye"></i>          {{coupon.visits}} used total</td>
                              <td><i class="far fa-clock"></i>  {{coupon.expire_date}}</td>
                          </tr>
                        </table>
                           

                            </div>
                            </div>

        
    </div>




     
    </div>
    </div>
</section>
 
<section class="homepage categories" style="padding: 0px">
   <div class="happy-hunting container">     
         <h2 class="title">Popular Categories</h2>  `
             <p class="sub-heading">
                 Check out curated deals from some of the most popular categories  
                 </p>      

              <center>   
                  <ul class="stores-list row">
                    <li  v-for="category in popular_categories"  class="col-xs-6 col-md-2 "  >
<div style="margin: 10px;background: #f5f5f5;">
                                                                   
                                          <a :href="base_url+'category/'+category.slug"  class="row" title=" ">
                                                  <div class="img-container " style="margin-top: 8px;">

                                                     <div   v-if="!category.feature_image" class="col-xs-12" > 
                                                       <i   :class="'fa fa-'+category.icon " style="font-size: 40px; "></i> </div>
                                                    <center>    
                                                      <img 
                                                      class="img-responsive "
                                                      v-if="category.feature_image"  
                                                      v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image" 
                                                      v-bind:alt="category.name" 
                                               style="width: 75px;height:  52px;" 
                                                      />
                                                  </center>
                                            
                                                               <span  class="col-xs-12 " style="overflow: hidden;height: 29px;    text-transform: uppercase;" >{{category.name}}</span>
                                                  </div>
                                                
                                              </a>
                                            </div>
                                         </li>

                  </ul>
       </center>
        <div class="action"><i class="view-more"></i></div>
    </div>
</section>

<section class="main-content content-section homepage-section"  style="padding: 0px">
    <div class="container">
    <div class="row">
    <div class="article">
        <h1 class="h3">Today's Most Popular Coupons & Deals</h1>
 <div  v-for="coupon in popular_coupons"  class="col-md-6 col-xs-12 "  style="height: 178px;margin-bottom: 38px;"> 
  <div  class=" tw-m-2  tw-rounded-sm tw-shadow tw-bg-white sm:tw-p-4 tw-p-2 sm:tw-mb-4 tw-mb-2 xl:tw-h-full1">
                                <div class="tw-flex lato tw-h-full1">
                                    <div class="tw-text-center xl:tw-w-1/6 tw-w-1/4 xl:tw-min-w-1/6 tw-min-w-1/4">
                                   <a :href="base_url+'store/'+coupon.store.custom_url" class="row" title=" ">
                                       <div    v-if="coupon.short_title"   class="coupon-label-context coupon roboto-slab tw-font-bold tw-leading-tight tw-my-0 ">
                                            <div class="tw-inline-block cdroboto-slab tw-text-orange sm:tw-text-4xl  ">
                                                {{coupon.short_title.split(' ')[0]}}
                                            </div>
                                            <div class="off__label">   {{coupon.short_title.split(' ')[1]}}</div>

                                        </div> 


                                        <img
                                            v-if="!coupon.short_title && coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image" class="lazy-load img-responsive"
                                                   style="width: 100px; height: 72px;" 
                                             />

                                        <img
                                            v-if="!coupon.short_title && !coupon.feature_image && coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image" class="lazy-load img-responsive"
                                                   style="width: 100px; height: 72px;" 
                                             />
                                           </a>

                                 <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">           
                                        <div v-if="coupon.type=='coupon'"   style="color:orange;">  <b> Code </b>  </div>
                                         <div v-if="coupon.type=='deal'"   style="color:blue;"> <b>Deal  </b></div>
                                   </p>
                          
 
                                       
                                    </div>
                                    <div class="tw-flex tw-leading-tight tw-w-5/6 sm:tw-ml-6 tw-ml-4">
                                        <div class="tw-flex-grow tw-pr-4 coupon-card-inner-container">
                                        

                                                <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">     <a :href="base_url+'store/'+coupon.store.custom_url" class="row" title=" ">
                                                    {{coupon.store.name}}
                                                  </a></p>
                                            <span  href="#" rel="nofollow" class="coupon-card-label tw-text-grey-darker sm:tw-text-xl tw-text-lg tw-font-medium hover:tw-text-blue lato">
                                              {{coupon.name}}
                                            </span>
                                             
                                        </div>
                                        <div class=" md:tw-flex tw-items-start tw-whitespace-no-wrap tw-min-w-1/4">
                                            <div rel="nofollow" class="tw-relative tw-rounded-sm tw-overflow-hidden tw-cursor-pointer tw-w-full lato">


                          <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="btn"
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto;width: 100%" 
                                  >
                             <div v-if="coupon.type=='deal'" class="ohop deal">
                                    <div class="r-button r-padding  tw-bg-blue hover:tw-bg-blue-dark tw-text-center tw-text-white tw-py-2 tw-px-4">Get Deal
                                                </div>

                            </div>
                        </a>

                              <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass"
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >
                                       <div class="tw-bg-grey-lighter tw-border tw-text-grey-dark tw-text-right tw-w-full tw-p-1">{{coupon.coupon_code.slice(0,4)}}*****</div> 
                                                <div class="r-button r-padding  tw-pin-t tw-pin-l tw-bg-blue hover:tw-bg-blue-dark tw-border tw-border-blue tw-text-center tw-text-white tw-min-w-5/6 tw-p-2">Show Code
                                                </div>


                               

                               </a>


                                           

                                            

                                            </div>
                                        </div>


                                         

                                    </div>


                           

                                </div>

                               
                        <table style=" width: 100%;margin: 5px auto;">
                          <tr>
                              <td><i class="far fa-calendar "></i>  {{coupon.updated_date.split(' ')[0]}}</td>
                              <td><i class="far fa-eye"></i>          {{coupon.visits}} used total</td>
                              <td><i class="far fa-clock"></i>  {{coupon.expire_date}}</td>
                          </tr>
                        </table>
                           

                            </div>
                            </div>

        
    </div>




     
    </div>
    </div>
</section>

<section class="homepage stores" style="padding: 0px">
<div class="happy-hunting container">
  <h2 class="title">Popular Stores</h2> 

  <p class="sub-heading">
      Check out curated deals from some of the most popular Stores  
      </p> <div class="col-lg-12 happy-hunting-heading-list">

 
        <div class="row"> 
            <div   v-for="store in popular_stores.slice(0,36)" class="col-lg-2 col-md-3 col-sm-4 col-xs-6" ><a :href="base_url+'store/'+store.custom_url"  >{{store.name}}</a></div>
        </div>
        <div class="action"><i class="view-more"></i></div>
    

      </div>

    </div>

  
</section>
