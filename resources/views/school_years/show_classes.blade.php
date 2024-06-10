<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h1 class="display-4 text-primary">Staffing Structure</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link btn btn-primary text-white" href="{{ route('school_years.create') }}">Add School</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link btn btn-success text-white" href="{{ route('classrooms.create') }}">Add Classroom</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link btn btn-info text-white" href="{{ route('teachers.create') }}">Add Teacher</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link btn btn-warning text-white" href="{{ route('teaching-assistants.create') }}">Add Teaching Assistant</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link btn btn-secondary text-white" href="{{ route('school_years.show_classes') }}">Show School Year Classes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <h1 class="mb-4">All School Years and Classes</h1>
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h2>School Years and Classes</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="schoolNameSelect">Select School:</label>
                    <select id="schoolNameSelect" name="school_name" class="form-control">
                        @foreach ($data as $school)
                            <option value="{{ $school['school_name'] }}">{{ $school['school_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label id="schoolYearsLabel">Number of Years:</label>
                    <span id="schoolYearsValue" class="ml-2"></span>
                </div>
                <div class="form-group">
                    <label id="classesPerYearLabel">Classes per Year:</label>
                    <span id="classesPerYearValue" class="ml-2"></span>
                </div>
                <div id="yearClassSelection"></div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#schoolNameSelect').change(function() {
                var selectedSchoolName = $(this).val();
                var selectedSchoolData = {!! json_encode($data) !!}.find(function(school) {
                    return school.school_name === selectedSchoolName;
                });

                $('#schoolYearsValue').text(selectedSchoolData ? selectedSchoolData.number_of_years : '');
                $('#classesPerYearValue').text(selectedSchoolData ? selectedSchoolData.classes_per_year : '');

                var yearClassSelectionDiv = $('#yearClassSelection');
                yearClassSelectionDiv.empty(); // Clear previous content
                
                if (selectedSchoolData) {
                    for (var i = 1; i <= selectedSchoolData.number_of_years; i++) {
                        var yearDiv = $('<div class="mb-3"></div>');
                        yearDiv.append('<h4>Year ' + i + ' Classes:</h4>');
                        for (var j = 1; j <= selectedSchoolData.classes_per_year; j++) {
                            var selectLabel = $('<label>Class ' + j + ': </label>');
                            var selectElement = $('<select class="form-control" name="year_' + i + '_class_' + j + '"><option value="">Select Class</option></select>');

                            selectedSchoolData.classrooms.forEach(function(className) {
                                selectElement.append('<option value="' + className + '">' + className + '</option>');
                            });

                            yearDiv.append(selectLabel);
                            yearDiv.append(selectElement);
                        }
                        yearClassSelectionDiv.append(yearDiv);
                    }
                }
            });
        });
    </script>
</body>
</html>
