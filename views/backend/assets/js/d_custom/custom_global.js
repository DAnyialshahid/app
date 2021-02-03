var isAdminPanel=true;
 if ($('meta[name=extension_installed]').attr('content')=='0') {
    $('body').html('Please Install Extension'+
    ' <a href="'+configs.lastest_extention_url+'" >Click here </a>' );
 }else if (parseFloat($('meta[name=extension_installed]').attr('content')) < parseFloat(configs.lastest_extention_version)) {
    $('body').html('Please Update your  Extension new version is '+configs.lastest_extention_version+
    ' <a href="'+configs.lastest_extention_url+'" >Click here </a>' 

      );
 }
  
var F = function() {
    

    return {
        // Public functions
        // readURL: function(file,image) { 
 
        // file=$(file)[0];
        //   if (file.files && file.files[0]) {
        //     var reader = new FileReader();
        //     alert(e.target.result);
        //     reader.onload = function(e) {
        //       $(image).attr('src', e.target.result);
        //     }
            
        //     reader.readAsDataURL(file.files[0]); // convert to base64 string
        //   }
      

        // },
   pasteClipboardStart: function(data) { 

               Swal.fire({
                title: "Are you sure?",
                text: "do you want to paste this ",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, paste it!"
            }).then(function(result) {
  if (result.value) {
             jQuery.ajax({
                          type : "post",
                           data:data, headers: { 'x-cookie': cookie },  
                           dataType : "json",
                           url : api_base_url+"/pasteClipboard", 
                           success: function(res) {
 if (res.success=='yes') {
                                    Swal.fire({
                                        title: "Copied",
                                        text: data.type+" Copied Successfully do you want to clear clip board ?",
                                        icon: "success",
                                        showCancelButton: true,
                                        confirmButtonText: "Yes, Clear it!"
                                    }).then(function(result) {  
                                        if (result.value) { 
                                        F.deleteClipboardGroup(data.type)
                                      }
                                    });
                                       $('#modal').modal('hide');
                              
}else{

}

                            

                            }

                          });
           }else{

                   $('#modal').modal('hide');
           }
           });
   },
   pasteClipboard: function(text) { 


         jQuery.ajax({
                    type : "post",
                     data:{'token':token,'skip_current_site_item':'yes'}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getClipboard",
                     
                     success: function(data) { 
                        if(data.success === "yes") { 
                            var html="";
                      

                          $.each(data.response,function(i,v) {
                            if (i.toLowerCase()!=text.toLowerCase()) {return;}
                              var item="";
                           
                           $.each(v,function(ii,vv) {
                               item+='   <span class="text-muted font-weight-bold">  <span class="label label-primary label-inline font-weight-lighter mr-2 mb-1">'+vv.site_name+'</span> '+vv.row.name+' <i onclick="F.deleteCopy(\''+vv.rowid+'\')" class="fa fa-times-circle text-danger   icon-sm"></i></span>';
                            });
                                                    
                  

    html     +=' <!--begin: Item-->\
                    <div class="d-flex align-items-center flex-wrap mb-5">\
                        <div class="symbol symbol-50 symbol-light mr-5">\
                            <span class="symbol-label">\
                                <img src="'+backend_base_url+'/assets/media/clipboard/'+i+'.png" class="h-50 align-self-center" alt=""/>\
                            </span>\
                        </div>\
                        <div class="d-flex flex-column flex-grow-1 mr-2">\
                            <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">'+i+'\
                             <i onclick="F.deleteClipboardGroup(\''+i+'\')" class="far fa-times-circle text-danger   icon-sm"></i>\
                            </a>\
                            '+item+'\
                        </div>\
                        <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">Total :'+v.length+'</span>\
                    </div>\
                    <!--end: Item-->';
 



});

 
        F.m('Paste Stores',html,
          'Cancle', function(btn1) {
              return true;
          }
          ,'Paste Now',function(btn2) {

                F.pasteClipboardStart({'token':token,'type':text,'withCoupons':false});

          }
          ,'Paste With Coupons',function(btn2) {
              F.pasteClipboardStart({'token':token,'type':text,'withCoupons':true});
          }
          );



                        }
                        else {
                            Swal.fire("Error","Failed To Fill "+id,"error");
                        }
                     }
                }); 




   },
   m: function(title,body,button1_title,button1_click,button2_title,button2_click,button3_title=null,button3_click=null,callback=null) { 

  $('#modal .modal-title').html(title);
  $('#modal .modal-body').html(body);


  if (button3_title && button3_click) {  
  $('#modal .btn3').show();
  $('#modal .btn3').unbind('click')
  $('#modal .btn3').on('click',button3_click); 
  }else{
  $('#modal .btn3').hide();
  }


  $('#modal .btn1').html(button1_title);
  $('#modal .btn1').unbind('click')
  $('#modal .btn1').on('click',button1_click);

  $('#modal .btn2').html(button2_title); 
  $('#modal .btn2').unbind('click')
  $('#modal .btn2').on('click',button2_click);



  $('#modal').modal('show');
  // console.log(callback);
  if (callback) {callback();}

   }
,
   get: function(text) { 
      
            var url = new URL(window.location.href);
         return  url.searchParams.get(text);
            },   getAll: function(text) { 
      
            var url = new URL(window.location.href);
         return url.search.substr(1,9999);;
            },

        getClipboard: function(text) { 

  

         jQuery.ajax({
                    type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getClipboard",
                     
                     success: function(data) { 
                        if(data.success === "yes") { 
                            var html="";
                        
 
$.each(data.response,function(i,v) {
    var item="";
 
 $.each(v,function(ii,vv) {
     item+='  <span class="text-muted font-weight-bold"> <span class="label label-primary label-inline font-weight-lighter mr-2 mb-1">'+vv.site_name+'</span>  '+vv.row.name+' <i onclick="F.deleteCopy(\''+vv.rowid+'\')" class="fa fa-times-circle text-danger   icon-sm"></i></span>';
  });
                          
                  

    html     +=' <!--begin: Item-->\
                    <div class="d-flex align-items-center flex-wrap mb-5">\
                        <div class="symbol symbol-50 symbol-light mr-5">\
                            <span class="symbol-label">\
                                <img src="'+backend_base_url+'/assets/media/clipboard/'+i+'.png" class="h-50 align-self-center" alt=""/>\
                            </span>\
                        </div>\
                        <div class="d-flex flex-column flex-grow-1 mr-2">\
                            <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">'+i+'\
                             <i onclick="F.deleteClipboardGroup(\''+i+'\')" class="far fa-times-circle text-danger   icon-sm"></i>\
                            </a>\
                            '+item+'\
                        </div>\
                        <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">Total :'+v.length+'</span>\
                    </div>\
                    <!--end: Item-->';
 



});

       $('#clipboard').html(html);    
             
                                /*



  <?php foreach (getClipboard() as $key=>$items): ?>
                    <!--begin: Item-->
                    <div class="d-flex align-items-center flex-wrap mb-5">
                        <div class="symbol symbol-50 symbol-light mr-5">
                            <span class="symbol-label">
                                <img src="<?=backend_base_url?>/assets/media/clipboard/<?=$key?>.png" class="h-50 align-self-center" alt=""/>
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1"><?=strtoupper($key)?></a>
                        <?php foreach ($items as  $item): ?>
                            <span class="text-muted font-weight-bold"><?=$item['row']->name?></span>
                        <?php endforeach;?>
                        </div>
                        <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">Total : <?=count($items)?></span>
                    </div>
                    <!--end: Item-->
 
                    <?php endforeach;?>


*/

                        }
                        else {
                            Swal.fire("Error","Failed To Fill "+id,"error");
                        }
                     }
                }); 



        },
        gotoNotification: function(notification) {
console.log(notification);
        },
        getNotifications: function(text) { 

  

         jQuery.ajax({
                    type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getIntervals",
                     
                     success: function(data) { 
                        if(data.success === "yes") { 
                            var html="";
                        
                                var n= $('#notifications_panel');
                                        n.find('.count').html(data.response.notifications.length);
                                      var items=  n.find('.notification_items');
                                      if (!$('#notifications_panel .dropdown-menu-lg').hasClass('show')) {
                                            items.empty();
                                      }
                                    
                            $.each(data.response.notifications.reverse(),function(i,v) {
 
                                 if ((v.status=='unread' || v.status=='notified' ) && (!$('#notifications_panel .dropdown-menu-lg').hasClass('show'))) { 

                                  if (v.type=='success') {
                                    v.type='la la-check text-success';
                                  }else if (v.type=='info') {
                                    v.type='la la-sticky-note-o text-warning';
                                  }else if (v.type=='warning') {
                                    v.type='la la-info text-info';
                                  }else if (v.type=='error') {
                                    v.type='la la-warning text-danger';
                                  } 
                          
                             var item=' <!--begin::Item-->\
                                                                     <a href="#" class="navi-item">\
                                                                         <div class="navi-link">\
                                                                             <div class="navi-icon mr-2">\
                                                                                 <i class="'+v.type+'"></i>\
                                                                             </div>\
                                                                             <div class="navi-text">\
                                                                                 <div class="font-weight-bold">\
                                                                                    '+v.title+'\
                                                                                 </div>\
                                                                                 <div class="text-muted">\
                                                                                     '+moment(v.date).fromNow()+'\
                                                                                 </div>\
                                                                             </div>\
                                                                         </div>\
                                                                     </a>\
                                                                     <!--end::Item-->';


                                   items.append(item);
                                 }

                              if (v.status=='unread') { 

                                if ( v.progress_bar=='1' || v.progress_bar==1) {
                                  v.progress_bar=true;
                                }else{
                                  v.progress_bar=false;
                                }
                                if ( v.close_button=='1' || v.close_button==1) {
                                  v.close_button=true;
                                }else{
                                  v.close_button=false;
                                }
                                
                               toastr.options = {
                                  "closeButton": v.close_button,
                                  "debug": false,
                                  "newestOnTop": false,
                                  "progressBar":  v.progress_bar,
                                  "positionClass": v.position,
                                  "preventDuplicates": false,
                                  "onclick": function( ) {

                                        F.gotoNotification(v);
                                  },
                                  "showDuration": "300",
                                  "hideDuration": "1000",
                                  "timeOut": "5000",
                                  "extendedTimeOut": "1000",
                                  "showEasing": "swing",
                                  "hideEasing": "linear",
                                  "showMethod": "fadeIn",
                                  "hideMethod": "fadeOut"
                                }; 
                                  if (v.type=='success') { toastr.success(v.title);}
                                  if (v.type=='info') { toastr.info(v.title);}
                                  if (v.type=='warning') { toastr.warning(v.title);}
                                  if (v.type=='error') { toastr.error(v.title);}
                                }
                             
                             
                             
                            });

                                

                        }
                        else {
                            Swal.fire("Error","Failed To Fill "+id,"error");
                        }
                     }
                }); 



        },
        slugify: function(text) { 

  return text.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text

        },
        submitForm: function(id,url,title,redirect_route=null) { 
  
              KTApp.blockPage({overlayColor: '#000000', state: 'danger', message: 'Please wait...', size: 'lg'}); 
              // var datastring = $(id).serialize();
              var datastring =  new FormData($(id)[0]) ;
                    $.ajax({
                        type: "POST",
                        url: api_base_url+"/"+url,
                         headers: { 'x-cookie': cookie },  
                        data: datastring,
                        dataType: "json",
                          contentType: false,
                         cache: false,
                         processData:false,
                        success: function(data) {
                              KTApp.unblockPage();
                            if(data.success=='yes'){
                                     Swal.fire("Good job!", title, "success");
                                     if(redirect_route){

                                       // window.location.href=redirect_url;
                                        Route.go(redirect_route.path1,redirect_route.path2); 
                                     }
                            }else{
                                     Swal.fire("Failed!", data.response, "error");

                            } 

                        },
                        error: function(e,x,c) { 
                              KTApp.unblockPage();
                                  Swal.fire("Failed!", "error handling here "+c, "error");
                        }
                    });

        },
           // Public functions
        fillSelectAjax: function(id,url,selected_id='',extraOptions=[],callback=null) {   
      KTApp.block('.form-group:has('+id+')',{ state: 'danger', message: 'Data Loading...', size: 'lg'}); 
         jQuery.ajax({
                   type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/"+url,
                     cache : false,
                    
                     success: function(data) { 
                        if(data.success === "yes") { 
                            var html="";

                        F.fillSelect(id,data,selected_id,extraOptions,callback);
                                
                        KTApp.unblock('.form-group:has('+id+')');
                        }
                        else {
                         KTApp.unblock('.form-group:has('+id+')');
                            Swal.fire("Error","Failed To Fill "+id,"error");
                        }
                     }
                }); 

        }, // Public functions
        fillSelect: function(id,data,selected_id='',extraOptions=[],callback=null) {    

                            var html="";

                                        $(id).empty(); 

                                         $(extraOptions).each(function(i,v){ 
                                                   html+="<option   '"+v.selected+"' value='"+v.value+"' >"+v.title+"</option>" ;
                                            });

                                            $(data.response).each(function(i,v){
                                                    var selected="";

                                                    if(v.id==selected_id){selected="selected";}
                                                   html+="<option "+selected+" value='"+v.id+"' >"+v.name+"</option>"

                                            });
                                        $(id).html(html);
                                        $(id).selectpicker('refresh');

                            
if (callback) { callback();}

                 

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
          copyThis: function(id,type) {  


                
            F.saveCopy(id,type);
           


           
        } , copySelected: function(type) {  

            var selectedCheckboxes=$('.datatable-body td[data-field=id] input[type=checkbox]:checked');
            var checkbox_ids=[];

            selectedCheckboxes.each(function(i,v) {
            checkbox_ids.push($(v).val());
            });
 
            F.saveCopy(checkbox_ids.join(','),type);
           
        }, saveCopy: function(ids,type) {  

               Swal.fire({
                title: "Are you sure?",
                text: "do you want to copy this ",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, copy it!"
            }).then(function(result) {
                if (result.value) {

                      jQuery.ajax({
                        type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                         dataType : "json",
                         url : api_base_url+"/"+type+"?ids="+ids,
                         success: function(data) { 
                            if(data.success === "yes") {  
                                            Swal.fire(
                                                "Copied!",
                                                "Copy  Successfully",
                                                "success"
                                            ) 

                                       F.getClipboard();
                                       setTimeout(function(){
                                                   $('#kt_quick_panel_toggle').click();

                                       },2000);
                               
                            }
                            else {
                              Swal.fire('Failed To copy',data.response,'error');
                            }
                         }
                    });   


                }
            });
                
           
        }, deleteCopy: function(id) {  

               Swal.fire({
                title: "Are you sure?",
                text: "do you want to delete item from clipboard ",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {

                      jQuery.ajax({
                        type : "post",
                     data:{'token':token,'skip_current_site_item':'yes'}, headers: { 'x-cookie': cookie },  
                     
                         dataType : "json",
                         url : api_base_url+"/deleteClipboard/"+id,
                         success: function(data) { 
                            if(data.success === "yes") {  
                                  toastr.options = {
                                      "closeButton": false,
                                      "debug": false,
                                      "newestOnTop": false,
                                      "progressBar": false,
                                      "positionClass": "toast-top-right",
                                      "preventDuplicates": false,
                                      "onclick": null,
                                      "showDuration": "300",
                                      "hideDuration": "1000",
                                      "timeOut": "5000",
                                      "extendedTimeOut": "1000",
                                      "showEasing": "swing",
                                      "hideEasing": "linear",
                                      "showMethod": "fadeIn",
                                      "hideMethod": "fadeOut"
                                    };

                                    toastr.success("Clipboard item deleted!");

                                       F.getClipboard();
                                     
                               
                            }
                            else {
                              Swal.fire('Failed To copy',data.response,'error');
                            }
                         }
                    });   


                }
            });
                
           
        },deleteClipboardGroup: function(type) {  

               Swal.fire({
                title: "Are you sure?",
                text: "do you want to delete "+type+" from clipboard ",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {

                      jQuery.ajax({
                        type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                         dataType : "json",
                         url : api_base_url+"/clearClipboardByType/"+type,
                         success: function(data) { 
                            if(data.success === "yes") {  
                                  toastr.options = {
                                      "closeButton": false,
                                      "debug": false,
                                      "newestOnTop": false,
                                      "progressBar": false,
                                      "positionClass": "toast-top-right",
                                      "preventDuplicates": false,
                                      "onclick": null,
                                      "showDuration": "300",
                                      "hideDuration": "1000",
                                      "timeOut": "5000",
                                      "extendedTimeOut": "1000",
                                      "showEasing": "swing",
                                      "hideEasing": "linear",
                                      "showMethod": "fadeIn",
                                      "hideMethod": "fadeOut"
                                    };

                                    toastr.success("Clipboard Group deleted!");

                                       F.getClipboard();
                                     
                               
                            }
                            else {
                              Swal.fire('Failed To copy',data.response,'error');
                            }
                         }
                    });   


                }
            });
                
           
        },
    };
}();
 

$(document).ready(function(){


  F.getNotifications();
  setInterval(function() {
    F.getNotifications();
  },20000);

       F.getClipboard();
$('#sites_list').selectpicker();


$('.menu-subnav .menu-item').click(function() {

 
  $('.menu-item').removeClass('menu-item-active');
  $(this).addClass('menu-item-active');
  $(this).parent().closest('.menu-item').addClass('menu-item-active');;

});


$('#sites_list').change(function() {
    jQuery.ajax({
                     type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/changeSite/"+$(this).val(),
                  
                     success: function(data) { 
                        if(data.success === "yes") { 
                              Swal.fire("Site Changed!", 'Success', "success");
                              Route.go('dashboard','');
                                 //  window.location.href="";
                        }
                        else {
                            alert("Error");
                        }
                     }
                }); 
  
});


});