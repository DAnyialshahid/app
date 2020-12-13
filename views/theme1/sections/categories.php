
<div class="container main-container" id="app">

    <div class="row">
        <div class="col-xs-12 wrapper clearfix">
            <h1>
                Coupons, Promo Codes &amp; Deals by Category
            </h1>
            <div class="categories">
                <div class="browse-card-list"> 
                <div v-for="category in categories"class="card-item">
                        <a :href="base_url+'category/'+category.slug" title=""> <i :class="'fa fa-'+category.icon"></i><span>{{category.name}}</span> </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
