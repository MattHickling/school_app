@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Select Teachers for Each Class</h2>
    <form method="POST" action="{{ route('process.selection') }}">
        @csrf <!-- Add a CSRF token for form security -->
        @foreach ($years as $year => $numClasses)
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Year {{ $year }}</h5>
                    @for ($class = 1; $class <= $numClasses; $class++)
                        <div class="form-group">
                            <label for="teacherYear{{ $year }}Class{{ $class }}">Select Teacher for Year {{ $year }} Class {{ $class }}:</label>
                            <select class="form-control" id="teacherYear{{ $year }}Class{{ $class }}" name="teacher_ids[]">
                                <option value="">Select...</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endfor
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button> <!-- Submit button -->
    </form>
</div>
@endsection
