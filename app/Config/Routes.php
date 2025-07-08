<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Register::index');
$routes->post('/register/simpan', 'Register::simpan');
$routes->get('/login', 'Login::index');
$routes->post('/login/proses', 'Login::proses');
$routes->get('/logout', 'Login::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('dashboard/user-status', 'Dashboard::userStatusJson');
$routes->get('akun', 'Akun::index');
$routes->get('/akun/aktivitas_akun', 'Akun::aktivitas_akun');
$routes->get('/akun/detail/(:segment)', 'Akun::detail/$1');
$routes->get('/akun/search', 'Akun::search');
$routes->post('/akun/store', 'Akun::store');
$routes->get('/akun/edit/(:segment)', 'Akun::edit/$1');
$routes->post('/akun/update/(:segment)', 'Akun::update/$1');
$routes->get('/akun/delete/(:segment)', 'Akun::delete/$1');

