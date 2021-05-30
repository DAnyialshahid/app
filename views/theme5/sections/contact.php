 

<div class="container main-container">
    <div class="row">
        <div class="col-sm-9 main page clearfix">
            <form class="contact-form-wrap from-horizontal clearfix" id="contact_us_form" action="/mailer/sendcontactmail" method="POST" novalidate="novalidate">
                <input type="hidden" name="token" value="8ab87d4fb3600cc53fc0c5c958a250b1" />
                <div class="form-group clearfix">
                    <div class="col-xs-12"><input type="text" class="form-control" name="full_name" placeholder="Your name" /></div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-xs-12"><input type="text" class="form-control" name="email_address" placeholder="Your email adress" /></div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-xs-12">
                        <select id="contact_question_regarding" class="form-control label-effect-change" name="question_regarding">
                            <option selected="" value="">Select Subject</option>
                            <option value="Add / Remove Coupons" style="color: #333;">Add / Remove Coupons</option>
                            <option value="Business Proposal" style="color: #333;">Business Proposal</option>
                            <option value="Job Opportunities" style="color: #333;">Job Opportunities</option>
                            <option value="Advertising" style="color: #333;">Advertising</option>
                            <option value="Other" style="color: #333;">Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-xs-12"><textarea name="message" class="form-control" placeholder="Message"></textarea></div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-xs-12">
                        <button type="submit">Send Message</button> <span class="send-loading"> <em class="double-bounce1"></em> <em class="double-bounce2"></em> </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-xs-12 sidebar-menu contact-left-menu clearfix">
            <div class="sidebar-menu-box us-contact clearfix">
                <div class="content">
                    <ul>
                        <li class="country"><i class="flag-icon flag-icon-us"></i><b>United States</b></li>
                        <li><i class="df df-location"></i><b>Address:</b> 340 S Lemon Ave #2277, Walnut, CA 91789</li>
                        <li>
                            <i class="df df-phone"></i><b>Call Us:</b><br />
                            <a href="tel:+16502500104" class="link">+1-650-250-0104</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-menu-box ro-contact clearfix">
                <div class="content">
                    <ul>
                        <li class="country"><i class="flag-icon flag-icon-ro"></i><b>Romania</b></li>
                        <li><i class="df df-location"></i><b>Address:</b> Barbu Vacarescu 162, Bucharest, 020284</li>
                        <li>
                            <i class="df df-phone"></i><b>Call Us:</b><br />
                            <a href="tel:+40748316698" class="link">+40-748-316-698</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact-img text-center"><img src="https://static.dontpayfull.com/static/images/contact-character.png" alt="contact us" /></div>
        </div>
    </div>
</div>
