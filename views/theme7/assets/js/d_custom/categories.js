 
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
 
 // init();
$(document).ready(function() {
		//loadData();
		loadByAjax();
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
 





function loadByAjax(){
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/frontend/loadByAjax/categories", 
	                     data:{  
	                     	'site_id':site_id,
	                     	 'alphabet':currentAlphabet,
	                     	 
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                        	 $('#d-loading-image').hide();	
	                        	 $('#d-hide_content').show();

	                        	//initCommon
	                        	 initByAjax(data.response.common); 


	                        	 //popular_stores
	                 
	                         	 app.categories_group=data.response.categoriesByGroups;

	                                setTimeout(function() {

	                                	$('.grid').masonry({
										  // options
										  itemSelector: '.grid-item',
										  columnWidth: 40,
										  percentPosition: true,
										  // horizontalOrder: true
										});


	                                },150);


	 		console.log(data);
	                        	
	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}

 								


