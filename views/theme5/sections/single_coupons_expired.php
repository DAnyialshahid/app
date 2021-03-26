

 
 <div  v-for="coupon in coupons"  > 
  <div class="tile tile-list" v-if="new Date()>new Date(coupon.expire_date)" style="  -webkit-filter: grayscale(1);" >


    <a href="#" class="tile-list-callout" style="background-color: #03AAA6;"  >
      <h1>  {{coupon.short_title.split(' ')[0]}}      {{coupon.short_title.split(' ')[1]}}   </h1>
 
                  <div v-if="coupon.type=='coupon'"   style="font-size: 16px;color:white;text-align: center;"><b> Code </b>  </div>
                  <div v-if="coupon.type=='deal'"    style="font-size: 16px;color:white;text-align: center;"><b>Deal  </b></div>
 
    
    </a>

    <div class="tile-list-content" >

        <p class="tile-list-title">
            








    <span v-if="comeFrom=='category'"  >   <a :href="base_url+'store/'+coupon.store.custom_url"> {{coupon.store.name}} </a> </span>
             <span class="ribbon ribbon1" v-if="coupon.exclusive"><span style="color: #aa3552;"> Exclusive </span></span>
            <span class="ribbon ribbon2" v-if="coupon.verified"><span style="color: #2bc089;"> Verified </span></span>
            <span class="ribbon ribbon3" v-if="coupon.featured"><span style="color: #c0842b;"> Featured </span></span>
              <br  v-if="comeFrom=='category'" >


    <span class="hover-over" title="Click here to get this vouchercode and open the merchant's website">{{coupon.name}}</span>
 <br />
          <p>{{coupon.description}}</p>        





        </p>

            <p class="tile-count tile-type">
                <!-- {{coupon.updated_date.split(' ')[0]}}  -->
                 {{coupon.visits}}  used total
            </p>


    </div>

    <div class="tile-footer tile-list-footer">
        

    <span class="tile-expires">Ends  {{coupon.expire_date}} </span>

        

   <a class="tile-terms" href="#"  >
       .    
    </a>

        

 

   <a  v-if="coupon.type=='deal'"   target="_blank" 
                                 class="clipClass go-cpn btn-offer waves-effect waves-light"
                                 :data-clipboard-text="'DEAL Activated'" 
                           
                                 :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                 :d-coupon_id="coupon.id"
                                 d-redirect="yes"
                                 style="bottom:auto" 
                       > 

               
                 <div class="button  tile-redeem"  >
                      <span class="button-text">Grab Deal</span>
                    </div>

      </a>


                    

                              <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class=" clipClass  go-cpn btn-offer waves-effect waves-light"
                                     :data-clipboard-text="coupon.coupon_code" 
                
                                     :href="base_url+comeFrom+'/'+slug+'?coupon_id='+coupon.id"
                                     :d-coupon_id="coupon.id"
                                     d-redirect="yes"
                                     style="bottom:auto" 
                                      >
                                 


          <div class="button  tile-redeem"  >
                          <span class="button-text">Copy  {{coupon.coupon_code.slice(0,2)}}***</span>

          </div>


                          


                               </a>


        



    </div>
</div>
</div>
















 

 

 