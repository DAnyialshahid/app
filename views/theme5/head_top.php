<t id="top_menu_bar">
<search-form
    class="search-header-container search-overlay-container"
   
>
<form class="search-header search-overlay">
        <div class="search-overlay-inner">
            <input
                class="search-overlay-input"
                type="search"
                autocomplete="off"
                placeholder="Start searching..."
            />
            <button class="button search-overlay-button">
                <span class="sr-only">Search</span>
            </button>
        </div>
    </form>
</search-form>


<header class="header" role="banner">

    <a class="header-toggle"    onclick="$('.header-inner').toggle(200,'linear')"  >
        <i class="header-toggle-icon"></i>

    </a>

     <img  class="mobile-logo"  src="<?=logo?>" class="img-responsive" style=" ">

    <div class="header-inner" style="overflow: hidden;"  >
        

<nav class="header-main">
    <div class="container header-container">

        <a href="/" class="header-logo"  style="width: 633px;"> 


            <div  >
      
                    <img  src="<?=logo?>"  class="img-responsive" style="width: auto; height: auto; float:left; padding:22.5px 10px 0px 10px; ">
            </div>
            <svg class="header-logo-svg-2">
            
               
            </svg>
        </a>



<div  style="height: 5rem; width: 100%;">


<form style="margin-top: 1.3rem;display: none;">

   <div class="search-wrapper">
    <div class="input-holder">
        <input type="text" class="search-input2" placeholder="Type to search" />
        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
    </div>
    <span class="close" onclick="searchToggle(this, event);"></span>
</div>



</form>

 <form style="margin-top: 1.5rem;display: ;">

   

<div class="search-overlay-inner">
    <label for="search-input" class="sr-only">Start searching...</label>
    <!--start d_search-->
    <input id="search-input" class="search-overlay-input search-input" name="query" type="search" autocomplete="off" placeholder="Start searching...">
 <!--- end d_search-->
    <button class="button search-overlay-button"><span class="sr-only">Search</span></button><a class="search-overlay-close"><span class="sr-only">Close</span></a></div>

  <span class="search-overlay-background"></span>
    <!---start d_search-->
 <div class="search_resultbox" style="display: none;">
            <h2 class="heading">stores</h2>
            <ul class="search-list"></ul>
          </div>
           <!--- end d_search-->


</form>

</div>

 


        <ul clasas="header-main-menu" style="margin: 0px;width: 100%; padding: 0;">
            <li class="header-main-menu-item header-main-menu-dropdown" id="js-dropmenu-popularbrands" role="link" tabindex="0" aria-label="Popular Brands Dropdown Menu">
                <span class="header-main-menu-link" data-visibility-toggle data-visibility-target="#js-dropmenu-popularbrands" data-visibility-class="header-icon-open">
                    <i class="icon-popularbrands header-main-menu-icon"></i>
                    Popular Merchants
                    <i class="icon-dropdown header-icon"></i>
                </span>
                <div class="header-dropdown header-dropdown-column">

                      <div   class="header-dropdown-column-item"> 
                           <a :href="base_url+'stores'"  class="header-dropdown-link">
                              * View All *
                            </a>

                          </div>
                   

                    <div  v-for="store in popular_stores.slice(0, 11)" class="header-dropdown-column-item"> 
                           <a :href="base_url+'store/'+store.custom_url"  class="header-dropdown-link">
                                {{store.name}}
                            </a>

                          </div>
                   
                </div>
            </li>
            <li class="header-main-menu-item header-main-menu-dropdown" id="js-dropmenu-categories" role="link" tabindex="0" aria-label="Categories Dropdown Menu">
                <span class="header-main-menu-link" data-visibility-toggle data-visibility-target="#js-dropmenu-categories" data-visibility-class="header-icon-open">
                    <i class="icon-all header-main-menu-icon"></i>
                    Categories
                    <i class="icon-dropdown header-icon"></i>
                </span>
                <ul class="header-dropdown"> 

                 

                   <li class="header-dropdown-item">
                        <a :href="base_url+'categories'" class="header-dropdown-link">
                            <i class="icon-all header-dropdown-icon"></i> All categories
                        </a>
                    </li>


                        <li class="header-dropdown-item" v-for="cat in popular_categories.slice(0, 15)">


                            <a :href="base_url+'category/'+cat.slug"  class="header-dropdown-link" aria-label="Food &amp; Drink Sub Menu">
                         
                   
                   <img   v-if="cat.feature_image" v-bind:src="api_url+'/assets/uploads/categories/'+cat.feature_image"  class="header-dropdown-icon" style="width: 20px;height: 20px"> 

                   <i    v-if="!cat.feature_image"  :class="'fa fa-'+cat.icon "  class="header-dropdown-icon"></i>


                                {{cat.name}}
                            </a>
                             
                        </li>

                </ul>
            </li>

          

          <!--   <li class="header-main-menu-item">
                <a class="header-main-menu-link" href="/">
                    <i class="icon-nearme header-main-menu-icon"></i>
                      Home
                </a>
            </li> -->
            <li class="header-main-menu-item">
                <a class="header-main-menu-link" :href="base_url+'page/submit_offer'">
                    <i class="icon-saveoffer header-main-menu-icon" ></i>Add Offer
                </a>
            </li>
            <li class="header-main-menu-item">
                <a class="header-main-menu-link" :href="base_url+'page/contact_us'" >
                    <i class="icon-favourites header-main-menu-icon"></i> Contact Us
                </a>
            </li>
        </ul>

    </div>
</nav>

        

<nav class="header-top header--slim">
    <div class="container header-container">
        <a href="/" class="header-top-logo" rel="home" >
            <svg class="header-top-logo-svg">
                <use href="#vouchercloud_logo_full"></use>
            </svg>
        </a>
         <!--    <div class="header-callout">
                <span class="header-callout-label">3 453 45*</span>
                <a href="/mothers-day-voucher-codes" class="header-callout-link">ASd ad asda d*</a>
            </div> -->


                <ul class="header-top-menu">
                   <li class="header-top-menu-item  header-top-menu-item--new">
                    <a :href="base_url+'pages/faq'" class="header-top-menu-link">
                        <i class="icon-guides header-top-menu-icon"></i>
                         <b> Help</b> FAQ
                    </a>
                </li>

                <li class="header-top-menu-item">
                    <a :href="base_url+'page/about_us'" class="header-top-menu-link">
                        <i class="icon-compare-scales header-top-menu-icon"></i>
                      About
                    </a>
                </li>
                            <li class="header-top-menu-item">
                    <a :href="base_url+'page/terms_conditions'" class="header-top-menu-link">
                        <i class="icon-competitions header-top-menu-icon"></i>
                        Terms of Use
                    </a>
                </li>
                            <li class="header-top-menu-item">
                    <a  :href="base_url+'page/privacy_policy'" class="header-top-menu-link">
                        <i class="icon-guides header-top-menu-icon"></i>
                        Privacy Policy
                    </a>
                </li>
                           
             
               
        </ul>
    </div>
</nav>

    </div>
</header>






  
</t>


 