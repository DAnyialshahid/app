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
<div class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="store-profile">
                    <div class="web_imagebox">
                   
                               <img v-if="comeFrom=='store'"   :src="api_url+'/assets/uploads/stores/'+row.feature_image" style="width: 95px" class="responsive-img" />
            <img  v-if="comeFrom=='category' && (row.feature_image != 'blank.png' )"     v-bind:src="api_url+'/assets/uploads/categories/'+row.feature_image"  style="width: 95px" class="responsive-img" />
        <i    v-if="comeFrom=='category' &&  (row.feature_image == 'blank.png' ) "  :class="'fa fa-'+row.icon " style="font-size: 40px; "></i>


                    </div>
                    <div class="store-info">
                        <h1 class="store-title">{{row.name}} Coupons {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}</h1>

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
                        <div class="store-filteration">
                        <ul>

                            <li><a href="#" class="border" data-sort="all"  onclick="filture('all')">All Offers ( {{row.count.coupons+row.count.deals}})</a></li>
                            <li><a href="#" data-sort="code" onclick="filture('coupon')">Codes ({{row.count.coupons}})</a></li>
                            <li><a href="#" data-sort="deal"  onclick="filture('deal')">Deals ({{row.count.deals}})</a></li>
                        </ul>
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
                                  <div class="vote-count">Update on:<b>{{row.count.last_update}}</b></div>    
                               



                                
                            </div>  

                            <div class="social-widgets text-center"> 
                               <a v-if="row.website_url" :href="row.website_url" >
                                <button class=" btn btn-subscribe">Website</button>
                                </a>
                           </div>
                        </div>
                                                 
                    
                      

                        <div class="panel with-border related-categories">
                            <h2 class="panel-title">Filtures </h2>
                             
                             <div id="d_sidebar_serialize" class="sidebox filter social-widgets " style="text-align: left;"  >
 
         
      
 {{row.count.coupons+row.count.deals}} Offers Available  
      
 


    <hr>
    <!-- Filter By Type -->
         <h2 class="panel-title">Type </h2>
 
  
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
 

<div class="panel with-border related-categories">
                            <h2 class="panel-title">Popular Merchants</h2>
                            <div class="cubes-block"> 
                            <span class="single-cube" v-for="store in popular_stores" >
                                        <a   :href="base_url+'store/'+store.custom_url" >{{store.name}}</a>
                                    </span>

                                </div>
                        </div>       
        
<div class="panel with-border related-categories">
                            <h2 class="panel-title">Relative Merchants</h2>
                            <div class="cubes-block"> 
                            <span class="single-cube" v-for="store in relative_stores" >
                                        <a   :href="base_url+'store/'+store.custom_url" >{{store.name}}</a>
                                    </span>

                                </div>
                        </div>       
        


                        <div class="panel with-border related-categories">
                            <h2 class="panel-title">About {{row.name}}</h2> 
                                <p v-html="row.description"></p>  



                        </div>




                                            </div>
                </div>
            </div>

                            <div class="col-lg-12">
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

<!-- 
 <input type="email" value="" name="subscribe_email" class="email" id="email" placeholder="Enter Your Email" required="">
        
                    <button class="sbox-btn" type="button" onclick="subscribes_email();" name="action"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
 -->
 
















   