<?php
require 'router.php';
require 'lib/utils.php';

$router = new Router();

$router->add('/php-origin/', 'pages/home.php');
$router->add('/php-origin/about', 'pages/about.php');

$router->route($_SERVER['REQUEST_URI']);
?>
