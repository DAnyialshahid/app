
<div class="footer">
  <div class="upper-footer">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="newsletter-form w50">
          <div class="newsletter-desc">

          <h1 class="section_title mb20"> Sign up for our weekly email newsletter with the best money saving coupons.</h1>
          
        </div>
          <div class="newsletter_wrapper">

          <form action="https://www.savified.com/subscribers/add" class="submit-form sb_form" form-type="subscribeform" method="post" accept-charset="utf-8">
<input type="hidden" name="_token" value="ec9a0978d6bc23d6e953d7e0a9cd332a">                                            
          <div class="response-box"></div>
          <div class="subscriptionBox">
            <input type="text" class="form-control" placeholder="Enter your Email Address" name="email">
            <input type="submit" value="Subscribe" class="btn">
          </div>
          </form>        </div>

        </div>
        <hr class="footer-seperator">
          <div class="flex-column">
            <div class="footer-media">
              <div class="footer-logo">
                <img src="<?=logo?>" class="img-responsive">
              </div>
              <p class="footer-sec-text">
<b>Disclaimer</b>: "We may earn a commission when you use one of our coupons/links to make a purchase."
<br>
Copyright 2021 | © <?=$data->common['configs']['site_name']?> - All rights are reserved.</p>
            </div>
            <div class="footer-act">
              <ul>
                <li>
                  <img class="img-responsive lazy" src="https://www.savified.com/assets/theme/images/footer-img-1-min.png" style="">
                  <h3>1,900+ Stores</h3>
                </li>
                <li>
                  <img class="img-responsive lazy" src="https://www.savified.com/assets/theme/images/footer-img-2-min.png" style="">
                  <h3>All Verified Codes</h3>
                </li>
                <li>
                  <img class="img-responsive lazy" src="https://www.savified.com/assets/theme/images/footer-img-3-min.png" style="">
                  <h3>5k+ Users Daily</h3>
                </li>
                <li>
                  <img class="img-responsive lazy" src="https://www.savified.com/assets/theme/images/footer-img-4-min.png" style="">
                  <h3>16,087+ Offers</h3>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="footer-seperator">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 t-a-center">
          <h2 class="footer-head"><?=$data->common['configs']['site_name']?></h2>
          <ul class="footer-list">
            <li><a href="https://www.savified.com/privacy">Privacy Policy</a></li>
            <li><a href="https://www.savified.com/terms">Terms of Use</a></li>
            <li><a href="https://www.savified.com/about">Who Are We</a></li>
            <li><a href="https://www.savified.com/disclaimer">Disclaimer</a></li>
            <li><a href="https://www.savified.com/contact">Contact us</a></li>
          </ul>
          <ul class="list-inline social-small">
              
            <li><a href="https://www.facebook.com/savified"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?=$data->common['configs']['google_plus']?>"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="<?=$data->common['configs']['twitter']?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?=$data->common['configs']['pinterest']?>"><i class="fa fa-pinterest"></i></a></li>
                      </ul>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 t-767">

          <h2 class="footer-head">Top Stores Offers</h2>

                    <ul class="footer-list">

                      <?php 

                            if (isset($data->common['popular_stores'])){
                              foreach (array_slice($data->common['popular_stores'],0,5) as $row ) {  
                            ?>

                              <li><a href="/categories/<?=$row->custom_url?>"><?=$row->name?> </a></li>
 

                              <?php 
                                }
                              }
                          ?>
                        </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 t-a-center">
          <h2 class="footer-head">Quick Links</h2>
          <ul class="footer-list">
            <li><a href="<?=base_url()?>page/about_us">About Us</a> </li>  
                            <li><a href="<?=base_url()?>page/privacy_policy">Privacy Policy</a> </li>
                            <li><a href="<?=base_url()?>page/terms_conditions">Terms of Use</a> </li>
                            <li><a href="<?=base_url()?>page/contact_us">Contact Us</a></li> 
                            <li><a href="<?=base_url()?>pages/faq">Help</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 t-a-center">
          <h2 class="footer-head md-margin">Featured Categories</h2>
                    <div class="cubes-block">
                   <?php 

                            if (isset($data->common['popular_categories'])){
                              foreach (array_slice($data->common['popular_categories'],0,10) as $row ) {  
                            ?>
                              <span class="single-cube footer-block">
            <a href="/categories/<?=$row->slug?>"> <?=$row->name?></a>
            </span>
 

                              <?php 
                                }
                              }
                          ?>
                        
                      </div>
                  </div>
      </div>
    </div>
  </div>
  <div>
    <div class="footer_copyright">
    
<b>Disclaimer</b>: "We may earn a commission when you use one of our coupons/links to make a purchase."
<br>
Copyright 2021 | © <?=$data->common['configs']['site_name']?> - All rights are reserved.    </div>
  </div>
</div>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">






























 
    <?php  add_page($this,'sections/codeBox');?>
   
  
              <script src="<?=script_attach(theme_base_url,'/assets/js/clipboard.min.js')?>"></script>
                          <!--begin::Page Scripts(used by this page)-->

              <script src="<?=script_attach(theme_base_url,'/assets/js/d_custom/custom_global.js')?>"></script>
                  

</div>
</div>

</body></html>