    <div class="sb_sections border">
    <div class="container store-container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="store_breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active"  >Submit Offer</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="main-content content-section contact-section"  id="contact" style="background:#e8e8e8">
<br>
    <div class="container">
        <div class="row"  style="background: white; border-radius: 5px; padding: 10px; ">

            <div class="article">
                <div class="col-md-9 col-sm-12 col-xs-12 pull-right">
                      <h1> Add new offer</h1>
                    <div class="contact-form-area ">
                         
                        <div class="form-area"> 
                         <div class="form-group clearfix">
                    <div class="col-xs-6"><input type="text" class="form-control" name="name" placeholder="Your name" /></div>
                        <div class="col-xs-6"><input type="text" class="form-control" name="email" placeholder="Your email adress" /></div>
                </div> 
                <div class="form-group clearfix">
                      <div class="col-xs-6"><input type="text" class="form-control" name="store_name" placeholder="Store Name" /></div>
                       <div class="col-xs-6"><input type="text" class="form-control" name="coupon_title" placeholder="Coupon Title" /></div>
                </div> 
                <div class="form-group clearfix">
                      <div class="col-xs-12"><input type="text" class="form-control" name="coupon_code" placeholder="Coupon code (leave black if deal)" /></div>
                </div> 
                <div class="form-group clearfix">
                    <div class="col-xs-12"><textarea name="message" class="form-control" placeholder="Message"></textarea></div>
                </div>
                <div class="form-group clearfix">
                   
                </div>
                      <button type="submit" id="submit" onclick="return submitContact();" name="submit" class="btn btn-primary btn-contact" style="background: #db4b52">Submit Offer</button>  
                      <span class="send-loading"> 
                            <em class="double-bounce1"></em> 
                            <em class="double-bounce2"></em> 
                        </span>

                  </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="col-md-3 col-sm-12 col-xs-12"> 
                     <?php  add_page($this,'sections/pages/page_sidebar');?>    
                </div>
            </aside>
        </div>
    </div>
</section>


 



 
