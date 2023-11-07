@extends('layouts.app')

@section('content')
<h2>School Year and Classes for {{ $schoolYear->number_of_years }}-Year School</h2>

@foreach ($schoolYear->classes as $class)
<div class="card">
    <div class="card-header">Class {{ $class->class_number }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('school_years.show_classes', ['schoolYearId' => $schoolYear->id]) }}">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>Class Number</th>
                        <th>Teacher</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Assign Teacher</button>
        </form>
    </div>
</div>
@endforeach

@endsection
