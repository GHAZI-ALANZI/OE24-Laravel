<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;


class WeatherService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = Config::get('app.api');; // Load API key from environment
    }

    public function getWeather($city)
    {
        $url = "https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid=$this->apiKey";
        $response = $this->client->get($url);
        return json_decode($response->getBody()->getContents(), true);
    }
}
