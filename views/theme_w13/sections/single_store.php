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