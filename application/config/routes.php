<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//Categories Routes
$route['categories/create']    = 'categories/create';
$route['categories/update/(:any)']  = 'categories/update/$1';
$route['categories/delete/(:any)']  = 'categories/delete/$1';
$route['categories/(:any)']    = 'categories/detail/$1';
$route['categories']           = 'categories/index';
//Accounts Routes
$route['accounts/create']      = 'accounts/create';
$route['accounts/update/(:any)'] = 'accounts/update/$1';
$route['accounts/delete/(:any)'] ='accounts/delete/$1';
$route['accounts/(:any)']      = 'accounts/detail/$1';
$route['accounts']             = 'accounts/index';
//Alignments Routes
$route['alignments/(:any)']    = 'alignments/detail/$1';
$route['alignments']           = 'alignments/index';
//Feats Routes
$route['feats/(:any)']         = 'feats/detail/$1';
$route['feats']                = 'feats/index';
//Items Routes
$route['items/create']         = 'items/create';
$route['items/delete/(:any)']  = 'items/delete/$1';
$route['items/update/(:any)']  = 'items/update/$1';
$route['items/(:any)/(:any)']  = 'items/detail/$2/$1';
$route['items/(:any)']         = 'items/index/$2';
$route['items']                = 'items/index';
//Login Routes
$route['login/submit/(:any)']  = 'login/submit/$1';
$route['login']                = 'login/login';
$route['login/(:any)']         = 'login/login/$1';
$route['logout']               = 'login/logout';
//CodeIgniter Routes
$route['(:any)']               = 'pages/view/$1';
$route['default_controller']   = 'pages/view';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;
