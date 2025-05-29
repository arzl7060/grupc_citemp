<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Admin::index');


$routes->get('/v_produk', 'Produk::index');
$routes->get('/v_produk', 'Produk::create');
$routes->post('/v_produk', 'Produk::store');
$routes->get('/v_produk/(:num)', 'Produk::detail/$1');
$routes->get('/v_produk/edit/(:num)', 'Produk::edit/$1');
$routes->get('/v_produk/delete/(:num)', 'Produk::delete/$1');

$routes->get('/v_kategori', 'Kategori::index');
$routes->get('/v_kategori', 'Kategori::create');
$routes->post('/v_kategori', 'Kategori::store');
$routes->get('/v_kategori/updateKategori/(:num)', 'Kategori::updateKategori/$1');
$routes->get('/v_kategori/deleteKategori/(:num)', 'Kategori::deleteKategori/$1');

$routes->get('/v_order', 'Order::index');
$routes->get('/v_order', 'Order::create');
$routes->post('/v_order', 'Order::store');
$routes->get('/v_order/(:num)', 'Order::detail/$1');
$routes->get('/v_order/edit/(:num)', 'Order::edit/$1');
$routes->get('/v_order/delete/(:num)', 'Order::delete/$1');

$routes->get('/v_penjualan', 'Penjualan::index');
$routes->get('/v_setting', 'Penjualan::index');

$routes->get('contact', 'Contact::index');