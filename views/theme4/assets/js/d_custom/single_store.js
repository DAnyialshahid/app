 
var currentAlphabet="";

var app= Vue.createApp({
  data() {
    return {
    api_url: api_url, 
    base_url: base_url, 
    slug: slug, 
    row: {count:[] },  
	 coupons: [  ],
	 popular_stores: [  ],
	 relative_stores: [  ],
	 coupons: [  ],
	 comeFrom: 'store',
	  configs: [  ],
	 initCouponBox: function(coupon) { 
	 	c(coupon);
	 	coupon_box.box_data=coupon; 
		showCouponBox();
	 },
	 loadCouponAffilate: function(coupon) { 
	  c(coupon);

	 	visitCoupon(coupon.id,function() { 
				   if(coupon.affiliate_link){
				 			window.location.href=coupon.affiliate_link;
				 	}else if(coupon.store.affiliate_link){

				 				window.location.href=coupon.store.affiliate_link;
				 	}else{

				 			notification_coupon_link_expire(coupon.id,function() {
				 							window.location.href=app.row.affiliate_link;
				 			});
				 			
				 	} 

	 	});
	 	
	 }, 
  }
}
}).mount('#single_store');

 
 init();
$(document).ready(function() {
		$('#d_sidebar_serialize input').on('change',function() {
				filturing=true;
				loadStore(0);  
		});
		loadStore(1);

	});

 
function getAllCoupons(){
return app.coupons;
}
var filturing=false;

function loadStore(visit){ 

	var url="";

	if (type=="single_store") {
			url="getStore";
			app.comeFrom='store';
	}	else if (type=="single_category") {
			url="getCouponsByCategory";
			app.comeFrom='category';

	}
 
	 $.ajax({
	                     type : "post",
	                     dataType : "json",
	                     url : api_url+"/front_api/"+url, 
	                     data:{
	                     	 'side_bar':$("#d_sidebar_serialize input").serialize(),
	                     	'visit':visit,
	                     	'type':type,
	                     	'slug':slug,
	                     	'site_id':site_id,
	                     	[token_name]:token_hash,
	                     },
	                     success: function(data) { 
	                        if(data.success === "yes") {   
	                        	$('#single_store_container').show();
	                             	app.row=data.response; 
	                                coupon_box.store=data.response;  
 									app.coupons=data.response.coupons; 
 									app.popular_stores=data.response.popular_stores; 
 									app.relative_stores=data.response.relative_stores; 

	                                  if(get('coupon_id')){ 
	                                	 for(i in app.coupons){ 
	                                	 	if(get('coupon_id')==app.coupons[i].id && !filturing){  			
	                                	 		                      app.initCouponBox(app.coupons[i]);
	                                	 		                }
	                              		  } 
	                                }

	                              //  loadCoupons(app.row.id);
	                        }
	                        else {
	                        	//alert("404 or empty");
	                        	if (type=="single_store") {
	                        		  window.location.href=base_url+"stores"; 	
	                        	}	else if (type=="single_category") {
	                        		  window.location.href=base_url+"categories"; 	
	                        	}	else {
	                        		 window.location.href=base_url;  
	                        		                      }
	                        }
	                     }
	                }); 
	}
	
 

 
// function loadCoupons(store_id){ 
 
// 	 $.ajax({
// 	                     type : "post",
// 	                     dataType : "json",
// 	                     url : base_url+"/front_api/getCoupons/", 
// 	                     data:{
	                     	 
// 	                     	'store_id':store_id,
// 	                     	'site_id':site_id,
// 	                     	[token_name]:token_hash,
// 	                     },
// 	                     success: function(data) { 
// 	                        if(data.success === "yes") { 
	                               

	                              
// 	                        }
// 	                        else {
// 	                            alert("Error");
// 	                        }
// 	                     }
// 	                }); 
// 	}
 
 

