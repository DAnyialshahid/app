<nav class="header-nav" >
    <div class="container">
        <ul class="nav links clearfix" id="top_menu_bar">
            <li>
                <a>
                    Categories   <span><i class="df-arrow-gen-down"></i></span>
                </a>
                <ul  class="submenu">
                    <li class="be-link" v-for="cat in popular_categories"><a :href="base_url+'category/'+cat.slug">{{cat.name}}</a></li>
                     <li class="be-link"><a  :href="base_url+'categories'" class="link">View All Categories</a></li>
                </ul>
            </li>
            <li>
                <a>
                    Stores <span><i class="df-arrow-gen-down"></i></span>
                </a>
                  <ul  class="submenu">
                    <li class="be-link" v-for="store in popular_stores"><a :href="base_url+'store/'+store.custom_url">{{store.name}}</a></li>
                     <li class="be-link"><a  :href="base_url+'stores'" class="link">View All Stores</a></li>
                </ul>
                
            </li>
             
             
            <li><a  :href="base_url+'page/submit_offer'" >Submit Offer</a></li>
            <!-- <li><a href="#" target="_blank">Blog</a></li> -->
        </ul>
    </div>
</nav>
