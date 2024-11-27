<?php

$heading = 'Home';

// NOT ALLOWED
// echo ['dsdsd'];

// ALLOWED - Use var_dump
// var_dump(['dfdfsdf']);

// function dd($value)
// {
//   echo "<pre>";
//   var_dump($value);
//   echo "</pre>";

//   die();
// }

// if ($_SERVER['REQUEST_URI'] === '/php-origin/') {
//   echo 'bg-gray-900 text-white';
// } else {
//   echo 'text-gray-300';
// }

// function urlIs($value) {
//   return $_SERVER['REQUEST_URI'] === $value;
// }

// echo $_SERVER['REQUEST_URI'] === '/php-origin/' ? 'bg-gray-900 text-white' : 'text-gray-300';

// dd($_SERVER);
// echo $_SERVER['REQUEST_URI'];

require './views/index.view.php';
