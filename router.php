<?php

$pages = [
    '/' => 'controllers/home.php',
    '/weather' => 'controllers/weather.php'
];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
if (key_exists('query', parse_url($_SERVER['REQUEST_URI']))) {
    $query = parse_url($_SERVER['REQUEST_URI'])['query'];
}

if (key_exists($uri, $pages)){
    require($pages[$uri]);
} else {
    require('views/404.php');
}