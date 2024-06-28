<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


use App\Controllers\Productos;
$routes->get('productos', 'Productos::index');
$routes->get('productos/view/(:num)', 'Productos::view/$1');
