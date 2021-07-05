   <?php  
 if (isset($data->store)){
              foreach (array_slice($data->store->coupons,0,9999999) as $coupon ) { 
            if ($coupon->expired ) {    continue;  }
            ?>



        <div class="col-md-12 border">
            <div class="coupon p-3 bg-white ">
                <div class="row no-gutters ">
                    <div class="col-md-2 border-right">
                        <div class="d-flex flex-column align-items-center">
                          <b> <?=$coupon->type=='coupon'?'CODE':'DEAL'?></b>
                          <img src="<?=$coupon->img_src?> ">
                          <span class="d-block">  <?=$coupon->store->name?></span><span class="text-black-50">Shoes</span></div>
                    </div>
                    <div class="col-md-10">
                        <div>
                            <div class="d-flex flex-row justify-content-end off">
                                <h1><?=$coupon->short_title1?></h1><span><?=$coupon->short_title2?></span>
                                <?=$coupon->name?>
                            </div>
                            <div class="d-flex flex-row justify-content-between off px-3 p-2"><span>Promo code:</span><span class="border border-success px-3 rounded code">BBB50</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
  <?php 
            }
            }
            ?> 




<div class="horiz-coupon " v-for="coupon in coupons"  style="display: none">
        <template v-if="new Date()<new Date(coupon.expire_date)"   >

  <div class="row  " style="margin:0">
 
    <div class="col-md-10">
      <div class="main-coupon-content">
        <div class="col-md-8">
          <div class="horiz-coupon-heading-box">
            <p class="abs">
 
  
              <span v-if="coupon.type=='coupon'"   style="font-size: 16px;color:#aa3552;"><b> Code </b>  </span>
                <span v-if="coupon.type=='deal'"    style="font-size: 16px;color:#5858c7;"><b>Deal  </b></span>  
   
             

                  <span v-if="comeFrom=='category'"  >   <a :href="base_url+'store/'+coupon.store.custom_url"> {{coupon.store.name}} </a> </span>
                   <span class="ribbon1" v-if="coupon.exclusive!=0" style="color: #aa3552;"> Exclusive</span>
                  <span class="ribbon2" v-if="coupon.verified!=0" style="color: #2bc089;"> Verified</span>
                  <span class="ribbon3" v-if="coupon.featured!=0" style="color: #c0842b;"> Featured</span>

           </p>
         
             <h3> {{coupon.name}}  </h3>
          
          </div>
          <div class="coup-desc"  > {{coupon.description}}   </div>
       
              
          
          
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
    <div class="col-md-12" style="background: rgba(242,245,247,.5); color:#9a9a9a;    border-top: 1px solid #8080801c;  justify-content: space-between; display: flex; " >
 
 
             <span class="expired-info"> <i class="fa fa-user"></i>  {{coupon.visits}}   Used &nbsp;</span>
            <span class="expired-info"><i class="fa fa-clock-o"></i> Expire on {{coupon.expire_date}} <!--   --  Add on {{coupon.updated_date.split(' ')[0]}} --> </span>

        
       

        </div>

    

  </div>
  
</template>
</div>
