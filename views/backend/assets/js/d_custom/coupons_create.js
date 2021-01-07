'use strict';
// Class definition

//import backend_base_url+'/assets/js/pages/crud/forms/editors/ckeditor-classic.js'; 

// var script=document.createElement('script')
//     script.src=backend_base_url+'/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js'; 
//     document.head.appendChild(script); 

  var defaultForm=null;

var Main = function() {
    // Private functions

    // demo initializer
    var test = function(submitType='') {  
   
         
    };

    return {
        // Public functions
        submit: function(redirect_url=null) {

            $('#kt-ckeditor-1').val(ckeditor_box.getData());
            defaultForm.validate().then(function(status) {
                if(status=='Valid'){
                   var url= 'createCoupon';
                   var title= 'Coupons Created';
                     if($('#id').val()!=''){
                        url="updateCoupon";
                        title="Coupons Update";
                     }
                    F.submitForm("#default",url,title,redirect_url);
                }
            });
         
 
      return false;
        },
        fillUpdate: function(id) {  
          
             jQuery.ajax({
                     type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getCoupon/"+id,
                  
                     success: function(data) { 
                        console.log(data);
                        if(data.success === "yes" ) { 
                          var row=data.response;

                                          //input
                                        $('[name=name]').val(row.name);
                                        $('[name=short_title]').val(row.short_title);
                                        $('[name=affiliate_link]').val(row.affiliate_link);
                                        $('[name=coupon_code]').val(row.coupon_code); 
                                        $('[name=seo_coupon_meta_title]').val(row.seo_coupon_meta_title); 
                                        $('[name=seo_coupon_meta_keywords]').val(row.seo_coupon_meta_keywords); 

                                        //dates
                                        $('[name=expire_date]').val(row.expire_date).trigger('change');

                                          //selectpicker 
                                        $('[name=type]').val(row.type).selectpicker('refresh');
                                        $('[name=status]').val(row.status).selectpicker('refresh');
                                        $('[name=store_id]').val(row.store_id).selectpicker('refresh');
                                        $('[name=category_id]').val(row.category_id).selectpicker('refresh');
                                        $('[name=icon]').val(row.icon).selectpicker('refresh');
                                        $('[name=seasonal_type]').val(row.seasonal_type).selectpicker('refresh');

                                        //selectpicker Large data rows wait while load then select selected id
                                      var selected=false;
                                      $('[name=store_id]').on('rendered.bs.select', function (e, clickedIndex, isSelected, previousValue) {
                                                  if(!selected){selected=true; $('[name=store_id]').val(row.store_id).selectpicker('refresh');}
                                                });


                                          //checkbox
                                          if(row.verified){ $("[name=check_verified]").prop("checked", true);}
                                          if(row.featured){ $("[name=check_featured]").prop("checked", true);}
                                          if(row.exclusive){ $("[name=check_exclusive]").prop("checked", true);}

                                          if(row.top){ $("[name=check_top]").prop("checked", true);}
                                          if(row.popular){ $("[name=check_popular]").prop("checked", true);}
                                          if(row.show_in_home){ $("[name=check_show_in_home]").prop("checked", true);}

                                        //textarea
                                        $('[name=description]').val(row.description);
                                        $('[name=seo_coupon_meta_description]').val(row.seo_coupon_meta_description);

                                        //image 
                                        $('#kt_image_1 .image-input-wrapper').css('background-image','url("'+base_url+"/assets/uploads/coupons/"+row.feature_image+'")');

                        }
                        else {
                              Swal.fire('404',data.response,'error');
                        }
                     },
                     error:function(a,b,c){
                             Swal.fire('404',"Ajax:"+c,'error');

                     }
                }); 
 
           
        },
        init: function() { 

         


/*
             jQuery.ajax({
                     type : "get",
                     dataType : "json",
                     url : api_base_url+"/getStores",
                     data : {
                        action: "", 
                         },
                     success: function(data) { 
                        if(data.success === "yes") { 
                                          init_table(data.response);

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 

*/
           
        },
    };
}();

jQuery(document).ready(function() { 
  $('select').selectpicker();
    //F.fillSelectAjax('#select_Coupons','getCategories');

defaultForm=FormValidation.formValidation(
    document.getElementById('default'),
    {
        fields: {
            store_name: {
                validators: {
                    notEmpty: {
                        message: 'Store name is required'
                    } 
                }
            },

            website_url: {
                validators: {
                   
                    uri: {
                        message: 'The website address is not valid'
                    }
                }
            },
            affiliate_link: {
                validators: {
                    
                    uri: {
                        message: 'The Affiliate Link     is not valid'
                    }
                }
            },

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


$(document).ready(function() {

 F.fillSelectAjax('#select_store','getStores',$('#store_id').val());
 F.fillSelectAjax('#select_category','getCategories');

  $('[name=expire_date]').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "top right",
             format: 'yyyy/mm/dd',
            todayHighlight: true,
            templates: {
                 leftArrow: '<i class="la la-angle-right"></i>',
                rightArrow: '<i class="la la-angle-left"></i>'
               }
        });
 


    if($('#id').val()!=''){
         Main.fillUpdate($('#id').val());
       $('#card_label').html('Update Coupons');

        $('#submit_btn_1').html(' Update & exit');
        $('#submit_btn_2').html('Update');
    }else{

        $('#card_label').html('Create Coupons');
        $('#submit_btn_1').html(' Save & exit');
        $('#submit_btn_2').html('Save & Create New');
    }
    
  

    $('#name').keyup(function() {
        $('#slug').val(F.slugify($('#name').val()));
    });




 var avatar1 = new KTImageInput('kt_image_1');

 


      $.ajax({
          url: backend_base_url+'/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js',
          dataType: "script",
          success:  function( data, textStatus, jqxhr ) {
          console.log( "script was performed." );

          ClassicEditor.create( document.querySelector( '#kt-ckeditor-1' ) )
                .then( editor => {
                    window.ckeditor_box=editor;
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );


        }

    });



});