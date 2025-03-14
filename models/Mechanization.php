<?php
namespace Models;
class Mechanization
{
    private static $mechanization = [
        [
            "id" => 1,
            "name" => "Kamioni",
            "quantity" => "10+"
        ],
        [
            "id" => 2,
            "name" => "Bageri",
            "quantity" => "10+"
        ],
        [
            "id" => 3,
            "name" => "Buldozeri",
            "quantity" => "10+"
        ],
        [
            "id" => 4,
            "name" => "Kopaci",
            "quantity" => "10+"
        ],
    ];

    public static function getAll()
    {
        return static::$mechanization;
    }
}