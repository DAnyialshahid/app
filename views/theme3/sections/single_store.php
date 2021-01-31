<script type="text/javascript">
    var slug = "<?=$slug?>";
    var type = "<?=$type?>";
</script>


<main class="main" style="height: auto !important;" id="single_store">
        <div class="store-head">
    <div class="container">
        <div class="store-logo-container card hoverable">
            <img :src="api_url+'/assets/uploads/stores/'+row.feature_image" style="width: 95px" class="responsive-img" />
            
<hr style="margin: 1px">            
             
      <div class="vote-count">Coupon codes: {{row.count.coupons}}</div>
      <div class="vote-count">Total deals:{{row.count.deals}}</div>
      <div class="vote-count">Update on:{{row.count.last_update}}</div>     
        
  <a v-if="row.website_url" :href="row.website_url" >Website</a>

 



</div>
        <div class="store-head-content">

                 
            <h1 itemprop="about">{{row.name}} Coupons {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}</h1>
<div class="top-desc">


<table class="bordered">
        <thead>
            <tr>
                <td>Amazon Offers Today</td>
                <td>Online Sale Promo Code</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mobiles</td>
                <td>Rs.5000 OFF</td>
            </tr>
            <tr>
                <td>Electronics</td>
                <td>Upto 70% OFF</td>
            </tr>
            <tr>
                <td>Kitchen &amp; Home Appliances</td>
                <td>Upto 40% OFF</td>
            </tr>
            <tr>
                <td>Furniture Clearance Sale</td>
                <td>Upto 60% Off </td>
            </tr>
            <tr>
                <td>Fashion</td>
                <td>Get 80% Discount Code</td>
            </tr>
            <tr>
                <td>Used &amp; Refurbished Store</td>
                <td>Upto 50% Discount</td>
            </tr>
            <tr>
                <td>Laptops</td>
                <td>Upto Rs.8000 Cashback</td>
            </tr>
            <tr>
                <td>Baby Products</td>
                <td>Uptp 75% OFF</td>
            </tr>
            <tr>
                <td>Beauty, Health &amp; Groceries</td>
                <td>Upto 65% Discount</td>
            </tr>
                         <tr>
                <td>First Time Order Users</td>
                <td>Upto 80% Off</td>
            </tr>
        </tbody>
    </table>

<p> At couponchaska.com, you will get latest amazon online shopping offers offers such as amazon smartphone sale, offers &amp; coupons, amazon mobile sale coupons &amp; offers 2017, amazon electronics sale, amazon electronics promo code, amazon fashion sale, amazon fashion promo code &amp; offers, amazon large appliances offers, amazon home furnishing coupons &amp; offers and many more. Amazon India Shopping is offering great discount on all products during amazon great indian festival sale. Today the online shopping giant amazon.in, deals in various categories like mobile phones (xiaomi redmi series mobiles, samsung mobiles, apple iphones, one plus series, Nokia Mobiles, Honor Mobiles, lenovo Mobiles), electronics, large appliances (television, air conditioner, refrigerator, BYJU'S Preparation Tablet, washing machine, microwave ovens, dishwashers, chimneys), kitchen &amp; home appliances (air coolers, water purifiers, fans, mixer grinders) cameras &amp; dslr, laptops (dell laptops, lenovo laptops, asus laptops, hp laptops, apple macbooks), clothing for men, women &amp; kids, shoes, patanjali products, grocery, amazon pantry, fmcg, books and many more. As far as festive seasons are concerned, Amazon brings great offers and discount coupons on its upcoming sale season like <a href="https://www.couponchaska.com/amazon-great-indian-festival-sale-online-offers/">Amazon Great Indian Festival Sale 2017 Online Offers</a>, Republic Day Sale, Independence day sale, Holi offer sale, Eid offers, Diwali sale, New Year 2018 Sale, Christmas Offer, Durga Puja Offers, Rakshabandhan Offer, Valentine Day Offer, Great Indian Sale 2018 and many more.  In addition to being one of the renowned brand names in India, Amazon has also launched some new products &amp; categories and gives huge offers on them such as amazon exchange offer on mobiles, tablets, tv &amp; large appliances, amazon Fire TV Stick, kindle eReader devices, Kindle eBooks, used &amp; refurbished mobiles &amp; electronics, used books, global Store and groceries. What keep it always on top is the splendid array of upcoming amazon app offers and coupons in combination with amazon online shopping discount.</p></div>
                    </div>
    </div>
</div>

<div class="store-content" style="height: auto !important;">
    <div class="container breadcrumb-nav">
        <div class="container breadcrumb-list">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumb-ol">
                <li itemprop="itemListEl:ement" itemscope="" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="/" title=""> <span itemprop="name">Home</span> </a> <meta itemprop="position" content="1"><i class="fa fa-chevron-right"></i></li>
                                                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a itemprop="item" :href="'/stores'"> <span itemprop="name">Stores</span> </a> <meta itemprop="position" content="2"><i class="fa fa-chevron-right"></i></li>
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <span itemprop="name"> {{row.name}}</span> <meta itemprop="position" content="3"> </li>
            </ol>
        </div>
    </div>
    <div class="container" style="height: auto !important;">
        <div class="row" style="height: auto !important;">
            <div class="content col s12 m12 l9 push-l3" data-type="store" style="height: auto !important; min-height: 0px !important;">
                






       <h2 class="store-h2 hide-on-filter">{{row.name}} Offers List</h2>
                    

                            <?php  add_page($this,'sections/single_coupons');?>

       <h2 class="store-h2 hide-on-filter">{{row.name}} Expired Coupons</h2>
                 
                                <?php  add_page($this,'sections/single_coupons_expired');?>










    <div class="sbox card hoverable">
    <div class="row">
        <div class="col s12 m12 l7 sbox-text-container valign-wrapper">
            <div class="valign">Want Discount Coupons ? <span>Subscribe Now !</span></div>
        </div>
        <div class="col s12 m12 l5 sbox-form-container">
            <div id="mc_embed_signup">
                <form target="_blank" action="https://www.couponchaska.com/newsletter/subscribe" method="POST" accept-charset="utf-8">
                    <input type="email" value="" name="subscribe_email" class="email" id="email" placeholder="Enter Your Email" required="">
        
                    <button class="sbox-btn" type="button" onclick="subscribes_email();" name="action"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>


                    
                <div class="store-desc">
                             <h3>About {{row.name}}</h3>
                                <p v-html="row.description"></p> 
                </div>
                


  <hr />
                            <div class=" ">
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
            <div class="sidebar col s12 m12 l3 pull-l9" style="height: auto !important; min-height: 0px !important;">
                <div class="filter-on-mob hide-on-large-only">
    <a rel="nofollow" href="#" data-activates="filter-slide" class="filter-mob waves-effect waves-light "><i class="fa fa-filter"></i></a>
</div>
<ul id="filter-slide">
<div class="sidebox filter"  id="d_sidebar_serialize">
    <div class="filter-head-top row">
            <h3 class="widget-title"><span class="offer-count"></h3>
      


 <div class="filter-title title-head col s6">{{row.count.coupons+row.count.deals}} Offers Available <br>Filters</div>
        <div id="clear-all-filter" class="col s6" data-target=".filter-form">Clear All</div>
    </div>
    <hr>
    <!-- Filter By Type -->
    <div class="filter-head row">
        <div class="filter-title col s8">Type</div>
        <div class="filter-angle col s4"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    </div>
    <div class="filter-content">
        <form action="#" id="filter-type" class="filter-form">
         



            <ul>
            <li>
                <input id="offer_type_deal" type="checkbox" name="offer_type[]" value="deal" />
                <label for="offer_type_deal">Deals</label>
            </li>
            <li>
                <input id="offer_type_code" type="checkbox" name="offer_type[]" value="coupon" />
                <label for="offer_type_code">Coupons</label>
            </li> 
                        </ul>
        </form>
    </div>
                <hr>
    <!-- Filter By show only -->
    <div class="filter-head row">
        <div class="filter-title col s8">Show Only</div>
        <div class="filter-angle col s4"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    </div>
    <div class="filter-content">
      
         <ul >
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="only_verified" type="checkbox" name="verified" value="1" />
                                                    <label for="only_verified" class="tw-text-green">
                                                        Verified Offers
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="only_exclusive" type="checkbox" name="exclusive" value="1" />
                                                    <label for="only_exclusive" class="tw-text-red">
                                                        Exclusive Offers
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="only_featured" type="checkbox" name="featured" value="1" />
                                                    <label for="only_featured" class="tw-text-blue">
                                                        Featured Offers
                                                    </label>
                                                </li>
                                            </ul>


            
   
    </div>




    <!-- Filter By  Discount Type -->
    <div class="filter-head row">
        <div class="filter-title col s8"> Discount Type </div>
        <div class="filter-angle col s4"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    </div>
    <div class="filter-content">
      
         <ul >
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="discont_type_site_wide" type="checkbox" name="short_title[]" value="site" />
                                                    <label for="discont_type_site_wide">
                                                        Sitewide
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="discont_type_percent_off" type="checkbox" name="short_title[]" value="% off" />
                                                    <label for="discont_type_percent_off">
                                                        % Off
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="discont_type_dollar_off" type="checkbox" name="short_title[]" value="$ off" />
                                                    <label for="discont_type_dollar_off">
                                                        $ Off
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="discont_type_free_shipping" type="checkbox" name="short_title[]" value="ship" />
                                                    <label for="discont_type_free_shipping">
                                                        Free Shipping
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="discont_type_free_gift" type="checkbox" name="short_title[]" value="gift" />
                                                    <label for="discont_type_free_gift">
                                                        Free Gift
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="discont_type_sale" type="checkbox" name="short_title[]" value="sale" />
                                                    <label for="discont_type_sale">
                                                        Sale
                                                    </label>
                                                </li>
                                            </ul>





            
   
    </div>

    <!-- Filter By  Discount Type -->
    <div class="filter-head row">
        <div class="filter-title col s8">Seasonal &amp; Holidays</div>
        <div class="filter-angle col s4"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    </div>
    <div class="filter-content">
      
          <ul>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="season_type_Christmas" type="checkbox" name="seasonal_type[]" value="Christmas" />
                                                    <label for="season_type_Christmas">
                                                        Christmas
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="season_type_Black" type="checkbox" name="seasonal_type[]" value="Black Friday" />
                                                    <label for="season_type_Black">
                                                        Black Friday
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="season_type_Halloween" type="checkbox" name="seasonal_type[]" value="Halloween Day" />
                                                    <label for="season_type_Halloween">
                                                        Halloween Day
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="season_type_Cyber" type="checkbox" name="seasonal_type[]" value="Cyber Monday" />
                                                    <label for="season_type_Cyber">
                                                        Cyber Monday
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="season_type_Thanks" type="checkbox" name="seasonal_type[]" value="Thanks Giving" />
                                                    <label for="season_type_Thanks">
                                                        Thanks Giving Day
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="season_type_Valentine" type="checkbox" name="seasonal_type[]" value="Valentine's Day" />
                                                    <label for="season_type_Valentine">
                                                        Valentine's Day
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="season_type_Mother" type="checkbox" name="seasonal_type[]" value="Mother's Day" />
                                                    <label for="season_type_Mother">
                                                        Mother's Day
                                                    </label>
                                                </li>
                                                <li class="facet-toggle form-group checkbox">
                                                    <input id="season_type_Fathers" type="checkbox" name="seasonal_type[]" value="Fathers's Day" />
                                                    <label for="season_type_Fathers">
                                                        Fathers's Day
                                                    </label>
                                                </li>
                                            </ul>





            
   
    </div>




    
    </div> <!-- END Filter-->
</ul>
                                    
                    <div class="sidebox similar-store">
                        <h4>Similar Stores</h4>
                        <ul>
                                                            <li><a href="https://www.couponchaska.com/store/flipkart-coupons/" title="Flipkart Offers, Sale and Coupons">Flipkart</a></li>
                                                            <li><a href="https://www.couponchaska.com/store/snapdeal-coupons/" title="Snapdeal Promo Code and Coupons ">Snapdeal</a></li>
                                                            <li><a href="https://www.couponchaska.com/store/homeshop18-coupons/" title="Homeshop18 Coupons and Offers">Homeshop18</a></li>
                                                            <li><a href="https://www.couponchaska.com/store/tata-cliq-coupons-code-offers/" title="Tata CLiQ Coupons and Offers">Tata CLiQ</a></li>
                                                            <li><a href="https://www.couponchaska.com/paytm-shopping-mall-coupons-offers/" title="Paytm Mall Coupons &amp; Offers For Online Shopping">Paytm Mall </a></li>
                                                            <li><a href="https://www.couponchaska.com/store/2gud-Flipkart-refurbished-mobiles-offers/" title="2GUD">2GUD</a></li>
                                                            <li><a href="https://www.couponchaska.com/store/shopclues-coupons/" title="Shopclues Coupons and Offers">Shopclues</a></li>
                                                            <li><a href="https://www.couponchaska.com/store/gadgets360-coupons-offers/" title="Gadgets360.com Coupons and Offers">Gadgets360.com</a></li>
                                                            <li><a href="https://www.couponchaska.com/store/paytm-coupons/" title="Paytm Coupons and Offers">Paytm</a></li>
                                                    </ul>
                    </div>
                    
                                             </div>
        </div>
    </div>
</div>
    </main>
















   