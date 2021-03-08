<?php  add_page($this,'footer_breadcrumbs');?>


<div class="section footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscribe-div">
                    <form action="#" class="submit-form sb_form subsc-form" form-type="subscribeform" method="post" accept-charset="utf-8">
<input type="hidden" name="_token" value="158442bd85e692d745dcde39b331c274">                                                                                       
                        <div class="response-box"></div>
                        <label for="subs-input" class="subs-label">Get the latest deals and more.</label>
                        <input type="email"  name="subscribe_email" required="" name="email" class="form-control subs-input" placeholder="Enter Email address">
                        <input type="submit" value="Subscribe" class="btn btn-subscribe" onclick='subscribes_email();' >
                     </form>
                    <div class="social-widgets">
                        <ul>
                                      
                                
                            <li><a :href="configs.facebook" data-processed="1"><i class="fa fa-facebook"></i></a></li>
                            <li><a :href="configs.twitter" data-processed="1"><i class="fa fa-twitter"></i></a></li>
                            <li><a :href="configs.youtube" data-processed="1"><i class="fa fa-youtube"></i></a></li>
                             
                                                        
                                                        
         </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr class="footer-seperator">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h2 class="footer-heading"> About {{configs.site_name}}</h2>
                <ul class="footer-list">
                             <li> <a :href="base_url+'categories'">Categories</a> </li> 
                                           <li> <a :href="base_url+'pages/faq'">Help</a> </li>
                                           <li> <a :href="base_url+'page/contact_us'" >Contact Us</a></li>
                                          
                                           <li> <a  :href="base_url+'sitemap.xml'">Sitemap</a> </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h2 class="footer-heading">Popular Stores</h2>
                                <ul class="footer-list">
                                 <li  v-for="store in popular_stores.slice(0, 7)"  >   <a :href="base_url+'store/'+store.custom_url">{{store.name}}</a> </li>  
                                    </ul>
            </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h2 class="footer-heading">Popular Categories</h2>
                                <ul class="footer-list">
                                      <li  v-for="cat in popular_categories.slice(0, 7)"  >   <a :href="base_url+'category/'+cat.slug">{{cat.name}}</a> </li>       
          
                                    </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h2 class="footer-heading">Company</h2>
                                <ul class="footer-list">
                                         
                                  
                                              <li> <a :href="base_url+'page/about_us'">About Us</a> </li>  
                                        <li> <a  :href="base_url+'page/terms_conditions'">Terms of Use</a> </li>
                                             <li> <a  :href="base_url+'page/privacy_policy'">Privacy Policy</a> </li>
                                      

                                    </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-para">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php  add_page($this,'sections/codeBox');?>
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  />
       <!-- <script src="<?=theme_base_url?>/assets/js/materialize.min.js"></script> -->

   <!-- owl  JavaScript -->
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                    <!-- Flickity  JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

                            <script src="<?=script_attach(theme_base_url,'/assets/js/clipboard.min.js')?>"></script>
                                        <!--begin::Page Scripts(used by this page)-->

                            <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/custom_global.js')?>"></script>
                           <?php if(isset($js)):?>
                            <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/'.$js.'.js')?>"></script>
                           <?php endif;?>
                        <!--end::Page Scripts-->

                  <script type="text/javascript">
                  $(document).trigger('footer_loaded');
                  </script>


</body></html>