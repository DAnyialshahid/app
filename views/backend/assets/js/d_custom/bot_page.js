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
                field: 'name',
                title: 'title'
            },   {
                field: 'last_run',
                title: 'Last Run'
            },   {
                field: 'count',
                title: 'Count stores/coupons'
            },    {
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
            }, {
                field: 'Actions',
                title: 'Actions',
                sortable: false,
                width: 160,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    var button='';
                    if (row.status!='running') {
                        button='<button type="button"  onclick="Main.play('+row.id+')" class="play btn btn-primary  btn-icon"><i class="la la-play"></i></button>';
                    }else{
                        button='<button type="button"  onclick="Main.pause('+row.id+')" class="pause btn btn-success btn-icon"><i class="la la-pause"></i></button> ';
                    }
                    return '<div class="btn-group" role="group" aria-label="First group">'+button+
                        '<button type="button"  onclick="Main.resync('+row.id+')" class="resync btn btn-info btn-icon"><i class="la la-sync"></i></button>\
                        <button type="button"  onclick="Main.paste('+row.id+')" class="paste btn btn-warning btn-icon"><i class="la la-file-text-o"></i></button>\
                        <button type="button"  onclick="Main.details('+row.id+')" class="details btn btn-danger btn-icon"><i class="la la-stream"></i></button>\
                    </div>';
                },
            }],
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
