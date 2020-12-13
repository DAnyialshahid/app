
 var contact_us = new Vue({
  el: '#contact',
  data: {
    api_url: api_url, 
    base_url: base_url,  
    configs: configs,  
}   
});

init();
function submitContact(){
	$('.send-loading').show();
 $.ajax({
                         type : "post",
                         dataType : "json",
                         url : api_url+"/front_api/contact_us_details", 
                         data:{
                            'name':$('[name=name]').val(),
                            'email':$('[name=email]').val(),
                            'question':$('[name=question]').val(),
                            'message':$('[name=message]').val(),
                            'site_id':site_id,
                            [token_name]:token_hash,
                         },
                         success: function(data) { 
                            if(data.success === "yes") {    
                            		$('.send-loading').html('<b>Message Sent</b>');
                            }
                            else {
                                alert("404 or empty"); 
                                     window.location.href=base_url;  
                                }
                            
                         }
                    }); 

return false;
}