<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainNewsController extends Controller
{
protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function news()   {

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.news', ['data' => $data['data']]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################


    public function businuss()   {

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.businuss', ['data' => $data['data']]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################



    public function gesundheit()  {

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.gesundheit', ['data' => $data['data']]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################


    public function politik()  {

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.politik', ['data' => $data['data']]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################


      public function reise()   {

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.reise', ['data' => $data['data']]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################


         public function sport()   {

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.sport', ['data' => $data['data']]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################


            public function video()   {

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.video', ['data' => $data['data']]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################



           public function wetter(Request $request)   {
        //openWeatherMap Api
        $city = $request->input('city');
        $weatherData = $this->weatherService->getWeather($city);

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.wetter', ['data' => $data['data']],['weatherData' => $weatherData]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################


         public function ticker()   {

        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('main-news.ticker', ['data' => $data['data']]);
    }    else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }}
    //#######################################



}

