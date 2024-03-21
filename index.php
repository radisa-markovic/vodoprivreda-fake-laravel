<?php

use Core\Projects; 
use Core\Mechanization; 
use Core\Management;

require 'functions.php';

    /**==> won't work without setting base path to this via CLI */
const BASE_PATH = __DIR__ . '/../';
spl_autoload_register(function ($class) {
    // $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // require base_path("{$class}.php");
    require ("{$class}.php");
});

//php -S localhost:80 -t public

$routes = require('routes.php');
$currentRoute = parse_url($_SERVER['REQUEST_URI'])['path'];

switch($currentRoute)
{
    case $routes['home']['url']:
        $projects = Projects::getNProjects(4);
        $mechanization = Mechanization::getNMechanization(3);
        require './views/home.view.php';
        break;
        
    case $routes['projects']['url']:
        $projects = Projects::getProjects();
        require './views/projects.view.php';
        break;

    case $routes['mechanization']['url']:
        $mechanization = Mechanization::getMechanization();
        require './views/mechanization.view.php';
        break;

    case $routes['aboutUs']['url']:
        $management = Management::getManagement();
        require './views/aboutUs.view.php';
        break;

    default:
        require './views/404.php';
        break;
}