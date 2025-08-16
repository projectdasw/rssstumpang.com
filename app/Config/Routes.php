<?php
    use CodeIgniter\Router\RouteCollection;

    /**
     * @var RouteCollection $routes
     */

    // Database Test
    $routes->get('/dbtest', 'DbTest::index');

    // Landing Pages (public)
    $routes->get('/', 'Home::index');

    // Login Pages
    $routes->get('/login', 'Login::index');
    $routes->post('/login/processLogin', 'Login::processLogin');
    $routes->get('/logout', 'Login::logout');

    // Dashboard Pages
    $routes->get('/dashboard', 'Dashboard::index');

    // Account Data Pages
    $routes->get('/data_akun', 'AccountData::index');
    $routes->post('/data_akun/save', 'AccountData::save');
    $routes->post('/data_akun/update', 'AccountData::update');
    $routes->get('/data_akun/delete/(:segment)', 'AccountData::delete/$1');
?>