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

// edit a post
//$route['post/post_edit/(:num)'] = 'blog/post_edit/$1';
// display a form for adding a post
$route['post_add'] = 'blog/post_add';
// delete a post
$route['post_delete/(:num)'] = 'blog/post_delete/$1';
// edit a post
$route['post_edit/(:num)'] = 'blog/post_edit/$1';
// view a post and its comments
$route['post/(:num)'] = 'blog/post_view/$1';
// view a list of posts for a given project.
$route['project/(:num)'] = 'blog/get_project_posts/$1';

// AUTHENTICATION
$route['authenticate/login'] = 'blog/authenticate_login';
$route['authenticate/logout'] = 'blog/authenticate_logout';

$route['dashboard'] = 'blog/dashboard';

// add a comment
$route['comment_add/(:num)'] = 'blog/comment_add/$1';
// delete a comment
$route['comment_delete/(:num)'] = 'blog/comment_delete/$1';

// delete a comment
//$route['comment/comment_delete/(:num)'] = 'blog/comment_delete/$1';

// default page, shows latest posts, login
$route['default_controller'] = 'blog';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
