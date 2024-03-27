<?php

namespace Core;

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
                view('home.view', [
                    'routes' => $this->routes,
                    'projects' => Projects::getNProjects(4),
                    'mechanization' => Mechanization::getNMechanization(3) 
                ]);
                break;
                
            case $this->routes['projects']['url']:
                view('projects.view', [
                    'routes' => $this->routes,
                    'projects' => Projects::getProjects()
                ]);
                break;

            case $this->routes['mechanization']['url']:
                view('mechanization.view', [
                    'routes' => $this->routes,
                    'mechanization' => Mechanization::getMechanization() 
                ]);
                break;

            case $this->routes['aboutUs']['url']:
                view('aboutUs.view', [
                    'routes' => $this->routes,
                    'management' => Management::getManagement() 
                ]);
                break;

            default:
                view('404', [
                    'routes' => $this->routes
                ]);
                break;
        }
    }
}