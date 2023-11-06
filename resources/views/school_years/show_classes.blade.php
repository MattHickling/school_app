@extends('layouts.app')

@section('content')
<h2>School Years and Classes</h2>

@foreach ($schoolYears as $year)
    <div class="card">
        <div class="card-header">{{ $year->number_of_years }}-Year School</div>
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
                    @foreach ($year->classes as $class)
                        <tr>
                            <td>{{ $class->class_number }}</td>
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
@endsection
