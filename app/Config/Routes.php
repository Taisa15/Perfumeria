<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('perfume', 'PerfumeController::index');

//create
$routes->post('createPerfume', 'PerfumeController::create');