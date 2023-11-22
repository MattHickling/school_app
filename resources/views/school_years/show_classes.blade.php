@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">All School Years and Classes</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2>School Year</h2>
            </div>
            <div class="card-body">
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
@endsection
