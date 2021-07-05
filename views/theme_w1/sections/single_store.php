<div class="col-md-8" >
            <!-- id="single_store_container" style="display: none;" -->
            <h2 class="store-h2 hidden-md hidden-lg "><?=$data->store->name?> Coupons <?=date('M Y ')?> </h2>

            <div class="container mt-5">
    <div class="d-flex justify-content-center row">

            <?php  add_page($this,'sections/single_coupons');?>
         </div>
      </div>
            <h2 class="store-h2 hide-on-filter"><?=$data->store->name?> Expired Coupons</h2>
            <?php  add_page($this,'sections/single_coupons_expired');?>
            <h3 class="title no-toggle">Top <strong><?=$data->store->name?></strong> Coupons or Promo codes  <?=date('M Y ')?> </h3>
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
                     <?php 
                        if (isset($data->store)){
                          foreach (array_slice($data->store->coupons,0,5) as $coupon ) { 
                                     if ($coupon->expired ) {    continue;  }
                        
                        ?>
                     <!--  <div class="store col-md-12 col-sm-12 col-12 ">
                        <p align="center" ><?=$coupon->name?> </p>
                        </a>
                        </div> -->
                     <tr   >
                        <td>  <a target="_blank"
                           id="<?=$coupon->id?>" 
                           href="?id=<?=$coupon->id?>"
                           locations="<?= !empty($coupon->affiliate_link)?$coupon->affiliate_link:$coupon->store->affiliate_link ?>"
                           onclick="go(this)"
                           >
                           <?=$coupon->name?>
                           </a>
                        </td>
                        <td><?=$coupon->expire_date?></td>
                        <td ><?=$coupon->type=='deal'?'**DEAL**':'*'.substr($coupon->coupon_code, 1,3).'**'?></td>
                     </tr>
                     <?php 
                        }
                        }
                        ?> 
                  </tbody>
               </table>
            </div>
         </div>



















<div class="page_profile">
   <div class="container store-container noPadding992">
      <div class="row noMargin992">
         <div class="col-lg-12 noPadding992">
            <div class="store_wrapper">
               
               <div class="offers_wrapper">
                  <div class="store_banner hiddenxs992">
                     <h1 class="store_title"> Bathroom Takeaway  Discount &amp; Promo Codes   June  2021</h1>
                     <h2 class="store_subtitle"><span class="checked-widget"><i class="fa fa-check"></i></span> Every code hand tested by us</h2>
                     
                     <nav>
                         <ul class="store-filteration">
                        <li class="current"><a href="https://www.savified.com/store/all"><span>All(10)</span></a></li>
                        <li class=""><a href="https://www.savified.com/store/code"><span>Codes(4)</span></a></li>
                          <li class=""><a href="https://www.savified.com/store/deal"><span>Deals(6)</span></a></li>
                        </ul>
                     </nav>
                     
                  </div>
                  <div class="offers-account">
                     
                           <div class="main-offer single_store_coupon active_coupon" data-sort="code" style="display: none;">
      <div class="offer-wrapper">
         <div class="offer-content">
            <div class="offer-title copycodebtn" data-id="865" data-clipboard-text="NEWS5">Extra 5% off all Orders at Bathroom Takeaway</div>
            <div class="offer-desc short-desc" str-length="30">
               Enter this discount code<span class="more-text"> at checkout to save an extra 5% on all orders at Bathroom Takeaway.
             Read Terms &nbsp; </span><a href="javascript:;" class="read-more show-more-text "> Read Terms &nbsp;<i class="fa fa-angle-right"></i> </a></div>
                     </div>
         <div class="offer-image">
            <div class="web_imagebox">
               <a href="javascript:void(0)" class="copycodebtn" data-id="865" data-clipboard-text="NEWS5">              <img class="img-responsive lazy" src="./single_store_files/1596559598.png" style="">
               </a>
            </div>
         </div>
         <div class="offer-action">
            <div class="action-wrapper">
               <div class="btn button-code copycodebtn " data-id="865" data-clipboard-text="NEWS5">
            <div class="btn-label">SHOW CODE</div>
            <span class="codebx">NEWS5</span>
         </div>            </div>
         </div>
      </div>
      <div class="bottom-bar">
         <ul class="coupon-dates">
            <li><p class="last_validated_date"><i class="fa fa-clock-o"></i> Added: 09 Nov</p></li>
            <li><p class="expiry_date"><i class="fa fa-clock-o"></i> No Expiry</p></li>
            <li><p class="userss"><i class="fa fa-user"></i> 12 Uses</p></li>
         </ul>
      </div>
   </div>

                     <div class="main-offer single_store_coupon active_coupon" data-sort="deal" style="display: none;">
      <div class="offer-wrapper">
         <div class="offer-content">
            <div class="offer-title copycodebtn" data-id="874" data-clipboard-text=" ">Free Mirror on Selected Furniture Offers at Bathroom Takeaway</div>
            <div class="offer-desc short-desc" str-length="30">
               Click on this link to ge<span class="more-text">t free mirror on selected furniture offers at Bathroom Takeaway.
             Read Terms &nbsp; </span><a href="javascript:;" class="read-more show-more-text "> Read Terms &nbsp;<i class="fa fa-angle-right"></i> </a></div>
                     </div>
         <div class="offer-image">
            <div class="web_imagebox">
               <a href="javascript:void(0)" class="copycodebtn" data-id="874" data-clipboard-text=" ">               <img class="img-responsive lazy" data-src="https://www.savified.com/assets/uploads/stores/1596559598.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
               </a>
            </div>
         </div>
         <div class="offer-action">
            <div class="action-wrapper">
               <div class="btn button-code deal copycodebtn " data-id="874" data-clipboard-text=" ">
            <div class="btn-label">GET DEAL</div>
         </div>            </div>
         </div>
      </div>
      <div class="bottom-bar">
         <ul class="coupon-dates">
            <li><p class="last_validated_date"><i class="fa fa-clock-o"></i> Added: 09 Nov</p></li>
            <li><p class="expiry_date"><i class="fa fa-clock-o"></i> No Expiry</p></li>
            <li><p class="userss"><i class="fa fa-user"></i> 17 Uses</p></li>
         </ul>
      </div>
   </div>

                  </div>
               </div>
               
               <nav class="d-992">
                         <ul>
                          <li class=""><a href="https://www.savified.com/store/bathroom-takeaway-discount-codes#"><span>All(6)</span></a></li>
                          <li class=""><a href="https://www.savified.com/store/bathroom-takeaway-discount-codes#"><span>Codes(2)</span></a></li>
                          <li class=""><a href="https://www.savified.com/store/bathroom-takeaway-discount-codes#"><span>Deals(4)</span></a></li>
                        </ul>
               </nav>

               <div class="media_wrapper">
                  <div class="info_media">
                     <div class="store_image">
                        <div class="web_imagebox">
                           <img class="img-responsive" src="./single_store_files/1596559598.png">
                        </div>
                     </div>
                                          <a href="https://www.savified.com/out/bathroom-takeaway-discount-codes" target="_blank" class="visit-btn btn">Visit Site &nbsp;<i class="fa fa-angle-right"></i></a>
                                       </div>
                  <div class="store_banner activexs">
                     <h1 class="store_title"> Bathroom Takeaway  Discount &amp; Promo Codes   June  2021</h1>
                     <h2 class="store_subtitle"><span class="checked-widget"><i class="fa fa-check"></i></span> Every code hand tested by us</h2>
                     <nav>
                         <ul>
                          <li class=""><a href="https://www.savified.com/store/bathroom-takeaway-discount-codes#"><span>All(6 <span>Offers</span>)</span></a></li>
                          <li class=""><a href="https://www.savified.com/store/bathroom-takeaway-discount-codes#"><span>Codes(2 <span>Offers</span>)</span></a></li>
                          <li class=""><a href="https://www.savified.com/store/bathroom-takeaway-discount-codes#"><span>Deals(4 <span>Offers</span>)</span></a></li>
                        </ul>
                     </nav>
                  </div>
               
                  <div class="panel store-about">
                     <h3 class="panel-title">Bathroom Takeaway Promotion Code</h3>
                     <div class="store_desc">
                         <p></p>
                     </div>
                  </div>
                  
               
                                    <div class="panel related-categories">
                     <h2 class="panel-title">Retated Categories</h2>
                     <div class="cubes-block">
                                                   <span class="single-cube">
                              <a href="https://www.savified.com/categories/bathroom">Bathroom</a>
                           </span>
                                             </div>
                  </div>
                                    
                                                      
                                                      <div class="panel popular-stores">
                     <h2 class="panel-title">Popular Stores</h2>
                     <div class="panel-pop-stores"><a href="https://www.savified.com/store/diet-direct-coupon-code">
                        <div class="store-block">
                           <div class="web_imagebox">
                              <img class="img-responsive lazy" src="./single_store_files/1551528046_Diet.jpg" style="">
                           </div>
                           <div class="media-block">
                              <p class="store-name">Diet Direct</p>
                              <span class="offers-count">12 Offers Available</span>
                           </div>
                        </div>
                     </a></div>
                  </div>
                                 
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>







































<!--  
<div  class="pt-4">
   <div  class="text-center pb-2">
      <h3 style="    font-weight: 700 !important;">Vouchers  List </h3>
      <span>Search any product and gear up your needs with astounding deals</span>
   </div>
   <div class="container">
      <div class="row popular_stores d-flex justify-content-center">
         <?php 
            if (isset($data->store)){
              foreach (array_slice($data->store->coupons,0,9999999) as $coupon ) { 
            
            ?>
         <div class="store col-md-12 col-sm-12 col-12 ">
            <a target="_blank"
               id="<?=$coupon->id?>" 
               href="?id=<?=$coupon->id?>"
               locations="<?= !empty($coupon->affiliate_link)?$coupon->affiliate_link:$coupon->store->affiliate_link ?>"
               onclick="go(this)"
               >
               <p align="center" ><?=$coupon->name?> </p>
            </a>
         </div>
         <?php 
            }
            }
            ?> 
      </div>
   </div>
</div>  -->

<div class="single-store bg-grey pdTop30 pdBtm30" id="single_store">
   <div class="container">
      <div class="row">
         <div class="col-md-4  "> 
               <div class="top-heading visible-lg visible-md ">
                  <h3 class="text-center" >
                     <?=$data->store->name?>  
                     <div></div>
                     Coupons    <?=date('M Y')?>  
                  </h3>
               </div>
               <a class="thumbnail custom-thumb single-store-img store-desc" href="#" target="_blank">
               <img     class="img-responsive store-img lazy"  src="<?=$data->store->img_src?>" style="width: 95px"  style=""> 
               <?php  if (!empty($data->store->website_url)):?>
                  <a  href="<?=$data->store->website_url?>" >
                  <button class=" btn btn-subscribe" style="background: white">Website</button>
                  </a>
               <?php endif;?>
                
               <div class="box store-desc">
                  <div class="box-header with-border">
                     <span class="box-heading"><i class="fa fa-filter"></i> filter </span>
                  </div>
                  <div class="box-body ">
                     <div class="container">
                        <div id="d_sidebar_serialize" class="sidebox filter social-widgets " style="text-align: left;"  >
                           <hr/>
                            <ul>
                           <!-- Filter By Type -->
                           <h2 class="panel-title"><i class="fa fa-cogs"></i> Type </h2>
                           <li class="facet-toggle form-group checkbox">
                              <input id="offer_type_deal" type="checkbox" name="offer_type[]" value="deal" />
                              <label for="offer_type_deal">Deals</label>
                           </li>
                           <li class="facet-toggle form-group checkbox">
                              <input id="offer_type_code" type="checkbox" name="offer_type[]" value="coupon" />
                              <label for="offer_type_code">Coupons</label>
                           </li>
                           </ul>
                           <hr/>
                           <!-- Filter By show only -->
                           <h2 class="panel-title"><i class="fa fa-eye"></i>  Show Only </h2>
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
                           <hr/>
                           <h2 class="panel-title"><i class="fa fa-percent"></i>  Discount Type </h2>
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
                           <hr/>
                           <!-- Filter By  Discount Type -->
                           <h2 class="panel-title"><i class="fa fa-snowflake-o"></i> Seasonal &amp; Holidays </h2>
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
               </div>
               <div class="box store-desc">
                  <div class="box-header with-border">
                     <span class="box-heading"><i class="fa fa-line-chart"></i> Popular Stores</span>
                  </div>
                  <div class="box-body custom-pills-items">
                     <ul class="pills-ul">
                        <li class="custom-pilles" v-for="store in popular_stores">
                           <a :href="base_url+'store/'+store.custom_url">{{store.name}}</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="box store-desc">
                  <div class="box-header with-border">
                     <span class="box-heading"><i class="fa fa-heart"></i> Relative Stores</span>
                  </div>
                  <div class="box-body custom-pills-items">
                     <ul class="pills-ul">
                        <li class="custom-pilles" v-for="store in relative_stores" >
                           <a :href="base_url+'store/'+store.custom_url">{{store.name}}</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="box store-desc">
                  <div class="box-header with-border">
                     <span class="box-heading"><i class="fa fa-leaf"></i> About {{row.name}}</span>
                  </div>
                  <div class="box-body">
                     <p v-html="row.description"></p>
                  </div>
               </div>
               <div class="box code-tested-div ">
                  <div class="box-header with-border">
                     <span class="box-heading"> Codes Tested & Verfied </span>
                  </div>
                  <div class="box-body">
                     <div class="block__row block__row--code-tested">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p> Every code hand tested  and verfied</p>
                     </div>
                     <div class="block__row block__row--code-tested">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                        <p id="codeCount" class="countDeal"><b>Total Deals: </b>{{row.count.deals}} </p>
                     </div>
                     <div class="block__row block__row--code-tested">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                        <p id="dealsCount" class="countDeal"><b>Total Codes:  </b>{{row.count.coupons}}</p>
                     </div>
                     <div class="block__row block__row--code-tested">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        <p id="dealsCount" class="countDeal"><b>Update on: </b>{{row.count.last_update}} </p>
                     </div>
                  </div>
               </div>
            
         

         </div>

         <div class="col-md-8" >
            <!-- id="single_store_container" style="display: none;" -->
            <h2 class="store-h2 hidden-md hidden-lg "><?=$data->store->name?> Coupons <?=date('M Y ')?> </h2>

            <div class="container mt-5">
    <div class="d-flex justify-content-center row">

            <?php  add_page($this,'sections/single_coupons');?>
         </div>
      </div>
            <h2 class="store-h2 hide-on-filter"><?=$data->store->name?> Expired Coupons</h2>
            <?php  add_page($this,'sections/single_coupons_expired');?>
            <h3 class="title no-toggle">Top <strong><?=$data->store->name?></strong> Coupons or Promo codes  <?=date('M Y ')?> </h3>
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
                     <?php 
                        if (isset($data->store)){
                          foreach (array_slice($data->store->coupons,0,5) as $coupon ) { 
                                     if ($coupon->expired ) {    continue;  }
                        
                        ?>
                     <!--  <div class="store col-md-12 col-sm-12 col-12 ">
                        <p align="center" ><?=$coupon->name?> </p>
                        </a>
                        </div> -->
                     <tr   >
                        <td>  <a target="_blank"
                           id="<?=$coupon->id?>" 
                           href="?id=<?=$coupon->id?>"
                           locations="<?= !empty($coupon->affiliate_link)?$coupon->affiliate_link:$coupon->store->affiliate_link ?>"
                           onclick="go(this)"
                           >
                           <?=$coupon->name?>
                           </a>
                        </td>
                        <td><?=$coupon->expire_date?></td>
                        <td ><?=$coupon->type=='deal'?'**DEAL**':'*'.substr($coupon->coupon_code, 1,3).'**'?></td>
                     </tr>
                     <?php 
                        }
                        }
                        ?> 
                  </tbody>
               </table>
            </div>
         </div>
         
      </div>
   </div>
</div>
<!--  <input type="email" value="" name="subscribe_email" class="email" id="email" placeholder="Enter Your Email" required="">
   <button class="sbox-btn" type="button" onclick="subscribes_email();" name="action"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
   
   -->