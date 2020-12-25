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
        addNetwork: function() {
         window.networkForm.validate().then(function(status) {
                if(status=='Valid'){ 
                        KTApp.block('#network_add',{ state: 'danger', message: 'Authenticating Wait.....', size: 'lg'}); 
       jQuery.ajax({
                     type : "post",
                     dataType : "json",
                     url : api_base_url+"/network_add/",
                            data:{
                              'token':token,
                              'add_network_network': $('#network_add [name="add_network_network"]:checked').val(),
                              'add_network_username':$('#network_add [name=add_network_username]').val(),
                              'add_network_password':$('#network_add [name=add_network_password]').val(), 
                              'add_network_title':$('#network_add [name=add_network_title]').val(),  

                          },

                             headers: { 'x-cookie': cookie },  
                     success: function(data) { 
                        console.log(data);
                        if(data.success === "yes" ) { 


                        }

                           KTApp.unblock('#network_add');
                      },
                      fail:function(r){
                         KTApp.unblock('#network_add');
                      }
                });

             return false;

         }
       });
 
      return false;
        },
        submit: function(redirect_url=null) {

            $('#kt-ckeditor-1').val(ckeditor_box.getData());
            defaultForm.validate().then(function(status) {
                if(status=='Valid'){ 
                    F.submitForm("#default",'updateSettings','Update Settings',redirect_url);
                }
            });
         
 
      return false;
        },
        fillUpdate: function() {  
          
             jQuery.ajax({
                     type : "get",
                     dataType : "json",
                     url : api_base_url+"/getSettings/",
                            data:{'token':token}, headers: { 'x-cookie': cookie },  
                     success: function(data) { 
                        console.log(data);
                        if(data.success === "yes" ) { 
                          var row=data.response; 

                                          //input
                                        $('[name=facebook]').val(row.facebook);
                                        $('[name=youtube]').val(row.youtube);
                                        $('[name=instagram]').val(row.instagram);
                                        $('[name=twitter]').val(row.twitter);
                                        $('[name=pintrest]').val(row.pintrest);
                                        $('[name=site_name]').val(row.site_name);
                                        $('[name=domain]').val(row.domain);
                                        $('[name=contact_number]').val(row.contact_number);
                                        $('[name=contact_address]').val(row.contact_address);
                                        $('[name=contact_country]').val(row.contact_country);
                                        $('[name=contact_flag]').val(row.contact_flag);
                                        $('[name=theme]').val(row.theme);
                                        $('[name=seo_home_meta_title]').val(row.seo_home_meta_title);
                                        $('[name=seo_home_meta_keywords]').val(row.seo_home_meta_keywords);
                                        $('[name=seo_all_store_meta_title]').val(row.seo_store_meta_title);
                                        $('[name=seo_all_store_meta_keywords]').val(row.seo_store_meta_keywords);
                                        $('[name=seo_all_category_meta_title]').val(row.seo_category_meta_title);
                                        $('[name=seo_all_category_meta_keywords]').val(row.seo_category_meta_keywords);
                                        $('[name=seo_category_meta_title]').val(row.seo_category_meta_title);
                                        $('[name=seo_category_meta_keywords]').val(row.seo_category_meta_keywords);
                                        $('[name=seo_store_meta_title]').val(row.seo_store_meta_title);
                                        $('[name=seo_store_meta_keywords]').val(row.seo_store_meta_keywords);
                                        $('[name=seo_seasonal_meta_title]').val(row.seo_seasonal_meta_title);
                                        $('[name=seo_seasonal_meta_keywords]').val(row.seo_seasonal_meta_keywords);
                                        $('[name=seo_coupon_meta_title]').val(row.seo_coupon_meta_title);
                                        $('[name=seo_coupon_meta_keywords]').val(row.seo_coupon_meta_keywords); 
                                        $('[name=seo_page_meta_title]').val(row.seo_page_meta_title);
                                        $('[name=seo_page_meta_keywords]').val(row.seo_page_meta_keywords);
                                   

                                    
                                          //selectpicker
                                   
                                        $('[name=status]').val(row.status).selectpicker('refresh');
                                    
                            







                                        //textarea
                                        $('[name=description]').val(row.description);
                                        $('[name=header]').val(row.header);
                                        $('[name=footer]').val(row.footer);

                                        $('[name=seo_home_meta_description]').val(row.seo_home_meta_description);
                                        $('[name=seo_all_category_meta_description]').val(row.seo_category_meta_description);
                                        $('[name=seo_category_meta_description]').val(row.seo_category_meta_description);
                                        $('[name=seo_seasonal_meta_description]').val(row.seo_seasonal_meta_description);
                                        $('[name=seo_store_meta_description]').val(row.seo_store_meta_description);
                                        $('[name=seo_all_store_meta_description]').val(row.seo_store_meta_description);
                                        $('[name=seo_coupon_meta_description]').val(row.seo_coupon_meta_description);
                                        $('[name=seo_page_meta_description]').val(row.seo_page_meta_description);
                                        
                                  //image
 $('#kt_image_1 .image-input-wrapper').css('background-image','url("'+base_url+"/assets/uploads/sites/"+row.logo+'")');
 $('#kt_image_2 .image-input-wrapper').css('background-image','url("'+base_url+"/assets/uploads/sites/"+row.favicon+'")');

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

    //F.fillSelectAjax('#select_category','getCategories');

window.networkForm=FormValidation.formValidation(
    document.getElementById('network_add'),
    {
        fields: {
            add_network_network: {
                validators: {
                    notEmpty: {
                        message: 'Network  is required'
                    }  
                }
            }, 
            add_network_username: {
                validators: {
                    notEmpty: {
                        message: 'Username  is required'
                    } 
                }
            }, 
            add_network_password: {
                validators: {
                    notEmpty: {
                        message: 'Password  is required'
                    } 
                }
            },
 

        },

        plugins: {
            // defaultSubmit:'23',
        trigger: new FormValidation.plugins.Trigger(),
            // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap(),
            // Validate fields when clicking the Submit button
            //submitButton: new FormValidation.plugins.SubmitButton(),
                                            // Submit the form when all fields are valid
       // defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        }
    }
)    .on('core.form.valid', function() {

  
});
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

   
  Main.fillUpdate();
       
  

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