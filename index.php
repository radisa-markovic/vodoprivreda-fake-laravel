<?php 

require 'functions.php';

    /**==> won't work without setting base path to this via CLI */
const BASE_PATH = __DIR__ . '/../';
// spl_autoload_register(function ($class) {
//     $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

//     require base_path("{$class}.php");
// });

//php -S localhost:80 -t public

$routes = require('routes.php');
$currentRoute = parse_url($_SERVER['REQUEST_URI'])['path'];

switch($currentRoute)
{
    case $routes['home']['url']:
        require './views/home.view.php';
        break;
        
    case $routes['projects']['url']:
        require './views/projekti.view.php';
        break;

    default:
        require './views/404.php';
        break;
}