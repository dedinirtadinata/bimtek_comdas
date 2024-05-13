<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda/dukungan', 'Home::dukungan');
$routes->get('/beranda/tentang', 'Home::tentang');
$routes->get('/beranda/ulasan', 'Home::ulasan');
