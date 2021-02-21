'use strict';
// Class definition


        var datatable ;

var Main = function() {
    // Private functions

    // demo initializer
    var init_table = function(dataJSONArray) {  
       // console.error(dataJSONArray);
      //  var dataJSONArray = JSON.parse();

         datatable = $('#kt_datatable').KTDatatable({
            //datasource definition
            data: {
                type: 'local',
                source: dataJSONArray,
                pageSize: 10,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                // height: 450, // datatable's body's fixed height
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [
            {
                field: 'id',
                title: '#',
                sortable: true,
                width: 20,
                type: 'number', 
                textAlign: 'center',
            },
             {
                field: 'name',
                title: 'title'
            },    {
                field: 'stores_counts',
                title: 'Stores / coupons',
                template:function(row) {
                    return "Stores:<b>"+row.store_count+"</b>  Coupons:<b>"+ row.coupon_count+"</b>";

                }
            },       
            {
                field: 'status',
                title: 'Status',    
                template: function(row) {
                    var label='';
                    switch(row.status){
                        case 'running':
                        label='label-light-primary';
                        break;
                          default:
                          label='label-light-warning';
                          break;

                    }
                    return '  <span class="label label-inline '+label+' font-weight-bold">'+row.status+'</span>';
                }
            }, 
             {
                field: 'Actions2',
                title: 'Actions2',
                sortable: false,
                width: 160,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    var li='';

               
             if (row.status!='running') {
                    li+='<li class="navi-item">\
                                    <a href="#" class="navi-link" onclick="Main.play('+row.id+')">\
                                        <span class="navi-icon"><i class="la la-play"></i></span>\
                                        <span class="navi-text">Play</span>\
                                    </a>\
                                </li>';

                            }else{
                    li+='<li class="navi-item">\
                                    <a href="#" class="navi-link" onclick="Main.pause('+row.id+')">\
                                        <span class="navi-icon"><i class="la la-print"></i></span>\
                                        <span class="navi-text">Pause</span>\
                                    </a>\
                                </li>';

                            }

                    
 

                    li+='<li class="navi-item">\
                        <a href="#" class="navi-link"  onclick="Main.resync('+row.id+')">\
                            <span class="navi-icon"><i class="la la-sync"></i></span>\
                            <span class="navi-text">Resync data </span>\
                        </a>\
                    </li>';
                    li+='<li class="navi-item">\
                        <a href="#" class="navi-link" onclick="Main.paste('+row.id+')">\
                            <span class="navi-icon"><i class="la la-paste"></i></span>\
                            <span class="navi-text">Paste to this site</span>\
                        </a>\
                    </li>';
                    li+='<li class="navi-item">\
                        <a href="#" class="navi-link" onclick="Main.details('+row.id+')">\
                            <span class="navi-icon"><i class="la la-stream"></i></span>\
                            <span class="navi-text">details</span>\
                        </a>\
                    </li>';
                    li+='<li class="navi-item">\
                        <a href="#" class="navi-link" onclick="Main.runAjaxBotPHP('+row.id+')">\
                            <span class="navi-icon"><i class="la la-space-shuttle"></i></span>\
                            <span class="navi-text">Bot Run at server side</span>\
                        </a>\
                    </li>';
                    li+='<li class="navi-item">\
                        <a href="#" class="navi-link" onclick="Main.botFetchStoresImages('+row.id+')">\
                            <span class="navi-icon"><i class="la la-image"></i></span>\
                            <span class="navi-text">Store Images Fetch</span>\
                        </a>\
                    </li>';

                            

                     return '\
                    <div class="dropdown dropdown-inline">\
                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">\
                            <span class="svg-icon svg-icon-md">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </a>\
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">\
                            <ul class="navi flex-column navi-hover py-2">\
                                <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">\
                                    Choose an action:\
                                </li>\
                                '+li+'\
                            </ul>\
                        </div>\
                    </div>\
                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                        <span class="svg-icon svg-icon-md">\
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                    <rect x="0" y="0" width="24" height="24"/>\
                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                </g>\
                            </svg>\
                        </span>\
                    </a>\
                ';

                },
            }



            ],
        });

        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
    };

    return {
        // Public functions
        init: function() { 

             jQuery.ajax({
                    type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getBots", 
                     success: function(data) { 
                        if(data.success === "yes") { 
                                   if( $('#kt_datatable').html()!=""){      $('#kt_datatable').KTDatatable().destroy();}
                      
                                          init_table(data.response);

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 


           
        },  pause: function(id) {  
             Swal.fire({
                title: "Are you want to pause bot ?",
                text: "Sure!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Pause it!"
            }).then(function(result) {
                if (result.value) { 

                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/pauseBot", 
                     success: function(data) { 
                        if(data.success === "yes") { 
                                       Main.init();

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 

              
                }
            });

           


           
        },  paste: function(id) {  
             Swal.fire({
                title: "Are you want to past this  bot data into this site? ?",
                text: "Sure!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Past bot data!"
            }).then(function(result) {
                if (result.value) { 

                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/pasteBotDataToSite", 
                     success: function(data) { 
                        if(data.success === "yes") { 
                                       Main.init();

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 

              
                }
            });

           


           
        },   botFetchStoresImages : function(id) {  
             Swal.fire({
                title: "Are you want to past this  bot data into this site? ?",
                text: "Sure!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Past bot data!"
            }).then(function(result) {
                if (result.value) { 

                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/botFetchStoresImages", 
                     success: function(data) { 
                        if(data.success === "yes") { 
                                       Main.init();

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 

              
                }
            });

           


           
        }, runAjaxBotPHP: function(id) {  
             Swal.fire({
                title: "Are you want to run this into server? ?",
                text: "it will hang or load your server . sure?!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes!"
            }).then(function(result) {
                if (result.value) { 

                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'limit':prompt('please enter rows limit . or skip this msg for all rows'),'offset':prompt('please enter Offset for limit '),'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/runAjaxBotPHP", 
                     success: function(data) { 
                        if(data.success === "yes") { 
                                       alert('done');

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 

              
                }
            });

           


           
        },  play: function(id) {  
             Swal.fire({
                title: "Are you want to run bot ?",
                text: "Sure!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Run it!"
            }).then(function(result) {
                if (result.value) { 

                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/runBot", 
                     success: function(data) { 
                        if(data.success === "yes") { 
                             Route.go('bot','details',id);
                                       //Main.init();

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 

              
                }
            });

           


           
        },    resync: function(id) {  
             Swal.fire({
                title: "Are you want to reset bot ?",
                text: "Sure!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, reset  it!"
            }).then(function(result) {

                if (result.value) { 

                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/resetBot", 
                     success: function(data) { 
                        if(data.success === "yes") { 
                             Route.go('bot','details',id);
                                      // Main.init();

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 

              
                }
            });

           


           
        },  details: function(id) {  
             Swal.fire({
                title: "open bot details?",
                text: "Sure!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, show details!"
            }).then(function(result) {
                if (result.value) { 
                    Route.go('bot','details',id);
                }
            });

           


           
        }, 
            };
}();

jQuery(document).ready(function() {
    Main.init();
 
    

});
