@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="container">
        <h2>Create a New Teaching Assistant</h2>
        <form method="POST" action="{{ route('teaching-assistants.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="preference_of_year">Preference of Year:</label>
                <input type="text" name="preference_of_year" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="strength">Strength:</label>
                <input type="text" name="strength" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="weakness">Weakness:</label>
                <input type="text" name="weakness" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="higher_ta">Higher TA:</label>
                <select name="higher_ta" class="form-control" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Teaching Assistant</button>
        </form>
    </div>
@endsection
@include('layouts.footer')
