'use strict';
// Class definition



        var store_id ;
        var new_coupon_id=0 ;

  var defaultForm=null;
var Main = function() {
    // Private functions

    // demo initializer
    var init_sort = function(dataJSONArray) {
         
                 


    };

    return {
        // Public functions 
        submit: function(redirect_url=null) {

          
            defaultForm.validate().then(function(status) {
                if(status=='Valid'){
                   var url= 'createCoupon';
                   var title= 'Coupons Created';
                     if($('#id').val()!=''){
                        url="updateBatchCoupon";
                        title="Coupons Update";
                     }
  
                    F.submitForm("#default",url,title,redirect_url,function(data) {
                        // alert('d');
                                 Main.getCoupons(store_id);
                    });
                   
                }
            });
         
 
      return false;
        },
        addMore: function() {

var tmp=$('.coupon_templete');
new_coupon_id++;
var coupon_id="new_"+new_coupon_id;
$('#coupon_list').append('<div class="coupon_tmp" coupon_id="'+coupon_id+'" >'+tmp[0].outerHTML+'</div>');

var tmp=$('.coupon_tmp[coupon_id="'+coupon_id+'"]');
tmp.find('.coupon_id').attr('name','coupon['+coupon_id+'][coupon_id]').val('');
tmp.find('.coupon_title').attr('name','coupon['+coupon_id+'][coupon_title]');
tmp.find('.coupon_short_title').attr('name','coupon['+coupon_id+'][coupon_short_title]');
tmp.find('.coupon_description').attr('name','coupon['+coupon_id+'][coupon_description]');
tmp.find('.coupon_affiliate_link').attr('name','coupon['+coupon_id+'][coupon_affiliate_link]');
tmp.find('.coupon_code').attr('name','coupon['+coupon_id+'][coupon_code]');
tmp.find('.coupon_expire_date').attr('name','coupon['+coupon_id+'][coupon_expire_date]');
tmp.find('.coupon_category').attr('name','coupon['+coupon_id+'][coupon_category]');  
tmp.find('.coupon_check_verified').attr('name','coupon['+coupon_id+'][coupon_check_verified]');
tmp.find('.coupon_check_featured').attr('name','coupon['+coupon_id+'][coupon_check_featured]');
tmp.find('.coupon_check_exclusive').attr('name','coupon['+coupon_id+'][coupon_check_exclusive]');
tmp.find('.coupon_check_popular').attr('name','coupon['+coupon_id+'][coupon_check_popular]');
tmp.find('.coupon_check_top').attr('name','coupon['+coupon_id+'][coupon_check_top]');
tmp.find('.coupon_check_show_in_home').attr('name','coupon['+coupon_id+'][coupon_check_show_in_home]');
tmp.find('.coupon_delete').attr('name','coupon['+coupon_id+'][coupon_check_show_in_home]');
 


        },
        getCoupons: function(store_id) {
               $( "#coupon_list" ).html('');


                  console.log( "script was performed." );
     
if (store_id) {

             jQuery.ajax({
                   type : "post",
                     data:{'token':token,'store_id':store_id}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getCoupons", 
                     success: function(data) { 
                        if(data.success === "yes") {  
                           
                        $( "#coupon_list" ).removeClass('d-none');
                        // $( "#coupon_list" ).sortable();
                        // $( "#coupon_list" ).disableSelection();
                        if (!data.response.length) {$( "#coupon_list" ).html('<div class="alert alert-custom alert-light-dark fade show mb-5" role="alert"> <div class="alert-icon"><i class="flaticon-warning"></i></div> <div class="alert-text">No any coupons found</div> <div class="alert-close"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="ki ki-close"></i></span> </button> </div> </div>'); }
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


                            if (coupon.type=='deal') {
                                    type="btn-light-warning";
                                    type_icon='<i class="icon-xl la la-percent"></i>';
                            }
                            if (new Date()>new Date(coupon.expire_date)) {
                                     type=""; 
                            }


var tmp=$('.coupon_templete');
$('#coupon_list').append('<div class="coupon_tmp" coupon_id="'+coupon.id+'" >'+tmp[0].outerHTML+'</div>');

var tmp=$('.coupon_tmp[coupon_id='+coupon.id+']');
tmp.find('.coupon_id').attr('name','coupon['+coupon.id+'][coupon_id]').val(coupon.id); 
tmp.find('.coupon_title').attr('name','coupon['+coupon.id+'][coupon_title]').val(coupon.name); 
tmp.find('.coupon_short_title').attr('name','coupon['+coupon.id+'][coupon_short_title]').val(coupon.short_title); 
tmp.find('.coupon_description').attr('name','coupon['+coupon.id+'][coupon_description]').val(coupon.description); 
tmp.find('.coupon_affiliate_link').attr('name','coupon['+coupon.id+'][coupon_affiliate_link]').val(coupon.affiliate_link); 
tmp.find('.coupon_code').attr('name','coupon['+coupon.id+'][coupon_code]').val(coupon.coupon_code); 
tmp.find('.coupon_expire_date').attr('name','coupon['+coupon.id+'][coupon_expire_date]').val(coupon.expire_date); 
tmp.find('.coupon_category').attr('name','coupon['+coupon.id+'][coupon_category]').val(coupon.category_id);//.selectpicker('refresh'); 
tmp.find('.coupon_delete').attr('name','coupon['+coupon.id+'][coupon_delete]');//.selectpicker('refresh'); 
       // $('[name=category_id]').val(row.category_id).selectpicker('refresh');
       var verified=tmp.find('.coupon_check_verified').attr('name','coupon['+coupon.id+'][coupon_check_verified]');
       var featured=tmp.find('.coupon_check_featured').attr('name','coupon['+coupon.id+'][coupon_check_featured]'); 
       var exclusive=tmp.find('.coupon_check_exclusive').attr('name','coupon['+coupon.id+'][coupon_check_exclusive]');
       var popular=tmp.find('.coupon_check_popular').attr('name','coupon['+coupon.id+'][coupon_check_popular]');
       var top=tmp.find('.coupon_check_top').attr('name','coupon['+coupon.id+'][coupon_check_top]');
       var show_in_home=tmp.find('.coupon_check_show_in_home').attr('name','coupon['+coupon.id+'][coupon_check_show_in_home]');
if (coupon.verified=='1') { verified.prop('checked',true);}
if (coupon.featured=='1') { featured.prop('checked',true);}
if (coupon.exclusive=='1'){ exclusive.prop('checked',true);}
if (coupon.popular=='1') { popular.prop('checked',true);}
if (coupon.top=='1') { top.prop('checked',true);}
if (coupon.show_in_home=='1'){ show_in_home.prop('checked',true); }
 
// $('#coupon_list').append('<div  coupon_id='+coupon.id+' '+attrs+' class="coupon ui-state-default btn btn-block btn-sm '+type+' font-weight-bolder  py-4 text-left"> <i class="icon-xl la la-arrows-alt-v"></i>'+type_icon+coupon.name+' - '+verified+featured+exclusive+popular+top+show_in_home+'</div>');

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
  F.fillSelectAjax('.coupon_templete .coupon_category','getCategories','',[],function() {
    $('.coupon_templete .coupon_category').selectpicker('destroy');

            store_id= $('#id').val(); 
            $('#store_id').val($('#id').val());
            Main.getCoupons(store_id);


defaultForm=FormValidation.formValidation(
    document.getElementById('default'),
    {
        fields: {
            coupon_title: {
                validators: {
                    notEmpty: {
                        message: 'Coupon title  is required'
                    } 
                }
            },

            // website_url: {
            //     validators: {
                   
            //         uri: {
            //             message: 'The website address is not valid'
            //         }
            //     }
            // },
            // affiliate_link: {
            //     validators: {
                    
            //         uri: {
            //             message: 'The Affiliate Link     is not valid'
            //         }
            //     }
            // },

        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            // Bootstrap Framework Integration
            bootstrap: new FormValidation.plugins.Bootstrap(),
            // Validate fields when clicking the Submit button
            submitButton: new FormValidation.plugins.SubmitButton(),
                                            // Submit the form when all fields are valid
           // defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        }
    }
);

  });
          

                          // F.fillSelectAjax('#select_store','getStores',store_id);
           

});
 