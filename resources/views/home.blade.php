@extends('layouts.footer')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quick Actions</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('teachers.create') }}" class="btn btn-outline-primary btn-block">Add Teacher</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('teaching-assistants.create') }}" class="btn btn-outline-primary btn-block">Add Teaching Assistant</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('classrooms.create') }}" class="btn btn-outline-primary btn-block">Add Classroom</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('school_years.create') }}" class="btn btn-outline-primary btn-block">Add School</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('school_years.show_classes') }}" class="btn btn-outline-primary btn-block">Show School Year Classes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h1 class="display-4 font-weight-bold">Welcome to Your School Management App</h1>
            <p class="lead">Effortlessly manage teachers, teaching assistants, classrooms, and more.</p>
        </div>
    </div>
</div>
@endsection
