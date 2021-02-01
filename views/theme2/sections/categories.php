


  <div  id="categories"> 

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
        <div class="stores-list">
           
                          <ul class="stores-list row">

                               <li  v-for="category in categories"  class="col-xs-6 col-md-6 col-lg-4" >

                              <center>                                   
                                <a :href="base_url+'category/'+category.slug"  class="row" title=" ">
                                        <div class="img-container " style="margin-top: 8px;">

                                           <div   v-if="!category.feature_image" class="col-xs-12" > 
                                             <i   :class="'fa fa-'+category.icon " style="font-size: 40px; "></i> </div>
                                          <center>    
                                            <img 
                                            class="img-responsive "
                                            v-if="category.feature_image"  
                                            v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image" 
                                            v-bind:alt="category.name" 
                                            style="width: 52px;/* height: 50px;*/" 
                                            />
                                        </center>
                                              <span  class="col-xs-12 " >{{category.name}}</span>
                                        </div>
                                      
                                    </a>
                                    </center>
                               </li>
                               

                          </ul>

             
        </div>
         
    </div>
</section>


 

 
