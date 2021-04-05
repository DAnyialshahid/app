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
              
            },
             {
                field: 'name',
                title: 'title',
                  autoHide: false,
            },   {
                field: 'last_run',
                title: 'Last Run'
            },      {
                field: 'status',
                title: 'Status',    
                template: function(row) {
                    var label='';
                    switch(row.status){
                            case 'completed':
                            label='label-light-primary';
                            break;
                          default:
                          label='label-light-warning';
                          break;

                    }
                    return '  <span id="store_'+row.id+'"> <span class="label label-inline '+label+' font-weight-bold">'+row.status+'</span> </span>';
                }
            }, {
                field: 'Actions',
                title: 'Actions',
                sortable: false,
                width: 160,
                overflow: 'visible',
                autoHide: true,
                template: function(row) {
                    var button='';
                  
                    return '<div class="btn-group" role="group" aria-label="First group">\
                        <button type="button"  onclick="Main.resync('+row.id+')" class="resync btn btn-info btn-icon"><i class="la la-sync"></i></button>\
                     </div>';
                },
            }],
        });
 
    };

    return {
        // Public functions
        init: function() { 

             jQuery.ajax({
                    type : "post",
                     data:{'id':$('#id').val(),'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/getBotDetails", 
                     success: function(data) { 

                        if(data.success === "yes") { 
                                   if( $('#kt_datatable').html()!=""){      $('#kt_datatable').KTDatatable().destroy();}
                                            
                                          init_table(data.response.stores);
                                          if ( data.response.bot.status=='running') {
                                console.log('bot is running');
                                                Main.runBot(data.response.bot,data.response.stores);
                                          }

                        }
                        else {
                            alert("Folder not created");
                        }
                     }
                }); 


           
        },  
runBot: function(bot,stores) { 

var last_position=bot.last_position;

for(var i in stores){
    var store=stores[i];
}

 Main.runAjaxBot(stores,bot.id,last_position);
           


           
        }, 

 runAjaxBot: function(stores,bot_id,last_position) { 
$('#store_'+last_position).html('<button type="button" class="btn btn-outline-danger spinner spinner-darker-danger spinner-left mr-3"> Fetching.. </button>');
 jQuery.ajax({
                     type : "post",
                     data:{'last_position':last_position,'token':token}, headers: { 'x-cookie': cookie },  
                     dataType : "json",
                     url : api_base_url+"/runAjaxBot/"+bot_id+"/"+last_position,
                     success: function(data) { 
                        if(data.success === "yes") { 
                            var new_last_position=data.response.last_position;
                            $('#store_'+last_position).html('<a href="#" class="btn btn-icon btn-light-success pulse pulse-success mr-5"><i class="la la-check"></i> <span class="pulse-ring"></span> </a>');
                              //  $('#store_'+last_position).html('Completed');
                              if (new_last_position!='completed') {
                                Main.runAjaxBot(stores,bot_id,new_last_position);
                            }
                    
                        }else{
                          
                          Swal.fire('Failed To Run',data.response,'error');

                        }
                     }
                }); 

         
           


           
        }, 


            };
}();

jQuery(document).ready(function() {

   
 if($('#id').val()!=''){     Main.init(); }

   

 
    

});
