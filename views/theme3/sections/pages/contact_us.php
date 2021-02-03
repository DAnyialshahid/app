<section class="pages-breadcumb"  style="background:#e8e8e8" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <p class="breadCumb"><a href="/">Home</a> &gt; Contact Us</p>
            </div>
        </div>
    </div>
</section>

<section class="main-content content-section contact-section"   id="contact" style="background:#e8e8e8">
    <div class="container">
        <div class="row" style="background: white; border-radius: 5px; padding: 10px; ">
             <div class="article">
                <div class="col-md-9 col-sm-12 col-xs-12 pull-right">
                    <div class="contact-form-area">
                         
                        <div class="form-area"> 

                            <form method="post" action="#">
                                <div class="form-group">
                                    <label>Enter Your Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Name"
                                        required="required"
                                        class="form-control"
                                       
                                    />
                                </div>
                                <div class="form-group"><label>Enter Your Email</label> <input type="text" id="email" name="email" placeholder="Email" required="required" class="form-control" /></div>

                                <div class="form-group"><label>Select The Subject</label>   

                                   <select id="contact_question_regarding" class="form-control label-effect-change" name="question">
                            <option selected="" value="not_select">Select Subject</option>
                            <option value="Add / Remove Coupons" style="color: #333;">Add / Remove Coupons</option>
                            <option value="Business Proposal" style="color: #333;">Business Proposal</option>
                            <option value="Job Opportunities" style="color: #333;">Job Opportunities</option>
                            <option value="Advertising" style="color: #333;">Advertising</option>
                            <option value="Other" style="color: #333;">Other</option>
                          </select>
                      </div>


                             
                                <div class="form-group"><label>Enter Your Message</label> <textarea id="message" name="message" placeholder="Message" rows="7" required="required" class="form-control"></textarea></div>
                                <div data-sitekey=" " class="g-recaptcha">
                                    <div style="width: 304px; height: 78px;">
                                         
                                        <textarea
                                            id="g-recaptcha-response"
                                            name="message"

                                            class="g-recaptcha-response"
                                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                                        ></textarea>
                                    </div>
                                    <iframe style="display: none;"></iframe>
                                </div>
                                <div class="form-group"></div>
                                <button type="submit" id="submit" onclick="return submitContact();" name="submit" class="btn btn-primary btn-contact">Send Message</button>  
                                <span class="send-loading"> 
                            <em class="double-bounce1"></em> 
                            <em class="double-bounce2"></em> 
                        </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar-widget">
                        <div class="widget-content">
                            <h3 class="widget-title">Contact info </h3>
                            <ul class="sidebar-list" id="contact_us_form">
                                    <div class="sidebar-menu-box us-contact clearfix">
                                    <div class="content">
                                        <ul style="    list-style-type: disc">
                                            <li class="country"><b>Country</b><br><i :class="'flag-icon flag-icon-'+configs.contact_flag"></i> {{configs.contact_country}}</li>

                                            <li><i class="df df-location"></i><b>Address:</b><br> {{configs.contact_address}}</li>
                                            <li>
                                                <i class="df df-phone"></i><b>Call Us:</b><br />  
                                                <a :href="'tel:'+configs.contact_number" class="link">{{configs.contact_number}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </ul>
                        </div>
                    </div>
                     <?php  add_page($this,'sections/pages/page_sidebar');?>    
                </div>
            </aside>
        </div>
    </div>
</section>


 