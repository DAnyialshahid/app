  <div  id="categories"> 

<main class="main"    >
            <div class="page-head-container">
        <div class="container valign-wrapper">
            <h1 class="valign">All Categories</h1>
        </div>
    </div>

    <div class="page-content">
        
        <div class="container breadcrumb-nav">
            <div class="container breadcrumb-list">
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumb-ol">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/" title=""><span itemprop="name">Home</span> </a> <meta itemprop="position" content="1"> <i class="fa fa-chevron-right"></i></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">Categorires</span> <meta itemprop="position" content="2"> </li>
                </ol>
            </div>
        </div>
        
        <div class="container all-stores">
            <div class="row">
                                     
                    
                               <div id="list1" class="col s12 category-col mt-2">
<br>
                               
                               

                 <div  v-for="category in categories" class="col-md-3 mb-2">
                                    <a :href="base_url+'category/'+category.slug"   class="card hoverable" style="display: flex; padding: 7px; margin:11px;">

                                     <img   v-if="category.feature_image"  
                                            v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image" 
                                            v-bind:alt="category.name"  style="width: 50px;height:  50px"> 
                                             <i    v-if="!category.feature_image"  :class="'fa fa-'+category.icon " style="font-size: 40px; "></i>
                                  

                                        <span style="margin-left: 22px;height:40px ">{{category.name}}</span> </a>
                                </div>
                                                   
                                          
                                   
                                                    </div>
                                 </div>


                    
        </div>
    </div>
    </main>



 


 




   </section>
