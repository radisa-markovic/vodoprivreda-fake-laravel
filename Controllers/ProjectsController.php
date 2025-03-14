<?php

namespace Controllers;

use Models\Project;

class ProjectsController extends BaseController
{
    public static function index()
    {
        return BaseController::class.view('projects', [
            'projects' => Project::getAll()
        ]); 
    }
}