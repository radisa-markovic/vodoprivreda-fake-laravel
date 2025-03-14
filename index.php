<?php

require 'functions.php';
use Core\Router;

spl_autoload_register(function ($class) { 
    $class = __DIR__. DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require "{$class}.php"; 
});

//php -S localhost:80 -t public
$routes = require('routes.php');
$router = new Router($routes);
$currentRoute = parse_url($_SERVER['REQUEST_URI'])['path'];
$router->route($currentRoute);