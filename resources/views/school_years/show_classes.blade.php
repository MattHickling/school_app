@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">All School Years and Classes</h1>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h2>School Years and Classes</h2>
            </div>
            <div class="card-body">
                <select id="schoolSelect" class="form-control mb-4">
                    <option value="">Select School:</option>
                    @foreach ($schoolYears as $year)
                        <option value="{{ $year->school_name }}" data-years="{{ $year->number_of_years }}" data-classes="{{ $year->classes_per_year }}">{{ $year->school_name }}</option>
                    @endforeach
                </select>
                
                <div id="classSelection">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#schoolSelect').change(function () {
                var selectedSchool = $(this).val();
                var numberOfYears = $('option:selected', this).data('years');
                var classesPerYear = $('option:selected', this).data('classes');

                $('#classSelection').empty();

                for (var i = 1; i <= numberOfYears; i++) {
                    $('#classSelection').append('<div class="mb-4"><h3>' + selectedSchool + ' - Year ' + i + '</h3></div>');
                    
                    for (var j = 1; j <= classesPerYear; j++) {
                        $('#classSelection').append('<div class="form-row mb-3"><div class="col-md-6"><label for="classSelectYear' + i + '">Select Class for Year ' + i + ':</label><select id="classSelectYear' + i + '" name="class_id" class="form-control"><option value="">Select Class</option></select></div></div>');
                    }
                }
            });
        });
    </script>
@endsection
