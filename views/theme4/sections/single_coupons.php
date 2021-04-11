
 

 <div  v-for="coupon in coupons"   class="main-offer offer_single single_store_coupon active_coupon" data-sort="code">
         <template v-if="new Date()<new Date(coupon.expire_date)"   >

  <div class="offer-wrapper">
    <div class="main_wrapper">
      <a href="javascript:void(0)"  >      <div class="web_imagebox">
                <p class="short-title">
            {{coupon.short_title.split(' ')[0]}}      {{coupon.short_title.split(' ')[1]}}      
        <span class="badge small">
            <span v-if="coupon.type=='coupon'"   style="font-size: 16px;color:#aa3552;"><b> Code </b>  </span>
            <span v-if="coupon.type=='deal'"    style="font-size: 16px;color:#5858c7;"><b>Deal  </b></span>
</span>
             </p>

              </div>

              
        <div class="offer-short">
                    <div>  </div>
                                      
                    </div>


      </a>
      <div class="offer-headline">
        <div class="widgets">
                    <span class="badge small">
     <span v-if="comeFrom=='category'"  >   <a :href="base_url+'store/'+coupon.store.custom_url"> {{coupon.store.name}} </a> </span>
             <span class="ribbon ribbon1" v-if="coupon.exclusive!=0"><span style="color: #aa3552;"> Exclusive </span></span>
            <span class="ribbon ribbon2" v-if="coupon.verified!=0"><span style="color: #2bc089;"> Verified </span></span>
            <span class="ribbon ribbon3" v-if="coupon.featured!=0"><span style="color: #c0842b;"> Featured </span></span>



                
           </span>
        </div>


        <div class="offer-title" > 
          {{coupon.name}}      </div>
        <div class="coupon-description">
          <p>{{coupon.description}}</p>        </div>
        <div class="widgets">
          <span class="expired_date badge">
          <img src="https://www.verifieddeals.co.uk/assets/theme/images/dda.png" class="exp-icon"> 
                       Expire on {{coupon.expire_date}}          </span>
        </div>
      </div>
    </div>
    <!--main_wraper-->
    <div class="action-box">

            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="clipClass go-cpn btn-offer waves-effect waves-light"
                                 :data-clipboard-text="'DEAL Activated'" 
                           
                                 :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                 :d-coupon_id="coupon.id"
                                 d-redirect="yes"
                                 style="bottom:auto" 
                       > 

               
                  <span class="action-cta deal">Get Deal</span>


                        </a>

                              <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class=" clipClass  go-cpn btn-offer waves-effect waves-light"
                                     :data-clipboard-text="coupon.coupon_code" 
                
                                     :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                     :d-coupon_id="coupon.id"
                                     d-redirect="yes"
                                     style="bottom:auto" 
                                      >
                                 

                                <div class="copycodebtn action-code " >
                        <span class="js-offer-out">
                            <span class="action-cta">Copy  {{coupon.coupon_code.slice(0,2)}}***</span>
                        </span>
                        <div class="action-cta-code"> {{coupon.coupon_code}} 
                            <span class="action-cta-peel"></span>
                        </div>
                    </div>    
                    


                               </a>

    

             
                </div>
  </div>
  <!--offer_wrapper-->
  <div class="likeandcomments">
    <div class="icons-wrapper">
      <span class="likebtn likeOffer "  >
        <svg class="styles__ThumbsUp-sc-8tgwcx-0 cIfREJ" viewBox="0 0 16 16">
          <path class="cls-1" d="M13.7 5.33h-2.37v-3A2.3 2.3 0 0 0 9 0H8a1.28 1.28 0 0 0-1.33 1.25c0 2.58-.6 4.3-1.45 4.47a3.3 3.3 0 0 0-1.13.44A1.16 1.16 0 0 0 3.5 6H1.17A1.17 1.17 0 0 0 0 7.17v7a1.17 1.17 0 0 0 1.17 1.17H3.5a1.16 1.16 0 0 0 .72-.25 5.9 5.9 0 0 0 3.4.9h6.08a2.3 2.3 0 0 0 2.3-2.3V7.85a2.5 2.5 0 0 0-2.3-2.52zm-12.37 2h2V14h-2zm13.34 6.37a1 1 0 0 1-1 1H7.62a4.12 4.12 0 0 1-3-.9V7.4c0-.05.2-.24.83-.37C7.5 6.6 8 3.7 8 1.33h1a1 1 0 0 1 1 1v3.2a1 1 0 0 0 1.13 1.13h2.57a1.18 1.18 0 0 1 1 1.2z"></path>
        </svg>
                <span class="txt">1 likes </span>
 </span>      
      <span class="commentbtn" ><i class="fa fa-comments-o" aria-hidden="true"></i> Comments</span>

  

 <span class="likebtn   "  > 
                <span class="txt">&nbsp;<i class="fa fa-clock-o"></i> {{coupon.updated_date.split(' ')[0]}} |</span>
 </span> 
 <span class="likebtn   "  > 
                <span class="txt">&nbsp;<i class="fa fa-eye"></i> {{coupon.visits}}  | </span>
 </span> 
<!--  <span class="likebtn   "  > 
                <span class="txt">&nbsp;<i class="fa fa-clock"></i>Expire  {{coupon.expire_date}}</span>
 </span>
 -->



      <span class="emailcoupon">
        <div class="clickcmnt">
          <i class="fa fa-envelope-o"></i> <span class="txt">   Send to my Email</span>
        </div>
        <div class="email-popup">
          <div class="email-popup-title form-loading">Send this Offer to your Email</div>
          <form method="POST" action="https://www.verifieddeals.co.uk/async/ajax/offer-email/14288" class="ep_form submit-form" form-type="offer-email-form">
            <input type="hidden" name="_token" value="b3b53d3b447c4f832c3ebdcb1566d112">
            <input type="text" name="email-input" placeholder="Enter your email address" class="form-control">
            <button type="submit" class="btn btn-send ">Send Offer</button>
          </form>
          <p class="ep_p">
            By clicking "Send", you authorize us to send you an automated text with a link to the coupon. 
          </p>
        </div>
      </span>
    </div>
    <div class="comments-box">
      <form action="https://www.verifieddeals.co.uk/async/ajax/comment/14288" class="submit-form" form-type="comment-form" method="post" accept-charset="utf-8">
<input type="hidden" name="_token" value="b3b53d3b447c4f832c3ebdcb1566d112">   
      <textarea name="comment" rows="2" class="form-control comment-text" placeholder="Comment on this offer"></textarea>
      <div class="comment-user-submit">
        <input type="text" class="form-control user-name-comment" name="username" placeholder="Post as, First name or Nickname">
        <button class="btn btn-submit"><i class="fa fa-angle-right"></i></button>
        <span class="form-loading"></span>
      </div>
      </form>      <div class="users-comments-wrapper">
        <h2>Comments</h2>
      </div>
    </div>
  </div>
</template>
</div>



 


 