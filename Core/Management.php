<?php

namespace Core;
class Management
{
    // public static $imageFolder = image("/about-us");

    // public function __construct()
    // {
    //     $this->imageFolder = image("/about-us");
    // }

    private static $management = [
        [
            "id" => "1",
            "name" => "Pera Perić",
            "position" => "Direktor",
            "imageURL" => "/MILADIN GAVRIC.jpg",
            "email" => "email@email.com",
            "phoneNumber" => "067-555-555"
        ],
        [
            "id" => "2",
            "name" => "Jovan Jovanović",
            "position" => "Direktor 2",
            "imageURL" => "../images/about-us/MILADIN GAVRIC.jpg",
            "email" => "email@email.com",
            "phoneNumber" => "067-555-555"
        ],
        [
            "id" => "3",
            "name" => "Živko Živković",
            "position" => "Direktor 3",
            "imageURL" => "../images/about-us/MILADIN GAVRIC.jpg",
            "email" => "email@email.com",
            "phoneNumber" => "067-555-555"
        ],
        [
            "id" => "4",
            "name" => "Marko Marković",
            "position" => "Direktor 4",
            "imageURL" => "../images/about-us/MILADIN GAVRIC.jpg",
            "email" => "email@email.com",
            "phoneNumber" => "067-555-555"
        ],
    ];

    public static function getManagement()
    {
        return self::$management;
    }
}