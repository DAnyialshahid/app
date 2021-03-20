<div class="container" id="contact">



 <br>
<section class="row"   >
      <div class="col-lg-12"><div class="top-heading"><h3><span> About Us </span></h3></div></div>
 
   <div class="container">
        <div class="row" style="background: white; border-radius: 5px; padding: 10px; "> 
            <div class="article"> <div class="col-md-9 col-sm-12 col-xs-12 pull-right">
                  <h1  class="head_title"></h1>
                        <div class="contact-form-area">
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
                                <br>
                                <button type="submit" id="submit" onclick="return submitContact();" name="submit" class="btn btn-primary btn-contact" style="background:var(--primary)" >Send Message</button>  
                             
                                <span class="send-loading"> 
                                    <em class="double-bounce1"></em> 
                                    <em class="double-bounce2"></em> 
                                </span>
                            </form>
                               <hr>
                           </div>

                </div>

            </div>
            <aside>
                <div class="col-md-3 col-sm-12 col-xs-12"> 


                            <div class="box">
                                        <div class="box-header with-border">
                                          <span class="box-heading">How to Reach?</span>
                                        </div>
                                        <div class="box-body custom-pills-items">
                                          <ul class="pills-ul">
                                                           
                                                
                                                     <p class="cib-infop"><i class="fa fa-flag" aria-hidden="true"></i>  {{configs.contact_country}}</p>         
                                                        <p class="cib-infop"><i class="fa fa-map-marker" aria-hidden="true"></i> {{configs.contact_address}}</p>
                                                        <p class="cib-infop"><i class="fa fa-envelope" aria-hidden="true"></i>  {{configs.contact_email}}</span></p> 
                                                        <p class="cib-infop"><i class="fa fa fa-phone" aria-hidden="true"></i>{{configs.contact_number}}</p>

                                         
                                          </ul>
                                        </div>
                                      </div>



 

                       

                     <?php  add_page($this,'sections/pages/page_sidebar');?>    
                </div>
            </aside>
        </div>
    </div>
</section>


 

 
     

</div>

 


 
 


 