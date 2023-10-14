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
  return $_SERVER['REQUEST_URI'] == $value;
}