<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<div id="categories" class="row">
 <div class="col-lg-12"><div class="top-heading"><h3><span> All categories</span></h3></div></div>
 
 <br>
 <br>

 
<div class="grid" >
  <div class="grid-sizer"></div>
<div class="grid-item     "  v-for="group in categories_group"  style="width: 300px;    ">
  <a class="thumbnail custom-thumb" href="#">
    <img class="img-responsive store-img owl-lazy"  v-if="group.feature_image" v-bind:src="api_url+'/assets/uploads/categories/'+group.feature_image"   style="opacity: 1;" />
    <img class="img-responsive store-img owl-lazy"  v-if="!group.feature_image" :src="theme_base_url+'/assets/images/blank.png'"  style="opacity: 1;" />

  </a>
    <p class="pbname" style="">
      <a href="#">         {{group.name}}</a>
    </p>

    <div class="col-md-12" style="padding: 0px" v-for="category in group.categories">
                <a  :href="base_url+'category/'+category.slug" class="list-group-item">

              
                                     <img 

                                            class="img-responsive "
                                            v-if="category.feature_image"  
                                            v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image" 
                                            v-bind:alt="category.name" 
                                            style="width: 25px; height: 25px;margin-left: auto; margin-right: auto; display: inline"/>
                              
                         <i   v-if="!category.feature_image"   :class="'fa fa-'+category.icon"></i>





                      {{category.name}}</a>
              </div>  
  </div>

 
 
</div>
 
</div>




 

  