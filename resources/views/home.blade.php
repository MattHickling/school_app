@extends('layouts.footer')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h1>Welcome to Your School Management App</h1>
            <p>Manage Teachers, Teaching Assistants, Classrooms, and More</p>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('teachers.create') }}" class="btn btn-info btn-block btn-lg">Add Teacher</a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('teaching-assistants.create') }}" class="btn btn-warning btn-block btn-lg">Add Teaching Assistant</a>
                </div>
                <div class="col-md-6 mt-2">
                    <a href="{{ route('classrooms.create') }}" class="btn btn-success btn-block btn-lg">Add Classroom</a>
                </div>
                <div class="col-md-6 mt-2">
                    <a href="{{ route('school_years.create') }}" class="btn btn-primary btn-block btn-lg">Add School</a>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
