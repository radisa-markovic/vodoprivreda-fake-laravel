<?php

namespace Models;

class Project
{
    protected static $projects = [
        [
            "id" => 1,
            "title" => "Regulacija toka korita Velike Morave ",
            "location" => "Svojnovo, Paraćin"
        ],
        [
            "id" => 2,
            "title" => "Projekat 2",
            "location" => "Stubica, Paraćin"
        ],
        [
            "id" => 3,
            "title" => "Projekat 3",
            "location" => "Popovac, Paraćin"
        ],
        [
            "id" => 4,
            "title" => "Projekat 4",
            "location" => "Grza, Paraćin"
        ],
    ];

    public static function getOne($id)
    {
        return self::$projects[$id];
    }

    public static function getAll()
    {
        return self::$projects;
    }
}