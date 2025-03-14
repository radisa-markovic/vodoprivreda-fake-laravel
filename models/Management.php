<?php

namespace Models;
class Management
{
    private static $management = [
        [
            "id" => "1",
            "name" => "Pera Perić",
            "position" => "Direktor",
            "imageURL" => "../images/about-us/MILADIN GAVRIC.jpg",
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
    public static function getAll()
    {
        return self::$management;        
    }
}