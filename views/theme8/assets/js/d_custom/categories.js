 
var currentAlphabet="";

var app= Vue.createApp({
  data() {
    return {
    api_url: api_url, 
    base_url: base_url, 
    theme_base_url: theme_base_url, 
	categories_group: [  ] ,
	
	  configs: [  ],
    }
}
}).mount('#categories');
 
 init();
$(document).ready(function() {
		loadData();
	});

 
function loadData(page_no=''){
 
 


	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getCategoriesByGroups/", 
	                     data:{
	                     	'limit':1000,
	                
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                                app.categories_group=data.response;

	                                setTimeout(function() {

	                                	$('.grid').masonry({
										  // options
										  itemSelector: '.grid-item',
										  columnWidth: 40,
										  percentPosition: true,
										  // horizontalOrder: true
										});


	                                },200);
	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}
 
