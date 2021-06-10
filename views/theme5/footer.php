<?php  add_page($this,'footer_breadcrumbs');?>
  
  <footer class="footer bg-colour-dark" role="contentinfo"  id="footer">
    <div class="container">

        <div class="footer-row">
            <div class="footer-navigation" style="width: 100%">
                <div class="footer-row">
                  



                    <div class="footer-navigation-column">

                        <strong class="footer-title">About {{configs.site_name}}</strong>

 

                        <ul class="footer-list">
                            <li class="footer-list-item"><a  :href="base_url+'categories'"  class="footer-list-link">Categories</a></li> 
                            <li class="footer-list-item"><a  :href="base_url+'pages/faq'"  class="footer-list-link">Help</a></li> 
                            <li class="footer-list-item"><a  :href="base_url+'page/contact_us'"  class="footer-list-link">Contact Us</a></li> 
                            <li class="footer-list-item"><a  :href="base_url+'sitemap.xml'" class="footer-list-link">Sitemap</a></li> 
                            <li class="footer-list-item">
                              
<div class="form-row form-tilesignup-details"><label for="tilesignup-email" class="sr-only">Email</label>

  <input id="tilesignup-email" type="email" class="input form-tilesignup-input"  name="subscribe_email"   placeholder="Email"></div><div class="form-row form-tilesignup-submit">

    <button type="submit" aria-label="Sign up" class="button" onclick='subscribes_email();' >Subscribe</button></div>

                            </li> 


                        </ul>

                    </div>


  <div class="footer-navigation-column">

                        <strong class="footer-title">Popular stores</strong>

                        <ul class="footer-list">
                                <li  v-for="store in popular_stores.slice(0, 7)"  class="footer-list-item">   <a :href="base_url+'store/'+store.custom_url" class="footer-list-link">{{store.name}}</a> </li>  
                                    </ul>

                       
                        </ul>

                    </div>
                    <div class="footer-navigation-column">

                        <strong class="footer-title">Popular categories</strong>
                        <ul class="footer-list">
                                       <li  v-for="cat in popular_categories.slice(0, 7)"  class="footer-list-item" >   <a :href="base_url+'category/'+cat.slug"  class="footer-list-link">{{cat.name}}</a> </li>  
                        </ul>

                    </div>
                    <div class="footer-navigation-column">

                        <strong class="footer-title">Company</strong>
                        <ul class="footer-list">

                                    <li class="footer-list-item"> <a class="footer-list-link" :href="base_url+'page/about_us'">About Us</a> </li>  
                                        <li class="footer-list-item"> <a class="footer-list-link"  :href="base_url+'page/terms_conditions'">Terms of Use</a> </li>
                                             <li class="footer-list-item"> <a class="footer-list-link"  :href="base_url+'page/privacy_policy'">Privacy Policy</a> </li>
                                      

 
                        </ul>
                  <ul class="footer-meta-social footer-social lt-med-hide">
                            <li class="footer-social-item">
                                <a :href="configs.facebook" target="_blank" rel="noopener" class="footer-social-link social-links-solid fa fa-facebook">
                                    <span class="sr-only">Like us on Facebook</span>
                                </a>
                            </li>
                             <li class="footer-social-item">
                                <a :href="configs.twitter" target="_blank" rel="noopener" class="footer-social-link social-links-solid fa fa-twitter">
                                    <span class="sr-only">Like us on twitter</span>
                                </a>
                            </li>
                          
                            <li class="footer-social-item">
                                <a :href="configs.instagram" target="_blank" rel="noopener" class="footer-social-link social-links-solid fa fa-instagram">
                                    <span class="sr-only">Follow us on instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    


                </div>
            </div>
            
        </div>

        <div class="pure-g">
            <div class="pure-u-1 footer-text-column">
                <p class="footer-slogan">Enjoy unlimited discount.  </p>
                <small class="footer-copyright">© Copyright  {{configs.site_name}} 2021. All rights reserved.</small>
            </div>
        </div>
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