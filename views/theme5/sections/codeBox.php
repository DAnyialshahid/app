
<div id="coupon_box"  class="modal active" style="display:none  ;z-index: 1003;  opacity: 1; top: 10%;background:none;border: none;box-shadow:none;">
      <div class="modal-wrapper">
         <div class="modal-overlay" data-modal-close=""></div>
         <div class="modal-container">
            <div class="modal-frame">
               <a class="modal-close" data-modal-close=""  onclick="$('#coupon_box').hide(500)" >✖</a>
               

<div data-modal="redemption">

    

<div class="modal-step active" data-modal-step="redemption">

    <div class="modal-step-right">

        <div class="modal-header">

    <div class="modal-header-inner">


        <p class="modal-title">    {{box_data.name}} </p> 



  <div class="mmsg" v-if="box_data.type=='deal'">No Coupon Code is required at Checkout</div>
                 <div class="mmsg" v-if="box_data.type=='coupon'">Apply this Coupon Code At Checkout</div>
                 <div class="mcoupon"    id="copy-me"  v-if="box_data.type=='deal'" style="text-align: center; font-size: 21px; font-weight: 600; border: solid 4px darkcyan; ">OFFER ACTIVATED</div>
    </div>

    
</div>

         <div class="modal-content">
          

           <div v-if="box_data.type=='coupon'">  
                        <div class="redemption-code"  >
                            <span  id="copy-me"   class="redemption-code-value"  >
                                {{box_data.coupon_code}}
                            </span>
        <hr>

                            <a class="clipClass button  " id="copy-button"  d-redirect="no"  :d-coupon_id="box_data.id" data-clipboard-target="#copy-me"  onclick="this.innerHTML='Copied'"  >
                                Copy
                            </a>
                             
                        </div>
           </div>


 
 

        </div>

        <div class="modal-content">
            
<br>

<div class="redemption-feedback" data-offer-feedback-wrapper="">

    <p class="redemption-feedback-title">
        Did it work? {{type}}
    </p>

    <div  v-if="store.website_url" class="redemption-feedback-title" v-if="comeFrom=='store'">
                <a target="blank" rel="nofollow" :href="store.website_url" >
 <!-- <img :src="api_url+'/assets/uploads/stores/'+store.feature_image" style="width: 95px" class="responsive-img" /> -->
                Go To  {{store.name}}  <i class="fa fa-long-arrow-right bounce"></i></a>
            </div>

    <div class="redemption-feedback-options">
        
        <a class="button button-border redemption-feedback-button redemption-feedback-positive show-voting" direction="up"  onclick="$(this).parent().parent().hide(1000)" >
            <i class="icon-thumbup redemption-feedback-button-icon"></i> Yes
        </a>

        <a class="button button-border redemption-feedback-button redemption-feedback-negative show-voting" direction="down"   onclick="$(this).parent().parent().hide(1000)" >
            <i class="icon-thumbdown redemption-feedback-button-icon"></i> No
        </a>

    </div>

    <p class="redemption-feedback-message">
        Thanks for your feedback
    </p>

</div>
        </div>

         

        


 

        

 

    </div>

</div>



</div>

            </div>
         </div>
      </div>
   </div>



















<div   tabindex="-1" class="modal  " >
          
           <!-- <div class="modal-footer" style="visibility: hidden;"><button type="button" data-dismiss="modal" class="btn btn-default">Close</button> <button type="button" class="btn btn-primary">Save changes</button></div> -->


    <div class="modal-content">
 
        <div class="modal-content-up">
               

     
            
<div class="mstore-go"> <span class="m-x-1">Did This Offer Work?</span> &nbsp;
                        <span ><i class="fa fa-thumbs-up" ></i> </span>&nbsp;
                        <span dusk="coupon-feedback-negative" class="m-x-1 text-primary   rating-thumb show-voting down" onclick="$(this).parent().hide(1000)"><i class="fa fa-thumbs-down" ></i></span>

                    </div>
        </div>
 

           


    </div>
</div>