var app= Vue.createApp({
  data() {
    return {
    api_url: api_url, 
    base_url: base_url, 
	  allStores: [  ],
	  popular_stores: [  ],
	  configs: [  ],

  

    }
}
}).mount('#allStores');


var currentAlphabet="";
/*
 var app = new Vue({
  el: '#app',
  data: {
    api_url: api_url, 
    base_url: base_url, 
	  allStores: [  ]

  },
});*/
 init();
$(document).ready(function() {
		getPopularStores();
		currentAlphabet='A';
		loadData($('.sitemap-letters a').first());
	});

function setCurrentAlphabet(element,alphabet=''){
		if(element){
		$(element).closest('ul').find('li a').removeClass('active');
		$(element).closest('li a').addClass('active');


		$('.big-alpha h1').html(alphabet);
		//extra 
		var alphabetposition=$(element).closest('li a').position();
		//alert(alphabetposition);
		$('.indicator').css('left',alphabetposition.left);
		$('.indicator').css('right',1200-(alphabetposition.left));
}
currentAlphabet=alphabet;
loadData(null);
}

function loadData(element,page_no=''){
	if(element){
		$(element).closest('ul').find('li a').removeClass('active');
		$(element).closest('li a').addClass('active');
}
 app.allStores=[];
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getStores/", 
	                     data:{
	                     	'limit':100,
	                     	'alphabet':currentAlphabet,
	                     	'page_no':page_no,
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                                app.allStores=data.response;
	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}
 


function getPopularStores(){
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getPopularStores/", 
	                     data:{ 
	                     	'limit':6,
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                   
	                                 app.popular_stores=data.response;

	                                setTimeout(function() {
	                                	 $('.main-carousel').flickity({
										  // options
										  cellAlign: 'left',
										  contain: true
										});

	                                },150);

	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}
 