<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['login'] = 'Login';
$route['Pondok'] = 'Pondok/index';
$route['kontak'] = 'Kontak/index';
$route['visi'] = 'Pondok/visi';
$route['informasi'] = 'Pondok/informasi';
$route['detail'] = 'Pondok/detail';
$route['artikel'] = 'Pondok/artikel';
$route['Pondok/pagination/(:any)'] = 'Pondok/pagination/$1';
$route['admin'] = 'Admin/index';
$route['admin/(:any)'] = 'Admin/index/$1';
$route['pengasuh/(:any)'] = 'Pengasuh/index/$1';
$route['pondok/(:any)'] = 'Pondok/index/$1';
$route['detail/(:any)'] = 'Pondok/detail/$1';



$route['default_controller'] = 'Pondok';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
