
<div   id="coupon_box"  tabindex="-1" class="modal  " style="display: none;z-index: 1003;  opacity: 1; transform: scaleX(1); top: 10%;background:none;border: none;box-shadow:none;width: 100vw;"> 

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
            <div class="modal-action modal-close mclose"  onclick="$('#coupon_box').hide(500)" ><i class="fa fa-close" style="font-size:25px"></i></div>

     <div class="modal-body">
     <div class="row">
        <div class="col-md-12"> <button type="button" class="close" data-dismiss="modal">×</button></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="popup-heading">
                    <h2 v-if="box_data.type=='deal'"><h2><i class="fa fa-check"></i>  Deal Activated!</h2></h2>
                </div>
            </div>
        </div>
 
        <div class="row">
            <div class="col-md-12 ">
                <div class="code-box">
                    <h4 style="text-align: center; font-size: 25px;">{{box_data.name}}</h4>
               


                <div v-if="box_data.type=='coupon'">
                        <div class="mcoupon"    id="copy-me" style="border: dotted; " >{{box_data.coupon_code}}</div>
                        <br>
                         <div class="clipClass copy-button btn btn-primary" id="copy-button"  d-redirect="no"  :d-coupon_id="box_data.id" data-clipboard-target="#copy-me"  onclick="this.innerHTML='Copied'" >COPY</div>
                    </div>

                
                    <h3 class="modal-text"  v-if="box_data.type=='coupon'" > Apply this Coupon Code At Checkout. <br>
                    Go to <a :href="store.affiliate_link"  target="_blank">{{store.name}} </a> to shop now and save.</h3>

                   <h3 class="modal-text"  v-if="box_data.type=='deal'" >No coupon code is required for this offer. <br>
                    Go to <a :href="store.affiliate_link"  target="_blank">{{store.name}} </a> to shop now and save.</h3>


                </div>
                
            </div>
        </div>
       
       <div class="row">
            <div class="col-md-12">
                

                  

      
     
       
 <!-- <img :src="api_url+'/assets/uploads/stores/'+store.feature_image" style="width: 95px" class="responsive-img" /> -->
              



                
            </div>
            <div class="col-md-12 col-xs-12 text-center">
                <div class="rating-container">
                <span class="rating_box">
                    Did this help you save money ?
                </span>
                <span class="thanks-message">
                    Thankyou for Rating!
                </span>
                <span class="rating-id" data-id="46850">
                    <a href="javascript:void(0)" class="rating-anchor vote_up up" data-vote="1"  onclick="$(this).parent().parent().hide(1000)" ><i class="fa fa-thumbs-o-up"></i></a>
                    <a href="javascript:void(0)" class="rating-anchor down" data-vote="0" onclick="$(this).parent().parent().hide(1000)" ><i class="fa fa-thumbs-o-down"></i></a>
                </span>
                </div>
            </div>
       </div>
       
       
      </div>
      
    </div>

  </div>
</div>

 