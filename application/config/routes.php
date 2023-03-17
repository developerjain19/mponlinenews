<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';

// --------------Admin Route ------------------
$route['dashboard'] = 'Admin_Dashboard';
$route['post-format'] = 'POSTController/post_format';
$route['add-post'] = 'POSTController/addPost';