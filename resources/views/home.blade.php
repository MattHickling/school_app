@extends('layouts.footer')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Welcome to Your School Management App</h1>
            <p>Manage Teachers, Teaching Assistants, Classrooms, and More</p>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ route('teachers.create') }}" class="btn btn-outline-dark btn-block">Add Teacher</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('teaching-assistants.create') }}" class="btn btn-outline-dark btn-block">Add Teaching Assistant</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('classrooms.create') }}" class="btn btn-outline-dark btn-block">Add Classroom</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('school_years.create') }}" class="btn btn-outline-dark btn-block">Add School</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('school_years.show_classes') }}" class="btn btn-outline-dark btn-block">Show School Year Classes</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
