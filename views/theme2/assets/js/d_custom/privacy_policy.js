 



var privacy_policy= Vue.createApp({
  data() {
    return {

    api_url: api_url, 
    base_url: base_url,  
    configs: [],  
    }
}
}).mount('#privacy_policy');

init();

 $.ajax({
                         type : "post",
                         dataType : "json",
                         url : base_url+"/front_api/load_dynamic_page_content/privacy_policy", 
                         data:{
                            'site_id':site_id,
                            [token_name]:token_hash,
                         },
                         success: function(data) { 
                            if(data.success === "yes") {     
                                if (data.response==null) {
                                     window.location.href=base_url+'404';  
                                } 
                                     
                                      $('#privacy_policy .head_title').html(data.response.name);
                                      $('#privacy_policy .content_wrapper').html(data.response.description);
                                    
                            }
                            else {
                                alert("404 or empty"); 
                                     window.location.href=base_url;  
                                }
                            
                         }
                    }); 

 