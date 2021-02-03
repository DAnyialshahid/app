<section class="pages-breadcumb" style="background:#e8e8e8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Submit Offer</h1>
                <p class="breadCumb"><a href="/">Home</a> &gt; Submit Offer</p>
            </div>
        </div>
    </div>
</section>

<section class="main-content content-section contact-section"  id="contact" style="background:#e8e8e8">
    <div class="container">
        <div class="row"  style="background: white; border-radius: 5px; padding: 10px; ">
            <div class="article">
                <div class="col-md-9 col-sm-12 col-xs-12 pull-right">
                    <div class="contact-form-area">
                         
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
                      <button type="submit" id="submit" onclick="return submitContact();" name="submit" class="btn btn-primary btn-contact">Submit Offer</button>  
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


 



 
