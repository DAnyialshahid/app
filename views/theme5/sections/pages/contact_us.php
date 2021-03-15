<div class="container" id="contact">
    <main class="layout-content">

 
         
 <br>

<form method="post" action="#" class="submit-form contact_form">
                                <div class="form-contactus-group">
                                    <label>Enter Your Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Name"
                                        required="required"
                                        class="form-control input "
                                       
                                    />
                                </div>
                                <div class="form-contactus-group"><label>Enter Your Email</label> <input type="text" id="email" name="email" placeholder="Email" required="required" class="form-control input " /></div>

                                <div class="form-contactus-group"><label>Select The Subject</label>   

                        <select id="contact_question_regarding" class="form-control label-effect-change input " name="question">
                            <option selected="" value="not_select">Select Subject</option>
                            <option value="Add / Remove Coupons" style="color: #333;">Add / Remove Coupons</option>
                            <option value="Business Proposal" style="color: #333;">Business Proposal</option>
                            <option value="Job Opportunities" style="color: #333;">Job Opportunities</option>
                            <option value="Advertising" style="color: #333;">Advertising</option>
                            <option value="Other" style="color: #333;">Other</option>
                          </select>
                      </div>


                             
                        <div class="form-contactus-group"><label>Enter Your Message</label> <textarea id="message" name="message" placeholder="Message" rows="7" required="required" class="form-control input "   style="width: 100%; height: 78px;"></textarea></div>
                                 
                                <div class="form-contactus-group"></div>
                                <button type="submit" id="submit" onclick="return submitContact();" name="submit" class="button button-contact-submit button-no-border false  ">Send Message</button>  
                             
                                <span class="send-loading"> 
                            <em class="double-bounce1"></em> 
                            <em class="double-bounce2"></em> 
                        </span>
                            </form>


   


    </main>

    <aside class="layout-sidebar">
        

<div class="panel section-contactus">
    <div class="panel-inner section-contactus-inner">
        <h2 class="h2 section-contactus-title">Get in Touch!</h2>
        <div class="section-contactus-content">
            <div class="section-contactus-row">
                <div class="section-contactus-col"> 

                            <p class="cib-infop"><i class="fa fa-flag" aria-hidden="true"></i>  {{configs.contact_country}}</p>         
                            <p class="cib-infop"><i class="fa fa-map-marker" aria-hidden="true"></i> {{configs.contact_address}}</p>
                            <p class="cib-infop"><i class="fa fa-envelope" aria-hidden="true"></i>  {{configs.contact_email}}</span></p> 
                            <p class="cib-infop"><i class="fa fa fa-phone" aria-hidden="true"></i>{{configs.contact_number}}</p> 
                </div>
 
            </div>
        </div>
    </div>
</div>

    <?php  add_page($this,'sections/pages/page_sidebar');?>    




    </aside>

</div>

 


 
 


 