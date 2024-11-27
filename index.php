<?php
require 'lib/utils.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/php-origin/' => 'controllers/index.php',
    '/php-origin/about' => 'controllers/about.php',
    '/php-origin/contact' => 'controllers/contact.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    echo 'Error: Page Not Found';
}
