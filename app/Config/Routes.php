<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\Home;

use App\Controllers\KelasController;


/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/profile/(:any)/(:any)', [Home::class, 'profile']);
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user', 'UserController::index');

$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);
$routes->get('/user/(:any)', [UserController::class, 'show']);


$routes->get('/kelas', [KelasController::class, 'index']);
$routes->get('/kelas/create', [KelasController::class, 'create']);
$routes->post('/kelas/store', [KelasController::class, 'store']);
$routes->get('/kelas/(:any)/edit', [KelasController::class, 'edit']);
$routes->put('/kelas/(:any)', [KelasController::class, 'update']);
$routes->delete('/kelas/(:any)', [KelasController::class, 'destroy']);
$routes->get('/kelas/(:any)', [KelasController::class, 'detail']);
$routes->get('/kelas/(:any)', [KelasController::class, 'show']);

$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);
