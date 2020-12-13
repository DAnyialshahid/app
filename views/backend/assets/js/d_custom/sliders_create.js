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

            defaultForm.validate().then(function(status) {
                if(status=='Valid'){
                   var url= 'createSlide';
                   var title= 'Slide Created';
                     if($('#id').val()!=''){
                        url="updateSlide";
                        title="Slide Update";
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
                     url : api_base_url+"/getSlide/"+id,
                  
                     success: function(data) { 
                        console.log(data);
                        if(data.success === "yes" ) { 
                          var row=data.response;

                                          //input
                                        $('[name=name]').val(row.name); 
                                        // $('[name=icon]').val(row.icon);      
                                          //selectpicker
                                
                                        $('[name=type]').val(row.type).selectpicker('refresh');
                                        $('[name=status]').val(row.status).selectpicker('refresh');
                       
                                  for(var i in row.images){    
                                   var v=row.images[i];

                                          addSlide(v.file_name,v.id,v.affliate_link);
                                         }
                                       
                                        
                                  //image
                         

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

    //F.fillSelectAjax('#select_Slide','getCategories');

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

var slideCounter=1;
function addSlide(file="",file_id="",link=""){


$('#slides').append($('#slideTemplete').html());
var random_id='image_'+Math.round(Math.random()*456456);
 $('#slides .image-input').last().attr('id',random_id)  ;
 new KTImageInput(random_id);
 $('#slides .slider_link').last().attr('name','slider_link['+slideCounter+']')  ;
 $('#slides .feature_image').last().attr('name','feature_image_'+slideCounter+'')  ;
 
 if(link){ 
    $('#slides .slider_link').last().val(link)  ;

 }
 if(file){
         $('#'+random_id).append('<input type="hidden" name="old_files['+slideCounter+']" value="'+file+'" />');
         $('#'+random_id).append('<input type="hidden" name="old_files_id['+slideCounter+']" value="'+file_id+'" />');
         $('#'+random_id+' .image-input-wrapper').css('background-image','url("'+base_url+"/assets/uploads/slides/"+file+'")');
         $('#'+random_id+' label.btn').remove();
 }
 
slideCounter++;

}

$(document).ready(function() {

    if($('#id').val()!=''){
  Main.fillUpdate($('#id').val());
       $('#card_label').html('Update Slide');

        $('#submit_btn_1').html(' Update & exit');
        $('#submit_btn_2').html('Update');
    }else{

        $('#card_label').html('Create Slide');
        $('#submit_btn_1').html(' Save & exit');
        $('#submit_btn_2').html('Save & Create New');
    }
    
  

    $('#name').keyup(function() {
        $('#slug').val(F.slugify($('#name').val()));
    });


 
 // var avatar1 = new KTImageInput('kt_image_1');
 



});