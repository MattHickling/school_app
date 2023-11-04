@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Teacher and Class Plan</h2>

    <h3>Teachers:</h3>
    <ul>
        @foreach($teachers as $teacher)
            <li>
                {{ $teacher->title }} {{ $teacher->first_name }} {{ $teacher->surname }}
                <ul>
                    @foreach($teacher->classes as $class)
                        <li>
                            Class Name: {{ $class->name }}
                            Age of Children: {{ $class->age_of_children }}
                            Number of Pupils: {{ $class->number_of_pupils }}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>
@endsection
