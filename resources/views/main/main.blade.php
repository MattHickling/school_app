
@extends('layouts.app')

@section('content')

        
        <form id="schoolSelectorForm">
            <div class="form-group m-5">
                <label for="years">Select the number of years in the school:</label>
                <select class="form-control" id="years" onchange="generateYearSelectors()">
                    <option value="0">Select...</option>
                    @for ($i = 1; $i <= 9; $i++)
                        <option value="{{ $i }}">{{ $i }} Year{{ $i > 1 ? 's' : '' }}</option>
                    @endfor
                </select>
            </div>
            
            <div id="yearSelectors"></div>
        </form>
    </div>
    @endsection


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Simulated data for select boxes (you should fetch data from your database)
        const teachers = ["Teacher 1", "Teacher 2", "Teacher 3"];
        const classes = ["Class A", "Class B", "Class C"];
        const teachingAssistants = ["TA 1", "TA 2", "TA 3"];

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
                    </div>
                `);
            }

            yearSelectors.find("select").change(function() {
                const yearNumber = $(this).attr("id").replace("classesYear", "");
                generateClassSelectors(yearNumber, $(this).val());
            });
        }

       
        function redirectToCreateClass() {
            window.location.href = '{{ route('classrooms.create') }}';
        }

        function redirectToCreateTeacher() {
            window.location.href = '{{ route('teachers.create') }}';
        }

        function redirectToCreateTA() {
            window.location.href = '{{ route('teaching-assistants.create') }}';
        }
    </script>


