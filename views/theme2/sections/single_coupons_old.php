<div v-for="coupon in coupons" >
	 <li    class="obox code clearfix" id="" data-id="" data-sid="" data-coupon="yes" data-deal="no" data-freeshipping="no" data-verified="yes" data-page="" data-type="c" data-otype="code">
                    <div class="ocontent">
                        <button class="save-coupon" aria-label="Save Coupon"><i class="df-save-o"></i></button>
                        <div class="odata">
                            <div class="otype">
                                <a href="#" title="" class="store-logo">
                                    <img
                                        v-if="coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image" class="lazy-load img-responsive"
                                         />
                                   <img
                                        v-if="!coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.type+'.png'" class="lazy-load img-responsive"
                                         />
                                </a>
                            </div>
                            <div class="obody">
                                <div class="otop">
                                    <div class="ostats">
                                        <div class="overified">
                                            Verified
                                        </div>
                                        <div class="ostore"><a href="#">{{coupon.store.name}}</a></div>
                                    </div>
                                    <div class="odisplay" >
                                        <div class="otitle">
                                                {{coupon.name}}
                                        </div>
                                        <div v-html="coupon.description"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div        v-if="coupon.type=='coupon'"   class="ohop code">
                            <a t
                             target="_blank" 
                             class="btn"
                             :data-clipboard-text="coupon.coupon_code" 
                             v-on:click="loadCouponAffilate(coupon)"
                             :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                             :coupon_id="coupon.id"
                               >
                                <div class="code-container"  >
                                <div class="code-action">Get code</div>
                                <div class="ocode"> {{coupon.coupon_code}}</div>
                            </div>
                        </a>
                        </div>
                         <div    v-if="coupon.type=='deal'"  class="ohop deal">
                         
                                 <a target="_blank" v-on:click="loadCouponAffilate(coupon)" :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id">

                                  <div class="odeal"> Get deal
                                          </div></a>
                              
                            </div>
                               
                         
                    </div>
                    <div class="oactions">
                        <table style="width: 100%"><tr>
                            <td><i class="far fa-calendar "></i>  {{coupon.updated_date}}</td>
                            <td><i class="far fa-eye"></i>          {{coupon.visits}} used total</td>
                            <td><i class="far fa-clock"></i>  {{coupon.expire_date}}</td>
                        </tr></table>
                       

                       
                    </div>
                     
                     
                </li>

</div>




