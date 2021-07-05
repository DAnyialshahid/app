
<div class="section bg">
  <div class="container">
    <div class="row">
    <div id="crumbs">
  <div class="container store-container noPadding992">
  <ul>
    <li><a href="https://www.savified.com/" class="home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
    <li class="active"><a href="https://www.savified.com/categories"><i class="fa fa-bookmark" aria-hidden="true"></i> Contact Us</a></li>
    
  </ul>
  </div>
</div>  
    <div class="container"  style="background-color: white;">
      

      <div class="col-md-8" >
          <form class="contact-form validate-form" action="" method="post">
        <span class="contact-form-title">
          Send Us A Message
        </span>
        
<input type="hidden" name="_token" value="9c67b74a9ff53cfaa8084b9a4023a6d8">                                                                                
        <div class="response-box"></div>
        <label class="label-input100" for="name">Enter Your Name *</label>
        <div class="wrap-input100 rs1-wrap-input100">
          <input class="input100" type="text" id="name" name="name"
           placeholder="Eg. Waqar Ahmed">
           
        </div>

        <label class="label-input100" for="email">Enter your email *</label>
        <div class="wrap-input100 validate-input">
          <input id="email" class="input100" type="text" name="email" placeholder="Eg. waqaralvi269@email.com">
           
        </div>

        <label class="label-input100" for="subject">Enter Subject*</label>
        <div class="wrap-input100">
          <input class="input100" name="question" id="subject" placeholder="Subject">
           
        </div>

        <label class="label-input100" for="message">Enter Message *</label>
        <div class="wrap-input100 validate-input">
          <textarea class="input100" id="message" name="message" placeholder="Write us a message"></textarea>
           
        </div>

        <div class="container-contact-form-btn">
          <button class="contact-form-btn" >
            Send Message
          </button>
        </div>
      </form>
        </div>
    <div class="col-md-4">
      
            <div class="contact-more flex-col-c-m">
        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-10">
            <span class="fa fa-2x fa-map-marker"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
            <?=$data->common['configs']['contact_address']?>
            </span>

            <span class="txt2">
             <?=$data->common['configs']['contact_address']?>
             </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-10">
            <span class="fa fa-2x fa-phone"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Contact
            </span>

            <span class="txt3">
            <?=$data->common['configs']['contact_number']?>
             </span>
          </div>
        </div>

        <div class="dis-flex size1">
          <div class="txt1 p-r-10">
            <span class="fa fa-2x fa-envelope"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
            Email
            </span>

            <span class="txt3">
              <?=$data->common['configs']['contact_email']?>
            </span>
          </div>
        </div>
      </div>
    </div>
        

  
    </div>


    </div>
  </div>
</div>






















<div class="container" id="contact"> 

 <br>
<section class="row"   >
      <div class="col-lg-12"><div class="top-heading"><h3><span> About Us </span></h3></div></div>
 
   <div class="container">
        <div class="row" style="background: white; border-radius: 5px; padding: 10px; "> 
            <div class="article"> <div class="col-md-12 col-sm-12 col-xs-12  ">
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
              <hr class="seperator">
                       <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="display: flex;    justify-content: space-between;"> 


                            <div class="box">
                                        <div class="box-header with-border">
                                          <span class="box-heading">How to Reach?</span>
                                        </div>
                                        <div class="box-body custom-pills-items">
                                          <ul class="pills-ul">
                                                           
                                                
                                                     <p class="cib-infop"><i class="fa fa-flag" aria-hidden="true"></i>  <?=$data->common['configs']['contact_country']?></p>         
                                                        <p class="cib-infop"><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$data->common['configs']['contact_address']?></p>
                                                        <p class="cib-infop"><i class="fa fa-envelope" aria-hidden="true"></i>  <?=$data->common['configs']['contact_email']?></span></p> 
                                                        <p class="cib-infop"><i class="fa fa fa-phone" aria-hidden="true"></i><?=$data->common['configs']['contact_number']?></p>

                                         
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

 


 
 


 