<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';

// --------------Admin Route ------------------
$route['dashboard'] = 'Admin_Dashboard';
$route['post-format'] = 'POSTController/post_format';
$route['add-post'] = 'POSTController/addPost';
$route['view-posts'] = 'POSTController/viewposts';
$route['categories'] = 'Admin_Dashboard/categories';
$route['add-category'] = 'Admin_Dashboard/add_category';
$route['edit-category/(:any)'] = 'Admin_Dashboard/edit_category/$1';
$route['subcategories'] = 'Admin_Dashboard/subcategories';
$route['add-subcategory'] = 'Admin_Dashboard/add_subcategory';
$route['edit-subcategory/(:any)'] = 'Admin_Dashboard/edit_subcategory/$1';
