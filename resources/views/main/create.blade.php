@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Select the Number of Years and Classes</h2>
    <form method="POST" action="{{ route('select.teachers') }}" id="classroomForm">
        @csrf <!-- Add a CSRF token for form security -->
        <div class="form-group">
            <label for="years">Select the number of years in the school:</label>
            <select class="form-control" id="years" onchange="generateYearSelectors()">
                <option value="0">Select...</option>
                @for ($i = 1; $i <= 9; $i++)
                    <option value="{{ $i }}">{{ $i }} Year{{ $i > 1 ? 's' : '' }}</option>
                @endfor
            </select>
        </div>
        <div id="yearSelectors"></div>
        <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
    </form>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function generateYearSelectors() {
        const numberOfYears = parseInt($("#years").val());
        const yearSelectors = $("#yearSelectors");

        yearSelectors.empty();

        for (let i = 1; i <= numberOfYears; i++) {
            yearSelectors.append(`
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Year ${i}</h5>
                        <div class="form-group">
                            <label for="classesYear${i}">Select the number of classes in Year ${i}:</label>
                            <select class="form-control" id="classesYear${i}">
                                <option value="0">Select...</option>
                                <!-- Allow up to 5 classes per year -->
                                @for ($j = 1; $j <= 5; $j++)
                                    <option value="{{ $j }}">{{ $j }} Class{{ $j > 1 ? 'es' : '' }}</option>
                                @endfor
                            </select>
                        </div>
                        <div id="classSelectorsYear${i}"></div>
                    </div>
                </div>
            `);
        }
    }
</script>
