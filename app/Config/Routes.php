<?php

use App\Controllers\Basic;
use App\Models\NewsModel;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Basic::index');
// $routes->get('/', 'Home::index');
// $routes->get("/basic", "Basic::index");

$routes->get("/news", "Basic::index");
$routes->get('news/new', [Basic::class, 'new']);
$routes->post('news', [Basic::class, 'create']);
$routes->get('/news/(:segment)', [Basic::class, "show"]);
