<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('perfume', 'PerfumeController::index');
$routes->get('venta', 'VentaController::index');
$routes->get('cliente', 'ClienteController::index');
//create
$routes->get('perfume/new', 'PerfumeController::new');
$routes->post('perfume/create', 'PerfumeController::create');
$routes->post('venta/create', 'VentaController::create');


$routes->get('venta/new', 'VentaController::new');
$routes->get('cliente/create', 'ClienteController::create');

//delete
$routes->delete('deletePerfume/(:num)', 'PerfumeController::delete/$1');
$routes->delete('deleteVenta/(:num)', 'VentaController::delete/$1');
$routes->delete('deleteVenta/(:num)', 'ClienteController::delete/$1');

//update
$routes->post('updatePerfume/(:num)', 'PerfumeController::update/$1');
$routes->post('updateVenta/(:num)', 'VentaController::update/$1');
$routes->post('updateCliente/(:num)', 'ClienteController::update/$1');

//findbyid
$routes->get('perfume/(:num)', 'PerfumeController::findById/$1');
$routes->get('venta/(:num)', 'VentaController::findById/$1');
$routes->get('cliente/(:num)', 'ClienteController::findById/$1');