<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index'); // Default route
$routes->post('login/auth', 'Login::auth'); // Login authentication
$routes->get('dashboard', 'Dashboard::index'); // Dashboard view
$routes->post('dashboard/save', 'Dashboard::save'); // Save form datas


