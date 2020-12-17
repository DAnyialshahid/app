<?php  add_page($this,'footer_breadcrumbs');?>
<div class="footer clearfix"> 

<?php  add_page($this,'footer_newslatter');?>

 <footer class="site-footer" id="botton_footer"> 

  <div class="container text-center"> <nav class="footer-navigation">

   <ul> 


       <li> <a :href="base_url+'page/about_us'">About Us</a> </li>  
       <li> <a :href="base_url+'categories'">Categories</a> </li> 
       <li> <a :href="base_url+'page/help'">Help</a> </li>
       <li> <a :href="base_url+'page/contact_us'" >Contact Us</a></li>
     </li> 

  </ul> 
  </nav> 

  <?php  add_page($this,'footer_social');?>

 	<nav class="footer-useful-links"> <ul>
   <li> <a  :href="base_url+'page/terms_conditions'">Terms of Use</a> </li>
   <li> <a  :href="base_url+'sitemap.xml'">Sitemap</a> </li>
    <li> <a  :href="base_url+'page/privacy_policy'">Privacy Policy</a> </li>
     </ul> </nav>
  <p class="copyright">
© 2020 Letinoi.com
<span class="copyright-extra">&nbsp;- Friends Don't Let Friends Pay Full</span> </p>  
 </div>

 </footer>  

</div>

                        <?php  add_page($this,'sections/codeBox');?>

                           

                            <script src="<?=script_attach(theme_base_url,'/assets/js/clipboard.min.js')?>"></script>
   					                	<!--begin::Page Scripts(used by this page)-->

                            <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/custom_global.js')?>"></script>
                           <?php if(isset($js)):?>
                            <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/'.$js.'.js')?>"></script>
                           <?php endif;?>
                        <!--end::Page Scripts-->
                        <?= setting('footer')?>

</body></html>