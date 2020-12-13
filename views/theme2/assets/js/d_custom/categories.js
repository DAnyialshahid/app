 
var currentAlphabet="";

var app= Vue.createApp({
  data() {
    return {
    api_url: api_url, 
    base_url: base_url, 
	categories: [  ] 
    }
}
}).mount('#app');
 
 init();
$(document).ready(function() {
		loadData();
	});

 
function loadData(page_no=''){
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : base_url+"/front_api/getCategories/", 
	                     data:{
	                     	'limit':1000,
	                     	'alphabet':currentAlphabet,
	                     	'page_no':page_no,
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                                app.categories=data.response;
	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}
 
