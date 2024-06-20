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
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="age_of_children">Age of Children:</label>
                    <input type="text" name="age_of_children" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="number_of_pupils">Number of Pupils:</label>
                    <input type="number" name="number_of_pupils" class="form-control" required>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="class_name">Class Name:</label>
            <input type="text" name="class_name" class="form-control" required>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ta">TA in this class:</label>
                <select name="ta" class="form-control" required>
                    <option value="1">Yes</option>
                    <option value="0" selected>No</option>
                </select>
                <div class="form-group">
                    <label for="number_of_sen">Number of SEN:</label>
                    <input type="number" name="number_of_sen" class="form-control" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create Classroom</button>
    </form>
    
    
</div>
@endsection
