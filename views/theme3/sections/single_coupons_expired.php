
<div v-for="coupon in coupons"    class="card coupon cbox hoverable promotion" style="  -webkit-filter: grayscale(1);" >
       <template v-if="new Date()>new Date(coupon.expire_date)"    >
           
        <div class="offer-short">
                    <div>     {{coupon.short_title.split(' ')[0]}}      {{coupon.short_title.split(' ')[1]}}</div>
                                       <div v-if="coupon.type=='coupon'"   style="font-size: 16px;color:#e2a93f;">  <b> Code </b>  </div>
                                         <div v-if="coupon.type=='deal'"   style="font-size: 16px;color:#5858c7;"> <b>Deal  </b></div>
                    </div>
    <div class="ccontent">
        <p v-if="comeFrom=='category'"  >    {{coupon.store.name}} </p>

        <h3 class="title">  {{coupon.name}} </h3>
        <div class="coupon-desc">{{coupon.description}}

        </div>
                
                <hr>
        <div class="cfooter s12">
                            <span><i class="fa fa-clock-o"></i>{{coupon.updated_date.split(' ')[0]}}</span>
                            <span><i class="fa fa-eye"></i>  {{coupon.visits}} used total</span>
                        <span><i class="far fa-clock"></i>Expire  on {{coupon.expire_date}}</span>
        </div>
    </div>
    <div class="cbtn">


          <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="clipClass btn go-cpn btn-offer waves-effect waves-light"
                                 :data-clipboard-text="'DEAL Activated'" 
                           
                                 :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                 :d-coupon_id="coupon.id"
                                 d-redirect="yes"
                                 style="bottom:auto" 
                       >Get Deal 
                        </a>

                              <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class=" clipClass btn go-cpn btn-offer waves-effect waves-light"
                                     :data-clipboard-text="coupon.coupon_code" 
                
                                     :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                     :d-coupon_id="coupon.id"
                                     d-redirect="yes"
                                     style="bottom:auto" 
                                      >
                                    Copy  {{coupon.coupon_code.slice(0,2)}}***

                               

                               </a>



                    <!-- <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a> -->


            </div>
    <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
    <div class="clear"></div>
    
        </template>
    </div>


 


