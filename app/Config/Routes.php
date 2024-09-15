<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/language/(:segment)', 'LanguageController::index/$1', ['as' => 'language']);

service('auth')->routes($routes);
