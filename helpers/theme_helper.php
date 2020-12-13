<?php 
 declare(strict_types=1);
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (isset(getallheaders()['x-cookie'])) {
        $_COOKIE["ci_session"]=getallheaders()['x-cookie'];
}
 
  
  function dd($c){
  d($c);
  exit('---');

}
function d($c){
  if(is_array($c) ||  is_object($c)){
    echo '<pre>';
    print_r($c);
    echo '</pre>';
  }else{
    echo $c;
  }

}

 

function encrypt(string $message, string $key)
{ 
  
return openssl_encrypt($message,"AES-128-ECB",$key);

}
 
function decrypt(string $message, string $key)
{

 return openssl_decrypt($message,"AES-128-ECB",$key);
}



  function getSites(){ 
      
    $context = & get_instance(); 
      if($context->session->userdata('role')=='admin'){

         return    $context->db->get_where('sites',[ 
                'company_id'=>$context->session->userdata('user_company_id'),
          ])->result();


      }else{ 
             return    $context->db->get_where('sites',[ 
                     'company_id'=>$context->session->userdata('user_company_id'),
                     'id'=>$context->session->userdata('user_site_id'),
                  ])->result();

      }
 
  }  



  function getUserProfile(){ 
 

    $context = & get_instance(); 
    return 
    (object) [
    'role'=>$context->session->userdata('user_role'),
    'name'=>$context->session->userdata('row')->first_name ." ". $context->session->userdata('row')->last_name,
    'email'=>$context->session->userdata('row')->email,
    'feature_image'=>$context->session->userdata('row')->feature_image,
    'row'=>$context->session->userdata('row'),

    ]; 
  }  




function add_page($context,$page,$params=[]){ 
		$context->load->view( setting('theme').'/'.$page,$params 
		); 
}
function backend_page($context,$page,$params=[]){ 
		$context->load->view( 'backend'.'/'.$page,$params  	); 
}

  function setting($key,$value=''){ 

  	if($value!=''){
  		 $CI=&get_instance();
  		foreach (json_decode(settings) as   $set) {
  			if($key== $set->command){
  				
  					//$CI->db->set( 'value',$value);
  					$CI->db->where( 'id',$set->id);
  					//$CI->db->where( 'command',$set->command); 
  				 return  $CI->db->update('web_options',[ 'value'=>$value]);
  			}
  		}
  				$CI->db->insert('web_options',[
  					'command'=>$key,
  					'value'=>$value
  				]);
  		  		return false;
  	}else{
  		foreach (json_decode(settings) as   $set) { 
         
  			if($key== $set->name){ 
  				return  $set->value;
  			}
  		}
  		return 'ERROR  ('.$key.')  NOT FOUND';
  	}

  }
  function common($context,$include=''){  
    // dd(getallheaders());
    if (isset(getallheaders()['site_id'])) {
         DEFINE('site_id',decrypt(getallheaders()['site_id'],'no_one_can_decrypt'));
    }else{
      if (isset($_POST['site_id'])) {
         DEFINE('site_id',decrypt($_POST['site_id'],'no_one_can_decrypt'));
      }else{
              DEFINE('site_id',100);
      }
       
    }
   

  		$settings=$context->db->get_where('configs',[
        'site_id'=>site_id
      ])->result();
      
      DEFINE('settings',json_encode($settings));
 
    if(env=='development'){
      $url='http://localhost/rana/site1/app2/';
    }else{
      $url='https://affiliateplatform.itworld.com.pk/';
    }
     
 
/**backend*/ 
		 $admin_base=  base_url().'application/views/backend';
		 DEFINE('backend_base_url',$admin_base);    
		 
		  $backend_base= $url;
		 DEFINE('backend_base',$backend_base); 
 
      $api_base=  $url.'api';
        // $api_base=  $url.'api'; 
         DEFINE('api_base_url',$api_base);
 
 /**frontend*/
  
  $theme_base=  $url.'application/views/'.setting('theme');
		 //$theme_base=  base_url().'application/views/'.setting('active_theme');
		 DEFINE('theme_base_url',$theme_base);	 

	  //$front_api_base_url=  base_url().'api';
      $front_api_base_url=  $url.'';
     DEFINE('front_api_base_url',$front_api_base_url);	   

      $front_base_url=  $url;
     DEFINE('front_base_url',$front_api_base_url);  

    //function.php
     $link=dirname(__FILE__).'\\..\\views\\'.setting('theme').'\\functions.php';
    if (realpath($link)) {include( $link);}

	}


 //backedn function.php
     $link=dirname(__FILE__).'\\..\\views\\backend\\functions.php';
    if (realpath($link)) {include( $link);}

    

	  function render_page($slug){ 

	//add page
		$link=dirname(__FILE__).'\\..\\views\\'.setting('theme').'\\page-'.$slug.'.php';
		if (realpath($link)) {
		 add_page($this,'page-'.$slug);
		}else{
			       $this->output->set_status_header('404');
			       	 add_page($this,'404.php');


		}
		return true;
	 }


  
   
    function script_attach($base,$path){ 

      $realpath=realpath('application/views/'.setting('theme').$path);
        if($realpath){
             $filemtime =  filemtime($realpath);
               return $base.$path.'?'.$filemtime ;
        }else{
                return $base.$path.'?file_not_found' ;
            
        }
           
    
   }
  
   
    function backend_script_attach($base,$path){ 

    
      $realpath=realpath('application/views/backend/'.$path);
        if($realpath){
             $filemtime =  filemtime($realpath);
               return $base.$path.'?'.$filemtime ;
        }else{
                return $base.$path.'?file_not_found' ;
            
        }
           
    
   }

//defining theme base_url
