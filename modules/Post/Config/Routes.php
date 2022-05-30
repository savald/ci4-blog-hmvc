<?php
$routes->group('', ['namespace' => '\Modules\Post\Controllers'], function ($routes) {
  $routes->get('/', 'Post::index');
  $routes->get('about', 'Post::about');
  $routes->get('categories', 'Post::category');
  $routes->get('latest', 'Post::latest');
  $routes->get('contact', 'Post::contact');
  $routes->get('detail/(:any)', 'Post::detail/$1');
});
