
<div class="container main-container" id="app">

    <div class="row">
        <div class="col-xs-12 wrapper clearfix">
            <h1>
                Coupons, Promo Codes &amp; Deals by Category
            </h1>
            <div class="categories">
                <div class="browse-card-list"> 
                <div v-for="category in categories"class="card-item">
                        <a :href="base_url+'category/'+category.slug" title="">
                               <i  class="'fa "     v-if="category.feature_image"    style=" height: auto;margin-top: auto; margin-bottom: auto;">
                                    <img 
                                            class="img-responsive "
                                            v-if="category.feature_image"  
                                            v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image" 
                                            v-bind:alt="category.name" 
                                            style="width: 40px; height: 40px;margin-left: auto; margin-right: auto;"/>
                                </i>
                         <i   v-if="!category.feature_image"   v-cloak  :class="'fa fa-'+category.icon"></i>

                            <span>{{category.name}}</span> </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
