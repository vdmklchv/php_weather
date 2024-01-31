<?php

require('config.php');
include_once('WeatherProcessor.php');

$weatherProcessor = new WeatherProcessor();


if (isset($query)) {
    $requestedCity = ucwords(str_replace("+", " ", explode("=", $query)[1]));
    $coords = $weatherProcessor->getLatLong($requestedCity, $apiKey);
    
    $currentForecast = $weatherProcessor->getWeather($coords['lat'], $coords['long'], $apiKey);
    
    
    $currentTemp = round($currentForecast->main->temp, 1);
}




require('views/weather.view.php');