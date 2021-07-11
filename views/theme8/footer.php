

<?php  add_page($this,'footer_breadcrumbs');?>
<!-- <div  style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C86.90,126.80 458.23,-59.70 500.00,49.98 L500.00,150.00 L-109.47,256.08 Z" style="stroke: none; fill:var(--footer);"></path></svg></div> -->
<hr>
<section class="divc footerm_main_head" style="">
   <div class="container padtb20 home_container">
      <div class="row">
         <div class="col-md-4 col-xsm-12 col-xs-12">
            <div class="footerm_box">
               <p class="footerm_head">  <h3>About <?=$data->common['configs']['site_name']?></h3></p>
               <div class="footerm_body">
                  <p>Refer a Friend Programs with Guaranteed ROI</p>
               
                   
               </div>
            </div>
         </div>
         <div class="col-md-8 col-xsm-12 col-xs-12">
            <div class="row">
               <div class="col-md-4">
                  <div class="footerm_box">
                     <div class="footerm_body">
                            <h4>Top Stores</h4>
                        <ul>
                            

                             <?php 

                            if (isset($data->common['popular_stores'])){
                              foreach (array_slice($data->common['popular_stores'],0,5) as $row ) {  
                            ?>
                              <li><a href="/categories/<?=$row->custom_url?>"><i aria-hidden="true" class="fa fa-caret-right"></i><?=$row->name?> </a></li>
 

                              <?php 
                                }
                              }
                          ?>  
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footerm_box">
                     <div class="footerm_body">
                            <h4>Quick Links</h4>
                         <ul>
                            <li><a href="<?=base_url()?>page/about_us">About Us</a> </li>  
                            <li><a href="<?=base_url()?>page/privacy_policy">Privacy Policy</a> </li>
                            <li><a href="<?=base_url()?>page/terms_conditions">Terms of Use</a> </li>
                            <li><a href="<?=base_url()?>page/contact_us">Contact Us</a></li> 
                            <li><a href="<?=base_url()?>pages/faq">Help</a></li>   
                                      

  
                            </ul> 
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footerm_box">
                     <div class="footerm_body">
                            <h4>Top Categories</h4>
                        <ul>
                         

                             <?php 

                            if (isset($data->common['popular_categories'])){
                              foreach (array_slice($data->common['popular_categories'],0,5) as $row ) {  
                            ?>
                              <li><a href="/categories/<?=$row->slug?>"><i aria-hidden="true" class="fa fa-caret-right"></i><?=$row->name?> </a></li>
 

                              <?php 
                                }
                              }
                          ?>  
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-12" style="padding-left:0px;padding-right:0px;">
            <small class="footer-copyright"> © Copyright  <?=$data->common['configs']['site_name']?> 2021. All rights reserved.</small>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


  




 




 
    <?php  add_page($this,'sections/codeBox');?>
   
  
              <!-- <script src="<?=script_attach(theme_base_url,'/assets/js/clipboard.min.js')?>"></script> -->
                          <!--begin::Page Scripts(used by this page)-->

              <!-- <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/custom_global.js')?>"></script> -->
                  

</div>
</body></html>