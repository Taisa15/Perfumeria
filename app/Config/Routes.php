<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('perfume', 'PerfumeController::index');

//create
$routes->post('createPerfume', 'PerfumeController::create');

//delete
$routes->delete('deletePerfume/(:num)', 'PerfumeController::delete/$1');

//update
$routes->post('updatePerfume/(:num)', 'PerfumeController::update/$1');

//findbyid
$routes->get('perfume/(:num)', 'PerfumeController::findById/$1');