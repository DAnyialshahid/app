<div id="coupon_box"  style="display: none;"    dusk="merchant-coupon-modal"  tabindex="-1" role="dialog" class="modal fade in" style="display: block;">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button onclick="$('#coupon_box').hide(500)" type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="col-md-12 col-sm-12"  >

                        <!-- <a href="#"><img  v-bind:src="api_url+'/assets/uploads/stores/'+coupon_box.store.feature_image" alt="popup-logo" class="img-responsive mob-deal-popup-img" /></a> -->
               
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <p class="deal-popup-text-01" style="font-size: 26px; "><a href="#" class="deal-popup-cont">        {{box_data.name}}</a></p> <p class="deal-popup-text-02">
                            Details: Click "Show Coupon Code" To Activate This Deal. Exclusions May Apply
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="deal-popup-code">
                        <h3  v-if="box_data.type=='coupon'"    id="copy-me" class="deal-popup-code-str">  {{box_data.coupon_code}}</h3>
                        <h3  v-if="box_data.type=='deal'"    id="copy-me" class="deal-popup-code-str">  Deal Activated</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 text-center" v-if="box_data.type=='coupon'"  >
                    <button type="button" id="copy-button"  d-redirect="no"  :d-coupon_id="box_data.id" data-clipboard-target="#copy-me"  class="clipClass deal-popup-button copy-button" >Copy Code</button>
                     
                </div>
                <div class="col-md-12 col-sm-12 text-center coupon-feedback" style="background: rgb(238, 238, 238); padding: 1rem; margin: 1rem 0px;">
              
                    <div class="feedback-cta rating" >
                        <span class="m-x-1">Did This Offer Work?</span> 
                        <span dusk="coupon-feedback-positive" class="m-x-1 text-primary   rating-thumb show-voting up" onclick="$(this).parent().hide(1000)"><i class="fa fa-thumbs-up" ></i></span>
                        <span dusk="coupon-feedback-negative" class="m-x-1 text-primary   rating-thumb show-voting down" onclick="$(this).parent().hide(1000)"><i class="fa fa-thumbs-down" ></i></span>
                    </div>
                    <!---->
                </div>
                 
                <div class="col-md-6 col-md-offset-3 col-sm-12 deal-popup-list">
                    <p class="text-center" style="margin-top: 1.5rem;">
                        Share this deal with your friends and family
                    </p>
                </div>
                 
            </div>
            <div class="modal-footer" style="visibility: hidden;"><button type="button" data-dismiss="modal" class="btn btn-default">Close</button> <button type="button" class="btn btn-primary">Save changes</button></div>
        </div>
    </div>
</div>


 
