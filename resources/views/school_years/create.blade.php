@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('school_years.store') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="number_of_years">Number of Years:</label>
                <input type="number" name="number_of_years" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="classes_per_year">Classes per Year:</label>
                <input type="number" name="classes_per_year" class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Create School Years Data</button>
</form>
@endsection
