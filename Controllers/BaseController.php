<?php

namespace Controllers;
class BaseController
{
    protected function view($name, $attributes=[])
    {
        extract($attributes);
        require __DIR__ . '..' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . "$name.view.php";
    }
}