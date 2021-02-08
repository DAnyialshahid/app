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
            }, 
             {
                field: 'hasPhone',
                title: 'Phone Verifired',    
                template: function(row) {
                    var label='';
                    switch(row.hasPhone){
                        case '1':
                        label='label-light-primary';
                        row.hasPhone='YES';
                        break;
                          default:
                          label='label-light-danger';
                             row.hasPhone='NO';
                          break;

                    }
                    return '  <span class="label label-inline '+label+' font-weight-bold">'+row.hasPhone+'</span>';
                }
            }, {
                field: 'status',
                title: 'Status',    
                template: function(row) {
                    var label='';
                    switch(row.status){
                        case 'active':
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
                        button='<button type="button"  onclick="Main.post_ads('+row.id+')" class="play btn btn-primary  btn-icon"><i class="la la-play"></i></button>';
                    }else{
                        button='<button type="button"  onclick="Main.pause('+row.id+')" class="pause btn btn-success btn-icon"><i class="la la-pause"></i></button> ';
                    }
                    var sign_in= '<div class="btn-group" role="group" aria-label="First group">\
                        <button type="button"  onclick="Main.resync('+row.id+')" class="resync btn btn-info btn-icon"><i class="la la-sync"></i></button>'+button+'\
                        <button type="button"  onclick="Main.post_ads('+row.id+')" class="post_ads btn btn-warning btn-icon"><i class="la la-file-text-o"></i></button>\
                        <button type="button"  onclick="Main.b('+row.id+')" class="details btn btn-primary btn-icon"><i class="la la-stream"></i></button>\
                        <button type="button"  onclick="Main.a('+row.id+')" class="details btn btn-danger btn-icon"><i class="la la-stream"></i></button>\
                    </div>';
                     var sign_up= '<div class="btn-group" role="group" aria-label="First group">\
                        <button type="button"  onclick="Main.signup('+row.id+')" class="resync btn btn-info btn-icon"><i class="la la-user"></i></button>\
                        <button type="button"  onclick="Main.sign_up_verifiy_pin('+row.id+')" class="pincode btn btn-info btn-icon"><i class="la la-code"></i></button>\
                    </div>';
                        if (row.type=='sign_up') {
                            return sign_up;
                        }else{
                            return sign_in;
                        }





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
                     url : api_base_url+"/getOlxAccounts", 
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


           
        }, resync: function(id) {  
             Swal.fire({
                title: "Are you want to reauth account ?",
                text: "Sure!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, resign  it!"
            }).then(function(result) {
                if (result.value) { 
                      KTApp.block('tr:has([data-field="id"][aria-label="'+id+'"])',{ state: 'danger', message: 'Signing ...', size: 'lg'}); 
                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'sensor_data':getData(),'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/olx_auth", 
                     success: function(data) {
                     KTApp.unblock('tr:has([data-field="id"][aria-label="'+id+'"])'); 
                        if(data.success === "yes") { 
                            // Route.go('olx','details',id);
                              Swal.fire(
                                            "Account Sign Successfully !",
                                            'Now you can post your ads',
                                            "success"
                                        ) ;
                                       Main.init();

                        }
                        else {
                             Swal.fire(
                                            "Error!",
                                            data.response,
                                            "error"
                                        ) ;
                        }
                     }
                }); 

              
                }
            });

           


           
        },     signup: function(id) {  
             Swal.fire({
                title: "Are you want Register Account ?",
                text: "Sure!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Register Now!"
            }).then(function(result) {
                if (result.value) { 
                      KTApp.block('tr:has([data-field="id"][aria-label="'+id+'"])',{ state: 'danger', message: 'Signing Up ...', size: 'lg'}); 
                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'sensor_data':getData(),'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/olx_sign_up", 
                     success: function(data) {
                     KTApp.unblock('tr:has([data-field="id"][aria-label="'+id+'"])'); 
                        if(data.success === "yes") { 
                             Swal.fire(
                                            "Sign up Create Account !",
                                            'Next Step Just Need Pin ',
                                            "success"
                                        ) ;
                             setTimeout(function() {
                                Main.sign_up_verifiy_pin();
                             },2000);

                        }
                        else {
                            Swal.fire(
                                            "Error!",
                                            data.response,
                                            "error"
                                        ) ;
                        }
                     }
                }); 

              
                }
            });

           


           
        },post_ads: function(id) {  
             Swal.fire({
                title: "Are you want Post ad in this account?",
                text: "Sure!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Post Now!"
            }).then(function(result) {
                if (result.value) { 
                      KTApp.block('tr:has([data-field="id"][aria-label="'+id+'"])',{ state: 'danger', message: 'Posting Ads ...', size: 'lg'}); 
                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'sensor_data':getData(),'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/olx_post_ads", 
                     success: function(data) {
                     KTApp.unblock('tr:has([data-field="id"][aria-label="'+id+'"])'); 
                        if(data.success === "yes") { 
                             Swal.fire(
                                            "Successfully!",
                                            data.response,
                                            "success"
                                        ) ;

                        }
                        else {
                            Swal.fire(
                                            "Error!",
                                            data.response,
                                            "error"
                                        ) ;
                        }
                     }
                }); 

              
                }
            });

           


           
        }, sign_up_verifiy_pin: function(id) {  
                var pincode=prompt('Please Enter Verification Pin Code');
              if (pincode) {

                KTApp.block('tr:has([data-field="id"][aria-label="'+id+'"])',{ state: 'danger', message: 'Pin Verifiying   ...', size: 'lg'}); 

                     jQuery.ajax({
                    type : "post",
                     data:{'id':id,'sensor_data':getData(),'pin':pincode,'token':token}, 
                     headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/olx_sign_up_verifiy_pin", 
                     success: function(data) {
                     KTApp.unblock('tr:has([data-field="id"][aria-label="'+id+'"])'); 
                        if(data.success === "yes") { 
                               Swal.fire(
                                            "Sign up success!",
                                            'Pin Verifired Successfully ',
                                            "success"
                                        ) ;
                               Main.init();
                        }
                        else {
                             Swal.fire(
                                            "Error!",
                                            data.response,
                                            "error"
                                        ) ;
                        }
                     }
                }); 

              
       }
           


           
        },  
            };
}();

jQuery(document).ready(function() {
    Main.init();
 
    

});
