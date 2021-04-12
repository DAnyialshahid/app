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

                

<star-rating  >
    <div class="starrating"><div class="starrating-inner"><span class="starrating-value" style="width: 72%;"  ></span><a href="#" class="starrating-login" aria-label="login"></a>
        </div><div class="starrating-label">Rated 3.6 from 244 votes</div>
    </div>
</star-rating>



            </div>
        </div>

         

    </div>
</div>


<div class="layout">
    <div class="container">

        <main class="layout-content"> 

            <div id="offers" class="section-tile-list"> 


                <div class="page-merchant-offers-filter mobile_filture" style="display: none">
                    

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





<div class="row">


 <div class="tile tile-signup" style="background-color: rgb(3, 170, 166);"><div class="tile-signup-inner">

  <img class="tile-signup-logo-image"  :src="theme_base_url+'/assets/images/mail.png'" width="82" height="82" alt="Deliveroo">


  <p class="tile-signup-title">Never miss out <span> Our Latest Updates</span></p><newsletter-signup  ><form class="form form-tilesignup "><div class="form-tilesignup-inner"><div class="form-row form-tilesignup-details"><label for="tilesignup-email" class="sr-only">Email</label><input name="subscribe_email" type="email" class="input form-tilesignup-input" name="Email" placeholder="Email"></div><div class="form-row form-tilesignup-submit"><button type="submit" class="button"  onclick="subscribes_email();" >Subscribe</button><span class="form-tilesignup-tooltip">45 people have recently Subscribe </span></div></div> 
  </form></newsletter-signup></div></div>




             
             



            </div>


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








































 