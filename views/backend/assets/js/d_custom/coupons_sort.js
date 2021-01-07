'use strict';
// Class definition



        var store_id ;

var Main = function() {
    // Private functions

    // demo initializer
    var init_sort = function(dataJSONArray) {
         
                 


    };

    return {
        // Public functions
        getCoupons: function(store_id) {
               $( "#sortable" ).html('');


                  console.log( "script was performed." );
     
if (store_id) {

             jQuery.ajax({
                   type : "post",
                     data:{'token':token,'store_id':store_id}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getCoupons", 
                     success: function(data) { 
                        if(data.success === "yes") {  
                           
                        $( "#sortable" ).removeClass('d-none');
                        $( "#sortable" ).sortable();
                        $( "#sortable" ).disableSelection();
                        if (!data.response.length) {
                             $( "#sortable" ).html('<div class="alert alert-custom alert-light-dark fade show mb-5" role="alert"> <div class="alert-icon"><i class="flaticon-warning"></i></div> <div class="alert-text">No any coupons found</div> <div class="alert-close"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="ki ki-close"></i></span> </button> </div> </div>'); }
                           for (var i = 0; i <data.response.length ; i++) {
                            var coupon=data.response[i];
                            var type="btn-light-primary";
                            var type_icon='<i class="icon-xl la la-tag"></i>';
                            var verified='';
                            var featured='';
                            var exclusive='';
                            var popular='';
                            var top='';
                            var show_in_home='';
                            var attrs='';
                             attrs+=' verified="'+coupon.verified+'" ';
                             attrs+=' featured="'+coupon.featured+'" ';
                             attrs+=' exclusive="'+coupon.exclusive+'" ';
                             attrs+=' popular="'+coupon.popular+'" ';
                             attrs+=' top="'+coupon.top+'" ';
                             attrs+=' show_in_home="'+coupon.show_in_home+'" ';

                            if (coupon.verified=='1') {verified='<span class="label label-inline   label-success label-sm">Verified</span>';}
                            if (coupon.featured=='1') {featured='<span class="label label-inline   label-danger label-sm">Featured</span>';}
                            if (coupon.exclusive=='1') {exclusive='<span class="label label-inline label-info  label-sm">Exclusive</span>';}
                            if (coupon.popular=='1') {popular='<span class="label label-inline     label-warning  label-sm">Popular</span>';}
                            if (coupon.top=='1') {top='<span class="label label-inline             label-danger  label-sm">Top</span>';}
                            if (coupon.show_in_home=='1') {show_in_home='<span class="label        label-dark  label-inline label-sm">Home</span>';}
                            
                            if (coupon.type=='deal') {
                                    type="btn-light-warning";
                                    type_icon='<i class="icon-xl la la-percent"></i>';
                            }
                            if (new Date()>new Date(coupon.expire_date)) {
                                     type=""; 
                            }


               $('#sortable').append('<div  coupon_id='+coupon.id+' '+attrs+' class="coupon ui-state-default btn btn-block btn-sm '+type+' font-weight-bolder  py-4 text-left"> <i class="icon-xl la la-arrows-alt-v"></i>'+type_icon+coupon.name+' - '+verified+featured+exclusive+popular+top+show_in_home+'</div>');
            }

   
                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 
}

       


 
        },
        done: function() { 

            var ids=[];$('.coupon').each(function(i,v){ ids.push($(v).attr('coupon_id'))});
            if (ids.length) {
               



          
             jQuery.ajax({
                     type : "post",
                     data:{'token':token,store_id:store_id ,coupon_ids:ids.join() }, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/sortCoupon/",
                  
                     success: function(data) { 
                         Swal.fire('Sorted',"Sort success",'success');

                      
                     },
                     error:function(a,b,c){
                             Swal.fire('404',"Ajax:"+c,'error');

                     }
                }); 
 
           
        


            }

          

           
        }
    };
}();



jQuery(document).ready(function() {  


   // alert($('#id').val());
                  $.ajax({

                  url: 'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
                  dataType: "script",
                  success:  function( data, textStatus, jqxhr ) {
                         store_id= $('#id').val();
                  //alert(store_id);
                        Main.getCoupons(store_id);
                          F.fillSelectAjax('#select_store','getStores',store_id);
                    }
    
                  });


            $('#select_store').on('change',function() { 
                    store_id=$('#select_store').val(); 
                    Main.getCoupons(store_id);
            }); 
          

});
