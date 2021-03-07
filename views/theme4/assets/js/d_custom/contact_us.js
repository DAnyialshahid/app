 

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

 $.ajax({
                         type : "post",
                         dataType : "json",
                         url : api_url+"/front_api/load_dynamic_page_content/contact_us", 
                         data:{
                            'site_id':site_id,
                            [token_name]:token_hash,
                         },
                         success: function(data) { 
                            if(data.success === "yes") {     
                                if (data.response==null) {
                                    // window.location.href=base_url+'404';  
                                } 
                                           
                              
                                      $('.content_wrapper').html(data.response.description);
                                    
                            }
                            else {
                                alert("404 or empty"); 
                                     window.location.href=base_url;  
                                }
                            
                         }
                    }); 

 

 

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