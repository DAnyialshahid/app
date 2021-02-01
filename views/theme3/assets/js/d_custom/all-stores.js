var app= Vue.createApp({
  data() {
    return {
    api_url: api_url, 
    base_url: base_url, 
	  allStores: [  ],
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
		loadData(null);
	});

function setCurrentAlphabet(element,alphabet=''){
		if(element){
		$(element).closest('ul').find('li a').removeClass('active');
		$(element).closest('li a').addClass('active');
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
		$(element).closest('ul').find('li').removeClass('active');
		$(element).closest('li').addClass('active');
}
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getStores/", 
	                     data:{
	                     	'limit':20,
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
 
