    var configs=[]; 
 function c(data) {
 	console.log(data);
 }

 function get(text) {  
            var url = new URL(window.location.href);
         return  url.searchParams.get(text);
            } 
 



var menu_bar= Vue.createApp({
  data() {
    return {
   api_url: api_url, 
    base_url: base_url,  
    row: [],  
    popular_stores: [],  
    popular_categories: [],
    configs: [],
    }
  }
}).mount('#top_menu_bar');
 


var footer= Vue.createApp({
  data() {
    return {
    api_url: api_url, 
    base_url: base_url,    
    configs: [],    
       
    }
  }
}).mount('#bottom_footer');

 

var coupon_box=Vue.createApp({
  data() {
    return {
        box_data:[] , 
        store:[], 
        api_url: api_url, 
        }    
    } 
}).mount('#coupon_box');

 

function init() { 
 $.ajax({
                         type : "post",
                         dataType : "json",
                         url : api_url+"/front_api/getCommon", 
                         data:{
                            'site_id':site_id,
                            [token_name]:token_hash,
                            'page_name':global_page_name,
                            'page_slug':global_page_slug,
                         },
                         success: function(data) { 
                            if(data.success === "yes") {   
                                    configs=data.response.configs;
                                    footer.configs=data.response.configs; 
                                    menu_bar.configs=data.response.configs;
                                    if (typeof contact_us!='undefined'){contact_us.configs=data.response.configs;}

 
                                    //menu_list
                                    menu_bar.row=data.response; 
                                    menu_bar.popular_categories=data.response.popular_categories; 
                                    menu_bar.popular_stores=data.response.popular_stores; 
                                    //social

                                    $('title').html(data.response.seo.title);
                                    $('#meta_description').attr('content',data.response.seo.description);
                                    $('#meta_keywords').attr('content',data.response.seo.keywords);
                                     

                                
                                 
                            }
                            else {
                                alert("404 or empty");
                           
                                     window.location.href=base_url;  
                                }
                            
                         }
                    }); 



}


function subscribes_email() { 
 $.ajax({
                         type : "post",
                         dataType : "json",
                         url : api_url+"/front_api/subscribe_email", 
                         data:{
                            'subscribe_email':$('[name="subscribe_email"]').filter(function() { return this.value!='';}).val()+"",
                            'site_id':site_id,
                            [token_name]:token_hash,
                         },
                         success: function(data) { 
                            if(data.success === "yes") {

                                  alert("Thank you for Subscribe");
                            }
                            else {
                                alert("404 or empty");
                           
                                     window.location.href=base_url;  
                                }
                            
                         }
                    }); 



}

function visitCoupon(coupon_id,callback=null){ 
   $.ajax({
                       type : "post",
                       dataType : "json",
                       url : api_url+"/front_api/visit_coupon/", 
                       data:{
                         
                        'visit':1,
                        'reffrence_id':coupon_id,
                        'type':'coupon',
                        'site_id':site_id,
                        [token_name]:token_hash,
                       },
                       success: function(data) { 
                        if (callback) {callback();}

                       }
                  }); 
  }
 
 

 function showCouponBox(){
 	   $('#coupon_box .bottom').show(100);
 		$('#coupon_box').show(500); 
 }

function notification_coupon_link_expire(coupon_id,callback){

   $.ajax({
                       type : "post",
                       dataType : "json",
                       url : api_url+"/front_api/notification/", 
                       data:{ 
                        'coupon_id':coupon_id,
                        'action':'Coupon link not found ',
                        'site_id':site_id,
                        [token_name]:token_hash,
                       },
                       success: function(data) { 
                          callback();
                       }
                  }); 


}

  (function () {


// $(document).ajaxSuccess(function(a,b,c) {
//   if (b.status=='404') {
//         console.log('404 ajax');
//   }
//   if (b.status=='200') {
//     console.log('success');
//   }
// console.error(a);
// console.error(b);
// console.error(c);
 
// });

var allbtns=new ClipboardJS('.clipClass');
allbtns.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger); 
    var coupon_id= $(e.trigger).attr('d-coupon_id');
    var redirect= $(e.trigger).attr('d-redirect');
    console.info('coupon_id:', coupon_id); 
    var coupons=[];

    var coupon= $.grep(getAllCoupons(),function(v) {if (v.id==coupon_id) { return v; }})[0];
    console.info('coupon:',coupon)  ; 
if (redirect=='yes') { 
   
    if(typeof app !="undefined"){ app.loadCouponAffilate(coupon)  };
    if(typeof home !="undefined"){ home.loadCouponAffilate(coupon)  }; 
    }
    e.clearSelection();
});

                                var client = new ClipboardJS("#copy-button", {
                                    container: document.getElementsByClassName("ajax-content")[0],
                                });
                                var copyButton = $("#copy-button");
                                client.on("success", function (e) {
                                    copyButton.text("Copied").addClass("copied");
                                    setTimeout(function () {
                                        copyButton.text("Copy").removeClass("copied");
                                    }, 6000);
                                });
                                $(".close-odetails").click(function () {
                                    var $this = $(this),
                                        ajaxContainer = $this.closest(".ajax-container");
                                    ajaxContainer.find(".terms").removeClass("active");
                                    ajaxContainer.find(".terms-box").slideUp(250);
                                });
                                $(".show-voting").click(function (e) {
                                    e.preventDefault();
                                    var $this = $(this),
                                        couponid = $this.data("id"),
                                        direction = $this.data("direction"),
                                        post_data = { 
                                        	id: couponid,
                                         direction: direction,
                                         [token_name]: token_hash,
                                         };
                                    if ($this.hasClass("disabled")) {
                                        return false;
                                    }
                        
                                    $this.closest("div").children(".show-voting-down").addClass("disabled");
                                    $this.closest("div").children(".show-voting").addClass("disabled");
                                    $.post(api_url+"/front_api/votecoupon/", post_data).done(function (data) {
                                    	            $this.closest(".bottom").hide(1000);
                                        // if ($(data).hasClass("error")) {
                                        //     $(".ajax-container .rating").append(data);
                                        // } else {
                                        //     var votes = $.cookie("ovotes") ? $.cookie("ovotes") : "",
                                        //         parts = typeof votes !== "undefined" ? votes.split(",") : "",
                                        //         vote = $this.hasClass("up") ? "y" : "n";
                                        //     if (!votes || $.inArray("" + couponid + ".y", parts) < 0 || $.inArray("" + couponid + ".n", parts) < 0) {
                                        //         $.cookie("ovotes", votes + couponid + "." + vote + ",", {
                                        //             expires: 30,
                                        //             path: window.location.href,
                                        //         });
                                        //     }
                                        //     $(".ajax-container .rating").html(data);
                                        // }
                                        if (direction === "yes") {
                                            $(".voting-box-down").hide();
                                        } else {
                                            $(".voting-box").hide();
                                        }
                                    });
                                });
                            





var encodeSiteId=site_id.replaceAll('+','plus');
encodeSiteId=encodeSiteId.replaceAll('-','minus');
encodeSiteId=encodeSiteId.replaceAll('@','email');
encodeSiteId=encodeSiteId.replaceAll('.','dot');
encodeSiteId=encodeSiteId.replaceAll('=','equal');
 var bestPictures = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
 
  remote: {
   url: api_url+'/front_api/search/'+encodeSiteId+'/%QUERY',
    wildcard: '%QUERY'
  }
});

$('#search_input').typeahead(null, {
  name: 'best-pictures',
  display: 'value',
  source: bestPictures,
  templates: {
    empty: [
      '<div class="empty-message">',
        'unable to find any Best Picture winners that match the current query',
      '</div>'
    ].join('\n'),
    suggestion: Handlebars.compile('<div class="hover:tw-bg-grey-light tw-border-b tw-p-1"><a href="'+base_url+'store/{{custom_url}}" class="tw-block"><img width="50px" src="'+api_url+'/assets/uploads/stores/{{feature_image}}" class="tw-mr-2 tw-h-auto tw-rounded-sm">{{name}}</a></div>')
  }
});
// $('#search_input').val('a').trigger('change');
 











                            })();

//couponbox end
