<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts']                = 'posts/index';
$route['posts/index']          = 'posts/index';
$route['posts/update']         = 'posts/update';
$route['posts/create']         = 'posts/create';
$route['posts/(:any)']         = 'posts/view/$1';

$route['tasks']                = 'tasks/index';
$route['calenders']            = 'calenders/index';

$route['appsettings']          ='appsettings/edit';
$route['projects']             = 'projects/index';
$route['projects/edit']        = 'projects/edit';
$route['projects/view']        = 'projects/view';
$route['projects/create']      = 'projects/create';
$route['projects/(:any)']      = 'projects/view/$1';

$route['categories']           = 'categories/index';
$route['categories/create']    = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';


$route['default_controller']    = 'home';
$route['home']                  = 'home/index';
$route['users/login']           = 'users/login';
$route['users/register']        = 'users/register';
$route['(:any)']                ='pages/view/$1';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
