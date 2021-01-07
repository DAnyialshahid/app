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
                   var url= 'createCategory';
                   var title= 'Category Created';
                     if($('#id').val()!=''){
                        url="updateCategory";
                        title="Category Update";
                     }
                    F.submitForm("#default",url,title,redirect_url);
                }
            });
         
 
      return false;
        },
        fillUpdate: function(id) {  
          
             jQuery.ajax({
                     type : "post",
                     dataType : "json",
                     url : api_base_url+"/getCategory/"+id,
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                  
                     success: function(data) { 
                        console.log(data);
                        if(data.success === "yes" ) { 
                          var row=data.response;

                                          //input
                                        $('[name=name]').val(row.name);
                                        $('[name=slug]').val(row.slug);
                                        $('[name=seo_category_meta_title]').val(row.seo_category_meta_title);
                                        $('[name=seo_category_meta_keywords]').val(row.seo_category_meta_keywords);
                                        // $('[name=icon]').val(row.icon);      
                                          //selectpicker
                                        $('[name=category_id]').val(row.category_id).selectpicker('refresh');
                                        $('[name=type]').val(row.type).selectpicker('refresh');
                                        $('[name=status]').val(row.status).selectpicker('refresh');
                                        $('[name=icon]').val(row.icon).selectpicker('refresh');
                                          //checkbox
                                          if(row.top){ $("[name=check_top]").prop("checked", true);}
                                          if(row.popular){ $("[name=check_popular]").prop("checked", true);}
                                          if(row.show_in_home){ $("[name=check_show_in_home]").prop("checked", true);}

                                        //textarea
                                        $('[name=description]').val(row.description);
                                        $('[name=seo_category_meta_description]').val(row.seo_category_meta_description);
                                        
                                  //image
                                $('#kt_image_1 .image-input-wrapper').css('background-image','url("'+base_url+"/assets/uploads/categories/"+row.feature_image+'")');

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
        $('select').selectpicker();
    if($('#id').val()!=''){
  Main.fillUpdate($('#id').val());
       $('#card_label').html('Update Category');

        $('#submit_btn_1').html(' Update & exit');
        $('#submit_btn_2').html('Update');
    }else{

        $('#card_label').html('Create Category');
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