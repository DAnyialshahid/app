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





<div class="single-store bg-grey pdTop30 pdBtm30" id="single_store">
  <div class="container">
    <div class="row">

        <div class="col-md-12 ">
            <div class="top-heading visible-md visible-lg " style="margin-bottom:15px;">
          <h3 class="text-left">{{row.name}} Coupons {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}</h3>
        </div>
        </div>

      <div class="col-md-12 store-flex-wrapper">
        <div class="store-profile-col">
        <a class="thumbnail custom-thumb single-store-img store-desc" href="http://www.promo4codez.com/out/purple-parking-discount-codes" target="_blank">
          <img  v-if="comeFrom=='store'"   class="img-responsive store-img lazy" :src="api_url+'/assets/uploads/stores/'+row.feature_image" style="width: 95px"  style="">
          <img    v-if="comeFrom=='category' && (row.feature_image != 'blank.png' )"   class="img-responsive store-img lazy"  v-bind:src="api_url+'/assets/uploads/categories/'+row.feature_image"  style="width: 95px"  style="">
        <i    v-if="comeFrom=='category' &&  (row.feature_image == 'blank.png' ) "  :class="'fa fa-'+row.icon " style="font-size: 40px; "></i>
        </a>
  
<div class="social-widgets text-center"> 
           <a v-if="row.website_url" :href="row.website_url" >
            <button class=" btn btn-subscribe" style="background: white">Website</button>
            </a>
       </div>
           


<!-- 
        <div class="top-heading ">
          <h3 class="text-left">{{row.name}} Coupons {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}</h3>
        </div>

         -->
        

     <div class="box store-desc">
            <div class="box-header with-border">
              <span class="box-heading"><i class="fa fa-align-justify"></i> Filtres </span>
            </div>
            <div class="box-body ">
               <div class="container">
                   <div id="d_sidebar_serialize" class="sidebox filter social-widgets " style="text-align: left;"  >
 
         
      
     
      
 


    <hr>
    <!-- Filter By Type -->
         <h2 class="panel-title">Type </h2>
 
  
          
            <li class="facet-toggle form-group checkbox">
                <input id="offer_type_deal" type="checkbox" name="offer_type[]" value="deal" />
                <label for="offer_type_deal">Deals</label>
            </li>
            <li class="facet-toggle form-group checkbox">
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
          <hr>
  
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





            
    
        <hr>
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
          </div>



          <div class="box store-desc">
            <div class="box-header with-border">
                <span class="box-heading"><i class="fa fa-align-justify"></i> Popular Stores</span>
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
                <span class="box-heading"><i class="fa fa-align-justify"></i> Relative Stores</span>
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
              <span class="box-heading"><i class="fa fa-align-justify"></i> About {{row.name}}</span>
            </div>
            <div class="box-body">
                             <p v-html="row.description"></p> 
            </div>
          </div>
        
                          <div class="box store-desc">
            <div class="box-header with-border">
              <span class="box-heading"><i class="fa fa-align-justify"></i> Related Stores</span>
            </div>
            <div class="box-body custom-pills-items">
              <ul class="pills-ul"><li class="custom-pilles">
                   <a href="http://www.promo4codez.com/store/expedia-discount-codes">Expedia</a>
                  </li> </ul>
            </div>
          </div>
        

        <div class="box code-tested-div ">
          <div class="box-header with-border">
            <span class="box-heading"> Codes Tested &amp; Working</span>
          </div>
          <div class="box-body">
            <div class="block__row block__row--code-tested">
          
              <i class="fa fa-check" aria-hidden="true"></i>
          
              <p>Every code hand tested  and verfied</p>
            </div>
            <div class="block__row block__row--code-tested">
   
              <i class="fa fa-tags" aria-hidden="true"></i>
     
              
              <p id="codeCount" class="countDeal">Total Deals: {{row.count.deals}} </p>
            </div>
            <div class="block__row block__row--code-tested">
 
              <i class="fa fa-tags" aria-hidden="true"></i>
               
              
              <p id="dealsCount" class="countDeal">Total Codes: {{row.count.coupons}} </p>
            </div>  

            <div class="block__row block__row--code-tested">
 
              <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
               
              
              <p id="dealsCount" class="countDeal">Update on: {{row.count.last_update}} </p>
            </div>

               
                               


          </div>
        </div>
      </div>
      <div class="store-offers-col" >  
       <!-- id="single_store_container" style="display: none;" -->
      
                   

       <h2 class="store-h2 hidden-md hidden-lg ">{{row.name}} Coupons {{new Date().toLocaleString('default', { month: 'long' })+' ' + new Date().getFullYear() }}</h2>
                    

                            <?php  add_page($this,'sections/single_coupons');?>

       <h2 class="store-h2 hide-on-filter">{{row.name}} Expired Coupons</h2>
                 
                                <?php  add_page($this,'sections/single_coupons_expired');?>
</div>
        
      </div>
      
    </div>
  </div>
</div>

 
  

 <input type="email" value="" name="subscribe_email" class="email" id="email" placeholder="Enter Your Email" required="">
        
                    <button class="sbox-btn" type="button" onclick="subscribes_email();" name="action"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

 
















   