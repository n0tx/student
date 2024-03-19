<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Student Crud Routes
$routes->get('student', 'StudentController::index');
$routes->post('student/store', 'StudentController::store');
$routes->get('student/edit/(:num)', 'StudentController::edit/$1');
$routes->get('student/delete/(:num)', 'StudentController::delete/$1');
$routes->post('student/update', 'StudentController::update');