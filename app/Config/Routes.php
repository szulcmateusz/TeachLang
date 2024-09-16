<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/language/(:segment)', 'LanguageController::show/$1', ['as' => 'language']);

$routes->get('/instructor/new', 'InstructorController::new', ['as' => 'instructor_new']);
$routes->post('/instructor', 'InstructorController::create', ['as' => 'instructor_create']);
$routes->get('/instructor/edit', 'InstructorController::edit', ['as' => 'instructor_edit']);
$routes->patch('/instructor', 'InstructorController::update', ['as' => 'instructor_update']);

service('auth')->routes($routes);
