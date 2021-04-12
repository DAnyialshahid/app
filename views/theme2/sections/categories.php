


  <div  id="categories" style="background: #f5f5f5"> 

<section class="main-content " >
    <div class="container">
    <section class="pages-breadcumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1  class="head_title">All Categories</h1>
                <p class="breadCumb"><a href="/">Home</a> &gt; <span class="head_title">Categories</span></p>
                  <hr class="border-line" />
            </div>
        </div>
    </div>
</section>
        <div class="stores-list text-center">
                   <center>
                          <ul class="stores-list row">

                               <li  v-for="category in categories"  class="col-xs-6 col-md-6 col-lg-2" >
<div style="background: white;margin: 10px" >
                                                
                                <a :href="base_url+'category/'+category.slug"  class="text-center" title=" ">
                                        <div class="img-container " style="margin-top: 8px;">

                                           <div   v-if="!category.feature_image" class="col-xs-12" > 
                                             <i   :class="'fa fa-'+category.icon " style="font-size: 40px; "></i> </div>
                                          <center>    
                                            <img 
                                            class="img-responsive "
                                            v-if="category.feature_image"  
                                            v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image" 
                                            v-bind:alt="category.name" 
                                            style="width: 141px; height: 92px;" 
                                            />
                                        </center>
                                              <span  class="col-xs-12 " style="overflow: hidden;height: 29px;    text-transform: uppercase;" >{{category.name}}</span>
                                        </div>
                                      
                                    </a>
                     </div>
                               </li>
                               

                          </ul>

             </center>
        </div>
         
    </div>
</section>


 

 
