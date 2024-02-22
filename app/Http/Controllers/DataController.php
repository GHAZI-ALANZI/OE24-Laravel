<?php

namespace App\Http\Controllers;
use App\Services\WeatherService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
//openWeatherMap Api
protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function fetchData(Request $request)
    {
        //openWeatherMap Api
        $city = $request->input('city');
        $weatherData = $this->weatherService->getWeather($city);

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('welcome', ['data' => $data['data']],['weatherData' => $weatherData]);
        } else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }
    }
}
