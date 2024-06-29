<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
$routes->get('/', 'Home::index');
$routes->get('/reverse-string', 'ReverseStringController::index');
=======
$routes->get('/longest-word', 'LongestWord::index');
$routes->post('/longest-word/find', 'LongestWord::findLongest');

>>>>>>> 9bbebdf (Soal nomer 2)
