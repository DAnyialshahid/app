<script type="text/javascript">
    var slug='<?=$slug?>';
    var type='<?=$type?>';
</script>
<div class="container main-container" id="d_single_store">
    <div class="row">
        <div class="col-md-9 col-xs-12 main pull-md-right clearfix" id="single_store_container" style="display: none;">
            <div class="store-title clearfix">
                <h1>
                    <strong>{{row.name}}</strong>
                    Coupons
                </h1>
                 
            </div>
            <div class="inpage-search hidden-md hidden-lg clearfix">
                <div class="store-filters filters-type pull-left">
                    <label data-filter="all" class="active"> All <span></span> </label> <label data-filter="coupon"> Coupons <span></span> </label> <label data-filter="deal"> Deals <span></span> </label>
                    <label data-filter="freeshipping"> Free Shipping <span></span> </label>
                    <label data-filter="verified" class="pull-right">
                        Verified
                    </label>
                </div>
            </div>
            <div class="search-response"></div> 

            <ul id="active-coupons" class="coupons-container">  
               <?php  add_page($this,'sections/single_coupons');?>
            </ul>
           
            <h2 class="title-expired">Expired <strong>{{row.name}}</strong> Promo codes</h2>

             <ul id="expired-coupons" class="coupons-container expired">  
               <?php  add_page($this,'sections/single_coupons_expired');?>
            </ul>

 
            
            <div class="prefooter-box top-coupons-table no-bg clearfix">
                <h2 class="title no-toggle">Top <strong>{{row.name}}</strong> Coupons or Promo codes {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }} </h2>
                <div class="content no-padding">
                    <table class="table table-responsive table-hover" style="margin: 0;">
                        <thead>
                            <tr>
                                <th>Offer Description</th>
                                <th>Expires</th>
                                <th>Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr  v-for="coupon in coupons" >
                                <td>{{coupon.name}}</td>
                                <td>{{ (new Date(coupon.expire_date)+'').substr(0,15)   }}</td>
                                <td v-if="coupon.type=='deal'">**DEAL**</td>
                                <td v-if="coupon.type=='coupon'">{{coupon.coupon_code.substr(0,4)}}*****</td>
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
             
        </div>
        <div class="col-md-3 col-xs-12 sidebar-menu clearfix">
            <div class="sidebar-menu-box store clearfix">
                <div class="content">
                      <center> <a href="#" target="_blank" class="store-hop" id="left-hop" data-store="Target" rel="nofollow">
              
                    <img v-if="comeFrom=='store'"   :src="api_url+'/assets/uploads/stores/'+row.feature_image" style="width: 95px" class="img-responsive" />
                                                <img  v-if="comeFrom=='category' && (row.feature_image != 'blank.png' )"     v-bind:src="api_url+'/assets/uploads/categories/'+row.feature_image"  style="width: 95px" class="img-responsive" />
                                                <i    v-if="comeFrom=='category' &&  (row.feature_image == 'blank.png' ) "  :class="'fa fa-'+row.icon " style="font-size: 40px; "></i>




                    </a>
                     <p  v-html="row.description">

                    </p>
                    <div v-if="row.website_url" class="btn-group row">
                        <a :href="row.website_url"  class="btn-action   shop-now"  style="width: 83%;  " target="_blank" rel="nofollow"><i class="df df-website"></i> Website</a> 
                    </div>
                      </center>
                </div>
            </div>
            <div class="sidebar-menu-box facets-box hidden-xs hidden-sm clearfix">
                <div class="offers-available">
                    <div class="text"><span class="offer-count">{{row.count.coupons+row.count.deals}}</span> Offers Available</div>
                </div>
                <div class="applied-filters hidden">
                    <div class="left">
                        <span class="filters-count">0</span>
                        Applied Filters
                    </div>
                    <div class="right">
                        <div class="clear-filters action">
                            Clear
                        </div>
                    </div>
                </div>
                <div class="content" id="d_sidebar_serialize">
                    <div class="facets" data-sid="8">
                        <div class="facet-group">
                            <div class="facet-group-name">
                                Show Only
                            </div>
                            <ul>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="verified" value="1"  />
                                    <label for="fc_verified" class="color-green">
                                        Verified Offers
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="exclusive" value="1"  />
                                    <label for="fc_verified" class="color-red">
                                        Exclusive Offers
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="featured" value="1" />
                                    <label for="fc_verified" class="color-blue">
                                        Featured Offers
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="facet-group">
                            <div class="facet-group-name">
                                Offer Type
                            </div>
                            <ul>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="offer_type[]" value="deal" />
                                    <label for="fc_deal">
                                        Deal
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="offer_type[]" value="coupon" />
                                    <label for="fc_coupon">
                                        Coupon
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="facet-group">
                            <div class="facet-group-name">
                                Discount Type
                            </div>
                            <ul>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="short_title[]" value="site"/>
                                    <label for="fc_1">
                                        Sitewide
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="short_title[]" value="% off" />
                                    <label for="fc_2">
                                        % Off
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="short_title[]" value="$ off"  />
                                    <label for="fc_3">
                                        $ Off
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="short_title[]" value="ship"   />
                                    <label for="fc_5">
                                        Free Shipping
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="short_title[]" value="gift"   />
                                    <label for="fc_8">
                                        Free Gift
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="short_title[]" value="sale"  />
                                    <label for="fc_11">
                                        Sale
                                    </label>
                                </li>
                            </ul>
                        </div>
                         
                        <div class="facet-group">
                            <div class="facet-group-name">
                                Seasonal &amp; Holidays
                            </div>
                            <ul>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="seasonal_type[]" value="Christmas"  />
                                    <label for="fc_15">
                                        Christmas
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="seasonal_type[]" value="Black Friday"  />
                                    <label for="fc_16">
                                        Black Friday
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="seasonal_type[]" value="Halloween Day"  />
                                    <label for="fc_16">
                                        Halloween Day
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="seasonal_type[]" value="Cyber Monday"  />
                                    <label for="fc_16">
                                        Cyber Monday
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="seasonal_type[]" value="Thanks Giving"  />
                                    <label for="fc_16">
                                       Thanks Giving Day
                                    </label>
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="seasonal_type[]" value="Valentine's Day"  />
                                    <label for="fc_16">
                                     Valentine's Day 
                                    </label> 
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="seasonal_type[]" value="Mother's Day"  />
                                    <label for="fc_16">
                                     Mother's Day
                                    </label> 
                                </li>
                                <li class="facet-toggle form-group checkbox">
                                    <input type="checkbox" name="seasonal_type[]" value="Fathers's Day"  />
                                    <label for="fc_16">
                                     Fathers's Day
                                    </label> 
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="sidebar-menu-box store-stats clearfix">
                <h5 class="title">About {{row.name}}</h5>
                <div class="content" style="display: none">
                    <div class="store_rating">
                        <i class="df df-rating-star rating-star active"></i> <i class="df df-rating-star rating-star active"></i> <i class="df df-rating-star rating-star active"></i> <i class="df df-rating-star rating-star active"></i>
                        <i class="df df-rating-star rating-star"></i>
                        <p>
                            (<span id="ratingValue">4.34</span> out of
                            <span id="ratingCount">99</span>
                            votes<a class="link add-vote">Add rating</a>)
                        </p>
                    </div>
                </div>
                <div class="content vote-container" style="display: none;">
                    <div class="rating-col rating-col-text"><p>Would you recommend this store?</p></div>
                    <div class="rating-col rating-col-votes store_rating--votes text-center" data-id="8">
                        <div class="thumb thumb-up">Yes</div>
                        <div class="thumb thumb-down">No</div>
                    </div>
                </div>
                <div class="content">
                    <p class="store-description" v-html="row.description"> 
                    </p>
                </div>
                <div class="content">
                    <table class="table" style="margin: 0;">
                        <tbody>
                            <tr>
                                <td><span class="emoji">🏷</span>Coupon codes:</td>
                                <td align="right">{{row.count.coupons}}</td>
                            </tr>
                            <tr>
                                <td><span class="emoji">🏷</span>Total Deals:</td>
                                <td align="right">{{row.count.deals}}</td>
                            </tr> 
                            <tr>
                                <td><span class="emoji">⏰</span>Last updated:</td>
                                <td align="right">{{row.count.last_update}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="content">
                    <a  :href="base_url+'page/submit_offer'" class="submit-coupon--btn various loginbox clearfix" >
                        Submit Offer
                    </a>
                </div>
            </div>
            <div class="sidebar-menu-box clearfix">
                <div class="content">
                    <p class="advertiser-disclosure"><b>Advertiser Disclosure:</b> If you click on one of our links, we may receive a compensation.</p>
                </div>
            </div> 
             
        </div>
    </div>
    <div class="row"> </div>
</div>
