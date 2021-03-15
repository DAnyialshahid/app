<t id="categories">
  <div class="section-banner"><div class="section-banner-container container"><div class="section-banner-content"><div class="section-banner-content-inner"><nav role="navigation" class="breadcrumbs"><div class="breadcrumbs-inner"><a href="/" class="breadcrumbs-item"><span class="breadcrumbs-text">Home</span></a><div class="breadcrumbs-item"><span class="breadcrumbs-text">All Categories</span></div></div></nav><h1 class="section-banner-title"> All Categories List </h1></div></div></div></div>


<main > 
 

<div class="container"  v-for="group in categories_group"  >
    <div class="section-allcategories-parent">
          <img v-if="group.feature_image" v-bind:src="api_url+'/assets/uploads/categories/'+group.feature_image"  class="img-responsive icon icon-with-shadow " style="width: 73px;height: 73px;">
               <img v-if="!group.feature_image" :src="theme_base_url+'/assets/images/blank.png'" class="img-responsive icon icon-with-shadow " style="width: 73px;height: 73px;">
        <p class="h1 section-allcategories-title">
            <a href="#">
            

                <!-- <i class="icon icon-with-shadow section-allcategories-icon icon-category-425"></i> -->
                <!-- <i class="icon icon-with-shadow section-allcategories-icon-x2 icon-category-425-x2"></i> -->
                {{group.name}}
            </a>
        </p>
        <ul class="section-allcategories">
                    <li class="section-allcategories-item"  v-for="category in group.categories" >
                        <a       :href="base_url+'category/'+category.slug"  class="link link-default">
                           {{category.name}}
                        </a>
                    </li>
               
        </ul>
    </div>
</div>

</main>
</t>




 

  