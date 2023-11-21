@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All School Years and Classes</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <h2>School Year</h2>
                </div>
                <div class="card-body">
                    <h3>Classes</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Class Number</th>
                                <th>Teacher</th>
                                <select>
                                    @foreach ($teacherNames as $teacherName)
                                        <option>{{ $teacherName }}</option>
                                    @endforeach
                                </select>
                            </tr>
                        </thead>
                        <tbody>
                           <div>Class</div>
                           <div>Teacher</div>
                        </tbody>
                    </table>
                </div>
            </div>
     
    </div>
@endsection
