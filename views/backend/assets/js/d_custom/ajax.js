

var Ajax = function() {
  return {
      loadPage:function(title,page,js,id) {
      $('title').html("Loading:".title);
   KTApp.blockPage({overlayColor: '#000000', state: 'danger', message: 'Loading Page...', size: 'lg'}); 
   setTimeout(function() {
       KTApp.unblockPage();
     },9000);
          var idSlug='';
          if ((typeof id !=='undefined') && (typeof id !='object') ) {idSlug='/'+id;} 

                 $.ajax({
                     type : "post",
                     data:{'token':token}, headers: { 'x-cookie': cookie },  
 

          url: api_base_url2+'admin/load'+idSlug+'?page_name='+page,
  
                  success:  function( data, textStatus, jqxhr ) {
                    $('title').html("Rendering:".title);
                     $('#ajax_based_content').html(data);
                 
                     if ((typeof id !=='undefined') && (typeof id =='object') ) {
                   
                           for(i in id){ 
                           $('#ajax_based_content').append('<input type="hidden" id="'+i+'" value="'+id[i]+'" />');
                
                           }
                    }else if(typeof id !=='undefined'){
                           $('#ajax_based_content #id').val(id);
                    }

                      $.ajax({
                      url: api_base_url2+'application/views/backend/assets/js/d_custom/'+js+'.js',
                      dataType: "script",
                    headers: { 'x-cookie': cookie },   
                              success:  function( data, textStatus, jqxhr ) {  
                                 $('title').html(title); 
                                  KTApp.unblockPage();
                              }

                        });


                  }, 
                  fail:  function( data, textStatus, jqxhr ) {
                      Route.E_404(title,page);
                       KTApp.unblockPage();

                  }


            });

          
 

           

         

      }

  };
}();

 

var Route = function() {
    

    return {
         E_404: function(page,type,id='') { 
          console.error('Destination Not Found Page:('+page+") Type:("+type+') .');
          },
         go: function(page,type,id='') {  


          if (page=='dashboard' || page=='') {
                  Ajax.loadPage('Dashboard','dashboard','dashboard'); 
          }else if (page=='stores') {
                if (type=='list') {
                  Ajax.loadPage('Store List','sections/stores_list','stores_list'); 
                }else if (type=='create') {
                   Ajax.loadPage('New Store','sections/stores_create','stores_create');  
                }else if (type=='edit') {
                   Ajax.loadPage('Edit Store','sections/stores_create','stores_create',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='categories') {
                if (type=='list') {
                  Ajax.loadPage('Categories List','sections/categories_list','categories_list'); 
                }else if (type=='create') {
                   Ajax.loadPage('New Category','sections/categories_create','categories_create');  
                }else if (type=='edit') {
                   Ajax.loadPage('Edit Category','sections/categories_create','categories_create',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='categories_group') {
                if (type=='list') {
                  Ajax.loadPage('Categories Group List','sections/categories_group_list','categories_group_list'); 
                }else if (type=='create') {
                   Ajax.loadPage('New Category Group','sections/categories_group_create','categories_group_create');  
                }else if (type=='edit') {
                   Ajax.loadPage('Edit Category Group','sections/categories_group_create','categories_group_create',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='sliders') {
                if (type=='list') {
                  Ajax.loadPage('Sliders List','sections/sliders_list','sliders_list'); 
                }else if (type=='create') {
                   Ajax.loadPage('New Slider','sections/sliders_create','sliders_create');  
                }else if (type=='edit') {
                   Ajax.loadPage('Edit Slider','sections/sliders_create','sliders_create',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='coupons') {
                if (type=='list') {
                  Ajax.loadPage('Coupons List','sections/coupons_list','coupons_list'); 
                }else if (type=='create') {
                   Ajax.loadPage('Create New Coupon','sections/coupons_create','coupons_create',id);  
                }else if (type=='edit') {
                   Ajax.loadPage('Edit Coupon','sections/coupons_create','coupons_create',id);  
                }else if (type=='sort') {
                   Ajax.loadPage('Edit Coupon','sections/coupons_sort','coupons_sort',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='users') {
                if (type=='list') {
                  Ajax.loadPage('Users List','sections/users_list','users_list'); 
                }else if (type=='create') {
                   Ajax.loadPage('New User','sections/users_create','users_create');  
                }else if (type=='edit') {
                   Ajax.loadPage('Edit User','sections/users_create','users_create',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='pages') {
                if (type=='list') {
                  Ajax.loadPage('Pages List','sections/pages_list','pages_list'); 
                }else if (type=='create') {
                   Ajax.loadPage('New Page','sections/pages_create','pages_create');  
                }else if (type=='edit') {
                   Ajax.loadPage('Edit Page','sections/pages_create','pages_create',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='bot') {
                if (type=='clear_site') {
                  Ajax.loadPage('Clear Site Data','sections/bot_clear_site','bot_clear_site'); 
                }else if (type=='page') {
                   Ajax.loadPage('Bot','sections/bot_page','bot_page');  
                }else if (type=='details') {
                   Ajax.loadPage('Bot','sections/bot_details','bot_details',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='olx') {
                if (type=='clear_site') {
                  // Ajax.loadPage('Clear Site Data','sections/bot_clear_site','bot_clear_site'); 
                }else if (type=='page') {
                   Ajax.loadPage('OLX home','sections/olx/olx_page','olx/olx_page');  
                }else if (type=='details') {
                   // Ajax.loadPage('Bot','sections/bot_details','bot_details',id);  
                }else{
                  Route.E_404(page,type);
                }
          }else if (page=='config') {
                if (type=='site' || type=='') {
                  Ajax.loadPage('Configurations','sections/config/site_config','/config/site_config'); 
                }else{
                  Route.E_404(page,type);
                }
          }else  {
           Route.E_404(page,type);

          }



          return false;
         } 
    };
}();



$(document).ready(function(){

    Route.go('dashboard','');
   // Ajax.loadPage('sections/stores_create','stores_create');
});