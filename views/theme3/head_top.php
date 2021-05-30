<header  id="top_menu_bar">
 <div class="navbar-fixed">
    <nav class="nav-shrink">
        <div class="wrapper nav-wrapper container">
            <a href="/" class="brand-logo left" style="display: flex;height: 100%">
              <img  src="<?=logo?>"  class="responsive-img">
            </a>
            <ul id="menu" class="clearfix right">
    <li class="top-stores hide-on-med-and-down"><a href="#" onclick="$('.top-category-mega').hide();$('.top-stores-mega').toggle();" class="">Stores</a></li>
  <li class="top-category hide-on-med-and-down"><a href="#" onclick="$('.top-stores-mega').hide();$('.top-category-mega').toggle();">Categories</a></li>
                                <li>
                    <div id="ccsearch" class="ccsearch">
                        <form action="#" class="ccsearch-form">
                            <input   type="search" placeholder="Search ..."  class="ccsearch-input typeahead"  id="search_input" >
                            <button class="ccsearch-submit" type="submit">Search</button>
                        </form>
                        <div class="ccsearch-content ">
                            <div class="autosuggest-result">
                                
                            </div>
                        </div>
                        <span class="ccsearch-close"></span>
                    </div>               

                     </li>
                <li class="login-navi hide-on-med-and-down">
                                            <a rel="nofollow"  :href="base_url+'/page/submit_offer'"  data-activates="slide-out" class="button-collapse btn login-btn">Add Offer</a>
                                    </li>
    <li class="login-navi hide-on-med-and-down">
                    <div class="" style="display: flex;"> 
                         <a :href="configs.facebook" ><i class="fab fa-facebook"></i></a>
                         <a :href="configs.twitter" ><i class="fab fa-twitter"></i></a>
                        <a :href="configs.youtube" ><i class="fab fa-youtube"></i></a>
                       
                        </div>
   </li>

            </ul>
            <a href="#" data-activates="nav-mobile"  onclick="$('#nav-mobile').toggle(700);" class="button-collapse-nav"><i class="fa fa-bars"></i></a>
            
        </div>

    </nav>

</div>
 
   <div class="main  hide-on-large-only" style="    height: 37px; margin: 9px 0px; padding: 0px 10px;}">
      <input  placeholder="Search ..."  class=" typeahead"  id="search_input_mobile" >


    </div>               

                     

                     


<ul id="nav-mobile" class="side-nav mobile-nav" style="transform: translateX(0%);display: none;">
    <div>
        <li>
            <div class="userView">
                <div class="background"></div>
                           
                    <a rel="nofollow" href="#"  onclick="$('#nav-mobile').toggle(700);"  data-activates="slide-out" class="button-collapse login-mob-nav btn btn-flat waves-effect waves-light"><i class="fa fa-arrow-left"></i></a>
                            </div>
        </li>
            <li><a href="/" class="waves-effect waves-red">Home</a>    
                    <li>
                <ul class="collapsible collapsible-accordion">
                      <li><a class="collapsible-header  waves-effect waves-red">Top Stores</a>
                        <div class="collapsible-body" style="">
                                    <ul> 
                <ul class="collapsible collapsible-accordion"> 
                         <li><a href="/stores" class=" waves-effect waves-red"  >View All</a> </li>
                         <li><a :href="'/store/'+store.custom_url" class=" waves-effect waves-red"  v-for="store in popular_stores.slice(0, 6)">{{store.name}}</a> </li>
                         </ul>
                  </ul>
                              </div>
                    </li>
                </ul>
            </li>
                            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header  waves-effect waves-red">Top Categories</a>
                        <div class="collapsible-body" style="">
                            <ul> 
          <ul class="collapsible collapsible-accordion" >          
    
               <li><a href="/categories" class="collapsible-header waves-effect waves-red"  >View All</a> </li>
               <li><a :href="'/category/'+cat.custom_url" class="collapsible-header waves-effect waves-red"  v-for="cat in popular_categories.slice(0, 6)">{{cat.name}}</a> </li>
          </li>
          
          </ul>
        </ul>
                        </div>
                    </li>
                </ul>
            </li>
                    <li><a href="/pages/contact_us" class="waves-effect waves-red">Contacts Us</a>    
                    <li><a href="/page/about_us" class="waves-effect waves-red">About Us</a>    
                    <li><a href="/pages/faq" class="waves-effect waves-red">Help</a>    
                    <li><a href="/page/submit_offer" class="waves-effect waves-red">Add offer</a>    
                    <li>

                      <div class="footer-social" style="display: flex;"> 
                         <a :href="configs.facebook" ><i class="fab fa-facebook hoverable" style="background: white;"></i></a>
                         <a :href="configs.twitter" ><i class="fab fa-twitter hoverable" style="background: white;"></i></a>
                        <a :href="configs.youtube" ><i class="fab fa-youtube hoverable" style="background: white;"></i></a>
                       
                        </div>

      </a>    
                    </div>
</ul>
 
<div class="top-category-mega " style="display:none;z-index: 22;">
      <div class="container">
        <div class="row">


          <div class="col s12 m4 l2">
            
              <ul>  
                <li v-for="cat in popular_categories.slice(0, 3)" ><a :href="base_url+'category/'+cat.slug" >{{cat.name}}</a></li> 
              </ul>
          </div>
           
           
          <div class="col s12 m4 l2">
          
              <ul>  
                <li v-for="cat in popular_categories.slice(3, 6)" ><a :href="base_url+'category/'+cat.slug" >{{cat.name}}</a></li> 
              </ul>
          </div>
           
           
          <div class="col s12 m4 l2"> 
              <ul>  
                <li v-for="cat in popular_categories.slice(6, 9)" ><a :href="base_url+'category/'+cat.slug" >{{cat.name}}</a></li> 
              </ul>
         </div>
               
          <div class="col s12 m4 l2"> 
              <ul>  
                <li v-for="cat in popular_categories.slice(9, 12)" ><a :href="base_url+'category/'+cat.slug" >{{cat.name}}</a></li> 
              </ul>
         </div>
           
           
          <div class="col s12 m4 l2">
     
              <ul>  
                <li v-for="cat in popular_categories.slice(12, 15)" ><a :href="base_url+'category/'+cat.slug" >{{cat.name}}</a></li> 
              </ul>
              <div  class="view-all-mega"><a  :href="base_url+'categories'">View All Categories</a></div>
          </div> 


        </div>
      </div>
    </div>
 


    <div class="top-stores-mega " style="display:none;z-index: 22;">
      <div class="container">
        <div class="row">


          <div class="col s12 m4 l2">
            
              <ul>  
                <li v-for="store in popular_stores.slice(0, 3)" ><a :href="base_url+'store/'+store.custom_url" >{{store.name}}</a></li> 
              </ul>
          </div>
           
           
          <div class="col s12 m4 l2">
          
              <ul>  
                <li v-for="store in popular_stores.slice(3, 6)" ><a :href="base_url+'store/'+store.custom_url" >{{store.name}}</a></li> 
              </ul>
          </div>
           
           
          <div class="col s12 m4 l2"> 
              <ul>  
                <li v-for="store in popular_stores.slice(6, 9)" ><a :href="base_url+'store/'+store.custom_url" >{{store.name}}</a></li> 
              </ul>
         </div>
               
          <div class="col s12 m4 l2"> 
              <ul>  
                <li v-for="store in popular_stores.slice(9, 12)" ><a :href="base_url+'store/'+store.custom_url" >{{store.name}}</a></li> 
              </ul>
         </div>
           
           
          <div class="col s12 m4 l2">
     
              <ul>  
                <li v-for="store in popular_stores.slice(12, 15)" ><a :href="base_url+'store/'+store.custom_url" >{{store.name}}</a></li> 
              </ul>
              <div  :href="base_url+'stores'" class="view-all-mega"><a  :href="base_url+'stores/'">View All Stores</a></div>
          </div> 
          

        </div>
      </div>
    </div>
            </header>
 