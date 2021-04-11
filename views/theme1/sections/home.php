 
<div id="home">
<section class="homepage banners bg-white" >
    <div class="container">
      <div class="owl-carousel owl-theme">

            <a v-for="slide in slides"  :href="slide.link">
              <img class="owl-lazy"   :data-src="api_url+'/assets/uploads/slides/'+slide.file_name"   alt="" style="height: 320px">
             </a>
            </div>
        <!-- <a href="#">
            <img
                src="https://static.dontpayfull.com/static/images/banners/amazon-discount-finder-desktop.png"
                srcset="https://static.dontpayfull.com/static/images/banners/amazon-discount-finder-desktop@2x.png"
                class="img-responsive"
                alt="Amazon Discount Finder Banner"
            />
        </a> -->
    </div>
</section>
<section class="homepage featured" style="    padding: 12px 0;">
    <div class="container">
        <h3>Free Online Coupons and Promo Codes for the Store You Love!</h3>
        <nav>
            <a v-for="store in show_in_home_stores" :href="base_url+'store/'+store.custom_url"  :title="store.name" style="display: flex;" > <img  class="img-responsive lazy-load"  v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image"
                                       v-bind:alt="store.name" style="    vertical-align: middle;"/>
            </a>  
        </nav>
    </div>
</section>
<section class="homepage offers" style="padding:   0;">
    <div class="container">
        <h1 class="h3">Recommended Offers for You</h1>
        <ul id="recommneded-coupons" class="coupons-container two-cols" style="margin:   0;"> 
        <li v-for="coupon in recommended_coupons"   class="obox deal clearfix"  >
                <div class="ocontent">
                    <button class="save-coupon" aria-label="Save Coupon"><i class="df-save-o"></i></button>
                    <div class="odata">
                        <div class="otype">
                            <a :href="base_url+'store/'+coupon.store.custom_url"   class="store-logo">
                                <img
                                            v-if="coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.
                                            store.feature_image" class="lazy-load img-responsive"
                                             />
                            </a>
                        </div>
                        <div class="obody">
                            <div class="otop">
                                <div class="ostats">
                                    <div class="ostore"><a :href="base_url+'store/'+coupon.store.custom_url"  >     {{coupon.store.name}} </a></div>
                                </div>
                                <div class="odisplay">
                                    <div class="otitle">
                                         {{coupon.name}}
                                    </div>
                            
                                </div>
                            </div>
                            <div class="obottom">
                                <div class="oexpire">
                                   
                                    <time v-if="coupon.expiry_date"> Ends On  {{coupon.expiry_date}}</time>
                                </div>
                            </div>
                        </div>
                    </div>
                          <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="btn"
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
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
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  >
                            <div class="ohop code"> 
                                  <div class="code-container"> 
                                    <div class="code-action">Get code</div>

                                    <div class="ocode"> {{coupon.coupon_code}}</div>
                                </div> 
                            </div>
                           </a>
                </div>
                <div class="oactions">
                    <div class="action details-terms-action" data-toggle="oterms">Details &amp; terms</div>
                    <div class="action comm-action hidden" data-toggle="ocomments"><div class="comments show-comments"></div></div>
                    <img data-src="https://www.dontpayfull.com/coupons/trackview/id/66806792?source=" class="lazytrack" alt="66806792" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" />
                </div>
                <div class="odetails ocomments">
                    <div class="close-odetails"><i class="df df-close"></i></div>
                    <div class="osection comments-box"></div>
                </div>
                <div class="odetails oterms">
                    <div class="close-odetails"><i class="df df-close"></i></div>
                    <div class="osection details-terms-box">
                        <p><b>Offer's Details:</b> Get Free $10 Gift Card on Better Love Rabbit Lily Purchase. Shop online at ellaparadis.com. This deal will help you save money.</p>
                        <p><b>Expires:</b> <span>Tomorrow</span></p>
                        <p><b>Terms:</b></p>
                        <ul>
                            <li>Cannot be combined with any other coupon.</li>
                            <li>Discount applies to selected products.</li>
                            <li>Exclusions may apply.</li>
                            <li>This deal is valid one time only.</li>
                            <li>This offer is only available online.</li>
                        </ul>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</section>
<section class="homepage offers" style="padding: 0px;">
    <div class="container">
        <h1 class="h3">Today's Most Popular Coupons &amp; Deals</h1>
        <ul id="homepage-coupons" class="coupons-container two-cols"> 
                <li v-for="coupon in popular_coupons"   class="obox deal clearfix"  >
                <div class="ocontent">
                    <button class="save-coupon" aria-label="Save Coupon"><i class="df-save-o"></i></button>
                    <div class="odata">
                        <div class="otype">
                            <a :href="base_url+'store/'+coupon.store.custom_url"   class="store-logo">
                                <img
                                            v-if="coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.
                                            store.feature_image" class="lazy-load img-responsive"
                                             />
                            </a>
                        </div>
                        <div class="obody">
                            <div class="otop">
                                <div class="ostats">
                                    <div class="ostore"><a :href="base_url+'store/'+coupon.store.custom_url"  >   {{coupon.store.name}} </a></div>
                                </div>
                                <div class="odisplay">
                                    <div class="otitle">
                                         {{coupon.name}}
                                    </div>
                            
                                </div>
                            </div>
                            <div class="obottom">
                                <div class="oexpire">
                                   
                                    <time v-if="coupon.expiry_date"> Ends On  {{coupon.expiry_date}}</time>
                                </div>
                            </div>
                        </div>
                    </div>
                          <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="btn"
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
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
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  >
                            <div class="ohop code"> 
                                  <div class="code-container"> 
                                    <div class="code-action">Get code</div>

                                    <div class="ocode"> {{coupon.coupon_code}}</div>
                                </div> 
                            </div>
                           </a>
                </div>
                <div class="oactions">
                    <div class="action details-terms-action" data-toggle="oterms">Details &amp; terms</div>
                    <div class="action comm-action hidden" data-toggle="ocomments"><div class="comments show-comments"></div></div>
                    <img data-src="https://www.dontpayfull.com/coupons/trackview/id/66806792?source=" class="lazytrack" alt="66806792" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" />
                </div>
                <div class="odetails ocomments">
                    <div class="close-odetails"><i class="df df-close"></i></div>
                    <div class="osection comments-box"></div>
                </div>
                <div class="odetails oterms">
                    <div class="close-odetails"><i class="df df-close"></i></div>
                    <div class="osection details-terms-box">
                        <p><b>Offer's Details:</b> Get Free $10 Gift Card on Better Love Rabbit Lily Purchase. Shop online at ellaparadis.com. This deal will help you save money.</p>
                        <p><b>Expires:</b> <span>Tomorrow</span></p>
                        <p><b>Terms:</b></p>
                        <ul>
                            <li>Cannot be combined with any other coupon.</li>
                            <li>Discount applies to selected products.</li>
                            <li>Exclusions may apply.</li>
                            <li>This deal is valid one time only.</li>
                            <li>This offer is only available online.</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="homepage categories" style="    padding: 0px 0;">
    <div class="container">
        <h3>Popular Categories</h3>
        <nav class="popular_categories"> 

                    <a v-for="category in popular_categories"  class="popular-category" :href="base_url+'category/'+category.slug"  > 
                        <i v-if="!category.feature_image"  :class="'fa fa-'+category.icon"></i> 
                              <center>    
                                            <img 
                                            class="img-responsive "
                                            v-if="category.feature_image"  
                                            v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image" 
                                            v-bind:alt="category.name" 
                                            style="width: 87px; height: 55px;" 
                                            />
                                        </center>
                      <span>{{category.name}}</span> 

                    </a>
                         

        </nav>
        <div class="action"><i class="view-more"></i></div>
    </div>
</section>
<section class="homepage stores">
    <div class="container">
        <h3>Popular Stores</h3>
        <div class="row"> 
            <div   v-for="store in popular_stores" class="col-lg-2 col-md-3 col-sm-4 col-xs-6" ><a :href="base_url+'store/'+store.custom_url"  >{{store.name}}</a></div>
        </div>
        <div class="action"><i class="view-more"></i></div>
    </div>
</section>
</div>