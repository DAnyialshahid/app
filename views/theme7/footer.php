<?php  add_page($this,'footer_breadcrumbs');?>
 
<div  style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C86.90,126.80 458.23,-59.70 500.00,49.98 L500.00,150.00 L-109.47,256.08 Z" style="stroke: none; fill:var(--footer);"></path></svg></div>

  <footer class="footer pdBtm30"  id="footer" >
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-2">
                <h3>About {{configs.site_name}}</h3>
                <div class="   ">
                    <a href="/" class="LogoLink">
                        <img :src="base_url+'/assets/uploads/sites/'+configs.logo"  style="max-height: 200px;" class="top-logo img-responsive">
                    </a>
                </div>
                
                <ul class="socialLinksUl">
                    
                                    
                    <li><a target="_blank" :href="configs.facebook" class="icon-facebook"><i class="wh fa fa-facebook"></i></a></li>
                    
                                        
                                        
                    <li><a target="_blank" :href="configs.gplus" class="icon-gplus"><i class="wh fa fa-google-plus"></i></a></li>
                    
                                        
                    
                                        
                    <li><a target="_blank" :href="configs.twitter" class="icon-twitter"><i class="wh fa fa-twitter"></i></a></li>
                    
                                        
                                        
                </ul>
 
               
            </div>

                        
                        <div class="col-xs-12 col-md-2">
                        <h4>Top Stores</h4>
                        <ul>
                                                 
                                          <li  v-for="store in popular_stores.slice(0, 4)"  >   <a :href="base_url+'store/'+store.custom_url"  >{{store.name}}</a> </li>  
                                         </ul>
                    </div>
                    <div class="col-xs-12 col-md-2">
                            <h4>Quick Links</h4>
                            <ul>
                            <li><a  :href="base_url+'page/about_us'">About Us</a> </li>  
                            <li><a  :href="base_url+'page/privacy_policy'">Privacy Policy</a> </li>
                            <li><a  :href="base_url+'page/terms_conditions'">Terms of Use</a> </li>
                            <li><a  :href="base_url+'page/contact_us'">Contact Us</a></li> 
                            <li><a  :href="base_url+'pages/faq'">Help</a></li>   
                                      

  
                            </ul>
                        </div>
                    <div class="col-xs-12 col-md-3">
                        <h4>Top Categories</h4>
                        <ul>
                                                 
                                          <li  v-for="category in popular_categories.slice(0, 4)"  >   <a :href="base_url+'category/'+category.slug"   >{{category.name}}</a> </li>  
                                         </ul>
                    </div>

            <div class="col-xs-12 col-md-3">
              
                <div >
                      <h4>Our Newsletter</h4>
                  <input  type="email"   name="subscribe_email"   placeholder="Email" style="    padding: 5px;color:black;">
                <button type="submit" aria-label="Sign up" onclick='subscribes_email();'  style="    padding: 5px;width:100px;" class="btn-primary">Subscribe</button>
              </div>

                <div >
                     
                  <p class="footer-para" v-html="configs.description" > </p>
              </div>

              

                </div>
            </div>

            
            



            <!-- <div class="col-md-4">
                <h4 class="marginBtm10">Coupons Alert!</h4>
                <p>Recieve Coupons by email, Subscribe now.</p>
                
                
            </div> -->
        </div>
     
            <center class="" >
              <small class="footer-copyright"><b>Enjoy unlimited discount. </b></small>
                <small class="footer-copyright"> © Copyright  {{configs.site_name}} 2021. All rights reserved.</small>
            </center>
      
    </div>
    
   
</footer>







 




 
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

</div>
</body></html>