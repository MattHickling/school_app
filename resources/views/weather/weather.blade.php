@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Weather Information</h1>
        
        <!-- Display any errors -->
        @if (isset($error))
            <p>Error: {{ $error }}</p>
        @endif

        <!-- Weather data -->
        @if (isset($weather))
            <p>City: {{ $weather['name'] }}</p>
            <p>Temperature: {{ $weather['main']['temp'] }} °C</p>
            <p>Description: {{ $weather['weather'][0]['description'] }}</p>
            <p>Humidity: {{ $weather['main']['humidity'] }}%</p>
            <p>Wind Speed: {{ $weather['wind']['speed'] }} m/s</p>
        @endif

        <!-- Form for selecting location -->
        <form method="GET" action="{{ route('weather') }}">
            <div class="form-group">
                <label for="location">Select Location:</label>
                <input type="text" name="location" id="location" class="form-control" placeholder="Enter city name">
            </div>
            <button type="submit" class="btn btn-primary">Get Weather</button>
        </form>
    </div>
@endsection
