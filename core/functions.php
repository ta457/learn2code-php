<?php

const BASE_PATH = __DIR__ . '/../';

function base_path($path) {
  return BASE_PATH . $path;
}

function dd($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}

function view($path, $attributes = []) {
  extract($attributes);
  require base_path('views/'. $path);
}

function urlIs($value) {
  if($_SERVER['REQUEST_URI'] == $value) {
    return true;
  } else if ( '/' . explode('/', $_SERVER['REQUEST_URI'])[1] == $value) {
    return true;
  } else if ( '/' . explode('/', $_SERVER['REQUEST_URI'])[1] .'/'. explode('/', $_SERVER['REQUEST_URI'])[2] == $value) {
    return true;
  } else {
    return false;
  }
  //return $_SERVER['REQUEST_URI'] == $value;
}

function dynamicNavItem($url) {
  $selected = '';
  if(urlIs($url)) {
    $selected = 'selectedNav';
  }
  return $selected;
}

function dynamicSidebarItem($url) {
  $selected = '';
  if(urlIs($url)) {
    $selected = 'selectedSide';
  }
  return $selected;
}

function validatePassword($password) {
  $requirements = [
    '/[0-9]/',       // At least 1 number
    '/[A-Z]/',       // At least 1 uppercase letter
    '/.{8,}/'        // At least 8 characters long
  ];
  foreach ($requirements as $requirement) {
    if (!preg_match($requirement, $password)) {
        return false;
    }
  }
  return true;
}
function validateEmail($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function makeLink($link) {
  if (strpos($link, 'https://') !== 0) {
      $link = 'https://' . $link;
  }
  return $link;
}