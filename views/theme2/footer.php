<?php  add_page($this,'footer_breadcrumbs');?>

<footer id="footer" >
    <div class="container"  id="bottom_footer">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-widget">
                <h4 class="widgettitle">Subscribe to get hand-picked deals direct to your inbox</h4>
             
                    <div class="form-group">
                        <div class="input-group">
                            <input placeholder="Enter Your Email Address" name="subscribe_email"   type="text" class="form-control input-subscribe" />
                            <span class="input-group-btn"><button type="button" onclick='subscribes_email();'  class="btn btn-primary btn-subscribe">Subscribe</button></span>
                        </div>
                    </div>
                <div class="footer-social">
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
                <h4 class="disclaimertitle">Disclaimer</h4>
                 <b v-html="configs.description" ></b> 


            </div>
            <div class="col-md-2"></div>
            <div class="col-sm-3 col-md-3 footer-widget">
                <h4 class="widgettitle">Company</h4>
                <ul>

       <li> <a :href="base_url+'page/about_us'">About Us</a> </li>  
       <li> <a :href="base_url+'categories'">Categories</a> </li> 
       <li> <a :href="base_url+'pages/faq'">Help</a> </li>
       <li> <a :href="base_url+'page/contact_us'" >Contact Us</a></li>


                </ul>
               
            </div>
            <div class="col-sm-3 col-md-3 footer-widget">
                <h4 class="widgettitle">Help</h4>
                <ul>
                       <li> <a  :href="base_url+'page/terms_conditions'">Terms of Use</a> </li>
                       <li> <a  :href="base_url+'sitemap.xml'">Sitemap</a> </li>
                        <li> <a  :href="base_url+'page/privacy_policy'">Privacy Policy</a> </li>
 
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <p>
                        2020 Copyright <a href="/">   <b v-html="configs.site_name" ></b> </a>
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p class="text-center">
                        Use of  <b v-html="configs.site_name" ></b>  is subject to <a :href="base_url+'page/terms_conditions'"><b>Terms &amp; Conditions</b></a>
                    </p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <p class="text-right">
                        View our <a  :href="base_url+'page/privacy_policy'"><b>Privacy Policy</b></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

 


                        <?php  add_page($this,'sections/codeBox');?>




</div>

                  
                            <script src="<?=script_attach(theme_base_url,'/assets/js/clipboard.min.js')?>"></script>
                                        <!--begin::Page Scripts(used by this page)-->

                            <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/custom_global.js')?>"></script>
                           <?php if(isset($js)):?>
                            <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/'.$js.'.js')?>"></script>
                           <?php endif;?>
                        <!--end::Page Scripts-->

                        <!--end::Page Scripts-->


</body></html>