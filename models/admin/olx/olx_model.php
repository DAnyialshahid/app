<?php
defined('BASEPATH') or exit('No direct script access allowed');

class olx_model extends MY_Model
{

    public function __construct()
    {

        parent::__construct();

        $this->load
            ->helper('curl_helper');
        // $this->load->helper('simple_html_dom_helper');
        // $this->load->helper('curl_helper');
        ignore_user_abort(true);
        set_time_limit(0);
    }

    public function get_all($where = null)
    {

        $this
            ->db
            ->order_by('name', 'asc');
        if ($where)
        {
            $this
                ->db
                ->where($where);
        }
        $data = $this
            ->db
            ->get_where('olx_accounts', ['company_id' => $this
            ->session
            ->userdata('user_company_id') ])
            ->result();

        return $data;

    }

    public function script_get(){
  
return   $data;
    }
    public function curl($accounts, $type, $url, $post_data = null, $extra_headers = null, $hasFile = false, $hasCookies = false,$returnCH=false)
    {

        $site_url = $url;
        $ch = curl_init();
        if ($type == 'post')
        {
            $fields = $post_data;
        }

        $headers = array(
            'Host:www.olx.com.pk',
            'accept:*/*',
            'accept-language:en-US,en;q=0.9',
            // ,
            "x-panamera-client-id:web-desktop",
            'user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36',

            // 'cookie: _ga=GA1.3.1565511300.1577270336; G_ENABLED_IDPS=google; laquesissu=; _fbp=fb.2.1599238087204.1664352550; WZRK_G=05ea774d259f4f27b440aae8e66ace38; __gads=ID=9681d3ff853d3d24:T=1605854960:R:S=ALNI_MaYadXAMUt-MXJLI4-CPCuynHsLdg; _gcl_au=1.1.712501242.1607247076; laquesisff=; _rtb_user_id=0976455e-69e3-a9d9-d135-c4f43c5c402e; ct=eyJhbGciOiJSUzUxMiIsInR5cCI6IkpXVCIsImtpZCI6ImViT21QTmlrIn0.eyJ0b2tlblR5cGUiOiJjaGF0VG9rZW4iLCJ2ZXJzaW9uIjoiMSIsImlhdCI6MTYwOTc1MzA0MCwiZXhwIjoxNjA5ODM5NDQwLCJhdWQiOiJvbHhwayIsImlzcyI6Im9seCIsInN1YiI6IjIxMDgzMzIxIiwianRpIjoiZmFkNDUyM2I4NWUxZDQ2YjA1OTQ5Mjg0MTJkZTM0YjQ3ZDc3NmI1MCJ9.a_Tviz9GmFKqqA2r4JbJDStho2HBjn4cnhlipyO-yvUIrG10onap=16f3ca2d122x2836ef9c-29-177767b9ae1x5ad5d0dd-6-1612602348',
            
        );
        if ($extra_headers)
        {

            $headers = array_merge($extra_headers, $headers);
        }
        if ($type == 'post')
        {

            if ($hasFile)
            {
                $headers[] = 'multipart/form-data; boundary=----WebKitFormBoundary' . (rand(14, 14));

            }
            else
            {
                $headers[] = 'Content-Type:application/json';
                $headers[] = 'content-length:' . (strlen($fields));

            }
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.olx.com.pk/');
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,2);
        // curl_setopt($ch, CURLOPT_HEADER, 1);
        if ($type == 'post')
        {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        }
        // curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        if (!empty($accounts->cookies))
        {
            file_put_contents(__DIR__ . '\olx_cookie_' . $accounts->id . '.txt', $accounts->cookies);
        }
        curl_setopt($ch, CURLOPT_COOKIEJAR, __DIR__ . '\olx_cookie_'. $accounts->id . '.txt');
        curl_setopt($ch, CURLOPT_COOKIEFILE, __DIR__ . '\olx_cookie_' . $accounts->id . '.txt');
        // curl_setopt($ch, CURLOPT_ENCODING, "gzip");
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');

        curl_setopt($ch, CURLOPT_ENCODING, "gzip");
        // curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
        // curl_setopt($request, CURLOPT_HTTPHEADER, $singleLinheaders);
        

        //fetch last update date
        curl_setopt($ch, CURLOPT_URL, trim($site_url));
// curl_setopt($ch, CURLOPT_HEADERFUNCTION, "curlResponseHeaderCallback");
// $responseHeaders=array();
// function curlResponseHeaderCallback($ch, $headerLine) {
//  $responseHeaders[]=$headerLine;
//     // if (preg_match('/^Set-Cookie:\s*([^;]*)/mi', $headerLine, $cookie) == 1)
//         // $responseHeaders['cookies'] = $cookie;
//     return strlen($headerLine); // Needed by curl
// }
// d
// curl_setopt($ch, CURLOPT_HEADER, 1);
        $response = curl_exec($ch);

        $cookies = @file_get_contents(__DIR__ . '\olx_cookie_' . $accounts->id . '.txt');
        if (empty($cookies))
        {
            //try to get file after it close and asynce
            sleep(3);
            $cookies = @file_get_contents(__DIR__ . '\olx_cookie_' . $accounts->id . '.txt');
        }
        if (isset($cookies) && !empty($cookies))
        {
            $this
                ->db
                ->set('cookies', $cookies)->where('id', $accounts->id)
                ->update('olx_accounts');
        }
        if (strpos($response, 'Access Denied') !== false)
        {

            echo json_encode(['success' => 'no', 'response' => array(
                'url' => trim($site_url) ,
                'details' => $response,
            ) ]);
            exit();
        }
        if ($returnCH) {

        return ['headers' => '','ch' =>$ch, 'response' => $response, ];
        }
        return ($response);

    }

    public function refreshToken($id)
    {

        $accounts = $this
            ->db
            ->where('id', $id)->get('olx_accounts')
            ->first_row();
        $details = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/auth/refresh', '', ['authorization: Bearer ' . $accounts->accessToken]);
        $details = json_decode($details);
        $this
            ->db
            ->set('refreshToken', $details->refreshToken)
            ->set('accessToken', $details->accessToken)
            ->set('notificationHubId', $details->notificationHubId)
            ->set('chatToken', $details->chatToken)
            ->where('id', $id)->update('olx_accounts');

        return $details->refreshToken;

    }

    public function add_image($accounts, $accessToken, $file_path)
    {

        if (function_exists('curl_file_create'))
        { // php 5.5+
            $image = curl_file_create($file_path, 'image/jpeg', 'cattle.jpg');

        }
        else
        { //
            $image = '@' . $file_path;
        }

        $img = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/v2/images', ['image' => $image], ['authorization: Bearer ' . $accessToken], true);
        return (json_decode($img))->data;

    }
    public function get_ads($id)
    {
        $accounts = $this
            ->db
            ->where('id', $id)->get('olx_accounts')
            ->first_row();
        $my_ads = $this->curl($accounts, 'get', 'https://www.olx.com.pk/api/v2/users/21083321/items', null, ['authorization: Bearer ' . $accounts
            ->accessToken], $accounts->cookies);
        dd(json_decode($my_ads));

    }
    public function get_notifications($id)
    {
    		  $accounts = $this ->db ->where('id', $id)->get('olx_accounts') ->first_row();

    	
 $messages = $this->curl($accounts, 'get', 'https://www.olx.com.pk/api/notification-hub/messages?limit=10',null ,
    	 	   []
    	 	);
exit(    	$messages );
dd($messages);
    }

      public function get_messages($id)
    {

    	$id=29;
    	 //$this->get_notifications($id);

    		  $accounts = $this ->db ->where('id', $id)->get('olx_accounts') ->first_row();
 
    	
 $messages = $this->curl($accounts, 'post', 'https://xchat.olx.com.pk/user/messages','[{"peer_id":"100847182","ad_id":"1027746903","time":0}]' , [
	// 'authorization: Bearer ' . $accounts->accessToken, 
	':authority: www.olx.com.pk
:method: GET
:path: /api/notification-hub/messages?limit=10
:scheme: https
accept: */*
accept-encoding: gzip, deflate, br
accept-language: en-US,en;q=0.9
cookie: laquesis=pan-37312@a#pan-46706@b; ldTd=true; _ga=GA1.3.1264802347.1612757465; _gid=GA1.3.1123821014.1612757465; _rtb_user_id=7fd5a9eb-7431-dc6b-835e-3ffa5ed14898; _fbp=fb.2.1612757465758.1463430223; _gcl_au=1.1.1872245759.1612757466; _hjTLDTest=1; _hjid=bacfcccb-bcc3-47ba-992f-0b9b459bac5c; laquesisff=; laquesissu=; __gads=ID=db722cd0313ce43a:T=1612757465:S=ALNI_MYRzVlZqREJ-Rr8-B0zW8hQPktC4A; G_ENABLED_IDPS=google; reply_restriction=false; kyc_reply_count=0; lf=1; user=j%3A%7B%22id%22%3A%2221083321%22%2C%22name%22%3A%22Danyial%22%7D; WZRK_G=05ea774d259f4f27b440aae8e66ace38; lqstatus=1612782905||||; onap=1777fd5e359xad467d8-3-17781358203x62fb7a46-34-1612784238; t=eyJhbGciOiJSUzUxMiIsInR5cCI6IkpXVCIsImtpZCI6ImViT21QTmlrIn0.eyJncmFudFR5cGUiOiJlbWFpbCIsImNsaWVudFR5cGUiOiJ3ZWIiLCJ0b2tlblR5cGUiOiJhY2Nlc3NUb2tlbiIsImlzTmV3VXNlciI6ZmFsc2UsImlhdCI6MTYxMjc4ODEwMywiZXhwIjoxNjEyNzg5MDAzLCJhdWQiOiJvbHhwayIsImlzcyI6Im9seCIsInN1YiI6IjIxMDgzMzIxIiwianRpIjoiYWI4ZGEwNTFkYjhjMGM1NDIwZDAxMTE3MjlkNTRiOGExODZiNzFlMCJ9.SEKxPUrE4c-mvPKOmms5gVVoHdhuMdiHrAxvzENpjaHrACkqRHbPFTMfh2tg1M2VbLD9k1qGie-k1WZ3uCbauy3oDRtBjiJm-yxUQzBBbFh-U598yPpjMzLe6JiaiggAoGWQLG9cSdIJPaltu17ym4-T3IYYK9GLEaLV_uAEef8e8WXPkgA661Qu9DtM-1YwuxqIaLZ9a4046aAqxgKHdvI4hr30pLablteBGzeQwKTrmGyiQcwY7wI-ILcWiWKzrX4FuMQ0b5SKvVUBAfqQTg2cYRclutfSclvdGxw84kqQ2DiIjGNG1WrRo3guZy_ImNjcuN1Gzj-WIABdz_J1Cg; rt=eyJhbGciOiJSUzUxMiIsInR5cCI6IkpXVCIsImtpZCI6ImViT21QTmlrIn0.eyJncmFudFR5cGUiOiJlbWFpbCIsImNsaWVudFR5cGUiOiJ3ZWIiLCJ0b2tlblR5cGUiOiJyZWZyZXNoVG9rZW4iLCJyZWFjdGl2YXRlZCI6ZmFsc2UsImlhdCI6MTYxMjc4ODEwMywiZXhwIjoxNjIwODIzMzAzLCJhdWQiOiJvbHhwayIsImlzcyI6Im9seCIsInN1YiI6IjIxMDgzMzIxIiwianRpIjoiYWI4ZGEwNTFkYjhjMGM1NDIwZDAxMTE3MjlkNTRiOGExODZiNzFlMCJ9.V0mUJW73RYHSvczo3swxh5Q7T2E4NX8aa6JHAIS9R6zqXmSrDv4pytwqfZiolOTpfA-hZvaVGw1-K6l6rS0R_MU1Nb-UYBgO14DVFFko4ziCz1zw0X6uw5qwkLJmGf697vXN2PTaatd0TfETP1hbUW-ztlYVD0epnLV257dpSlIzA2ua8T2QlNzpKw7Eih7pRAF66Xt250HwBQMsAMivbiXRvHWY1R0RiYf_G_0bZWXzh3NbtsiSMMHPS2R7wiJm14VHolpZgtIHpItSSfMe0P34oHsr8c_d2IMQCiHA44raIedsfjlevgKkYdTUkpm7x3kJnLLmj-sB5YXPvD6Xwg; ct=eyJhbGciOiJSUzUxMiIsInR5cCI6IkpXVCIsImtpZCI6ImViT21QTmlrIn0.eyJ0b2tlblR5cGUiOiJjaGF0VG9rZW4iLCJ2ZXJzaW9uIjoiMSIsImlhdCI6MTYxMjc4ODEwMywiZXhwIjoxNjEyODc0NTAzLCJhdWQiOiJvbHhwayIsImlzcyI6Im9seCIsInN1YiI6IjIxMDgzMzIxIiwianRpIjoiYWI4ZGEwNTFkYjhjMGM1NDIwZDAxMTE3MjlkNTRiOGExODZiNzFlMCJ9.UArqvJvxeIou16rTUIkbsMOFoKek71RjhK4-vchBKZZg9MYnWoQoryNUhUNV6L4L1rqnuY2EaYl0L4nD2yoEBaH_Y5thN9T3Ik3eP1ONiV1udo1zlQyTWPW9188ouOHVu3BTfNwVWcXAMey-Fk_ztP3PvNpT5PVHJiKk7F0zzc8bSpIWnkwQ0H8vLfKyNc8DSyRyz6qv_YlNZ7ztlBGzWjciK3Z6AK1TM20MrT2FW5e82ZGNKuiwChVqMEuH09zgdKP11_9mtItAGSyeZosN1Z9m_vZa8vav1U_uDiIbiyE3HxCFPfodzQbcTYA-SRUzAooI_-aOkNpjgOzJiog4Ug; nt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2MTI3ODgxMDMsImJyYW5kIjoib2x4IiwiY291bnRyeUNvZGUiOiJwayIsInVzZXJJZCI6MjEwODMzMjF9.oxwxacejwnewY7FfCFVkcJaJq67SyGCwXU27J_R5zjc; ak_bmsc=EEFF562624B660C9CF37B1277F866C62B81CE57E74060000B7302160A58D012E~pl2zxAs4IVWgN2iLK50gEp0AHxvTzdVCtC3h9ZNMunOitclXmbm4hPgsfLylGHGxQ79Gc0iJZeJJHQv/dyeDx2mmJAW3KXUqduH9S96M1gpqkOTI1eomHG4hRvFuJtMav1fJoEj+m23OduTKMAbFj6EJ7bS1j+wHfCFFWAP8Wg3tv4qmlGb9F04aiBcndQNdiiOaIuONte+mrswRFT4DCKa87NCuN/o74WRRci42MHMhFz/SWr9s/jT9FlqYT4TpAc; bm_mi=585948E6CAF32163B602E89746135106~pwchDQRx04JDXHoOYPr8FLBUs2VkJbGRuXPikdBlOziq3qhwpDFHOXCdm3OA2DQb/FRh5ZG5JVSKgrUFAB0kSE5brotaEqjBv0Ydvs0XAG1qZgzu+0miJCA7+/+3IrUNK45vWP3W16G1VR7jz04vo7CyuGGAHEjlfk4+ZMPGNy8oWV0lwoxbGdzahT3KgGtPaE962WdwJIRR2gCKJ3JNlwARVCK0Bwr+iVYeKsPDgIuM8WAynPWRReGJIRzxSldY; bm_sz=EFD5B75100AC3D8283918EB1746EE923~YAAQtOUcuFBmgHt3AQAA092qgQrg9G1rrpavW9KxgrF9Oi0IbUjGuaBJWQoBp57msb4Qz2rVH3vgHY4gXkytlsESO6Z7tSBwDA4SLFN3fIy7nLigKQwnLfna1AUrCUgHCAOS3VdXPXb99Snnacvw/g7ypwMSv3Wlz+4VFg069jSa0ol/0oDkU+UPbgFwl3jd; _abck=8511FD25DE84C613DC9787194F47177C~0~YAAQ7OUcuGk+T2p3AQAAnRG0gQXPnDvG2LD7EG1Dovq53y+nES9+lv5pbqBEmRMGbgFZMwrlGhD56D8o7bd3QfhNob1dtUVGB1N24pKUwG8SB0b5Srs9irUelUoZg8cS/t1zvm7Duol/yRV3wE0M494GIcZ1qBS5TV43X4T8mvFulS9RLPnYcx6tOWTGv/lpIM7BmZCTlse55EZ2FUjtVPtxsKmeru5U7DvnwlHk2B7LYPETi/6jcVuFjNLVUPMiNiYlsHAL1W0mmvnnZeJ1S8TA5TRX0bZ0Dh5s4b6Kz92g3zP9jHafMBLdpUDKXwXqSZHPF1Bdu0r/2PUtX/EJKRLkaUU5Sg==~-1~||-1||~-1; bm_sv=916D0BF428D7BA0BA053F72B1B43BE43~GZvexVpoOxs3sZprAhs6Uq1ykesRRlmCp2RnC/lthBXwOgXbDdkdnnrRVeZ4+Mm75TC8DHuU2R/SChTy8C6stVh3Z4qO9J0JvlQ2T5j3HK2qlUyQSZ6VFp+Xb6vjyj9idTq35aXRvEJtKGPKEbY3J6Qg/kIR9M5oMCDubMvXAww=
referer: https://www.olx.com.pk/nf/chat/user/100847182/1027746903
sec-ch-ua: "Chromium";v="88", "Google Chrome";v="88", ";Not A Brand";v="99"
sec-ch-ua-mobile: ?0
sec-fetch-dest: empty
sec-fetch-mode: cors
sec-fetch-site: same-origin
user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36
x-newrelic-id: VQMGU1ZVDxABU1lbBgMDUlI=
x-panamera-fingerprint: 47e1ead1503d33d344418840ab71b0d0#1611861177612'
 ] ); 
 exit(    '66'	.$messages );



    		  $accounts = $this ->db ->where('id', $id)->get('olx_accounts') ->first_row();
    		        //  $accounts->accessToken = $this->refreshToken($id);
    		      // $this->common($accounts);

    	 	  $messages = $this->curl($accounts, 'post', 'https://xchat.olx.com.pk/user/messages', '[{"peer_id":"100847182","ad_id":"1027746903","time":0}]' ,
    	 	   [
    	 	   	'authorization: Bearer ' . $accounts->accessToken, 
    	 	  	 //'x-access-token: ' . $accounts->accessToken, 
    	 	  	 'x-access-token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2MTI3ODY2OTcsImppZCI6IjIxMDgzMzIxX29seHBrQG9seHBrIn0.lht86g73bj3buUzhccLNOd0oEc_F2AgJauZGHagkxUI', 
    	 	  	 'x-accept-version: 8', 
    	 	  	 'Cookie: laquesis=pan-37312@a#pan-46706@b; ldTd=true; _ga=GA1.3.1264802347.1612757465; _gid=GA1.3.1123821014.1612757465; _fbp=fb.2.1612757465758.1463430223; _gcl_au=1.1.1872245759.1612757466; _hjTLDTest=1; _hjid=bacfcccb-bcc3-47ba-992f-0b9b459bac5c; laquesisff=; laquesissu=; __gads=ID=db722cd0313ce43a:T=1612757465:S=ALNI_MYRzVlZqREJ-Rr8-B0zW8hQPktC4A; bm_sz=EFDB4B10432870D5FCAEB7DB4A11FB59~YAAQfuUcuM980Gp3AQAAu/fOgAqcK1mGpWBcPHU3NkHHGJB46fzKwbqasEr7nctFjXlImI/2XaHmRPwYfck0PG/a1DkF177ugbgTGqg58UqskAwJOZBf19TOKvsrtrRky8mjQsD06m/PtCFqh/hyIBrYqYx1XYpjErEHMRZk2Ji+QRfE+SzGzJtEsRhfKdk2; _abck=8511FD25DE84C613DC9787194F47177C~0~YAAQh+UcuMHQZmp3AQAAGjn2gAWxSy0EjFpgswlMue4PICR1Y86/E+EyGCPRuXWjrhHPBGiwBEoHOmLDjp+9QfVAFCE/xEy1Zt9cCzLfkViimS4ipomoru+uYbObsOQS7hCuFoLHyle0lktnvUw3yNVzxm/p4Cu2C8rKFi6yG3xo5kYvu8nXCozQAXh6Adq7FK+V9s0zT0ekhngGCiuEtfhGz/ZX9Gr7zvavCGprF8iGVe9i4zscQLRP/F6OAE9ygCjUc1u5k6qP15Nwd/HTS20peM2oHE00SH0FNXa88zdYNglV3U5lVNzKOzMFTvZQ6PpTeq0NFxpgOQXfMlKHqeOrnlRCKw==~-1~-1~-1; WZRK_G=05ea774d259f4f27b440aae8e66ace38; ak_bmsc=77E41A909FF9A67DA19E3CE736D33FCFB81CE5AC26150000D51321609AC3816D~plWgkYpqT0rt8NnFIftJYQmjJLKkehE/5eXoveKEo/BEV1esq6iXNi6Kxlps1L4hjZSigMRHHwHH5ZdgNIMRUlGXC8LLzz4MgfbQfD3fd+1FAyOsl0Lw23X2lNWoP/SojNohI5S+vMEW2HhkH/7NISfwgitUMUkrhpRMomV3IE9qLhvAzEl9IVumRpdfVglmG22L2AmsCloDIXynOT7XOVgrxIde/3W95jIRGxf11NqQEZgu6v+IdZdFEYT5CK4v5n; lqstatus=1612782905||||; onap=1777fd5e359xad467d8-3-17781358203x62fb7a46-34-1612784238; bm_sv=10EDCF365D5742E2910053FD59D64539~ixl64EcDgUCpzEFWOsMbJmoiZ7rYBTqtPWlggbzMWuz1wtum1Ha9dVSKdjkwr4DJ+J1ubbwbvhk4XEl4jeoipkiEVa265AnqgPdT6GZb3Anwo0dMkOEslMOoQEbE20Zz+0+qq4cZbJxowATKPKqnYMEWpbySE5ETj3Apwz/my2I=', 
    	 	]
    	 	);
    	    echo json_encode(['success' => 'yes', 'response' =>json_decode($messages)]);
                exit();
    	
    }  

     public function post_ads($id)
    {
        $accounts = $this ->db ->where('id', $id)->get('olx_accounts') ->first_row(); 
        $accessToken = $this->refreshToken($id);
        $image1 = $this->add_image($accounts, $accessToken, realpath(__DIR__ . '/1.jpg'));
        $image2 = $this->add_image($accounts, $accessToken, realpath(__DIR__ . '/2.jpg'));

        $json = array();
        $data = array();
        // $data['ad_index_id']='abb80d61-1-46e1-8ff0-bdaa5d08d0a4';
        $data['category_id'] = '1417';
        $data['extra_parameters'] = [];
        $data['images'][] = ['id' => $image1->id];
        $data['images'][] = ['id' => $image2->id];
        $data['location_source'] = ['name' => null, 'source' => 'sphere', ];
        $data['locations'][] = ['lat' => 24.916006, 'lon' => 67.074737, ];
        $data['parameters'][] = ['price' => ['currency' => ['iso_4217' => 'PKR'], 'raw' => 1000]];
        $data['parameters'][] = ['new_used' => 'used'];
        $data['parameters'][] = ['type' => 'iron'];
        $data['title'] = ' Press Philips Steam Iron ';
        $data['description'] = ' Philips Iron in low price 2700 watt best imported';
        $data['verifiedPhone'] = true;

        $json['data'] = $data;

        $ads = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/v2/items', json_encode($json) , ['authorization: Bearer ' . $accessToken, 'x-access-token: ' . $accessToken, ]);

        $json=(json_decode($ads));

       if(isset($json->error))
        {
                       echo json_encode(['success' => 'no', 'response' => print_r($json,true)]);
                        exit();
        }else if(isset($json->error))
        {
               echo json_encode(['success' => 'no', 'response' => print_r($json,true)]);
                exit();
        }

        echo json_encode(['success' => 'yes', 'response' =>'posted']);
                exit();
        d($image1);
        // d($image2);
        

        exit();
    }

    public function sign_up_verifiy_pin($id, $pin_code)
    {
        // $accessToken = $this->refreshToken($id);
        $accounts = $this
            ->db
            ->where('id', $id)->get('olx_accounts')
            ->first_row();
        if ($accounts->status == 'need_pin')
        {
            $post_fields = array(
                'grantType' => 'pin',
                'code' => $pin_code,
                'language' => 'en'
            );
            if ($accounts->granttype == 'email')
            {
                $post_fields['email'] = $accounts->name;
            }
            else
            {
                $post_fields['phone'] = $accounts->name;
            }

            $login_details = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/auth/authenticate/login', json_encode($post_fields) , 
            	['authorization: Bearer ' . $accounts->accessToken]
            );

            $details = (json_decode($login_details));
            dd($details);
            if (@$details->errorType)
            {
                echo json_encode(['success' => 'no', 'response' => $details]);
                exit();
            }
            if ($details->status == 'GRANTED')
            {
                $this
                    ->db
                    ->set('status', 'need_password')
                    ->set('pinToken', $details->refreshToken)
                    ->set('refreshToken', $details->refreshToken)
                    ->set('accessToken', $details->accessToken)
                    ->set('notificationHubId', $details->notificationHubId)
                    ->set('chatToken', $details->chatToken)
                    ->set('hasPhone', $details->user->hasPhone)
                    ->set('user_id', $details ->user ->id) 
                    ->set('isBanned', $details ->user ->isBanned)
                     ->set('isBusiness', $details
                    ->user
                    ->isBusiness)
                    ->set('isPhoneVisible', $details
                    ->user
                    ->isPhoneVisible)
                    ->set('nameProvided', $details
                    ->user
                    ->nameProvided)
                    ->set('verificationStatus', $details
                    ->user
                    ->verificationStatus)
                    ->set('cookies', $cookies)->where('id', $id)->update('olx_accounts');

                //after verifiy pin successfully then add password to user
                $json = array();
                $data = array();

                $data['newPassword'] = $accounts->password;
                $data['passwordConfirmation'] = $accounts->password;

                $json['data'] = $data;

                $newPassword = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/v2/items', json_encode($json) , ['authorization: Bearer ' . $details->accessToken, 'x-access-token: ' . $details->accessToken, ]);

                echo json_encode(['success' => 'yes', 'response' => 'pin Verified', 'newPassword' => $newPassword]);
                exit();
            }
            else
            {
                echo json_encode(['success' => 'no', 'response' => $details]);
                exit();
            }

        }
        else
        {
            echo json_encode(['success' => 'no', 'response' => 'no sign up please sign up first']);
            exit();
        }

        d($accounts);

    }
    public function sign_up($id)
    {
        @unlink(__DIR__ . '\olx_cookie_' . $accounts->id . '.txt');
        $accounts = $this
            ->db
            ->where('id', $id)->get('olx_accounts')
            ->first_row();
        $accounts->cookies = null;
        $this->common($accounts);

        $post_fields = array(
            'grantType' => $accounts->granttype,
            'language' => 'en'
        );

        if ($accounts->granttype == 'email')
        {
            $post_fields['email'] = $accounts->name;
        }
        else
        {
            $post_fields['phone'] = $accounts->name;
        }

        $c = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/auth/authenticate', json_encode($post_fields));

        $json = json_decode($c);
        if ($json)
        {

            if (@$json->errorType)
            {
                echo json_encode(['success' => 'no', 'response' => $json->errorType]);
                exit();
            }
            if ($json->nextAction == 'PIN')
            {

                $this
                    ->db
                    ->set('status', 'need_pin')
                    ->set('accessToken', $json->token)
                    ->where('id', $id)->update('olx_accounts');

                echo json_encode(['success' => 'yes', 'response' => 'Need Verify Pin Code']);
                exit();
            }
            else if (strtolower(trim($json->nextAction)) == 'password')
            {

            }
            dd($json);

        }

    }

    public function common($accounts)
    {
 
        // $b = $this->curl($accounts, 'get', 'https://www.olx.com.pk/');
// '{"sensor_data":"7a74G7m23Vrp0o5c9121931.66-1,2,-94,-100,Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36,uaend,12147,20030107,en-US,Gecko,3,0,0,0,396814,7461247,1600,872,1600,900,1600,377,1600,,cpen:0,i1:0,dm:0,cwen:0,non:1,opc:0,fc:0,sc:0,wrc:1,isc:0,vib:1,bat:1,x11:0,x12:1,8287,0.18113651890,806378730623.5,0,loc:-1,2,-94,-101,do_en,dm_en,t_en-1,2,-94,-105,-1,-1,0,0,-1,-1,1;0,-1,0,0,-1,-1,0;-1,2,-94,-102,-1,-1,0,0,-1,-1,1;0,-1,0,0,-1,-1,0;-1,2,-94,-108,-1,2,-94,-110,-1,2,-94,-117,-1,2,-94,-111,-1,2,-94,-109,-1,2,-94,-114,-1,2,-94,-103,-1,2,-94,-112,https://www.olx.com.pk/-1,2,-94,-115,1,32,32,0,0,0,0,4,0,1612757461247,-999999,17252,0,0,2875,0,0,6,0,0,8511FD25DE84C613DC9787194F47177C~-1~YAAQrOUcuIQz1Gp3AQAA4OXVfwWYCj8Bo1UeV/ML7edBIdIXoRzC1kXbsfQEKYA2myuWLweydtqtnCIYY1N8wDgDnycsjdbbK3MxkphOPfrh4EG0Ic2gcgNTQDHmJ8z+DXavRO89gHeSIs42G8re0ZD0Gpnqi21eiQma4Nc1MemUp3+35/Bp8EX2BKSVuXhBjWbK7Wn7dAoebMyqZeputluKrXCeIHEzFsm/czCgc/xTi8WhF7ZsFzfKe9FzvYNan0tWamCCa5HTOmZTjfz7/e8sLmHN2srtNC2pe29ZzlST3djjkdWLm5ZD~-1~-1~-1,29764,-1,-1,30261689,PiZtE,97926,125-1,2,-94,-106,0,0-1,2,-94,-119,-1-1,2,-94,-122,0,0,0,0,1,0,0-1,2,-94,-123,-1,2,-94,-124,-1,2,-94,-126,-1,2,-94,-127,8-1,2,-94,-70,-1-1,2,-94,-80,94-1,2,-94,-116,111918561-1,2,-94,-118,78283-1,2,-94,-129,-1,2,-94,-121,;13;-1;0"}'

        $a = $this->curl($accounts, 'get', 'https://www.olx.com.pk/webcontent/45ebbeb4ui226ad7d9fe2148da6f5a');
        $c = $this->curl($accounts, 'post', 'https://www.olx.com.pk/webcontent/45ebbeb4ui226ad7d9fe2148da6f5a',$this->input->post('sensor_data'),[
        		'cookie:',

        ]);
 

 // $info = curl_getinfo($b['ch']);

   
// d($c);
    // header('Content-Type: '. $info['content_type']);
    // echo 'Content type of returned data: ' . $info['content_type'];
    // $info = curl_getinfo($b['ch'], CURLINFO_CONTENT_TYPE);
    // echo '<br>'. $info;
        // d($a."<br>\n");

// exit(    $c );
        // dd($a['response']."<br>\n");
        
    }

    public function auth($id)
    {

        $accounts = $this
            ->db
            ->where('id', $id)->get('olx_accounts')
            ->first_row();
            $cookies_file_name=__DIR__ . '\olx_cookie_' . $accounts->id . '.txt';
            if (file_exists($cookies_file_name)) {
            	//echo 'delete files \n';
            	 unlink($cookies_file_name);
            	 sleep(2);
            }
        $accounts->cookies=null;
        if (1 == 1)
        {
            $this->common($accounts);

            $post_fields = array(
                'grantType' => $accounts->granttype,
                'language' => 'en'
            );

            if ($accounts->granttype == 'email')
            {
                $post_fields['email'] = $accounts->name;
            }
            else
            {
                $post_fields['phone'] = $accounts->name;
            }

            $c = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/auth/authenticate', json_encode($post_fields));
     
            // d("\n=======================a================\n");
            // d($a);
            // d("\n=======================b================\n");
            // d($b);
            /* d("\n=======================c================\n");
            d($c);*/
            $json = json_decode($c);

            if ($json)
            {

                if ($json->nextAction == 'PIN')
                {
                    dd($json);
                    # code...
                    
                }
                else if (strtolower(trim($json->nextAction)) == 'password')
                {

                    // d("\n=======================d================\n");
                    $post_fields = array(
                        'grantType' => 'password',
                        'password' => $accounts->password,
                        'language' => 'en'
                    );
                    if ($accounts->granttype == 'email')
                    {
                        $post_fields['email'] = $accounts->name;
                    }
                    else
                    {
                        $post_fields['phone'] = $accounts->name;
                    }

                    $login_details = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/auth/authenticate/login', json_encode($post_fields) , ['authorization: Bearer ' . $json->token]);

                    $details = (json_decode($login_details));
                    // d($details);
                    if (@$details->errorType)
                    {
                        echo json_encode(['success' => 'no', 'response' => $details]);
                        exit();
                    }
                    $cookies = file_get_contents(__DIR__ . '\olx_cookie_' . $accounts->id . '.txt');

                    if (isset($details->user->id)) {
                    	$this->db->set('hasPhone', $details
                        ->user
                        ->hasPhone)
                        ->set('user_id', $details
                        ->user
                        ->id)
                        ->set('isBanned', $details
                        ->user
                        ->isBanned)
                        ->set('isBusiness', $details
                        ->user
                        ->isBusiness)
                        ->set('isPhoneVisible', $details
                        ->user
                        ->isPhoneVisible)
                        ->set('nameProvided', $details
                        ->user
                        ->nameProvided)
                        ->set('verificationStatus', $details
                        ->user
                        ->verificationStatus);
                    }
                    	$this->db->set('status', 'active') 
                    	->set('refreshToken', $details->refreshToken)
                        ->set('accessToken', $details->accessToken)
                        ->set('notificationHubId', $details->notificationHubId)
                        ->set('chatToken', $details->chatToken)
                       
                        ->set('cookies', $cookies)->where('id', $id)->update('olx_accounts');
                        // d($details);

                    return true;
                }
                else if($json->error)
                {
                       echo json_encode(['success' => 'no', 'response' => print_r($json,true)]);
                        exit();
                }
                else
                {
                    dd($json);
                }
            }

            dd($json);

        }

    }

}
?>
