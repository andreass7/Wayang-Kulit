<?php

use App\Controllers\estimasiController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'about::index');
$routes->get('/petunjuk', 'petunjuk::index');
$routes->get('/team', 'teamController::index');
$routes->get('/produk', 'produkController::index');
$routes->get('/login', 'login::index');
$routes->post('/loginUser', 'login::loginAdmin');


// $routes->get('/estimasip', 'estimasiController::index');
$routes->post('/estimasip', 'estimasiController::gauss');
