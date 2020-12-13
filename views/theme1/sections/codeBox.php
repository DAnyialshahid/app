<div  id="coupon_box"  style="display: none;" class="fancybox-container couponview fancybox-is-open" role="dialog" tabindex="-1"  style="transition-duration: 366ms;">
    <div class="fancybox-bg"></div>
    <div class="fancybox-inner"  >
        <div class="fancybox-stage">
            <div class="fancybox-slide fancybox-slide--ajax fancybox-slide--current fancybox-slide--complete">
                <div class="ajax-content">
                    <div class="ajax-container clearfix">
                        <div class="fbox">
                            <div class="top">
                                <div class="fcontent code">
                                    <h4 class="htitle">
                                        {{box_data.name}}
                                    </h4>
                                    <ul class="osubtitle code">
                                        <li  v-html="box_data.description">> 
                                        </li>
                                    </ul>
                                    <p>Copy and paste the code below at <a :href="store.website_url" class="link" target="_blank">{{store.website_url}}</a></p>
                                    <div     v-if="box_data.type=='coupon'"    class="offer-container clearfix">
                                        <div class="offer-code">
                                            <div class="code-box code" aria-describedby="copy-button" id="copy-me">
                                                {{box_data.coupon_code}}
                                            </div>
                                            <button id="copy-button" :coupon_id="box_data.id"  data-clipboard-target="#copy-me">Copy</button>
                                        </div>
                                    </div>

                                      <div     v-if="box_data.type=='deal'"    class="offer-container clearfix">
                                        <div class="offer-code">
                                            <div class="code-box code"  >
                                              Deal Activated
                                            </div>
                                            </div>
                                             

                                    
                            		    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="rating">
                                    <div class="rating-title text-left"><span>Did this coupon work for you?</span></div>
                                    <div class="rating-thumb show-voting up" data-id="" data-direction="yes"><i class="df df-like"></i> Yes</div>
                                    <div class="rating-thumb show-voting down" data-id="" data-direction="no"><i class="df df-dislike"></i> No</div>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="bar clearfix">
                                    <div class="terms"><span data-id="" class="c-terms-button">View offer's details and terms</span> <i class="df-arrow-gen-down"></i></div>
                                </div>
                                <div class="terms-box">
                                    <div class="close-odetails"><i class="df df-close"></i></div>
                                    <p><b>Expires:</b> <span>In 5 days</span></p>
                                    <p><b>Terms:</b></p>
                                    <ul>
                                        <li>Subject to availability.</li>
                                        <li>See website for more details.</li>
                                        <li>Discount applies to selected products.</li>
                                        <li>This offer is only available online.</li>
                                        <li>One per person.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                  
                     
                    </div>
                    <div class="popup-info">
                        Site was opened in the previous tab.
                    </div>
                    <button data-fancybox-close="" class="fancybox-close-small" title="Close" onclick="$('#coupon_box').hide()"></button>
                </div>
            </div>
        </div>
        <div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div>
    </div>
</div>
