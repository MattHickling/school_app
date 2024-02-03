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
                    @foreach ($data as $schoolName => $info)
                        <option value="{{ $schoolName }}" data-teachers="{{ json_encode($info['teachers']) }}" data-num-classrooms="{{ $info['numberOfClassrooms'] }}">{{ $schoolName }}</option>
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
                var teachers = $('option:selected', this).data('teachers');
                var numClassrooms = $('option:selected', this).data('num-classrooms');

                $('#classSelection').empty();

                // Display number of classrooms
                $('#classSelection').append('<div class="mb-4"><h3>Number of Classrooms: ' + numClassrooms + '</h3></div>');

                // Display teachers
                $.each(teachers, function (teacherId, teacherName) {
                    $('#classSelection').append('<div class="mb-4"><h3>' + teacherName + '</h3></div>');
                });
            });
        });
    </script>
@endsection
