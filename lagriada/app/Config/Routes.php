<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'login::login');
$routes->get('register', 'register::register');
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/users', 'UserController::list');
$routes->get('user/list', 'UserController::list');
$routes->get('user/delete/(:num)', 'UserController::delete/$1');

