
<div v-for="coupon in coupons"  style="  -webkit-filter: grayscale(1);" >
        <template  v-if="new Date()>new Date(coupon.expire_date)"      >
<div class="horiz-coupon">
  <div class="row flex-wrapper-coupon" style="margin:0">
    <div class="col-md-2 noPd imageColumn">
      <a href="javascript:void(0)" class="   custom-thumb     "  style="display: flex;">  


       <div class="coupon_label">
         {{coupon.short_title.split(' ')[0]}}  <hr style="margin: 0px">    {{coupon.short_title.split(' ')[1]}}  
              <span v-if="coupon.type=='coupon'"   style="font-size: 16px;color:#aa3552;"><br><b> Code </b>  </span>
                <span v-if="coupon.type=='deal'"    style="font-size: 16px;color:#5858c7;"><br><b>Deal  </b></span>  
       </div>



      <!--     <p class="short-title">
            {{coupon.short_title.split(' ')[0]}}      {{coupon.short_title.split(' ')[1]}}      
        <span class="badge small">
            <span v-if="coupon.type=='coupon'"   style="font-size: 16px;color:#aa3552;"><b> Code </b>  </span>
            <span v-if="coupon.type=='deal'"    style="font-size: 16px;color:#5858c7;"><b>Deal  </b></span>
</span>
             </p> -->
      </a>
    </div>
    <div class="col-md-10">
      <div class="main-coupon-content">
        <div class="col-md-8">
          <div class="horiz-coupon-heading-box">
            <p class="abs">
             <i class="fa fa-user"></i> {{coupon.visits}}   Used 
                  <span v-if="comeFrom=='category'"  >   <a :href="base_url+'store/'+coupon.store.custom_url"> {{coupon.store.name}} </a> </span>
                   <span class="ribbon1" v-if="coupon.exclusive" style="color: #aa3552;"> Exclusive</span>
                  <span class="ribbon2" v-if="coupon.verified" style="color: #2bc089;"> Verified</span>
                  <span class="ribbon3" v-if="coupon.featured" style="color: #c0842b;"> Featured</span>

           </p>
         
             <h3> {{coupon.name}}  </h3>
          
          </div>
          <div class="coup-desc"  > {{coupon.description}}   </div>
          <p class="expired-info">
            <span class="expired-info"><i class="fa fa-clock-o"></i>     

              Expire on {{coupon.expire_date}}  
              <!--   --  Add on {{coupon.updated_date.split(' ')[0]}} -->
          

            </span>
       
      
        
          </p>
              
          
          
        </div>
        <div class="col-md-4">
         <div class="action-block">


             <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="clipClass go-cpn btn-offer waves-effect waves-light"
                                 :data-clipboard-text="'DEAL Activated'" 
                           
                                 :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                 :d-coupon_id="coupon.id"
                                 d-redirect="yes"
                                 style="bottom:auto" 
                       > 

               
            <p class="btn-code" data-type="code"> 
               
                        <span class="btn-hover fix-btn">Get Deal</span> 
                    </p>


                        </a>

  <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class=" clipClass  go-cpn btn-offer waves-effect waves-light"
                                     :data-clipboard-text="coupon.coupon_code" 
                
                                     :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                     :d-coupon_id="coupon.id"
                                     d-redirect="yes"
                                     style="bottom:auto" 
                                      >
                                 


<p class="btn-code" data-type="code"> 
        <span class="partial-code">{{coupon.coupon_code}} </span> 
        <span class="btn-hover">Get Code</span> 
    </p>



                                <!-- <div class="copycodebtn action-code " >
                        <span class="js-offer-out">
                            <span class="action-cta">Copy  {{coupon.coupon_code.slice(0,2)}}***</span>
                        </span>
                        <div class="action-cta-code"> {{coupon.coupon_code}} 
                            <span class="action-cta-peel"></span>
                        </div>
                    </div>     -->
                    


                               </a>



 
            </div>        </div>
      </div>
    </div>
  </div>
  </div>
</template>
</div>

 