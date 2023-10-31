@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create a New Classroom</h2>
        <form method="POST" action="{{ route('classrooms.store') }}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="age_of_children">Age of Children:</label>
                        <input type="text" name="age_of_children" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="teacher_id">Select Teacher:</label>
                        <select name="teacher_id" class="form-control">
                            <option value="">Select...</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="number_of_pupils">Number of Pupils:</label>
                        <input type="number" name="number_of_pupils" class="form-control" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create Classroom</button>
        </form>
    </div>
@endsection
