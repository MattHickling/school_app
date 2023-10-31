@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a New Teacher</h2>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('teachers.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name "surname" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="preference_of_year">Preference of Year:</label>
                    <input type="text" name="preference_of_year" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="strength">Strength:</label>
                    <input type="text" name="strength" class="form-control" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="ECT">ECT:</label>
                    <select name="ECT" class="form-control" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="leadership">Leadership:</label>
            <select name="leadership" class="form-control form-control-sm" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>


        <button type="submit" class="btn btn-primary">Create Teacher</button>
    </form>
</div>
@endsection
