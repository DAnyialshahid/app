 
 



var contact_us= Vue.createApp({
  data() {
    return {

    api_url: api_url, 
    base_url: base_url,  
    configs: [],  
    }
}
}).mount('#contact');


init();
function submitContact(){
	$('.send-loading').show();
 $.ajax({
                         type : "post",
                         dataType : "json",
                         url : base_url+"/front_api/submit_offer_details", 
                         data:{
                            'name':$('[name=name]').val(),
                            'email':$('[name=email]').val(),
                            'store_name':$('[name=store_name]').val(),
                            'coupon_title':$('[name=coupon_title]').val(),
                            'coupon_code':$('[name=coupon_code]').val(),
                            'message':$('[name=message]').val(),
                            'site_id':site_id,
                            [token_name]:token_hash,
                         },
                         success: function(data) { 
                            if(data.success === "yes") {    
                            		$('.send-loading').html('<b>Coupon Submit</b>');
                            }
                            else {
                                alert("404 or empty"); 
                                     window.location.href=base_url;  
                                }
                            
                         }
                    }); 

return false;
}