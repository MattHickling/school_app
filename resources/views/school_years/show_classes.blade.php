@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All School Years and Classes</h1>

        @foreach ($schoolYears as $schoolYear)
            <div class="card mb-4">
                <div class="card-header">
                    <h2>School Year: {{ $schoolYear->number_of_years }}-Year School</h2>
                </div>
                <div class="card-body">
                    <h3>Classes</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Class Number</th>
                                <th>Teacher</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schoolYear->classrooms as $classroom)
                                <tr>
                                    <td>{{ $classroom->class_number }}</td>
                                    <td>
                                        <select name="teacher_id" class="form-control">
                                            <option value="">Select a Teacher</option>
                                            @foreach ($teachers as $teacher)
                                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
@endsection
