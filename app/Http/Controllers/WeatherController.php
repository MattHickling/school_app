<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function showWeather(Request $request)
    {
        $location = $request->input('location');

        $baseUrl = 'https://api.meteomatics.com/';

        $currentTime = now()->toIso8601String();
        $url = $baseUrl . $currentTime . '/t_2m:C/' . $location . '/json';

        $username = '';
        $password = '';

        try {
            $client = new Client();
            $response = $client->request('GET', $url, [
                'auth' => [$username, $password]
            ]);

            $data = json_decode($response->getBody(), true);

            return view('weather', ['weather' => $data]);
        } catch (\Exception $e) {
            return view('weather.weather', ['error' => $e->getMessage()]);
        }
    }
}
