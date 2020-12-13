   

                <div class="sidebar-menu-box clearfix">
                <h5 class="title">Relative  Popular Stores </h5>
                <div class="content">
                    <ul>

                        <li v-for="store in popular_stores" class="listing-item">

                             <a :href="base_url+'store/'+store.custom_url" title="" style="display: flex ">
                            <div class="img-container">
                                <!-- <img   v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" 
                                       v-bind:alt="store.name"
                                    class="lazy-load img-responsive"
                                    width="40" 
                                 
                                /> -->
                                                  <span>{{store.name}}</span>
                            </div>
          
                        </a>


                        </li>
                      
                    </ul>
                  <a :href="base_url+'stores'"> <span class="view-more" >View More</span></a>
                </div>
            </div>

    <div class="sidebar-menu-box clearfix">
                <h5 class="title"> Popular Stores</h5>
                <div class="content">
                    <ul>

                        <li v-for="store in relative_stores" class="listing-item">

                             <a :href="base_url+'store/'+store.custom_url" title="" style="display: flex ">
                            <div class="img-container">
                                <!-- <img   v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" 
                                       v-bind:alt="store.name"
                                    class="lazy-load img-responsive"
                                    width="40" 
                                 
                                /> -->
                                                  <span>{{store.name}}</span>
                            </div>
          
                        </a>


                        </li>
                      
                    </ul>
                      <a :href="base_url+'stores'"> <span class="view-more" >View More</span></a>
                </div>
            </div>

