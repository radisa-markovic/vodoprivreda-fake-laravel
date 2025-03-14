<?php

namespace Controllers;
use Controllers\BaseController;
use Models\Management;

class EmployeesController extends BaseController
{
    public static function index()
    {
        return BaseController::class.view('aboutUs', [
            'management' => Management::getAll()
        ]);
    }
}