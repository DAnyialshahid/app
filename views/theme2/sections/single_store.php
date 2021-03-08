<script type="text/javascript">
    var url_slug=window.location.pathname.split('/');
    var slug = url_slug[2];
    var type =  url_slug[1];
    if (type=='store') {
        type='single_store';
    }else if(type=='category'){
         type='single_category';

    }
</script>


<div id="single_store">
    <section class="merchant-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9 hidden-xs">
                    <h1>{{row.name}} Coupons {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}</h1>
                    <p class="breadCumb"><a href="/">Home</a>   &gt; {{row.name}} </p>
                </div>
            </div>
        </div>
    </section>
 
    <section class="main-content content-section">
        <div class="container">
            <div class="col-6">
                <div class="article">
                    <div class="col-md-9 col-sm-12 col-xs-12 pull-right">
                        <div class="item-bolcks"  id="single_store_container" style="display: none;">
                             

                            <?php  add_page($this,'sections/single_coupons');?>
                         

                            <div dusk="newsletter-signup" class="tw-flex tw-flex-col sm:tw-flex-row tw-items-center tw-rounded-sm tw-bg-blue tw-w-full tw-p-4 tw-mb-4">
                                <h2 class="tw-text-white sm:tw-w-1/4">Get Todays Top Offers</h2>
                                <form action="#" method="POST" class="tw-flex tw-flex-col tw-w-full sm:tw-w-3/4">
           
                                    <div class="tw-flex">
                                        <input name="subscribe_email" type="text" placeholder="Enter Your Email..." class="tw-flex-grow tw-rounded-l-sm tw-text-lg tw-text-grey-darker tw-min-w-0 tw-p-4" />
                                        <input dusk="newsletter-submit" type="button" value="Sign Up" class="tw-rounded-r-sm tw-text-grey-lightest tw-bg-grey-darkest tw-px-4 tw-py-2" onclick="subscribes_email();" />
                                    </div>
                                    <a href="#" class="tw-self-end tw-text-xs tw-text-white tw-mt-1">By Signing Up, you agree to our terms of service</a>
                                </form>
                            </div>


                               <h2 class="title no-toggle"> <strong>{{row.name}}</strong> Expired Coupons </h2>
                                <?php  add_page($this,'sections/single_coupons_expired');?>


                            <hr />
                            <div class="prefooter-box top-coupons-table no-bg clearfix">
                                <h2 class="title no-toggle">Top <strong>{{row.name}}</strong> Coupons or Promo codes {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}</h2>
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
                                            <tr v-for="coupon in coupons.slice(0,5)">
                                                <td>{{coupon.name}}</td>
                                                <td>{{ (new Date(coupon.expire_date)+'').substr(0,15) }}</td>
                                                <td v-if="coupon.type=='deal'">**DEAL**</td>
                                                <td v-if="coupon.type=='coupon'">{{coupon.coupon_code.substr(0,4)}}*****</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar-widget">
                        <div class="widget-content text-center">
                            <div class="row">
                                <div class="content">
                                    <center>
                                        <a href="#" target="_blank" class="store-hop" id="left-hop" data-store="Target" rel="nofollow"> 
                                              <img v-if="comeFrom=='store'"   :src="api_url+'/assets/uploads/stores/'+row.feature_image" style="width: 95px" class="responsive-img" />
                                                <img  v-if="comeFrom=='category' && (row.feature_image != 'blank.png' )"     v-bind:src="api_url+'/assets/uploads/categories/'+row.feature_image"  style="width: 95px" class="responsive-img" />
                                                <i    v-if="comeFrom=='category' &&  (row.feature_image == 'blank.png' ) "  :class="'fa fa-'+row.icon " style="font-size: 40px; "></i>
                                        </a>
                                        <p v-html="row.description"></p>
                                    </center>
                                </div>
                            </div>

                            <div class="content" style="display: none;">
                                <div class="store_rating">
                                    <i class="df df-rating-star rating-star active"></i> <i class="df df-rating-star rating-star active"></i> <i class="df df-rating-star rating-star active"></i>
                                    <i class="df df-rating-star rating-star active"></i>
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
                                <table class="table" style="margin: 0;">
                                    <tbody>
                                        <tr>
                                            <td>Coupon codes:</td>
                                            <td align="right">{{row.count.coupons}}</td>
                                        </tr>
                                        <tr>
                                            <td>Total Deals:</td>
                                            <td align="right">{{row.count.deals}}</td>
                                        </tr>
                                        <tr>
                                            <td>Update</td>
                                            <td align="right">{{row.count.last_update}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div v-if="row.website_url" class="btn-group row">
                                <a :href="row.website_url" class="tw-text-blue md:tw-border sm:tw-border-blue sm:tw-text-blue sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-6" style="width: 83%;" target="_blank" rel="nofollow">
                                    <i class="df df-website"></i> Website
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget hidden">
                        <div class="widget-content text-center">
                            <h3 class="widget-title">Popular Stores</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="/stores/hoka-one-one-promo-codes//">
                                        <img src="https://cdn.couponcause.com/logos/88x31/hoka-one-one-promo-codes-88x31-1510270160.gif" alt="All Hoka One One Coupons &amp; Promo Codes" class="img-responsive top-stories-logo" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <div class="widget-content text-left">
                            <h3 class="widget-title"><span class="offer-count">{{row.count.coupons+row.count.deals}}</span> Offers Available</h3>
                            <div class="row">
                                <div class="content " id="d_sidebar_serialize">
                                    <div class="facets" data-sid="8" style="padding: 10px;">
                                        <b> Show Only</b>
                                        <div class="facet-group" style="margin-left: 50px;">
                                            <ul class="sidebar-list">
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="verified" value="1" />
                                                    <label for="fc_verified" class="tw-text-green">
                                                        Verified Offers
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="exclusive" value="1" />
                                                    <label for="fc_verified" class="tw-text-red">
                                                        Exclusive Offers
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="featured" value="1" />
                                                    <label for="fc_verified" class="tw-text-blue">
                                                        Featured Offers
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <b>Offer Type</b>
                                        <div class="facet-group" style="margin-left: 50px;">
                                            <ul class="sidebar-list">
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="offer_type[]" value="deal" />
                                                    <label for="fc_deal" class="tw-text-blue">
                                                        Deal
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="offer_type[]" value="coupon" />
                                                    <label for="fc_coupon" class="tw-text-orange">
                                                        Coupon
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <b> Discount Type</b>
                                        <div class="facet-group" style="margin-left: 50px;">
                                            <ul class="sidebar-list">
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="short_title[]" value="site" />
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
                                                    <input type="checkbox" name="short_title[]" value="$ off" />
                                                    <label for="fc_3">
                                                        $ Off
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="short_title[]" value="ship" />
                                                    <label for="fc_5">
                                                        Free Shipping
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="short_title[]" value="gift" />
                                                    <label for="fc_8">
                                                        Free Gift
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="short_title[]" value="sale" />
                                                    <label for="fc_11">
                                                        Sale
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <b>Seasonal &amp; Holidays</b>
                                        <div class="facet-group" style="margin-left: 50px;">
                                            <ul class="sidebar-list">
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="seasonal_type[]" value="Christmas" />
                                                    <label for="fc_15">
                                                        Christmas
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="seasonal_type[]" value="Black Friday" />
                                                    <label for="fc_16">
                                                        Black Friday
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="seasonal_type[]" value="Halloween Day" />
                                                    <label for="fc_16">
                                                        Halloween Day
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="seasonal_type[]" value="Cyber Monday" />
                                                    <label for="fc_16">
                                                        Cyber Monday
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="seasonal_type[]" value="Thanks Giving" />
                                                    <label for="fc_16">
                                                        Thanks Giving Day
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="seasonal_type[]" value="Valentine's Day" />
                                                    <label for="fc_16">
                                                        Valentine's Day
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="seasonal_type[]" value="Mother's Day" />
                                                    <label for="fc_16">
                                                        Mother's Day
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input type="checkbox" name="seasonal_type[]" value="Fathers's Day" />
                                                    <label for="fc_16">
                                                        Fathers's Day
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>
</div>
