<?php
defined('BASEPATH') or exit('No direct script access allowed');

class olx_model extends MY_Model
{

    public function __construct()
    {

        parent::__construct();

        $this
            ->load
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

    public function curl($accounts, $type, $url, $post_data = null, $extra_headers = null, $hasFile = false, $hasCookies = false)
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
        curl_setopt($ch, CURLOPT_COOKIEJAR, __DIR__ . '\olx_cookie_' . $accounts->id . '.txt');
        curl_setopt($ch, CURLOPT_COOKIEFILE, __DIR__ . '\olx_cookie_' . $accounts->id . '.txt');
        // curl_setopt($ch, CURLOPT_ENCODING, "gzip");
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');

        curl_setopt($ch, CURLOPT_ENCODING, "gzip");
        // curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
        // curl_setopt($request, CURLOPT_HTTPHEADER, $singleLinheaders);
        

        //fetch last update date
        curl_setopt($ch, CURLOPT_URL, trim($site_url));

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
    public function post_ads($id)
    {
        $accounts = $this
            ->db
            ->where('id', $id)->get('olx_accounts')
            ->first_row();
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

        d(json_decode($ads));
        d($image1);
        // d($image2);
        

        exit();
    }

    public function sign_up_verifiy_pin($id, $pin_code)
    {
        $accessToken = $this->refreshToken($id);
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
            $login_details = $this->curl($accounts, 'post', 'https://www.olx.com.pk/api/auth/authenticate/login', json_encode($post_fields) , ['authorization: Bearer ' . $accounts->accessToken]);

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

        $a = $this->curl($accounts, 'get', 'https://www.olx.com.pk/');
        $b = $this->curl($accounts, 'get', 'https://www.olx.com.pk/webcontent/45ebbeb4ui226ad7d9fe2148da6f5a');
        $c = $this->curl($accounts, 'post', 'https://www.olx.com.pk/webcontent/45ebbeb4ui226ad7d9fe2148da6f5a', '{"sensor_data":"7a74G7m23Vrp0o5c9121601.66-1,2,-94,-100,Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36,uaend,12147,20030107,en-US,Gecko,3,0,0,0,396786,526269,1600,872,1600,900,1600,211,1600,,cpen:0,i1:0,dm:0,cwen:0,non:1,opc:0,fc:0,sc:0,wrc:1,isc:0,vib:1,bat:1,x11:0,x12:1,8287,0.375673338187,806320263134,0,loc:-1,21,-94,-101,do_en,dm_en,t_en-1,2,-94,-105,-1,-1,0,0,-1,-1,1;0,-1,0,0,-1,-1,0;-1,2,-94,-102,-1,-1,0,0,-1,-1,1;0,-1,0,0,-1,-1,0;-1,2,-94,-108,0,1,19144,undefined,0,0,520;1,2,19156,undefined,0,0,520;2,1,21117,undefined,0,0,-1;3,2,21120,undefined,0,0,-1;4,1,21211,0,0,10,-1,0;5,2,21212,0,0,10,-1,0;6,1,21605,undefined,0,0,-1;7,2,21611,undefined,0,0,-1;-1,2,-94,-110,0,1,1482,736,149;1,1,1525,817,134;2,1,1533,835,128;3,1,1533,846,124;4,1,1569,885,112;5,1,1579,892,107;6,1,1587,902,103;7,1,1588,916,97;8,1,1596,928,93;9,1,1604,940,87;10,1,1612,949,83;11,1,1620,959,80;12,1,1627,965,78;13,1,1636,974,74;14,1,1648,983,74;15,1,1652,995,68;16,1,1661,1012,64;17,1,1668,1024,60;18,1,1677,1035,56;19,1,1690,1047,54;20,1,1693,1056,51;21,1,1701,1062,49;22,1,1711,1071,47;23,1,1717,1077,47;24,1,1730,1086,42;25,1,1735,1093,40;26,1,1759,1105,40;27,1,1776,1137,45;28,1,1793,1170,47;29,1,1796,1184,51;30,1,1807,1196,53;31,1,1812,1204,53;32,1,1829,1212,53;33,1,1838,1216,53;34,1,1852,1217,53;35,1,1860,1218,53;36,1,1894,1227,52;37,1,1901,1229,52;38,1,1911,1234,52;39,1,1916,1236,52;40,1,1924,1243,50;41,1,1933,1245,50;42,1,1940,1250,50;43,1,1948,1252,49;44,1,2064,1269,44;45,1,2069,1273,42;46,1,2085,1274,42;47,1,2096,1277,40;48,1,2108,1278,39;49,1,2109,1280,37;50,1,2117,1281,37;51,1,2124,1284,36;52,1,2148,1289,33;53,1,2156,1290,32;54,3,2248,1290,32,2842;55,4,2333,1290,32,2842;56,2,2344,1290,32,2842;57,1,3018,1290,31;58,1,3030,1288,31;59,1,3062,1287,31;60,3,3337,1287,31,-1;61,1,3396,1287,31;62,4,3427,1287,31,-1;63,2,3430,1287,31,-1;64,1,3588,1223,43;65,1,3589,1181,43;66,1,3600,1108,47;67,1,3604,1001,54;68,1,3722,595,110;69,1,13887,904,145;70,1,13888,903,145;71,1,13964,902,142;72,1,13970,899,140;73,1,13981,893,138;74,1,13981,886,138;75,1,13997,878,137;76,1,14024,871,137;77,1,14175,870,136;78,1,14309,864,139;79,1,14316,861,142;80,1,14333,852,151;81,1,14337,846,158;82,1,14344,836,168;83,1,14349,824,181;84,1,14357,811,194;85,1,14367,796,207;86,1,14377,781,217;87,1,14382,760,229;88,1,14411,728,253;89,1,14414,705,276;90,1,14432,697,283;91,1,14432,695,286;92,1,14436,690,293;93,1,14445,690,294;94,1,14508,690,295;95,1,14544,690,296;96,1,14549,690,297;97,1,14570,692,301;98,1,14573,695,302;99,1,14585,699,306;100,1,14604,705,309;101,1,14607,706,311;102,1,14614,707,313;103,1,14623,710,316;104,1,14629,711,319;105,1,14649,717,326;122,3,15566,754,327,-1;123,4,15669,754,327,-1;124,2,15673,754,327,-1;178,3,17738,872,142,3346;180,4,17841,869,142,3346;181,2,17845,869,142,3346;215,3,18413,734,85,520;216,4,18524,734,85,520;217,2,18526,734,85,520;218,3,18573,734,85,520;219,4,18684,734,85,520;220,2,18685,734,85,520;244,3,19500,753,202,-1;245,4,19580,753,202,-1;246,2,19585,753,202,-1;286,3,23028,753,237,-1;287,4,23147,753,237,-1;288,2,23153,753,237,-1;-1,2,-94,-117,-1,2,-94,-111,0,1403,-1,-1,-1;-1,2,-94,-109,0,1402,-1,-1,-1,-1,-1,-1,-1,-1,-1;1,56690,-1,-1,-1,-1,-1,-1,-1,-1,-1;-1,2,-94,-114,-1,2,-94,-103,3,2244;2,16992;3,17733;2,27700;0,55206;1,56535;-1,2,-94,-112,https://www.olx.com.pk/#loginemailenterpassword-1,2,-94,-115,NaN,1160887,32,1403,58093,0,NaN,56690,0,1612640526268,127,17251,8,326,2875,16,0,56692,1241031,0,0228FF0996B504F18599A8559251844D~-1~YAAQZafWdlVZamp3AQAAZv3deAVNC+HrZniW4q/FWpqlcx3NfgjjW7SirDfYM8zq41Xmg2ELvLqFpM0E8lqw1oh2Rj54paI8eOZ/3fhrI6JkZeyTEv60/1A4eAXlzbrMQqNLgpEYDXfRTsA9t6UbROcQ+7Z+4fPVuugZQMgOFghO/5V2/1AZVZDQs7xnNiBWrcBE4cjQuWMVOk4gt4QB1K40b93NKQMdsJkCqmY8vUpRmdEocGqxQS1bSYvV7OUAL7GIkHYgrRW6AT2zDDfHzxqxfZ69eMYHStYeqxsnQeFxHQ8pcPQeDc0hFxKqvou5k0SRjxCv3BhaRPyRqeYjK0+RlWAa5w==~0~-1~-1,32840,710,618439208,30261689,PiZtE,89807,81-1,2,-94,-106,7,0-1,2,-94,-119,200,0,0,0,0,0,0,0,0,0,0,0,0,400,-1,2,-94,-122,0,0,0,0,1,0,0-1,2,-94,-123,-1,2,-94,-124,-1,2,-94,-126,-1,2,-94,-127,20321144241322243122-1,2,-94,-70,1684000686;-593805382;dis;,7,8;true;true;true;-300;true;24;24;true;false;-1-1,2,-94,-80,5578-1,2,-94,-116,1578777-1,2,-94,-118,227641-1,2,-94,-129,-1,2,-94,-121,;7;17;0"}');

        // d($a."<br>\n");
        // d($a."<br>\n");
        // dd($c."<br>\n");
        
    }

    public function auth($id)
    {

        $accounts = $this
            ->db
            ->where('id', $id)->get('olx_accounts')
            ->first_row();
        unlink(__DIR__ . '\olx_cookie_' . $accounts->id . '.txt');
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
            //  d("\n=======================c================\n");
            // d($c);
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
                    if (@$details->errorType)
                    {
                        echo json_encode(['success' => 'no', 'response' => $details]);
                        exit();
                    }
                    $cookies = file_get_contents(__DIR__ . '\olx_cookie_' . $accounts->id . '.txt');
                    $this
                        ->db
                        ->set('status', 'active')
                        ->set('refreshToken', $details->refreshToken)
                        ->set('accessToken', $details->accessToken)
                        ->set('notificationHubId', $details->notificationHubId)
                        ->set('chatToken', $details->chatToken)
                        ->set('hasPhone', $details
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
                        ->verificationStatus)
                        ->set('cookies', $cookies)->where('id', $id)->update('olx_accounts');

                    return true;
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
