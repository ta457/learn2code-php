<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require ('routes.php');

function routeToController($uri, $routes) {
  if($_SESSION['user'] && ($uri == '/signup' || $uri == '/login')) {
    require($routes['/']);
  }

  if (array_key_exists($uri, $routes)) {
    require($routes[$uri]);
  }
}

routeToController($uri, $routes);