
     <li   v-for="coupon in coupons" v-if="new Date()>new Date(coupon.expire_date)"  class="obox code clearfix oexpired" id="c49712722" data-id="49712722" data-sid="8" data-coupon="yes" data-deal="no" data-freeshipping="no" data-verified="no" data-page="" data-type="c" data-otype="code">
                    <div class="ocontent">

                        <button class="save-coupon" aria-label="Save Coupon"><i class="df-save-o"></i></button>
                        <div class="odata">
                            <div class="otype">
                                <div class="coupon-label">
                                  <div    v-if="coupon.short_title"   class="coupon-label-context coupon">
                                        <div class="value__label">
                                            {{coupon.short_title.split(' ')[0]}}
                                        </div>
                                        <div class="off__label">   {{coupon.short_title.split(' ')[1]}}</div>
                                    </div>

                                    <img
                                        v-if="!coupon.short_title && coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image" class="lazy-load img-responsive"
                                         />


                                </div>
                            </div>
                            <div class="obody">
                                <div class="otop">
                                    <div class="ostats">
                                        <div v-if="coupon.type=='coupon'" class="olabel code">
                                            Code
                                        </div>     
                                        <div v-if="coupon.type=='deal'" class="olabel deal">
                                            Deal
                                        </div>  
                                        <div class="olabel ">
                                            {{coupon.store.name}} 
                                        </div>
                                    </div>
                                    <div class="odisplay">
                                        <div class="otitle">
                                                       {{coupon.name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div v-if="coupon.type=='deal'" class="ohop deal">
                            <div class="odeal">
                                Get deal
                            </div>
                        </div>
                        

                          <a  v-if="coupon.type=='coupon'"   target="_blank" 
                             class="btn"
                             :data-clipboard-text="coupon.coupon_code" 
                             v-on:click="loadCouponAffilate(coupon)"
                             :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                             :coupon_id="coupon.id"
                             style="bottom:auto" 
                              >
                     <div class="ohop code">
                            <div class="code-container">
                                <div class="ocode revealed"  ><span class="ellipsis"> {{coupon.coupon_code}}</span></div>
                            </div>
                        </div>
                         
                          </a>
                    </div>

                    
                    
                    
                     
                </li>