<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Auth (Personne 1)
$routes->group('auth', static function (RouteCollection $routes) {
    $routes->get('login', 'AuthController::index');
    $routes->post('login', 'AuthController::login');
    $routes->get('logout', 'AuthController::logout');
});

// Alias legacy
$routes->get('login', 'AuthController::index');
$routes->post('login', 'AuthController::login');

// Dashboard (protégé)
$routes->get('/', 'DashboardController::index', ['filter' => 'auth']);
$routes->get('dashboard', 'DashboardController::index', ['filter' => 'auth']);