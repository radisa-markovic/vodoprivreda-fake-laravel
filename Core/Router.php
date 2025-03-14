<?php

namespace Core;
use Controllers\EmployeesController;
use Controllers\MechanizationController;
use Controllers\ProjectsController;
use Models\Project;
use Models\Mechanization;

class Router
{
    protected $routes;
    
    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function route($url)
    {
        switch($url)
        {
            case $this->routes['home']['url']:
                view('home', [
                    'projects' => Project::getAll(),
                    'mechanization' => Mechanization::getAll() 
                ]);
                break;
                
            case $this->routes['projects']['url']:
                return ProjectsController::index();

            case $this->routes['mechanization']['url']:
                return MechanizationController::index();

            case $this->routes['aboutUs']['url']:
                return EmployeesController::index();

            default:
                return view('404');
        }
    }
}