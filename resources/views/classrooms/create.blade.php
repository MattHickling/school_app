@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="container">
        <h2>Create a New Classroom</h2>
        <form method="POST" action="{{ route('classrooms.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age_of_children">Age of Children:</label>
                <input type="text" name="age_of_children" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="number_of_pupils">Number of Pupils:</label>
                <input type="number" name="number_of_pupils" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Classroom</button>
        </form>
    </div>
@endsection
@include('layouts.footer')