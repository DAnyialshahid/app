
var about_us= Vue.createApp({
  data() {
    return {

    api_url: api_url, 
    base_url: base_url,  
    configs: configs,  
    }
}
}).mount('#about_us');
  
init();

 $.ajax({
                         type : "post",
                         dataType : "json",
                         url : api_url+"/front_api/load_dynamic_page_content/about_us", 
                         data:{
                            'site_id':site_id,
                            [token_name]:token_hash,
                         },
                         success: function(data) { 
                            if(data.success === "yes") {      
                                 $('#d-loading-image').hide();  
                                 $('#d-hide_content').show();

                                if (data.response==null) {
                                     window.location.href=base_url+'404';  
                                } 
                                           $('title').html(data.response.name);
                                      $('#about_us .head_title').html(data.response.name);
                                      $('#about_us .content_wrapper').html(data.response.description);
                                    
                            }
                            else {
                                alert("404 or empty"); 
                                  //   window.location.href=base_url;  
                                }
                            
                         }
                    }); 

 