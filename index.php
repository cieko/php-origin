<?php
require 'router.php';
require 'lib/utils.php';

$router = new Router();

$router->add('/php-origin/', 'controllers/home.php');
$router->add('/php-origin/about', 'controllers/about.php');
$router->add('/php-origin/contact', 'controllers/contact.php');

$router->route($_SERVER['REQUEST_URI']);
?>
