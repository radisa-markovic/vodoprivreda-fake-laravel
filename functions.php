<?php
/**==> won't work without setting base path to this via CLI */
const BASE_PATH = __DIR__;

function view($view, $parameters = [])
{
    extract($parameters);
    // dd(BASE_PATH . "views/$view.php");
    require BASE_PATH . DIRECTORY_SEPARATOR."views" . DIRECTORY_SEPARATOR . "$view.view.php";
}

function image($imagePath)
{
    return BASE_PATH . "/images/$imagePath";
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIsActive($url)
{
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $url;
}