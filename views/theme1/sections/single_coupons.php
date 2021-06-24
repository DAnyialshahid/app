<li v-cloak   v-for="coupon in coupons" v-if="new Date()<new Date(coupon.expire_date)"  class="obox code clearfix" id="c66886695" data-id="66886695" data-sid="8" data-coupon="yes" data-deal="no" data-freeshipping="no" data-verified="no" data-page="" data-type="c" data-otype="code" style="" >
                        <div class="ocontent" >
                            <!-- <button class="save-coupon" aria-label="Save Coupon"><i class="df-save-o"></i></button> -->
                            <div class="odata">
                                <div class=" ">
                                     <div class="coupon-label">

                                      <div    v-if="coupon.short_title"   class="coupon-label-context coupon" style="justify-content: center;font-size: min(max(18px, 4vw), 23px);padding-right: 22px;color: rgb(0, 162, 225);text-align: center;vertical-align: middle;margin-top: 20%;margin-bottom: auto;"> <div class="value__label">
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
                                            <div class="olabel ">
                                                {{coupon.store.name}} 
                                            </div>
                                            
                                            <div v-if="coupon.type=='coupon'" class="olabel code">
                                                Code
                                            </div>     
                                            <div v-if="coupon.type=='deal'" class="olabel deal">
                                                Deal
                                            </div> 

                                            <span class="coupon_labels hidden-mb">
                                                <span v-if="coupon.verified!=0" class="overified" style="color:green;"> Verified </span> 
                                                <span v-if="coupon.exclusive!=0" class="overified" style="color:red;"> Exclusive </span>
                                                <span v-if="coupon.featured!=0" class="overified" style="color:orange;"> Featured </span> 
                                            </span>

                                            
                                        </div>
                                        <div class="odisplay">
                                            <div class="otitle">
                                                           {{coupon.name}}
                                            </div>   

                                            <div style="max-height: 37px;overflow-y: hidden; min-height: 44px;" v-html="coupon.description">
                                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="btn"
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  >
                             <div v-if="coupon.type=='deal'" class="ohop deal">
                                <div class="odeal">
                                    Get deal
                                </div>
                            </div>
                        </a>

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
                                    <div class="code-action">Get code</div>

                                    <div class="ocode" style="overflow: hidden; "> {{coupon.coupon_code}}</div>
                                </div> 
                            </div>
                           </a>
                        </div>
                        <div class="oactions">  
                         <table style="width: 100%"><tr>
                            <td><i class="far fa-calendar "  style="font-family: 'Font Awesome 5 Pro' !important;"></i>  {{coupon.updated_date}}</td>
                            <td><i class="far fa-eye"        style="font-family: 'Font Awesome 5 Pro' !important;"></i>          {{coupon.visits}} used total</td>
                            <td><i class="far fa-clock"      style="font-family: 'Font Awesome 5 Pro' !important;"></i>  {{coupon.expire_date}}</td>
                        </tr></table>
                      </div>
                         
                     
                </li>
 




