<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('perfume', 'PerfumeController::index');
$routes->get('venta', 'VentaController::index');
//create
$routes->get('perfume/new', 'PerfumeController::new');
$routes->post('perfume/create', 'PerfumeController::create');


$routes->get('venta/new', 'VentaController::new');

//delete
$routes->delete('deletePerfume/(:num)', 'PerfumeController::delete/$1');
$routes->delete('deleteVenta/(:num)', 'VentaController::delete/$1');


//update
$routes->post('updatePerfume/(:num)', 'PerfumeController::update/$1');
$routes->post('updateVenta/(:num)', 'VentaController::update/$1');
//findbyid
$routes->get('perfume/(:num)', 'PerfumeController::findById/$1');
$routes->get('venta/(:num)', 'VentaController::findById/$1');