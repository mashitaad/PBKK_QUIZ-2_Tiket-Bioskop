<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jadwal', 'Schedule::index');
$routes->get('/seats', 'Seat::index');
$routes->get('/pembayaran', 'Payment::index');
$routes->get('/success', 'Success::index');
$routes->get('/history', 'Transaksi::index');