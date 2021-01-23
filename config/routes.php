<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontend/home';
$route['stores'] = 'frontend/stores';
$route['categories'] = "frontend/catagories";
$route['submit_offer'] = "frontend/submit_offer";
$route['store/(:any)'] = "frontend/single_store/$1";
$route['category/(:any)'] = "frontend/catagory/$1";
$route['page/(:any)'] = "frontend/constant_page/$1";
$route['pages/(:any)'] = "frontend/dynamic_page/$1";
$route['sitemap.xml'] = "frontend/sitemap";
$route['sitemap_stores_(:any)_(:any).xml'] = "frontend/sitemap_stores/$1/$2";
$route['sitemap_categories_(:any)_(:any).xml'] = "frontend/sitemap_categories/$1/$2";
$route['recaptcha__en.js'] = "api/recaptcha__en";


// $route['store1/(:any)'] = "main/store/$1";
// $route['stores1'] = 'main/stores';
// $route['categories1'] = 'main/categories';
// $route['categories1/(:any)'] = 'main/categories/$1';
// $route['contact'] = 'main/contact';
// $route['write-for-us'] = 'main/write_review';
// $route['(:any)-voucher-code'] = "main/single_store_redirected/$1";
// $route['(:any)-discount-code'] = "main/single_store_redirected/$1";
// $route['(:any)-coupon-code'] = "main/single_store_redirected/$1";
// $route['coupon/(:any)'] = "main/SingleCouponWithoutStore/$1";
// $route['(:any)/coupon/(:any)'] = "main/SingleCouponWithStore/$1/$2";
// $route['go/(:any)'] = "main/go/$1";
// $route['coupons/(:any)'] = "main/coupons/$1";
// $route['out/(:any)'] = "main/out/$1";
// $route['submit-coupon'] = 'main/submit_coupon';
// $route['review/send-wfu'] = 'main/sendreview';
// $route['coupon/submit-coupon'] = 'main/sendCouponSubmitRequest';
// $route['subscribers/add'] = "functions/Option_controller/add_subscriber";
// $route['web/mail'] = "functions/Option_controller/send_email";
// $route['(about|terms|privacy)'] = "main/pages/$1";
// $route['getPopCoupons'] = "main/SendPopCoupons";
// $route['20-off-coupons'] = "main/coupons/$1";
// $route['verified-coupon-codes'] = "main/coupons/$1"; 




/*
*
* Authentication Routes
*
*/

$route['admin/login'] = "authentication/login_panel";
$route['admin/logout'] = "authentication/logout";
$route['auth/login'] = "authentication/do_login";
$route['auth/logout'] = "authentication/logout";


$route['translate_uri_dashes'] = FALSE;
