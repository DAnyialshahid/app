<div   id="contact">
<div class="sb_sections border">
    <div class="container store-container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="store_breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="discount-flex-wrapper">
                    <div class="sidebar">
                        <div class="panel">
                            <h2 class="panel-title small">Get in touch!</h2>
                            <p class="cib-infop"><i class="fa fa-flag" aria-hidden="true"></i>  {{configs.contact_country}}</p>         
                            <p class="cib-infop"><i class="fa fa-map-marker" aria-hidden="true"></i> {{configs.contact_address}}</p>
                            <p class="cib-infop"><i class="fa fa-envelope" aria-hidden="true"></i>  {{configs.contact_email}}</span></p> 
                            <p class="cib-infop"><i class="fa fa fa-phone" aria-hidden="true"></i>{{configs.contact_number}}</p> 
                        </div> 
   <?php  add_page($this,'sections/pages/page_sidebar');?>    
                     
                      

                    </div>
                    <div class="content-bar">
                        <h2 class="section-title md">Contact Us</h2>
                        <div class="contact-info-text">
                        <div class="content_wrapper"> 

                                                                </div>

                            
                        </div>

                        <form method="post" action="#" class="submit-form contact_form">
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
                                <button type="submit" id="submit" onclick="return submitContact();" name="submit" class="btn btn-primary send-btn btn-contact">Send Message</button>  
                             
                                <span class="send-loading"> 
                            <em class="double-bounce1"></em> 
                            <em class="double-bounce2"></em> 
                        </span>
                            </form>

                                             </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


 
 


 