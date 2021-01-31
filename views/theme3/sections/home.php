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
                                                                    <li class="tab col s2 waves-effect"><a rel="nofollow" class="active" href="#offer-tab-topoffers">Top Offers</a></li>
                                                                                            <li class="tab col s2 waves-effect"><a rel="nofollow" class="active" href="#offer-tab-fashion">Fashion</a></li>
                                                                                            <li class="tab col s2 waves-effect"><a rel="nofollow" class="active" href="#offer-tab-electronics">Electronics</a></li>
                                                                                            <li class="tab col s2 waves-effect"><a rel="nofollow" class="active" href="#offer-tab-travel">Travel</a></li>
                                                                                            <li class="tab col s2 waves-effect"><a rel="nofollow" class="active" href="#offer-tab-food">Food</a></li>
                                                                                            <li class="tab col s2 waves-effect"><a rel="nofollow" class="active" href="#offer-tab-mobiles">Mobiles</a></li>
                                                                                            <li class="tab col s2 waves-effect"><a rel="nofollow" class="active" href="#offer-tab-recharge">Recharge</a></li>
                                                            <div class="indicator" style="right: 1097.14px; left: 0px;"></div></ul>
            </div>
        </div>
        <div class="cboxsq-container">
                                                        <div id="offer-tab-topoffers" class="col s12">
                    <div class="row">
                      
                        <div class="col s12 m6 l4"  v-for="coupon in recommended_coupons"  >
    
    <div    class="card coupon cboxsq  hoverable promotion"  >
                    <div class="ribbon"><span>Exclusive</span></div>
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
                                                            <div id="offer-tab-fashion" class="col s12" style="display: none;">
                    <div class="row">
                                                    <div class="col s12 m6 l4">
    
    <div id="c-46674" class="card coupon cboxsq  hoverable promotion" data-cid="46674" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="1786" data-go="https://www.couponchaska.com/go/flipkart-end-of-season-sale-2017-offers-upto-80-off-on-clothing-footwear-watches-jewellery-beauty-products/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>80% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flipkart End of Season Sale 2018 Offers: Upto 80% Off on Clothing, Footwear, Watches, Jewellery &amp; Beauty Products</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-19727" class="card coupon cboxsq  hoverable promotion" data-cid="19727" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="23482" data-go="https://www.couponchaska.com/go/flipkart-fashion-offers-promo-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>90% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flipkart Fashion Sale : Minimum 40% To 90% OFF on All Lifestyle Products</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-45660" class="card coupon cboxsq  hoverable promotion" data-cid="45660" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/jabong_coupons-1.png" data-store-name="Jabong" data-visits="406" data-go="https://www.couponchaska.com/go/jabong-fashion-sale-flat-50-off-or-more-on-all-lifestyle-products/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/jabong-coupons/" title="Jabong offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/jabong_coupons-1.png" alt="Jabong offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>50% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Jabong Fashion Sale: flat 50% off or More on all Lifestyle Products (Jabong Coupons)</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/jabong-coupons/">See All Jabong Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-44829" class="card coupon cboxsq  hoverable coupon-code" data-cid="44829" data-type="coupon-code" data-code="HELLO1000" data-logo="https://www.couponchaska.com/images/store/jabong_coupons-1.png" data-store-name="Jabong" data-visits="2022" data-go="https://www.couponchaska.com/go/new-year-special-offer-flat-40-off-or-more-on-top-brands/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/jabong-coupons/" title="Jabong offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/jabong_coupons-1.png" alt="Jabong offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Extra 45% OFF </span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Extra 45% Off on Order of Rs.2000 or Above (First Purchase) - Jabong Coupons</p>
        <div class="cboxsq-btn">
                            <div class="code-container">HELLO1000</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/jabong-coupons/">See All Jabong Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-40633" class="card coupon cboxsq  hoverable promotion" data-cid="40633" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/amazon-coupons.jpg" data-store-name="Amazon India" data-visits="1628" data-go="https://www.couponchaska.com/go/flat-70-off-on-mens-clothing-8pm-11pm/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/amazon-coupons/" title="Amazon India offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/amazon-coupons.jpg" alt="Amazon India offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>80% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Amazon Fashion Sales &amp; Deals: Flat 40% to 80% Off on  Footwear, Clothing &amp; Fashion Accessories</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/amazon-coupons/">See All Amazon India Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-24080" class="card coupon cboxsq  hoverable promotion" data-cid="24080" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/ebay-coupons.png" data-store-name="eBay" data-visits="872" data-go="https://www.couponchaska.com/go/ebay-fashion-coupon-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/ebay-coupons/" title="eBay offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/ebay-coupons.png" alt="eBay offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>80% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">ebay Fashion Offers: Get Upto 80% OFF on Fashion For Men and Women</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/ebay-coupons/">See All eBay Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-22811" class="card coupon cboxsq  hoverable promotion" data-cid="22811" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/snapdeal.jpg" data-store-name="Snapdeal" data-visits="1699" data-go="https://www.couponchaska.com/go/snapdeal-diwali-fashion-offers/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/snapdeal-coupons/" title="Snapdeal offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/snapdeal.jpg" alt="Snapdeal offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>60% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Snapdeal Fashion Sale: Get Upto 80% OFF on Clothing, Footwear For Men and Women</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/snapdeal-coupons/">See All Snapdeal Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                            </div>
                </div>
                                                            <div id="offer-tab-electronics" class="col s12" style="display: none;">
                    <div class="row">
                                                    <div class="col s12 m6 l4">
    
    <div id="c-24546" class="card coupon cboxsq  hoverable promotion" data-cid="24546" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="66221" data-go="https://www.couponchaska.com/go/flipkart-electronics-discount-offers-promo-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>70% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flipkart Electronics Offers : Upto 70% Off on Laptops, Cameras, TV &amp; Large Appliances</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-23367" class="card coupon cboxsq  hoverable promotion" data-cid="23367" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/amazon-coupons.jpg" data-store-name="Amazon India" data-visits="16096" data-go="https://www.couponchaska.com/go/amazon-electronics-discount-promo-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/amazon-coupons/" title="Amazon India offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/amazon-coupons.jpg" alt="Amazon India offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Minimum 50% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Amazon Electronics Offers Today: Minimum 50% OFF on Laptops, TVs, Cameras &amp; More</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/amazon-coupons/">See All Amazon India Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-20669" class="card coupon cboxsq  hoverable promotion" data-cid="20669" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/ebay-coupons.png" data-store-name="eBay" data-visits="1163" data-go="https://www.couponchaska.com/go/ebay-diwali-electronics-offers/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/ebay-coupons/" title="eBay offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/ebay-coupons.png" alt="eBay offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>80% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">eBay Electronic Offers: Upto 80% OFF on Laptops, TVs &amp; Appliances</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/ebay-coupons/">See All eBay Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-25771" class="card coupon cboxsq  hoverable promotion" data-cid="25771" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/snapdeal.jpg" data-store-name="Snapdeal" data-visits="4590" data-go="https://www.couponchaska.com/go/snapdeal-diwali-electronics-sale/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/snapdeal-coupons/" title="Snapdeal offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/snapdeal.jpg" alt="Snapdeal offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>70% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Snapdeal Electronics Sale: Upto 70% Off on Laptops, TV, Mobiles Cameras &amp; More</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/snapdeal-coupons/">See All Snapdeal Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-41980" class="card coupon cboxsq  hoverable promotion" data-cid="41980" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/shopclues-coupons.jpg" data-store-name="Shopclues" data-visits="85" data-go="https://www.couponchaska.com/go/shopclues-diwali-electronics-sale-upto-70-off/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/shopclues-coupons/" title="Shopclues offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/shopclues-coupons.jpg" alt="Shopclues offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>80% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Shopclues Electronics Sale: Upto 80% Discount on Bestseller Products</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/shopclues-coupons/">See All Shopclues Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                            </div>
                </div>
                                                            <div id="offer-tab-travel" class="col s12" style="display: none;">
                    <div class="row">
                                                    <div class="col s12 m6 l4">
    
    <div id="c-38017" class="card coupon cboxsq  hoverable coupon-code" data-cid="38017" data-type="coupon-code" data-code="HOTEL17" data-logo="https://www.couponchaska.com/images/store/yatra.png" data-store-name="Yatra" data-visits="2966" data-go="https://www.couponchaska.com/go/get-upto-65-off-on-hotels/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/yatra-coupons/" title="Yatra offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/yatra.png" alt="Yatra offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>70% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Upto 70% Discount On Domestic Hotels (All Users)</p>
        <div class="cboxsq-btn">
                            <div class="code-container">HOTEL17</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/yatra-coupons/">See All Yatra Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-18838" class="card coupon cboxsq  hoverable coupon-code" data-cid="18838" data-type="coupon-code" data-code="YINTSALE" data-logo="https://www.couponchaska.com/images/store/yatra.png" data-store-name="Yatra" data-visits="3773" data-go="https://www.couponchaska.com/go/yatra-cashback-promo-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/yatra-coupons/" title="Yatra offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/yatra.png" alt="Yatra offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>20% Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flat 20% Cashback on International Flights</p>
        <div class="cboxsq-btn">
                            <div class="code-container">YINTSALE</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/yatra-coupons/">See All Yatra Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-15457" class="card coupon cboxsq  hoverable coupon-code" data-cid="15457" data-type="coupon-code" data-code="CCHASKA400" data-logo="https://www.couponchaska.com/images/store/zoomcar.png" data-store-name="ZoomCar" data-visits="785" data-go="https://www.couponchaska.com/go/zoomcar-paytm-wallet-offers-promo-code/">
                    <div class="ribbon"><span>Exclusive</span></div>
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/zoomcar-coupons/" title="ZoomCar offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/zoomcar.png" alt="ZoomCar offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Rs.400 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">CouponChaska Exclusive: Get ₹400 OFF on Car Booking on ₹2500 or Above</p>
        <div class="cboxsq-btn">
                            <div class="code-container">CCHASKA400</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/zoomcar-coupons/">See All ZoomCar Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-22367" class="card coupon cboxsq  hoverable coupon-code" data-cid="22367" data-type="coupon-code" data-code="HTLNEW" data-logo="https://www.couponchaska.com/images/store/makemytrip.png" data-store-name="MakeMyTrip" data-visits="5029" data-go="https://www.couponchaska.com/go/makemytrip-hotel-coupon-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/makemytrip-coupons/" title="MakeMyTrip offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/makemytrip.png" alt="MakeMyTrip offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>90% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flat 90% OFF on Hotel Booking</p>
        <div class="cboxsq-btn">
                            <div class="code-container">HTLNEW</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/makemytrip-coupons/">See All MakeMyTrip Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-40065" class="card coupon cboxsq  hoverable coupon-code" data-cid="40065" data-type="coupon-code" data-code="FLYNEW" data-logo="https://www.couponchaska.com/images/store/makemytrip.png" data-store-name="MakeMyTrip" data-visits="3066" data-go="https://www.couponchaska.com/go/upto-%e2%82%b920000-cashback-on-international-flights/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/makemytrip-coupons/" title="MakeMyTrip offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/makemytrip.png" alt="MakeMyTrip offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹25000 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">MakeMyTrip International Flight Offer: Upto ₹25000 Cashback On Flight Booking</p>
        <div class="cboxsq-btn">
                            <div class="code-container">FLYNEW</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/makemytrip-coupons/">See All MakeMyTrip Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-44629" class="card coupon cboxsq  hoverable coupon-code" data-cid="44629" data-type="coupon-code" data-code="INTHTLOFF" data-logo="https://www.couponchaska.com/images/store/makemytrip.png" data-store-name="MakeMyTrip" data-visits="2722" data-go="https://www.couponchaska.com/go/flat-25-off-on-international-hotel-bookings/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/makemytrip-coupons/" title="MakeMyTrip offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/makemytrip.png" alt="MakeMyTrip offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>25% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">MakeMyTrip International Hotel Bookings Offers:Flat 25% Off Discount Coupon</p>
        <div class="cboxsq-btn">
                            <div class="code-container">INTHTLOFF</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/makemytrip-coupons/">See All MakeMyTrip Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-20030" class="card coupon cboxsq  hoverable coupon-code" data-cid="20030" data-type="coupon-code" data-code="TRBO300" data-logo="https://www.couponchaska.com/images/store/treebo-hotels-coupons.png" data-store-name="Treebo Hotels" data-visits="236" data-go="https://www.couponchaska.com/go/treebo-hotel-discount-coupons/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/treebohotels-coupons/" title="Treebo Hotels offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/treebo-hotels-coupons.png" alt="Treebo Hotels offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Rs.300 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flat Rs.300 OFF On Hotels</p>
        <div class="cboxsq-btn">
                            <div class="code-container">TRBO300</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/treebohotels-coupons/">See All Treebo Hotels Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                            </div>
                </div>
                                                            <div id="offer-tab-food" class="col s12" style="display: none;">
                    <div class="row">
                                                    <div class="col s12 m6 l4">
    
    <div id="c-36982" class="card coupon cboxsq  hoverable coupon-code" data-cid="36982" data-type="coupon-code" data-code="KFCD02" data-logo="https://www.couponchaska.com/images/store/kfc-coupons.jpg" data-store-name="KFC" data-visits="367" data-go="https://www.couponchaska.com/go/flat-15-off-on-order-amount-of-%e2%82%b9-450/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/kfc-coupons/" title="KFC offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/kfc-coupons.jpg" alt="KFC offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>15% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flat 15% Off On Order Amount Of ₹450</p>
        <div class="cboxsq-btn">
                            <div class="code-container">KFCD02</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/kfc-coupons/">See All KFC Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-37713" class="card coupon cboxsq  hoverable coupon-code" data-cid="37713" data-type="coupon-code" data-code="FLAT75" data-logo="https://www.couponchaska.com/images/store/swiggy-coupons.png" data-store-name="Swiggy" data-visits="806" data-go="https://www.couponchaska.com/go/get-flat-%e2%82%b975-off-on-ordering-food/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/swiggy-coupons/" title="Swiggy offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/swiggy-coupons.png" alt="Swiggy offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Rs.75 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Swiggy coupon: Get Flat ₹75 OFF On Ordering  Food</p>
        <div class="cboxsq-btn">
                            <div class="code-container">FLAT75</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/swiggy-coupons/">See All Swiggy Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-20191" class="card coupon cboxsq  hoverable coupon-code" data-cid="20191" data-type="coupon-code" data-code="ADMIT50" data-logo="https://www.couponchaska.com/images/store/foodpanda-coupons.png" data-store-name="Foodpanda" data-visits="3290" data-go="https://www.couponchaska.com/go/foodpanda-papa-john-offers/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/foodpanda-coupons/" title="Foodpanda offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/foodpanda-coupons.png" alt="Foodpanda offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Rs.50 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Get flat Rs.50 off instantly on your first order</p>
        <div class="cboxsq-btn">
                            <div class="code-container">ADMIT50</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/foodpanda-coupons/">See All Foodpanda Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-41994" class="card coupon cboxsq  hoverable coupon-code" data-cid="41994" data-type="coupon-code" data-code="DOM30" data-logo="https://www.couponchaska.com/images/store/Nearbuy-Logo1.png" data-store-name="Nearbuy" data-visits="2750" data-go="https://www.couponchaska.com/go/nearbuy-dominos-coupon-flat-rs-50-cashback-on-dominos/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/nearbuy-coupons/" title="Nearbuy offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/Nearbuy-Logo1.png" alt="Nearbuy offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>30% Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Nearbuy Dominos Coupon: Flat 30% Cashback on Pizza</p>
        <div class="cboxsq-btn">
                            <div class="code-container">DOM30</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/nearbuy-coupons/">See All Nearbuy Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-39265" class="card coupon cboxsq  hoverable coupon-code" data-cid="39265" data-type="coupon-code" data-code="FAASOS" data-logo="https://www.couponchaska.com/images/store/faasos-coupons.jpg" data-store-name="Faasos" data-visits="2803" data-go="https://www.couponchaska.com/go/buy-1-get-1-offer-extra-15-cashback-via-mobikwik-wallet/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/faasos-coupons/" title="Faasos offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/faasos-coupons.jpg" alt="Faasos offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Buy 1 Get 1 Free</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">bogo offer: Buy 1 Get 1 Free</p>
        <div class="cboxsq-btn">
                            <div class="code-container">FAASOS</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/faasos-coupons/">See All Faasos Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                            </div>
                </div>
                                                            <div id="offer-tab-mobiles" class="col s12" style="display: none;">
                    <div class="row">
                                                    <div class="col s12 m6 l4">
    
    <div id="c-46789" class="card coupon cboxsq  hoverable promotion" data-cid="46789" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="4452" data-go="https://www.couponchaska.com/go/rs-1000-off-on-moto-c-plus-mobile-at-rs-5999-only/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Rs.1000 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Rs.1000 OFF on Moto C Plus Mobile @ Rs.5999 Only</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-46790" class="card coupon cboxsq  hoverable promotion" data-cid="46790" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="4131" data-go="https://www.couponchaska.com/go/extra-rs-500-dscount-on-moto-e4-plus-mobile/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Extra Rs.500 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Extra Rs.500 Dscount on Moto E4 Plus Mobile</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-46788" class="card coupon cboxsq  hoverable promotion" data-cid="46788" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="4540" data-go="https://www.couponchaska.com/go/flat-rs-6000-discount-on-moto-g5-plus-at-rs-10999-only/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Rs.6000 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flat Rs.6000 Discount on Moto G5 Plus @ Rs.10999 Only</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-46783" class="card coupon cboxsq  hoverable promotion" data-cid="46783" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="10235" data-go="https://www.couponchaska.com/go/flipkart-mobile-phone-offers-get-best-deals-discounts-on-various-smartphones/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>Mobile Offers</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flipkart Mobile Phone Offers: Get Best Deals &amp; Discounts on Various Smartphones</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-24548" class="card coupon cboxsq  hoverable promotion" data-cid="24548" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="242803" data-go="https://www.couponchaska.com/go/flipkart-mobile-exchange-coupon-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹13000 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flipkart Mobile Offers Today: Upto ₹13000 OFF on Bestselling Smartphones</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-41089" class="card coupon cboxsq  hoverable promotion" data-cid="41089" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/amazon-coupons.jpg" data-store-name="Amazon India" data-visits="3528" data-go="https://www.couponchaska.com/go/great-indian-festival-upto-55-off-on-mobile-phones-extra-15-off-via-hdfc-bank/">
                    <div class="ribbon"><span>Exclusive</span></div>
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/amazon-coupons/" title="Amazon India offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/amazon-coupons.jpg" alt="Amazon India offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>50% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Amazon Sale on Mobiles: Flat 50% Off On Latest Smartphones </p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/amazon-coupons/">See All Amazon India Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-44117" class="card coupon cboxsq  hoverable promotion" data-cid="44117" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/flipkart-coupons.png" data-store-name="Flipkart" data-visits="9216" data-go="https://www.couponchaska.com/go/%e2%82%b97000-flat-off-extra-%e2%82%b91500-off-on-apple-iphone-6-space-grey-16-gb/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/flipkart-coupons.png" alt="Flipkart offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹35000 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Upto ₹15000 Off on iphones + Extra ₹20000 Off On Exchange with Old Mobiles</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/flipkart-coupons/">See All Flipkart Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-46635" class="card coupon cboxsq  hoverable promotion" data-cid="46635" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/amazon-coupons.jpg" data-store-name="Amazon India" data-visits="2893" data-go="https://www.couponchaska.com/go/amazon-exclusive-buy-redmi-4a-at-rs-5999-only/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/amazon-coupons/" title="Amazon India offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/amazon-coupons.jpg" alt="Amazon India offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>HOT DEAL</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Amazon Exclusive: Buy Redmi 4A at Rs.5999 Only</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/amazon-coupons/">See All Amazon India Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-22971" class="card coupon cboxsq  hoverable coupon-code" data-cid="22971" data-type="coupon-code" data-code="MICROMAX10" data-logo="https://www.couponchaska.com/images/store/ebay-coupons.png" data-store-name="eBay" data-visits="467" data-go="https://www.couponchaska.com/go/syberplace-micromax-mobile-offers/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/ebay-coupons/" title="eBay offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/ebay-coupons.png" alt="eBay offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>10% Off</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Extra 10% OFF on Micromax Mobiles</p>
        <div class="cboxsq-btn">
                            <div class="code-container">MICROMAX10</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/ebay-coupons/">See All eBay Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-40597" class="card coupon cboxsq  hoverable promotion" data-cid="40597" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/amazon-coupons.jpg" data-store-name="Amazon India" data-visits="4580" data-go="https://www.couponchaska.com/go/asus-zenfone2-laser-at-8999-unlimited-4g-data-virtual-reality-free/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/amazon-coupons/" title="Amazon India offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/amazon-coupons.jpg" alt="Amazon India offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>New Release</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Amazon Exclusive Launch: Buy Asus Zenfone Go Mobile @ Rs.8499 Only</p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/amazon-coupons/">See All Amazon India Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-39636" class="card coupon cboxsq  hoverable promotion" data-cid="39636" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/amazon-coupons.jpg" data-store-name="Amazon India" data-visits="4628" data-go="https://www.couponchaska.com/go/asus-zenfone-max-series-smart-phone-for-%e2%82%b98999-free-cover-worth-%e2%82%b9200/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/amazon-coupons/" title="Amazon India offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/amazon-coupons.jpg" alt="Amazon India offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹6000 Off</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flat Rs.6000 Off on Samsung Galaxy C7 Pro (Navy Blue, 64GB) </p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/amazon-coupons/">See All Amazon India Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-41055" class="card coupon cboxsq  hoverable promotion" data-cid="41055" data-type="promotion" data-code="" data-logo="https://www.couponchaska.com/images/store/amazon-coupons.jpg" data-store-name="Amazon India" data-visits="3001" data-go="https://www.couponchaska.com/go/preorder-apple-iphone7-7plus-at-rs-60000-extra-launching-offers/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/amazon-coupons/" title="Amazon India offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/amazon-coupons.jpg" alt="Amazon India offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹1000 OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Get flat Rs.1000 off on Moto G Plus, 4th Gen (Black, 32 GB) </p>
        <div class="cboxsq-btn">
                            <a rel="nofollow" class="btn go-cpn btn-offer waves-effect waves-light">View Offer</a>
                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/amazon-coupons/">See All Amazon India Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                            </div>
                </div>
                                                            <div id="offer-tab-recharge" class="col s12" style="display: none;">
                    <div class="row">
                                                    <div class="col s12 m6 l4">
    
    <div id="c-46476" class="card coupon cboxsq  hoverable coupon-code" data-cid="46476" data-type="coupon-code" data-code="VODA20" data-logo="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" data-store-name="Mobikwik" data-visits="172" data-go="https://www.couponchaska.com/go/dishtv-recharge-offer-pay-for-3-months-and-get-1-month-free/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/mobikwik-coupons/" title="Mobikwik offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" alt="Mobikwik offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>20% OFF</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Vodafone Unlimited Plan: Get Flat 20% SuperCash on Vodafone Super Week</p>
        <div class="cboxsq-btn">
                            <div class="code-container">VODA20</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/mobikwik-coupons/">See All Mobikwik Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-34081" class="card coupon cboxsq  hoverable coupon-code" data-cid="34081" data-type="coupon-code" data-code="LOOT99" data-logo="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" data-store-name="Mobikwik" data-visits="342" data-go="https://www.couponchaska.com/go/%e2%82%b910-cashback-on-adding-money-of-minimum-%e2%82%b9100/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/mobikwik-coupons/" title="Mobikwik offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" alt="Mobikwik offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹15 Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Flat Rs.15 SuperCash on Recharge of Rs.99 or Above</p>
        <div class="cboxsq-btn">
                            <div class="code-container">LOOT99</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/mobikwik-coupons/">See All Mobikwik Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-9655" class="card coupon cboxsq  hoverable coupon-code" data-cid="9655" data-type="coupon-code" data-code="BILLNEW" data-logo="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" data-store-name="Mobikwik" data-visits="3216" data-go="https://www.couponchaska.com/go/flat-rs-200-payment-using-mobikwik-wallet/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/mobikwik-coupons/" title="Mobikwik offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" alt="Mobikwik offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>15% Off</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Get Flat 15% SuperCash on Electricity, Postpaid, Gas &amp; Utility Bill Payment</p>
        <div class="cboxsq-btn">
                            <div class="code-container">BILLNEW</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/mobikwik-coupons/">See All Mobikwik Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-42147" class="card coupon cboxsq  hoverable coupon-code" data-cid="42147" data-type="coupon-code" data-code="PREPAY" data-logo="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" data-store-name="Mobikwik" data-visits="223" data-go="https://www.couponchaska.com/go/get-up-to-rs-200-cashback-on-prepaid-recharges/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/mobikwik-coupons/" title="Mobikwik offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" alt="Mobikwik offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>3% Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Get Flat 3% Supercash On Prepaid mobile Recharges</p>
        <div class="cboxsq-btn">
                            <div class="code-container">PREPAY</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/mobikwik-coupons/">See All Mobikwik Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-39213" class="card coupon cboxsq  hoverable coupon-code" data-cid="39213" data-type="coupon-code" data-code="BILLDAY" data-logo="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" data-store-name="Mobikwik" data-visits="5784" data-go="https://www.couponchaska.com/go/upto-%e2%82%b960-cashback-on-recharge-and-bill-payments/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/mobikwik-coupons/" title="Mobikwik offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" alt="Mobikwik offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>20% Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Get 20% Cashback on Recharge &amp; Bill Payments</p>
        <div class="cboxsq-btn">
                            <div class="code-container">BILLDAY</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/mobikwik-coupons/">See All Mobikwik Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-41672" class="card coupon cboxsq  hoverable coupon-code" data-cid="41672" data-type="coupon-code" data-code="SUPERCASH" data-logo="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" data-store-name="Mobikwik" data-visits="311" data-go="https://www.couponchaska.com/go/mobikwik-new-user-promo-code-add-rs-50-or-more-and-get-flat-rs-50-cashback/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/mobikwik-coupons/" title="Mobikwik offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/mobikwik-coupons.jpg" alt="Mobikwik offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹65 Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Mobikwik New User Promo Code: Add Money of Rs.10 or More And Get Flat Rs 65 Cashback</p>
        <div class="cboxsq-btn">
                            <div class="code-container">SUPERCASH</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/mobikwik-coupons/">See All Mobikwik Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-21946" class="card coupon cboxsq  hoverable coupon-code" data-cid="21946" data-type="coupon-code" data-code="LAKHPATI" data-logo="https://www.couponchaska.com/images/store/paytm.png" data-store-name="Paytm" data-visits="12413" data-go="https://www.couponchaska.com/go/paytm-shopping-coupons/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/paytm-coupons/" title="Paytm offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/paytm.png" alt="Paytm offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>1 Lac Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Paytm Lakhpati Offer: Do at least one Recharge/Bill payment to win 1 lac Cashback</p>
        <div class="cboxsq-btn">
                            <div class="code-container">LAKHPATI</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/paytm-coupons/">See All Paytm Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-44197" class="card coupon cboxsq  hoverable coupon-code" data-cid="44197" data-type="coupon-code" data-code="NEW20" data-logo="https://www.couponchaska.com/images/store/freecharge_coupons.png" data-store-name="Freecharge" data-visits="2662" data-go="https://www.couponchaska.com/go/get-rs-20-cashback-on-recharge-of-rs-20-2/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/freecharge-coupons-promo-code-offers-today/" title="Freecharge offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/freecharge_coupons.png" alt="Freecharge offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹20 Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Get Rs.20 cashback on Recharge/Bill Payment of Rs.20 or above</p>
        <div class="cboxsq-btn">
                            <div class="code-container">NEW20</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/freecharge-coupons-promo-code-offers-today/">See All Freecharge Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-23359" class="card coupon cboxsq  hoverable coupon-code" data-cid="23359" data-type="coupon-code" data-code="BILLPAY" data-logo="https://www.couponchaska.com/images/store/paytm.png" data-store-name="Paytm" data-visits="23306" data-go="https://www.couponchaska.com/go/paytm-wallet-exclusive-offers-deals-promo-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/paytm-coupons/" title="Paytm offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/paytm.png" alt="Paytm offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>100% Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Get 100% Cashback on Electricity Bill Payment</p>
        <div class="cboxsq-btn">
                            <div class="code-container">BILLPAY</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/paytm-coupons/">See All Paytm Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-40028" class="card coupon cboxsq  hoverable coupon-code" data-cid="40028" data-type="coupon-code" data-code="LUCKY7" data-logo="https://www.couponchaska.com/images/store/paytm.png" data-store-name="Paytm" data-visits="7361" data-go="https://www.couponchaska.com/go/get-100-cashback-on-rechargebill-payments/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/paytm-coupons/" title="Paytm offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/paytm.png" alt="Paytm offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>100% Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Paytm Coupon Code: 7 Lucky Winner Will Get 100% cashback on Recharge/Bill payments</p>
        <div class="cboxsq-btn">
                            <div class="code-container">LUCKY7</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/paytm-coupons/">See All Paytm Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-25091" class="card coupon cboxsq  hoverable coupon-code" data-cid="25091" data-type="coupon-code" data-code="GRAB10" data-logo="https://www.couponchaska.com/images/store/paytm.png" data-store-name="Paytm" data-visits="14933" data-go="https://www.couponchaska.com/go/paytm-mobile-recharge-promo-codes/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/paytm-coupons/" title="Paytm offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/paytm.png" alt="Paytm offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹10 Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Paytm Recharge Coupons: Flat Rs.10 Cashback on Recharge &amp; Bill Payments</p>
        <div class="cboxsq-btn">
                            <div class="code-container">GRAB10</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/paytm-coupons/">See All Paytm Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-11685" class="card coupon cboxsq  hoverable coupon-code" data-cid="11685" data-type="coupon-code" data-code="LUCK100" data-logo="https://www.couponchaska.com/images/store/freecharge_coupons.png" data-store-name="Freecharge" data-visits="7587" data-go="https://www.couponchaska.com/go/freecharge-airtel-prepaid-offers-promo-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/freecharge-coupons-promo-code-offers-today/" title="Freecharge offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/freecharge_coupons.png" alt="Freecharge offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>100% Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Win 100% Cashback On Recharge/Bill Payments</p>
        <div class="cboxsq-btn">
                            <div class="code-container">LUCK100</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/freecharge-coupons-promo-code-offers-today/">See All Freecharge Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-23866" class="card coupon cboxsq  hoverable coupon-code" data-cid="23866" data-type="coupon-code" data-code="DTHNEW" data-logo="https://www.couponchaska.com/images/store/paytm.png" data-store-name="Paytm" data-visits="6333" data-go="https://www.couponchaska.com/go/paytm-online-dth-recharge-coupon-codes/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/paytm-coupons/" title="Paytm offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/paytm.png" alt="Paytm offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>₹20 Cashback</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Get Rs.20 Cashback on DTH Recharge</p>
        <div class="cboxsq-btn">
                            <div class="code-container">DTHNEW</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/paytm-coupons/">See All Paytm Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-43751" class="card coupon cboxsq  hoverable coupon-code" data-cid="43751" data-type="coupon-code" data-code="BUMPER" data-logo="https://www.couponchaska.com/images/store/paytm.png" data-store-name="Paytm" data-visits="5990" data-go="https://www.couponchaska.com/go/paytm-bumper-offer-do-atleast-one-rechargebill-payment-on-paytm-to-get-a-chance-to-win-renault-kwid-yamaha-fascino-gold-coins/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/paytm-coupons/" title="Paytm offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/paytm.png" alt="Paytm offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>BEST OFFER</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Do atleast one recharge/Bill payment to get a chance to win Yamaha Fascino &amp; Movie Tickets</p>
        <div class="cboxsq-btn">
                            <div class="code-container">BUMPER</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/paytm-coupons/">See All Paytm Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                                    <div class="col s12 m6 l4">
    
    <div id="c-18190" class="card coupon cboxsq  hoverable coupon-code" data-cid="18190" data-type="coupon-code" data-code="PAYDTH" data-logo="https://www.couponchaska.com/images/store/paytm.png" data-store-name="Paytm" data-visits="5993" data-go="https://www.couponchaska.com/go/paytm-wallet-offer-promo-code/">
                <div class="cboxsq-img-container">
            <a href="https://www.couponchaska.com/store/paytm-coupons/" title="Paytm offers">
                <img class="responsive-img" src="https://www.couponchaska.com/images/store/paytm.png" alt="Paytm offers">
            </a>
        </div>
                    <div class="cboxsq-head flow-text truncate"><span>BEST OFFER</span></div>
                <div class="clear"></div>
        <p class="cboxsq-title">Recharge Your DTH &amp; Win Full HD LED TV</p>
        <div class="cboxsq-btn">
                            <div class="code-container">PAYDTH</div>
                                    <a rel="nofollow" class="btn go-cpn btn-coupon waves-effect waves-light">View Coupon</a>
                                    </div>
        <div class="cboxsq-footer"><a href="https://www.couponchaska.com/store/paytm-coupons/">See All Paytm Offers</a></div>
        <i class="fa fa-share-alt social-share waves-effect circle" aria-hidden="true"></i>
        <div class="clear"></div>
        
            </div>
</div>                                            </div>
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
                    <form class="valign" target="_blank" action="https://www.couponchaska.com/newsletter/subscribe" method="POST" accept-charset="utf-8">
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
                    <div>Download CouponChaska Extension</div>
                    <div>Never pay more. Get latest coupons and deals of your favourite online store.<br> Download CouponChaska BrowserExtension Now.</div>
                    <div class="extension-btn">
                        <a class="ext-chrome" rel="nofollow"><i class="fa fa-chrome"></i>Download for Chrome</a>
                        
                    </div>
                </div>
            </div>
            <div class="col s4 valign-wrapper"><img alt="Couponchaska Browser Extension" src="https://www.couponchaska.com/img/extension-back.png" class="valign"></div>
        </div>
    </div>
</div>    <!-- About -->
 
<!-- END About -->    </main>



























<div >
<section class="hero " style="padding-top: 4px; padding-bottom: 5px;"> <div class="container">
        <div class="row">
         
        </div>
    </div>
</section>


<section class="container">
    <div class="popular-stories">
        <h3>Free Online Coupons and Promo Codes for the Store You Love!</h3>
        <hr class="border-line"> 
        <div class="row">
     

      </div>

     
    </div>
</section>
 

<section class="main-content content-section homepage-section"  >
    <div class="container">
    <div class="row">
    <div class="article">
        <h1 class="h3">Recommended Offers for You</h1>
 <div  v-for="coupon in recommended_coupons"  class="col-md-6 col-xs-12 "  style="height: 178px"> <div  class=" tw-m-2  tw-rounded-sm tw-shadow tw-bg-white sm:tw-p-4 tw-p-2 sm:tw-mb-4 tw-mb-2 xl:tw-h-full1">
                                <div class="tw-flex lato tw-h-full1">
                                    <div class="tw-text-center xl:tw-w-1/6 tw-w-1/4 xl:tw-min-w-1/6 tw-min-w-1/4">
                                   <a :href="base_url+'store/'+coupon.store.custom_url" class="row" title=" ">
                                       <div    v-if="coupon.short_title"   class="coupon-label-context coupon roboto-slab tw-font-bold tw-leading-tight tw-my-0 ">
                                            <div class="tw-inline-block cdroboto-slab tw-text-orange sm:tw-text-5xl tw-text-4xl">
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
                                            <span dusk="coupon-card-label" href="#" rel="nofollow" class="tw-text-grey-darker sm:tw-text-xl tw-text-lg tw-font-medium hover:tw-text-blue lato">
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
                                 style="bottom:auto" 
                                  >
                             <div v-if="coupon.type=='deal'" class="ohop deal">
                                    <div class="tw-bg-blue hover:tw-bg-blue-dark tw-text-center tw-text-white tw-py-2 tw-px-4">Get Deal
                                                </div>

                            </div>
                        </a>

                              <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class=" "
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
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
                            </div>

        
    </div>




     
    </div>
    </div>
</section>
 
<section class="homepage categories">
   <div class="happy-hunting container">     
         <h2 class="title">Popular Categories</h2>  `
             <p class="sub-heading">
                 Check out curated deals from some of the most popular categories  
                 </p> 
        <ul class="stores-list row">
          <li  v-for="category in popular_categories"  class="col-xs-2 " >

                              <center>                                   
                                <a :href="base_url+'category/'+category.slug"  class="row" title=" ">
                                        <div class="img-container " style="margin-top: 8px;">

                                           <div   v-if="!category.feature_image" class="col-xs-12" > 
                                             <i   :class="'fa fa-'+category.icon " style="font-size: 40px; "></i> </div>
                                          <center>    
                                            <img 
                                            class="img-responsive "
                                            v-if="category.feature_image"  
                                            v-bind:src="api_url+'/assets/uploads/stores/'+category.feature_image" 
                                            v-bind:alt="category.name" 
                                     style="width: 50px" 
                                            />
                                        </center>
                                              <span  class="col-xs-12 " >{{category.name}}</span>
                                        </div>
                                      
                                    </a>
                                    </center>
                               </li>

        </ul>
         
        <div class="action"><i class="view-more"></i></div>
    </div>
</section>

<section class="main-content content-section homepage-section"  >
    <div class="container">
    <div class="row">
    <div class="article">
        <h1 class="h3">Recommended Offers for You</h1>
 <div  v-for="coupon in popular_coupons"  class="col-md-6 col-xs-12 "  style="height: 178px"> 
  <div  class=" tw-m-2  tw-rounded-sm tw-shadow tw-bg-white sm:tw-p-4 tw-p-2 sm:tw-mb-4 tw-mb-2 xl:tw-h-full1">
                                <div class="tw-flex lato tw-h-full1">
                                    <div class="tw-text-center xl:tw-w-1/6 tw-w-1/4 xl:tw-min-w-1/6 tw-min-w-1/4">
                                   <a :href="base_url+'store/'+coupon.store.custom_url" class="row" title=" ">
                                       <div    v-if="coupon.short_title"   class="coupon-label-context coupon roboto-slab tw-font-bold tw-leading-tight tw-my-0 ">
                                            <div class="tw-inline-block cdroboto-slab tw-text-orange sm:tw-text-5xl tw-text-4xl">
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
                                            <span dusk="coupon-card-label" href="#" rel="nofollow" class="tw-text-grey-darker sm:tw-text-xl tw-text-lg tw-font-medium hover:tw-text-blue lato">
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
                                 style="bottom:auto" 
                                  >
                             <div v-if="coupon.type=='deal'" class="ohop deal">
                                    <div class="tw-bg-blue hover:tw-bg-blue-dark tw-text-center tw-text-white tw-py-2 tw-px-4">Get Deal
                                                </div>

                            </div>
                        </a>

                              <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class=" "
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
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
                            </div>

        
    </div>




     
    </div>
    </div>
</section>

<section class="homepage stores">
<div class="happy-hunting container">
  <h2 class="title">Popular Stores</h2> 

  <p class="sub-heading">
      Check out curated deals from some of the most popular Stores  
      </p> <div class="col-lg-12 happy-hunting-heading-list">

 
        <div class="row"> 
            <div   v-for="store in popular_stores" class="col-lg-2 col-md-3 col-sm-4 col-xs-6" ><a :href="base_url+'store/'+store.custom_url"  >{{store.name}}</a></div>
        </div>
        <div class="action"><i class="view-more"></i></div>
    

      </div>

    </div>

 

</div>
</section>
