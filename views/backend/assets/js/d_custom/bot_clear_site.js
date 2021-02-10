'use strict';
// Class definition


        var datatable ;

var Main = function() {
    // Private functions

    // demo initializer
    var init_table = function(dataJSONArray) {  
      //  var dataJSONArray = JSON.parse();

         datatable = $('#kt_datatable').KTDatatable({
            // datasource definition
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
            columns: [{
                field: 'name',
                title: 'Site',  
            },   
             {
                field: 'total_stores',
                title: 'Total Stores', 
            }, {
                field: 'total_coupons',
                title: 'Total Coupons',  
            }, {
                field: 'Actions',
                title: 'Actions',
                sortable: false,
                width: 160,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    return '\
                            <div class="dropdown dropdown-inline">\
                                <a href="javascript:;" title="Clean All Site" onclick="Main.cleanthissite('+row.id+')"  class="btn btn-sm btn-clean btn-icon mr-1" data-toggle="dropdown">\
                                   </i><i class="la la-trash label-danger"></i>\
                                </a>\
                                 <a href="javascript:;" title="Insert Dummy Categories" onclick="Main.insertDummyCategories('+row.id+')"  class="btn btn-sm btn-clean btn-icon mr-1" data-toggle="dropdown">\
                                   </i><i class="la la-trash label-danger"></i>\
                                </a>\
                            </div>\
                        ';
                },
            }],
        });
 
    };

    return {
        // Public functions
        init: function() { 
 KTApp.blockPage({overlayColor: '#000000', state: 'danger', message: 'Loading Page...', size: 'lg'}); 
  setTimeout(function() {
       KTApp.unblockPage();
     },25000);
             jQuery.ajax({
                    type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getSitesForBot", 
                     success: function(data) { 
                        if(data.success === "yes") { 
                                   KTApp.unblockPage();
                                   if( $('#kt_datatable').html()!=""){      
                                    $('#kt_datatable').KTDatatable().destroy();
                                        }
                      
                                          init_table(data.response);

                        }
                        else {  
                         KTApp.unblockPage();
                            alert("Folder not created");
                        }
                     }
                }); 


           
        },  cleanthissite: function(id) { 



             Swal.fire({
                title: "Want you want to delete?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                cancelButtonText: "All Site data ",
                confirmButtonText: "Just bot data"
            }).then(function(q) {
var delete_all_data=!q.value;


             Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, clean it Coupons and stores! "
            }).then(function(result) {
                if (result.value) {


                      jQuery.ajax({
                    type : "post",
                     data:{'delete_all_data':delete_all_data,'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/deleteSiteStoresAndCouponsByBot/"+id, 
                     success: function(data) { 
                        if(data.success === "yes") {  
                                        Swal.fire(
                                            "Deleted!",
                                            "Deleted  Successfully",
                                            "success"
                                        ) 
                                         Main.init();

                        }
                        else {
                          Swal.fire('Failed To Delete',data.response,'error');
                        }
                     }
                }); 

                }
            });

      });


           
        }, insertDummyCategories: function(id) {  
             Swal.fire({
                title: "Want you want to delete old Categories & Insert Dummy?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                cancelButtonText: "Cancle",
                confirmButtonText: "Delete and add dummy"
            }).then(function(result) {

                if (result.value) { 

                      jQuery.ajax({
                    type : "post",
                     data:{'id':id,'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/insertDummyCategories/"+id, 
                     success: function(data) { 
                        if(data.success === "yes") {  
                                   Swal.fire(
                                            "Deleted and inserted !",
                                            "Dummy Categories Added  Successfully",
                                            "success"
                                        ) 

                        }
                        else {
                          Swal.fire('Failed To Delete',data.response,'error');
                        }
                     }
                }); 

                }
            });
 


           
        },  
    };
}();

jQuery(document).ready(function() {
    Main.init();
 
    

});
