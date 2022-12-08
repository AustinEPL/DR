<?php


require 'Core/bootstrap.php';
$routes = require('routes.php');

//obtenemos la url
$url = Request::url();

$router = new Router;
$router->register($routes);
$router->handle($url);


?>

