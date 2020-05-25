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
$route['technicianReport/technicianReport'] = 'technicianReport/technicianReport';
$route['technicianReport/(:any)'] = 'technicianReport/technicianReport/$1';

$route['appointment/appointment'] = 'appointment/appointment';
$route['appointment/(:any)'] = 'appointment/appointment/$1';

$route['assign/assign'] = 'assign/assign';
$route['assign/(:any)'] = 'assign/assign/$1';

$route['request/request'] = 'request/request';
$route['request/(:any)'] = 'request/request/$1';

$route['role/role'] = 'role/role';
$route['role/(:any)'] = 'role/role/$1';

$route['feedback/feedback'] = 'feedback/feedback';
$route['feedback/(:any)'] = 'feedback/feedback/$1';

$route['login/login'] = 'login/login';
$route['login/(:any)'] = 'login/login/$1';

$route['sign_up/sign_up'] = 'sign_up/sign_up';
$route['sign_up/(:any)'] = 'sign_up/sign_up/$1';

$route['contact/contact_us'] = 'contact/contact_us';
$route['contact/(:any)'] = 'contact/contact_us/$1';

$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';



$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:any)'] = 'pages/view/$1';
