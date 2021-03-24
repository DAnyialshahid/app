
<div id="categories"> 
<div class="sb_sections border">
  <div class="container store-container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="store_breadcrumbs">
          <li><a href="/">Home</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><a href="#" class="active">All Categories</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

  <div class="section bg">
    <div class="container">
    <div class="row">
      <div  class="col-lg-12"   >
              <div class="masonry-categories-box"  >
                  





                <div class="parent-category" v-for="group in categories_group" >
                  <div class="categories-list-thumbnail">
                    <a href="#">
                      <div class="web_imagebox">
                        <img v-if="group.feature_image" v-bind:src="api_url+'/assets/uploads/categories/'+group.feature_image"  class="img-responsive">
                        <img v-if="!group.feature_image" :src="theme_base_url+'/assets/images/blank.png'" class="img-responsive">
                      </div>
                      <h1>{{group.name}}</h1>
                    </a>
                  </div>
                  <div class="first-child-category"  v-for="category in group.categories" >
           

                   <!--  <img   v-if="category.feature_image" v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image" style="width: 50px;height:  50px"> 
                    <i    v-if="!category.feature_image"  :class="'fa fa-'+category.icon " style="font-size: 40px; "></i> -->


                    <h2>   <a  :href="base_url+'category/'+category.slug"  >{{category.name}}</a></h2>
                  </div>
                      
                </div>
            </div>
       </div>
      </div>
  </div>
</div>
</div>



  