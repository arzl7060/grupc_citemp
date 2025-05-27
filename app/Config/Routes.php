<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// $routes->group('Satuan', ['filter' => 'auth'], function ($routes) {
//     $routes->get('/', 'Satuan::index'); // Ganti dengan controller dan method penjualan Anda
// });