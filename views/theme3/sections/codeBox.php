
<div  id="coupon_box"   tabindex="-1" class="modal  " style="display: none;z-index: 1003;  opacity: 1; transform: scaleX(1); top: 10%;background:none;border: none;box-shadow:none;">
          
           <!-- <div class="modal-footer" style="visibility: hidden;"><button type="button" data-dismiss="modal" class="btn btn-default">Close</button> <button type="button" class="btn btn-primary">Save changes</button></div> -->


    <div class="modal-content">
    <div class="modal-action modal-close mclose"  onclick="$('#coupon_box').hide(500)" ><i class="fa fa-close"></i></div>
        <div class="modal-content-up">
                 <div class="mmsg" v-if="box_data.type=='deal'">No Coupon Code is required at Checkout</div>
                 <div class="mmsg" v-if="box_data.type=='coupon'">Apply this Coupon Code At Checkout</div>
                 <div class="mcoupon"    id="copy-me"  v-if="box_data.type=='deal'">OFFER ACTIVATED</div>

             <div v-if="box_data.type=='coupon'">
                <div class="mcoupon"    id="copy-me" >{{box_data.coupon_code}}</div>
                <div class="clipClass copy-button mcopy waves-effect waves-light tooltipped" id="copy-button"  d-redirect="no"  :d-coupon_id="box_data.id" data-clipboard-target="#copy-me"  onclick="this.innerHTML='Copied'" >COPY</div>
            </div>
     
            <div   class="mstore-go">
                <a target="blank" rel="nofollow" :href="base_url+'store/'+store.custom_url" >
 <img :src="api_url+'/assets/uploads/stores/'+store.feature_image" style="width: 95px" class="responsive-img" />
                Go To {{store.name}}<i class="fa fa-long-arrow-right bounce"></i></a>
            </div>
<div class="mstore-go"> <span class="m-x-1">Did This Offer Work?</span> &nbsp;
                        <span class="vote_up" dusk="coupon-feedback-positive" class="m-x-1 text-primary   rating-thumb show-voting up" onclick="$(this).parent().hide(1000)"><i class="fa fa-thumbs-up" ></i> </span>&nbsp;
                        <span dusk="coupon-feedback-negative" class="m-x-1 text-primary   rating-thumb show-voting down" onclick="$(this).parent().hide(1000)"><i class="fa fa-thumbs-down" ></i></span>

                    </div>
        </div>
 

           


    </div>
</div>