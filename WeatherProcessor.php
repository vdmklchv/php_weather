<?php

class WeatherProcessor {

    function getLatLong($cityName, $apiKey) {
        $response = file_get_contents("http://api.openweathermap.org/geo/1.0/direct?q={$cityName}&appid={$apiKey}");
        $responseArray = json_decode($response);
        return ['lat' => $responseArray[0]->lat, 'long' => $responseArray[0]->lon];
    }

    function getWeather($lat, $long, $apiKey) {
        $response = file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$long}&units=metric&appid={$apiKey}");
        $responseArray = json_decode($response);
        return $responseArray;
    }
}
