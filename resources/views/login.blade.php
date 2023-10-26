@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="mb-4">
                <button type="submit">Log In</button>
            </div>
        </form>
    </div>
@endsection
