<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function fetchData()
    {
        // Make a GET request to the external API
        $response = Http::get('http://localhost:3000/api/v1/news');

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Pass the data to the view
            return view('welcome', ['data' => $data['data']]);
        } else {
            // Handle the error if the request fails
            abort(500, 'Failed to fetch data from the API');
        }
    }
}
