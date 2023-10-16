<?php
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require ('routes.php');

$userRole = 0;
if(isset($_SESSION['user'])) {
  $userRole = $_SESSION['user']['role'];
}

function routeToController($uri, $routes, $userRole) {
  if (array_key_exists($uri, $routes)) {
    $url = $routes[$uri];
    if(in_array($userRole, $url['roles'])) {
      require($url['url']);
    } else {
      require 'controllers/index.php';
    }
  }
}

routeToController($uri, $routes, $userRole);

