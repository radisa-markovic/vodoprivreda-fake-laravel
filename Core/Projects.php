<?php

namespace Core;

class Projects
{
    private static $projects = [
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

    public static function getProjects()
    {
        return self::$projects;
    }

    public static function getNProjects($projectQuantity)
    {
        return array_slice(self::$projects, 0, $projectQuantity);
    }
}