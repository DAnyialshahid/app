 
 



var terms_conditions= Vue.createApp({
  data() {
    return {

    api_url: api_url, 
    base_url: base_url,  
    configs: [],  
    }
}
}).mount('#terms_conditions');


init();

 $.ajax({
                         type : "post",
                         dataType : "json",
                         url : base_url+"/front_api/load_dynamic_page_content/terms_conditions", 
                         data:{
                            'site_id':site_id,
                            [token_name]:token_hash,
                         },
                         success: function(data) { 
                            if(data.success === "yes") {     
                                if (data.response==null) {
                                     window.location.href=base_url+'404';  
                                } 
                                      $('#terms_conditions .head_title').html(data.response.name); 
                                      $('#terms_conditions .content_wrapper').html(data.response.description);
                                    
                            }
                            else {
                                alert("404 or empty"); 
                                     window.location.href=base_url;  
                                }
                            
                         }
                    }); 

 