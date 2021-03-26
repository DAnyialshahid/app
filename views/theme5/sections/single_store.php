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



<div class="content" id="single_store">
        




<div class="section-banner">
    <div class="section-banner-container container">

        
    <div class="section-banner-logo">
        <picture> 

                   
                               <img v-if="comeFrom=='store'"   :src="api_url+'/assets/uploads/stores/'+row.feature_image" style="width: 95px" class="section-banner-logo-image" />
            <img  v-if="comeFrom=='category' && (row.feature_image != 'blank.png' )"     v-bind:src="api_url+'/assets/uploads/categories/'+row.feature_image"  style="width: 95px" class="section-banner-logo-image" />
        <i    v-if="comeFrom=='category' &&  (row.feature_image == 'blank.png' ) "  :class="'fa fa-'+row.icon " style="font-size: 40px; "></i>


                    

                    </picture>

    </div>


        <div class="section-banner-content">
            <div class="section-banner-content-inner">

                        <nav role="navigation" class="breadcrumbs">
            <div class="breadcrumbs-inner">

                <a href="/" class="breadcrumbs-item">
                    <span class="breadcrumbs-text">Home</span>
                </a>

                        <a href="/stores" v-if="comeFrom=='store'"    class="breadcrumbs-item">
                            <span class="breadcrumbs-text">Stores</span>
                        </a> 
                        <a href="/stores" v-if="comeFrom=='category'"    class="breadcrumbs-item">
                            <span class="breadcrumbs-text">Category</span>
                        </a>
                      
                        <div class="breadcrumbs-item">
                            <span class="breadcrumbs-text">{{row.name}}</span>
                        </div>

            </div>
        </nav>


                <h1 class="section-banner-title">
                   {{row.name}} Coupons {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}
                </h1>

                

<star-rating props="{&quot;percentAverage&quot;:72,&quot;IsAuthenticated&quot;:false,&quot;hasVoted&quot;:false,&quot;totalVotes&quot;:244,&quot;labelValue&quot;:&quot;Rated 3.6 from 244 votes&quot;,&quot;MerchantId&quot;:142507,&quot;saveEndpoint&quot;:&quot;/account/vote&quot;,&quot;loginModal&quot;:&quot;/modal/authenticationmodals?step=Login\u0026redirectUrl=https%3A%2F%2Fwww.vouchercloud.com%2Fdeliveroo-vouchers&quot;}">
    <div class="starrating"><div class="starrating-inner"><span class="starrating-value" style="width: 72%;" data-rating-value="true"></span><a href="/account/login" class="starrating-login" aria-label="login" data-modal-display="true" data-modal-url="/modal/authenticationmodals?step=Login&amp;redirectUrl=https%3A%2F%2Fwww.vouchercloud.com%2Fdeliveroo-vouchers"></a>
        </div><div class="starrating-label">Rated 3.6 from 244 votes</div>
    </div>
</star-rating>



            </div>
        </div>

        <div class="section-stickytoolbar" data-visibility-sticky="">
    <div class="section-stickytoolbar-inner">

        <div class="section-stickytoolbar-column">
            


    <div class="filter " data-visibility-toggle="" data-visibility-target="this" data-visibility-class="active">
            <div class="filter-label lt-med-hide lrg-hide">
                Filtered By:
            </div>
            <div class="filter-value" data-filter-label="offers">
                All<span class="lt-sml-hide"> offers</span> <span class="filter-count">(13)</span>
            </div>

            <ul class="filter-list">
                <li class="filter-list-item">
                    <a class="filter-list-link" data-filter-link="offers" data-filter-text="this" data-filter-target="#offers" data-filter-element=".tile" data-filter-handle="type" data-filter-value="All" data-analytics-click="" data-analytics-event="merchant.filter" data-analytics-meta="{&quot;textValue&quot;:&quot;All&quot;}">
                        All<span class="lt-sml-hide"> offers</span> (13)
                    </a>


                </li>
                    <li class="filter-list-item">
                        <a href="/deliveroo-vouchers" class="filter-list-link" data-filter-link="offers" data-filter-text="this" data-filter-target="#offers" data-filter-element=".tile" data-filter-handle="type" data-filter-value="OnlineCode" data-analytics-click="" data-analytics-event="merchant.filter" data-analytics-meta="{&quot;textValue&quot;:&quot;OnlineCode&quot;}">
                                Codes (1)
                        </a>
                    </li>
                    <li class="filter-list-item">
                        <a href="/deliveroo-vouchers" class="filter-list-link" data-filter-link="offers" data-filter-text="this" data-filter-target="#offers" data-filter-element=".tile" data-filter-handle="type" data-filter-value="OnlineDeal" data-analytics-click="" data-analytics-event="merchant.filter" data-analytics-meta="{&quot;textValue&quot;:&quot;OnlineDeal&quot;}">
                                Deals (12)
                        </a>
                    </li>
            </ul>
    </div>

        </div>

        <div class="section-stickytoolbar-column">
            

<form class="form-alert " action="/account/save-merchant/142507?nonInteraction=False" method="POST" data-setalert-form="142507" data-setalert-id="142507" data-setalert-interaction="false" data-setalert-analytics="False" data-analytics-event="merchant.followed" data-analytics-meta="{&quot;offerTitle&quot;:null,&quot;offerType&quot;:&quot;OnlineCode&quot;,&quot;merchantName&quot;:&quot;Deliveroo&quot;}" data-setalert-clone="{&quot;id&quot;:142507,&quot;merchantId&quot;:142507,&quot;brand&quot;:&quot;Deliveroo&quot;,&quot;isfave&quot;:false,&quot;follow&quot;:&quot;Set alert&quot;,&quot;followed&quot;:&quot;Alert Set&quot;,&quot;authed&quot;:{},&quot;offertitle&quot;:null,&quot;offertype&quot;:&quot;OnlineCode&quot;,&quot;image&quot;:&quot;&quot;,&quot;count&quot;:0,&quot;offers&quot;:&quot;offers&quot;,&quot;url&quot;:null}">

    <input type="hidden" name="id" value="142507" data-setalert-input="">
    <input type="hidden" name="name" value="Deliveroo" data-setalert-input="">


    
    <button class="button text-state form-alert-button" aria-label="Set alert" data-text="Set alert" data-text-swap="Alert Set" data-setalert-toggle="">
            <i class="icon-favourites form-alert-icon"></i>
    </button>

</form>

        </div>

    </div>
</div>

    </div>
</div>


<div class="layout">
    <div class="container">

        <main class="layout-content">

            


               
                            
                    
 

            <div id="offers" class="section-tile-list"> 


                <div class="page-merchant-offers-filter">
                    

   <div class="filter-label ">
                Filtered By:
            </div>
  <div class="filter-value" data-filter-label="offers" style="display: flex;justify-content: center;">
                <a class=" tabs-link lrg-hide med-hide " href="#"   data-sort="all"  onclick="filture('all')">All Offers ({{row.count.coupons+row.count.deals}}) |</a>
                            <a class=" tabs-link lrg-hide med-hide " href="#"     data-sort="code" onclick="filture('coupon')">Codes ({{row.count.coupons}}) |</a>
                            <a class=" tabs-link lrg-hide med-hide " href="#" data-sort="deal"  onclick="filture('deal')">Deals ({{row.count.deals}})</a>

       <!--          All<span class="lt-sml-hide"> offers</span> <span class="filter-count">(13)</span> -->
            </div>


     

                </div>
            

  <h2 class="store-h2 hide-on-filter">{{row.name}} Offers List</h2>
                    

                            <?php  add_page($this,'sections/single_coupons');?>

       <h2 class="store-h2 hide-on-filter">{{row.name}} Expired Coupons</h2>
                 
                                <?php  add_page($this,'sections/single_coupons_expired');?>





            <div class="tile tile-signup" style="background-color: rgb(3, 170, 166);"><div class="tile-signup-inner"><picture class="tile-signup-logo"><source media="(min-width: 75em)" srcset="https://images.vouchercloud.com/image/upload/fl_strip_profile,w_100,f_auto,q_auto/deliveroo_logo_2.jpg"><source media="(min-width: 0em)" srcset="https://images.vouchercloud.com/image/upload/fl_strip_profile,w_82,f_auto,q_auto/deliveroo_logo_2.jpg"><img class="tile-signup-logo-image" src="https://images.vouchercloud.com/image/upload/fl_strip_profile,w_82,f_auto,q_auto/deliveroo_logo_2.jpg" width="82" height="82" alt="Deliveroo"></picture><p class="tile-signup-title">Never miss out <span>on exclusive food &amp; drink savings</span></p><newsletter-signup props="{&quot;signupModal&quot;:&quot;//www.vouchercloud.com/modal/authenticationmodals?step=RegisterStep2&quot;,&quot;showTerms&quot;:true,&quot;redemptionCount&quot;:399,&quot;tooltipContent&quot;:&quot;399 people have recently signed up&quot;}"><form class="form form-tilesignup "><div class="form-tilesignup-inner"><div class="form-row form-tilesignup-details"><label for="tilesignup-email" class="sr-only">Email</label><input id="tilesignup-email" type="email" class="input form-tilesignup-input" name="Email" placeholder="Email"></div><div class="form-row form-tilesignup-submit"><button type="submit" aria-label="Sign up" class="button">Sign up</button><span class="form-tilesignup-tooltip">399 people have recently signed up</span></div></div><div class="form-row form-tilesignup-terms">By signing up I agree to vouchercloud's <a href="/terms">Terms of Service</a>, <a href="/privacy">Privacy Policy</a> and consent to receive emails about offers</div></form></newsletter-signup></div></div>


            </div>

            
                <div class="panel page-merchant-offers-popular">
                    <div class="panel-inner">
                        <h3 class="h2"> {{row.name}} Coupons {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}</h3>
                        <table class="table">
    <thead>
    <tr>
        <th class="table-heading">Voucher Code Description</th>
        <th class="table-heading">Expiry Date</th>
        <th class="table-heading">Code</th>
    </tr>
    </thead>
    <tbody> 
   <tr class="table-row" v-for="coupon in coupons.slice(0,5)">
                                                <td class="table-column">{{coupon.name}}</td>
                                                <td class="table-column">{{ (new Date(coupon.expire_date)+'').substr(0,15) }}</td>
                                                <td class="table-column" v-if="coupon.type=='deal'">**DEAL**</td>
                                                <td class="table-column" v-if="coupon.type=='coupon'">{{coupon.coupon_code.substr(0,4)}}*****</td>
                                            </tr>
    </tbody>
</table>

                    </div>
                </div>

        </main>

             

        <aside class="layout-sidebar">

            <div class="panel">

                <div class="page-merchant-offers-favourite-sidebar lt-lrg-hide">
                    

 
    
    <button class="button text-state form-alert-button" aria-label="Set alert" data-text="Get Extention" d >
            <i class="icon-favourites form-alert-icon"></i>
    </button>

 

                </div>

    
                     

                     

            </div>

                <div class="panel">
                    


<div class="link-icon">

        <a href="#" class="link-icon-item">
            <i class="icon-verified link-icon-image"></i>
            <span class="link-icon-text">
                Verified
            </span>
        </a>


        <a href="#" class="link-icon-item">
            <i class="icon-watch link-icon-image"></i>
            <span class="link-icon-text">
                Updated
            </span>
        </a>



</div>




                </div>

             

            <div class="panel">
                <div class="panel-inner">
                    <h3 class="h2">Filter</h3>
                    
<div id="d_sidebar_serialize" class="sidebox   social-widgets " style="text-align: left;"  >
 
         
      
 {{row.count.coupons+row.count.deals}} Offers Available  
      
 


    <hr>
    <!-- Filter By Type -->
         <h2 class="panel-title">Type </h2>
 
  
            <ul>
            <li  class="facet-toggle form-group checkbox">
                <input id="offer_type_deal" type="checkbox" name="offer_type[]" value="deal" />
                <label for="offer_type_deal">Deals</label>
            </li>
            <li  class="facet-toggle form-group checkbox">
                <input id="offer_type_code" type="checkbox" name="offer_type[]" value="coupon" />
                <label for="offer_type_code">Coupons</label>
            </li> 
                        </ul>


                <hr>
    <!-- Filter By show only -->
 
     <h2 class="panel-title">Show Only </h2>
 
      
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


            
   
  



    <!-- Filter By  Discount Type -->
  
     <h2 class="panel-title">Discount Type </h2>
  
      
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





            
    

    <!-- Filter By  Discount Type -->
    <h2 class="panel-title">Seasonal &amp; Holidays </h2>
    
      
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
 

                </div>
            </div>          



            <div class="panel">
                <div class="panel-inner">
                    <h3 class="h2">Popular Stores </h3>
                    

<ul class="list-tags"> 
    <li class="list-tags-item" v-for="store in popular_stores">
            <a    :href="base_url+'store/'+store.custom_url" title="Amazon" class="link list-tags-link">
              {{store.name}}
            </a>
        </li>
</ul>

                </div>
            </div>

                 

                <div class="panel">
                    <i class="icon-vc-picks panel-icon"></i>
                    <div class="panel-inner">
                        

    <h2 class="h2">About {{row.name}}</h2>

    <div class="vote-count">Update on:<b>{{row.count.last_update}}</b></div>    
      <p v-html="row.description"></p>  


 
                          
  <a v-if="row.website_url" :href="row.website_url" >
                                <button class=" btn btn-subscribe">Website</button>
                                </a>
                       




                    </div>
                </div>
            
                <div class="panel">
                    <div class="panel-inner">
                        
<h2 class="h2">Available Today</h2>
<table class="table">
        <tbody><tr class="table-row">
            <th class="table-title">Codes</th>
            <td class="table-column">{{row.count.deals}}</td>
        </tr>
        <tr class="table-row">
            <th class="table-title">Deals</th>
            <td class="table-column">{{row.count.coupons}}</td>
        </tr>
</tbody></table>

                    </div>
                </div>

            <div class="panel">
                <div class="panel-inner">
                    <h3 class="h2">Relative  retailers</h3>
 
<ul class="list-tags" > 
        <li class="list-tags-item" v-for="store in relative_stores">
            <a    :href="base_url+'store/'+store.custom_url" title="Amazon" class="link list-tags-link">
              {{store.name}}
            </a>
        </li>

        </ul>

                </div>
            </div>

 




 

        </aside>

    </div>
</div>

    </div>













































<div >
<div class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="store-profile">
                    <div class="web_imagebox"></div>
                    <div class="store-info">
                        <h1 class="store-title"></h1>

                        <div class="rating-stars">
                        <ul id="stars" data-store-id="1">
                          <li class="star selected" title="Poor" data-value="1">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="star selected" title="Fair" data-value="2">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="star selected" title="Good" data-value="3">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="star selected" title="Excellent" data-value="4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="star" title="WOW!!!" data-value="5">
                            <i class="fa fa-star"></i>
                          </li>
                        </ul>
                        <p>
                            4 Rating, 1 Votes                       </p>
                       </div>
                        
                    </div>
                </div>
                <p class="sbmt-offer-btn"><i class="fa fa-tag"></i> Submit a Coupon</p>
            </div>
        </div>
    </div>
</div>

<div class="section bg noPadding sectionMarginResponsive">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="store-breadcrumbs">
                <ul>
                    <li><a href="https://www.verifieddeals.co.uk/">Home</a></li>
                    <li><a href="javascript:;" data-processed="1"><i class="fa fa-angle-double-right"></i></a></li>
                                           
                                           
                    <li><a href="#" class="action-disabled">{{row.name}} </a></li>
                </ul>
              </div>
              <hr class="store-seperator">
            </div>
        </div>
    </div>
</div>


<div class="section bg noTopPadding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="store-wrapper">
                    <div class="offers-wrapper single_store" id="single_store_container" style="display: none;">
                        

       <h2 class="store-h2 hide-on-filter">{{row.name}} Offers List</h2>
                    

                            <?php  add_page($this,'sections/single_coupons');?>

       <h2 class="store-h2 hide-on-filter">{{row.name}} Expired Coupons</h2>
                 
                                <?php  add_page($this,'sections/single_coupons_expired');?>



                    </div>
                    <div class="store-sidebar">
                                                <div class="panel">
                            <h2 class="panel-title">11 Degrees contacts</h2>
                            <div class="social-widgets ">
                                      <div class="vote-count">Coupon codes:<b> {{row.count.coupons}}</b></div>
                                  <div class="vote-count">Total deals:<b>{{row.count.deals}}</b></div>
                              


                                
                            </div>  

                            <div class="social-widgets text-center"> 
                             
                        </div>
                                                 
                    
                      

                        <div class="panel with-border related-categories">
                            <h2 class="panel-title">Filtures </h2>
                             
 

                        </div>
 

        
        
        
        


                        <div class="panel with-border related-categories">
                         


                        </div>




                                            </div>
                </div>
            </div>

                             



                            
        </div>
    </div>
</div>
</div>

<!-- 
 <input type="email" value="" name="subscribe_email" class="email" id="email" placeholder="Enter Your Email" required="">
        
                    <button class="sbox-btn" type="button" onclick="subscribes_email();" name="action"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
 -->
 
















   