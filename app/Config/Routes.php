<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/deber', 'Home::index');
$routes->get('/insterta', 'Home::inserta');
$routes->get('/editar', 'Home::editar');
$routes->get('/eliminar', 'Home::eliminar');