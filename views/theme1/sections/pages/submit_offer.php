

<div class="container main-container" id="contact">
    <div class="row">
        <div class="col-sm-9 main page clearfix">
            <form class="contact-form-wrap from-horizontal clearfix" id="contact_us_form" action="$" method="POST" novalidate="novalidate">
     
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
                    <div class="col-xs-12">
                        <button type="submit" onclick="return submitContact();">Send Message</button>
                         <span class="send-loading"> 
                            <em class="double-bounce1"></em> 
                            <em class="double-bounce2"></em> 
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-xs-12 sidebar-menu contact-left-menu clearfix">
            <div class="sidebar-menu-box us-contact clearfix">
                <div class="content">
                    <ul>
                        <li class="country"><i :class="'flag-icon flag-icon-'+configs.contact_flag"></i><b> {{configs.contact_country}}</b></li>
                        <li><i class="df df-location"></i><b>Address:</b> {{configs.contact_address}}</li>
                        <li>
                            <i class="df df-phone"></i><b>Call Us:</b><br />  
                            <a :href="'tel:'+configs.contact_number" class="link">{{configs.contact_number}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="contact-img text-center"><img src="https://static.dontpayfull.com/static/images/contact-character.png" alt="contact us" /></div>
        </div>
    </div>
</div>
