@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a New Classroom</h2>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="{{ route('classrooms.store') }}">
        @csrf
        <div class="form-group">
            <label for="age_of_children">Age of Children:</label>
            <input type="text" name="age_of_children" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="number_of_pupils">Number of Pupils:</label>
            <input type="number" name="number_of_pupils" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="class_name">Class Name:</label> <!-- Fixed label for class_name -->
            <input type="text" name="class_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Classroom</button>
    </form>
</div>
@endsection
