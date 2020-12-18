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
                field: 'id',
                title: '#',
                sortable: false,
                width: 20,
                type: 'number',
                selector: {
                    class: ''
                },
                textAlign: 'center',
            }, {
                field: 'feature_image',
                title: 'Image',
                template: function(row) {
                       if(Boolean(row.feature_image) ==false){row.feature_image='blank.png';}
                    return '<img class="img-responsive" style="width:50px" src="'+base_url+'/assets/uploads/stores/'+row.feature_image+'"  />';
                },
            }, {
                field: 'store_name',
                title: 'Store Name', 
            }, {
                field: 'last_update',
                title: 'Last Update',
                type: 'date',
                format: 'MM/DD/YYYY',
            }, {
                field: 'views_n_click',
                title: 'Views / Clicks',
            }, {
                field: 'coupons_n_deals',
                 title: 'Coupons / Deals',

                // // callback function support for column rendering
                // template: function(row) {
                //     var status = {
                //         1: {
                //             'title': 'Pending',
                //             'class': ' label-light-success'
                //         },
                //         2: {
                //             'title': 'Delivered',
                //             'class': ' label-light-danger'
                //         },
                //         3: {
                //             'title': 'Canceled',
                //             'class': ' label-light-primary'
                //         },
                //         4: {
                //             'title': 'Success',
                //             'class': ' label-light-success'
                //         },
                //         5: {
                //             'title': 'Info',
                //             'class': ' label-light-info'
                //         },
                //         6: {
                //             'title': 'Danger',
                //             'class': ' label-light-danger'
                //         },
                //         7: {
                //             'title': 'Warning',
                //             'class': ' label-light-warning'
                //         },
                //     };
                //     return '<span class="label font-weight-bold label-lg ' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                // },
            }, {
                field: 'type',
                title: 'type',
                autoHide: false,
                // visible:true,

                // callback function support for column rendering
                template: function(row) {
                    var status = {
                        'timing': {
                            'title': 'Timing',
                            'state': 'primary', 
                            'icon': 'flaticon-stopwatch',
                        },
                        'everytime': {
                            'title': 'Everytime',
                            'state': 'success',
                            'icon': 'flaticon-share',
                        }, 
                        'unknown': {
                            'title': 'Unknown',
                            'state': 'danger',
                            'icon': 'flaticon2-exclamation',
                        },
                    };
                    return ' <i class="'+ status[row.type].icon + ' icon-md   text-'+ status[row.type].state + ' "></i> <span class="font-weight-bold text-'+ status[row.type].state + '">' + status[row.type].title + '</span>';
                },
            }, {
                field: 'status',
                title: 'status',
                autoHide: false, 
                //'active','inactive','unknown','not_update','closed','error','sales_issue'
                template: function(row) {
                    var status = {
                        'inactive': {
                            'title': 'Inactive',
                            'state': 'warning'
                        },
                        'unknown': {
                            'title': 'Unknown',
                            'state': 'primary'
                        },
                        'active': {
                            'title': 'Active',
                            'state': 'success'
                        },
                        'not_update': {
                            'title': 'Not_Update',
                            'state': 'warning'
                        },
                        'closed': {
                            'title': 'Closed',
                            'state': 'danger'
                        },
                        'error': {
                            'title': 'Error',
                            'state': 'danger'
                        },
                        'sales_issue': {
                            'title': 'Sales_issue',
                            'state': 'danger'
                        },
                    };
                    return '<span class="label label-' + status[row.status].state 
                    + ' label-dot mr-2"></span><span class="font-weight-bold text-'
                     + status[row.status].state + '">' +
                        status[row.status].title + '</span>';
                },
            }, {
                field: 'Actions',
                title: 'Actions',
                sortable: false,
                width: 160,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    var action= '\
							<div class="dropdown dropdown-inline">\
								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-1" data-toggle="dropdown">\
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
                                        <li class="navi-item">\
                                            <a href="'+base_url+'admin/coupons/create?store_id='+row.id+'" class="navi-link">\
                                                <span class="navi-icon"><i class="la la-tags"></i></span>\
                                                <span class="navi-text">Add Coupon</span>\
                                            </a>\
                                        </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link" onclick="F.copyThis('+row.id+',\'copyStores\')">\
	                                            <span class="navi-icon"><i class="la la-copy"></i></span>\
	                                            <span class="navi-text">Copy</span>\
	                                        </a>\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link">\
	                                            <span class="navi-icon"><i class="la la-file-excel-o"></i></span>\
	                                            <span class="navi-text">Excel</span>\
	                                        </a>\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link">\
	                                            <span class="navi-icon"><i class="la la-file-text-o"></i></span>\
	                                            <span class="navi-text">CSV</span>\
	                                        </a>\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link">\
	                                            <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>\
	                                            <span class="navi-text">PDF</span>\
	                                        </a>\
	                                    </li>\
	                                </ul>\
							  	</div>\
							</div>';

                    var edit= '<a href="javascript:;"  onclick="Main.editThis('+row.id+')" class="btn btn-sm btn-clean btn-icon mr-1" title="Edit details">\
	                            <span class="svg-icon svg-icon-md">\
	                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
	                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
	                                        <rect x="0" y="0" width="24" height="24"/>\
	                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
	                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
	                                    </g>\
	                                </svg>\
	                            </span>\
							</a>';
                     var del= '<a href="javascript:;" onclick="Main.deleteThis('+row.id+')" class="btn btn-sm btn-clean btn-icon" title="Delete">\
	                            <span class="svg-icon svg-icon-md">\
	                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
	                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
	                                        <rect x="0" y="0" width="24" height="24"/>\
	                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
	                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
	                                    </g>\
	                                </svg>\
	                            </span>\
							</a>';
                    var copy= '<a href="javascript:;"  onclick="F.copyThis('+row.id+',\'copyStores\')" class="btn btn-sm btn-clean btn-icon mr-1" title="Edit details">\
                                <span class="svg-icon svg-icon-md">\
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                            <rect x="0" y="0" width="24" height="24"/>\
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>\
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>\
                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>\
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>\
                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>\
                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>\
                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>\
                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>\
                                        </g>\
                                    </svg>\
                                </span>\
                            </a>\
						';
                        var html="";
                        if (role=='admin') {
                            html+=action;
                            html+=edit;
                            html+=del; 
                            html+=copy; 
                        }else{
                              html+=edit;
                        }
                        return html;
                },
            }],
        });
if (role!='admin') {
    datatable.columns( 'type' ).visible( false );
    datatable.columns( 'views_n_click' ).visible( false );
}


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
                     url : api_base_url+"/getStores", 
                    
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


           
        },  deleteThis: function(id) { 


             Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {


                      jQuery.ajax({
                     type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/deleteStores/"+id,
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

           


           
        },  editThis: function(id) { 


             Swal.fire({
                title: "Are you sure?",
                text: "do you want to edit this",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, edit it!"
            }).then(function(result) {
                if (result.value) {
                    window.location.href=base_url+"admin/stores/edit/"+id;
                }
            }); 


           
        },
    };
}();

jQuery(document).ready(function() {
    Main.init();
 
    

});
