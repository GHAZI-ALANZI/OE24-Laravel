<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function getWeather(Request $request)
    {
        $city = $request->input('city');
        $weatherData = $this->weatherService->getWeather($city);
        return view('weather', ['weatherData' => $weatherData]);
    }
}

