<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Kelulusan::index');
$routes->post('proses-cek', 'Kelulusan::prosesCek');

