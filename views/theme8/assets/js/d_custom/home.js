  
var home= Vue.createApp({
  data() {
    return {
    api_url: api_url, 
    base_url: base_url, 
	theme_base_url: theme_base_url,
    comeFrom: 'home', 
	  slides: [  ],
	  show_in_home_stores: [  ],
	  recommended_coupons: [  ],
	  popular_coupons: [  ],
	  popular_categories: [  ],
	  popular_stores: [  ],
	  store: [  ],
	  configs: [  ],

	 initCouponBox: function(coupon) { 
	 	coupon_box.box_data=coupon; 
	 	coupon_box.store=coupon.store;  
		showCouponBox();
	 },

	 loadCouponAffilate: function(coupon) { 
	 	//c(coupon); 
	  

	 	visitCoupon(coupon.id,function() {
	 		
	 if(coupon.affiliate_link){
	 			window.location.href=coupon.affiliate_link;
	 	}else if(coupon.store.affiliate_link){

	 				window.location.href=coupon.store.affiliate_link;
	 	}else{

	 			notification_coupon_link_expire(coupon.id,function() {
	 							window.location.href='';
	 			});
	 			
	 	}
	 	


	 	})
	 	
	 },

  }
 },
mounted: function () {
  this.$nextTick(function () {

  })
}


}).mount('#home');

 
 init();
$(document).on('footer_loaded',function() {


});
$(document).ready(function() {
	
		getSlides();
		getTopStores();
		getRecommendedCoupons();
		getPopularCoupons();
		getPopuplarCategories();
		getPopuplarStores();

	
	});

 
 function flicky_recommended_slider(){
 		$('.recommended-coupon-carousel').flickity({
		  // options
		  cellAlign: 'left',
		  	   pageDots: false,	
		  contain: true
		});
		 
 }  

 function flicky_top_store(){
 		$('.hot-stores').flickity({
		  // options
		  cellAlign: 'left',
		  pageDots: false,	
		  contain: true
		});
		 
 } 
 function flicky_popular_slider(){
 		$('.popular-coupon-carousel').flickity({
		  // options
		  cellAlign: 'left',
		   pageDots: false,
		  contain: true
		});
		 
 }
 function getAllCoupons(){
return home.recommended_coupons.concat(home.popular_coupons);
}

function getTopStores(){
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getTopStores/", 
	                     data:{ 
	                     	'limit':6,
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                                home.show_in_home_stores=data.response;

	                    		setTimeout(function() {
									flicky_top_store();
							                         
								},300);
	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}
 

 function getRecommendedCoupons(){

 var data={
  		top:1,
  		show_in_home:1,
  };
		getCoupons(data,10,function (response) {
			            home.recommended_coupons=response;
			            setTimeout(function() {
									flicky_recommended_slider();
							                         
								},300);
		});
 }


 function getPopularCoupons(){

 var data={
  		popular:1,
  		show_in_home:1,
  };
		getCoupons(data,20,function (response) {
			            home.popular_coupons=response;

	  

	     setTimeout(function() {
									flicky_popular_slider();
							                         
								},300);



		});
 }



function getCoupons(data,limit,callback){
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getRecommendedCoupons/", 
	                     data:{ 
	                     	'limit':limit,
	                     	'side_bar':$.param(data),
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                        	callback(data.response);
	                        	if(get('coupon_id')){ 
	                                	 for(i in data.response){ 
	                                	 	if(get('coupon_id')==data.response[i].id){  			
	                                	 		                      home.initCouponBox(data.response[i]);
	                                	 		                }
	                              		  } 
	                                }
	                    
	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}

function getPopuplarCategories(data,limit,callback){
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getPopuplarCategories/", 
	                     data:{ 
	                     	'limit':limit,
	                     	'side_bar':$.param(data),
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                        	home.popular_categories=data.response;
	                        	 
	                    
	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}

function getPopuplarStores(data,limit,callback){
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getPopuplarStores/", 
	                     data:{ 
	                     	'limit':limit,
	                     	'side_bar':$.param(data),
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                        	home.popular_stores=data.response;
	                        	


	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}

 								



function getSlides(data,limit,callback){
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/getSlides/", 
	                     data:{ 
	                     	'limit':limit,
	                      
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") { 
	                        	home.slides=data.response;
	                        	 		setTimeout(function() {
			 $('.owl-carousel').owlCarousel({
									    items:1,
									    lazyLoad:true,
									    loop:true,
									    margin:10,
									    autoHeight:1 
									});
	                         
		},300);
	                    		 
	                        	
	                        }
	                        else {
	                            alert("Error");
	                        }
	                     }
	                }); 
	}

 								


