@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">All School Years and Classes</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2>School Year</h2>
            </div>
            <div class="card-body">
                <h3>Schools</h3>
                <div class="form-row mb-3">
                    <div class="col-md-6">
                        <label for="schoolSelect">Select School:</label>
                        <select id="schoolSelect" name="school_id" class="form-control">
                            @foreach ($schoolNames as $schoolId => $schoolName)
                                <option value="{{ $schoolId }}">{{ $schoolName }}</option>
                            @endforeach
                        </select>
                    </div>                                      
                </div>
                <h3>Classes</h3>
                <div class="form-row mb-3">
                    <div class="col-md-6">
                        <label for="classSelect">Select Class:</label>
                        <select id="classSelect" name="class_id" class="form-control">
                            @foreach ($classes as $classId => $className)
                                <option value="{{ $classId }}">{{ $className }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="teacherSelect">Select Teacher:</label>
                        <select id="teacherSelect" class="form-control">
                            @foreach ($teacherNames as $teacherName)
                                <option>{{ $teacherName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Class</th>
                            <th scope="col">Teacher</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td id="selectedClass">Selected Class</td>
                            <td id="selectedTeacher">Selected Teacher</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#schoolSelect').change(function () {
                var selectedSchool = $(this).val();
                var selectedClass = $('#classSelect').val();
                var selectedTeacher = $('#teacherSelect').val();

                getNumberOfClasses(selectedSchool, selectedClass, function (numberOfClasses) {
                    $('#selectedClass').text('Selected Class: ' + numberOfClasses);
                    $('#selectedTeacher').text('Selected Teacher: ' + selectedTeacher);
                });
            });

            $('#classSelect').change(function () {
                var selectedSchool = $('#schoolSelect').val();
                var selectedClass = $(this).val();
                var selectedTeacher = $('#teacherSelect').val();

                getNumberOfClasses(selectedSchool, selectedClass, function (numberOfClasses) {
                    $('#selectedClass').text('Selected Class: ' + numberOfClasses);
                    $('#selectedTeacher').text('Selected Teacher: ' + selectedTeacher);
                });
            });

            $('#teacherSelect').change(function () {
                var selectedSchool = $('#schoolSelect').val();
                var selectedClass = $('#classSelect').val();
                var selectedTeacher = $(this).val();

                getNumberOfClasses(selectedSchool, selectedClass, function (numberOfClasses) {
                    $('#selectedClass').text('Selected Class: ' + numberOfClasses);
                    $('#selectedTeacher').text('Selected Teacher: ' + selectedTeacher);
                });
            });

            function getNumberOfClasses(selectedSchool, selectedClass, callback) {
                $.ajax({
                    type: 'GET',
                    url: '/get-number-of-classes/' + selectedSchool + '/' + selectedClass,
                    success: function (response) {
                        callback(response.numberOfClasses);
                    },
                    error: function (error) {
                        console.error('Error fetching number of classes:', error);
                    }
                });
            }
        });

    </script>
@endsection
