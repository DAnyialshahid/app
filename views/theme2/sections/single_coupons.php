  <div     class="item-bolcks">
  <div  v-for="coupon in coupons"    dusk="coupon-card" class="tw-cursor-auto">
    <template v-if="new Date()<new Date(coupon.expire_date)"   >
                            <div class="tw-rounded-sm tw-shadow tw-bg-white sm:tw-p-4 tw-p-2 sm:tw-mb-4 tw-mb-2 xl:tw-h-full1">
                                <div class="tw-flex lato tw-h-full1">
                                    <div class="tw-text-center xl:tw-w-1/6 tw-w-1/4 xl:tw-min-w-1/6 tw-min-w-1/4">

                                       <a  v-if="comeFrom=='category'"  :href="base_url+'store/'+coupon.store.custom_url">     <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">    
                                   {{coupon.store.name}}

                                      </p></a>

                                       <div    v-if="coupon.short_title"   class="coupon-label-context coupon roboto-slab tw-font-bold tw-leading-tight tw-my-0 ">
                                            <div class="tw-inline-block cdroboto-slab tw-text-orange sm:tw-text-5xl tw-text-4xl">
                                                {{coupon.short_title.split(' ')[0]}}
                                            </div>
                                            <div class="off__label">   {{coupon.short_title.split(' ')[1]}}</div>

                                        </div> 


                                        <img
                                            v-if="!coupon.short_title && coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image" class="lazy-load img-responsive"
                                             />

                                        <img
                                            v-if="!coupon.short_title && !coupon.feature_image && coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image" class="lazy-load img-responsive"
                                             />


                                 <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">           
                                        <div v-if="coupon.type=='coupon'"   style="color:orange;">  <b> Code </b>  </div>
                                         <div v-if="coupon.type=='deal'"   style="color:blue;"> <b>Deal  </b></div>
                                   </p>
                          
 
                                       
                                    </div>
                                    <div class="tw-flex tw-leading-tight tw-w-5/6 sm:tw-ml-6 tw-ml-4">
                                        <div class="tw-flex-grow tw-pr-4 coupon-card-inner-container">
                                          <div class="row">
 
                                            <div v-if="coupon.verified==1" class="col-xs-2 tw-text-green sm:tw-border sm:tw-border-green sm:tw-text-green sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1" style="color: ;"> Verified </div>
                                            <div v-if="coupon.exclusive==1" class="col-xs-2 tw-text-blue sm:tw-border sm:tw-border-blue sm:tw-text-blue sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1" style="color: ;"> Exclusive </div>
                                            <div v-if="coupon.featured==1" class="col-xs-2 tw-text-orange sm:tw-border sm:tw-border-orange sm:tw-text-orange sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1" style="color: ;"> Featured </div> 
                                          </div>

                                                <!-- <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">    {{coupon.store.name}} </p> -->
                                            <a dusk="coupon-card-label" href="/go/1210607" rel="nofollow" class="tw-text-grey-darker sm:tw-text-xl tw-text-lg tw-font-medium hover:tw-text-blue lato">
                                               {{coupon.name}}
                                            </a>
                                            <div class="sm:tw-leading-loose tw-leading-normal">
                                                <div class="tw-relative tw-hidden lg:tw-block tw-text-grey-darker tw-font-light tw-cursor-pointer">
                                                    <span>Details: <i class="fa-caret-right fa"></i></span>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-hidden md:tw-flex tw-items-start tw-whitespace-no-wrap tw-min-w-1/4">
                                            <div rel="nofollow" class="tw-relative tw-rounded-sm tw-overflow-hidden tw-cursor-pointer tw-w-full lato">


                          <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="clipClass"
                                 :data-clipboard-text="'DEAL Activated'" 
                           
                                 :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                 :d-coupon_id="coupon.id"
                                 d-redirect="yes"
                                 style="bottom:auto" 
                                  >
                             <div v-if="coupon.type=='deal'" class="ohop deal">
                                    <div class="tw-bg-blue hover:tw-bg-blue-dark tw-text-center tw-text-white tw-py-2 tw-px-4">Get Offer
                                                </div>

                            </div>
                        </a>

                              <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class=" clipClass "
                                     :data-clipboard-text="coupon.coupon_code" 
                
                                     :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                     :d-coupon_id="coupon.id"
                                     d-redirect="yes"
                                     style="bottom:auto" 
                                      >
                                       <div class="tw-bg-grey-lighter tw-border tw-text-grey-dark tw-text-right tw-w-full tw-p-2">{{coupon.coupon_code}}</div> 
                                                <div class="tw-absolute tw-pin-t tw-pin-l tw-bg-blue hover:tw-bg-blue-dark tw-border tw-border-blue tw-text-center tw-text-white tw-min-w-5/6 tw-p-2">Show Code
                                                </div>


                               

                               </a>


                                           

                                            

                                            </div>
                                        </div>


                                         

                                    </div>


                           

                                </div>

                               
                        <table style=" width: 100%">
                          <tr>
                              <td><i class="far fa-calendar "></i>  {{coupon.updated_date.split(' ')[0]}}</td>
                              <td><i class="far fa-eye"></i>          {{coupon.visits}} used total</td>
                              <td><i class="far fa-clock"></i>  {{coupon.expire_date}}</td>
                          </tr>
                        </table>
                           

                            </div>

                               </template>
 </div>
 </div>


          



