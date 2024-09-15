<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/language/(:segment)', 'LanguageController::index/$1', ['as' => 'language']);

$routes->get('/instructor/new', 'InstructorController::new', ['as' => 'instructor_new']);
$routes->post('/instructor', 'InstructorController::create', ['as' => 'instructor_create']);

service('auth')->routes($routes);
