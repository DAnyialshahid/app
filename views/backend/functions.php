<?php

// //$this->session->userdata('user_active_site')
//   function getSites($context){ 
//       if($context->session->userdata('role')=='admin'){

//          return    $context->db->get_where('sites',[ 
//                 'company_id'=>$context->session->userdata('user_company_id'),
//           ])->result();


//       }else{ 
//              return    $context->db->get_where('sites',[ 
//                      'company_id'=>$context->session->userdata('user_company_id'),
//                      'id'=>$context->session->userdata('user_site_id'),
//                   ])->result();

//       }
 
//   }  



  // function getUserProfile(){ 
 

  //   $context = & get_instance(); 
  //   return 
  //   (object) [
  //   'role'=>$context->session->userdata('user_role'),
  //   'name'=>$context->session->userdata('row')->first_name ." ". $context->session->userdata('row')->last_name,
  //   'email'=>$context->session->userdata('row')->email,
  //   'feature_image'=>$context->session->userdata('row')->feature_image,
  //   'row'=>$context->session->userdata('row'),

  //   ]; 
  // }  





  // function getCategories($context){ 


  //   return    $context->db->get_where('categories',[ 
  //               'site_id'=>$context->session->userdata('user_active_site'),
  //         ])->result();


     
 
  // }
 
?>