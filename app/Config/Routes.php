<?php
    use CodeIgniter\Router\RouteCollection;

    /**
     * @var RouteCollection $routes
     */
    $routes->get('/dbtest', 'DbTest::index');
    $routes->get('/', 'Home::index');
    $routes->get('/login', 'Login::index');
    $routes->post('/login/processLogin', 'Login::processLogin');
    $routes->get('/login/logout', 'Login::logout');
    $routes->get('/dashboard', 'Dashboard::index');
?>