<header id="top_menu_bar">
<div class="primary-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="flex-wrapper">
          <div class="logo-wrapper">
            <a href="#">
              <img  src="<?=logo?>" class="img-responsive">
            </a>
          </div>
          <form action="#" class="search-bar form-search" method="post" accept-charset="utf-8"  >
     
 
       
<!---start d_search-->
<input type="text" class="form-control search-input" name="query" placeholder="Search your favourite Coupons from 5,686 Stores..." autocomplete="off">
 <!--- end d_search-->


          <span class="icon-bar">
            <svg class="svg-icon">
              <svg viewBox="0 0 16 16">
                <path d="M15.9 15.1l-3.6-3.6C13.4 10.4 14 8.8 14 7c0-3.9-3.1-7-7-7S0 3.1 0 7s3.1 7 7 7c1.8 0 3.4-.6 4.6-1.7l3.6 3.6c.2.2.5.2.7 0 .1-.2.1-.6 0-.8zM7 13c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path>
              </svg>
            </svg>
          </span>
<!---start d_search-->
          <div class="search_resultbox">
            <h2 class="heading">stores</h2>
            <ul class="search-list"></ul>
          </div>
<!--- end d_search-->
          </form>         
          <a  :href="base_url+'categories'"  class="btn btn-category">
            <img src="<?=theme_base_url?>/assets/images/category-nav-icon.png" class="img-responsive">Categories 
          </a>
          <!--<button class="btn btn-menu">
            <i class="fa fa-bars"></i>
          </button>-->
        </div>
      </div>
      <div class="col-lg-12">
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="/">Home</a>
          </li>
          <li class="nav-item">
            <a   :href="base_url+'stores'">Stores List</a>
          </li>
          <li class="nav-item">
            <a :href="base_url+'categories'" > Categories</a>
          </li> 
          <li class="nav-item">
            <a :href="base_url+'/page/submit_offer'">Add Offer</a>
          </li>
          <li class="nav-item">
            <a :href="base_url+'page/contact_us'">Contact Us</a>
          </li>
        </ul>
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


<div class="grad-color"></div>
</header>


 