<?php

namespace Controllers;
use Controllers\BaseController;
use Models\Mechanization;

class MechanizationController extends BaseController
{
    public static function index()
    {
        return BaseController::class.view('mechanization', [
            'mechanization' => Mechanization::getAll() 
        ]);
    }
}