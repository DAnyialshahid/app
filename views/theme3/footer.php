<?php  add_page($this,'footer_breadcrumbs');?>


<footer class="page-footer" id="footer">
    <div class="container" >
 

<div class="row">
    <div class="col-xs-6 col-md-2 l3 s12">
        <h5>{{configs.site_name}}</h5>
        <p v-html="configs.description"> </p>

        <div class="footer-social"> 


            <a :href="configs.facebook" ><i class="fa fa-facebook hoverable"></i></a>
            <a :href="configs.twitter" ><i class="fa fa-twitter hoverable"></i></a>
            <a :href="configs.youtube" ><i class="fa fa-youtube hoverable"></i></a>
           
        </div>

       
    </div>

    <div class=" col-xs-6 col-md-2  l2 s12">
        <h5>Top Stores</h5>
        <ul >
                <li  v-for="store in popular_stores.slice(0, 7)"  >   <a :href="base_url+'store/'+store.custom_url">{{store.name}}</a> </li>  
        </ul>
    </div>

    <div class=" col-xs-6 col-md-2  l2 s12">
        <h5>Top Categories</h5>
        <ul>
                 <li  v-for="cat in popular_categories.slice(0, 7)"  >   <a :href="base_url+'category/'+cat.slug">{{cat.name}}</a> </li>       
          </ul>
    </div>

    <div class=" col-xs-6 col-md-2  l2 s12">
        <h5>Company</h5>
        <ul>

       <li> <a :href="base_url+'page/about_us'">About Us</a> </li>  
       <li> <a :href="base_url+'categories'">Categories</a> </li> 
       <li> <a :href="base_url+'pages/faq'">Help</a> </li>
       <li> <a :href="base_url+'page/contact_us'" >Contact Us</a></li>
       <li> <a  :href="base_url+'page/terms_conditions'">Terms of Use</a> </li>
       <li> <a  :href="base_url+'sitemap.xml'">Sitemap</a> </li>
       <li> <a  :href="base_url+'page/privacy_policy'">Privacy Policy</a> </li>

         
        </ul>
    </div>
        
    <div class=" col-xs-6 col-md-2  l3 s12">
        <h5>Newsletters</h5>
       <div class="form-group">
                        <div class=" row ">
                            <input placeholder="Enter Your Email Address" name="subscribe_email"   type="text" class="form-control input-subscribe" />
                            <button type="button" onclick='subscribes_email();'  class="btn btn-primary btn-subscribe">Subscribe</button> 
                        </div>
                    </div>
             </div>
        </div>

    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright © 2020  <span v-html="configs.site_name" ></span>
        </div>
    </div>
</footer>



 


                        <?php  add_page($this,'sections/codeBox');?>

</div>

               <script src="<?=theme_base_url?>/asssets/js/materialize.min.js"></script>
    <script src="<?=theme_base_url?>/assets/js/vendor.min.js"></script>
    <script src="<?=theme_base_url?>/assets/js/app-d925701f8e.min.js"></script>

                     <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
            
                            <script src="<?=script_attach(theme_base_url,'/assets/js/clipboard.min.js')?>"></script>
                                        <!--begin::Page Scripts(used by this page)-->

                            <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/custom_global.js')?>"></script>
                           <?php if(isset($js)):?>
                            <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/'.$js.'.js')?>"></script>
                           <?php endif;?>
                        <!--end::Page Scripts-->

                        <!--end::Page Scripts-->


</body></html>