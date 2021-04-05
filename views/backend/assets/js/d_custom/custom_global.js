var isAdminPanel=true;

  
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
   isMobile: function(data) { 
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);

  return check;

   },
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
                                                     F.deleteClipboardGroup(data.type);
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


  setTimeout(function() {
    F.getNotifications();
  },20000);


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
                                    v.type1='la la-check text-success';
                                  }else if (v.type=='info') {
                                    v.type1='la la-sticky-note-o text-warning';
                                  }else if (v.type=='warning') {
                                    v.type1='la la-info text-info';
                                  }else if (v.type=='error') {
                                    v.type1='la la-warning text-danger';
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

console.log(v.type);
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

var extension=$('meta[name=extension_installed]').attr('content');

if (!F.isMobile()) {
    alert(navigator.userAgent);
    return 1;
   if (extension=='0') {
   
    alert('please install extention to continue !');
    window.location.href=base_url+'extension';

      // $('body').html('Please Install Extension'+
      // ' <a href="'+configs.lastest_extention_url+'" >Click here </a>' );

   }else if (parseFloat(extension) < parseFloat(configs.lastest_extention_version)) {
       alert('please update your  extention to continue !');
      window.location.href=base_url+'extension/index.php?update=true';

      // $('body').html('Please Update your  Extension new version is '+configs.lastest_extention_version+
      // ' <a href="'+configs.lastest_extention_url+'" >Click here </a>' 

      //   );
   }
}


  F.getNotifications();



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