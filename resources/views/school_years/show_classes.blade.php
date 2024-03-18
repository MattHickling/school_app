<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Personalized Title</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a class="navbar-brand" href="/">
                            <h1 class="display-4" style="color: #007BFF;">Staffing Structure</h1>
                        </a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-primary btn-block btn-equal-size text-white" href="{{ route('school_years.create') }}">Add School</a>
                        </li>
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-success btn-block btn-equal-size text-white" href="{{ route('classrooms.create') }}">Add Classroom</a>
                        </li>
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-info btn-block btn-equal-size text-white" href="{{ route('teachers.create') }}">Add Teacher</a>
                        </li>
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-warning btn-block btn-equal-size text-white" href="{{ route('teaching-assistants.create') }}">Add Teaching Assistant</a>
                        </li>
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-secondary btn-block btn-equal-size text-white" href="{{ route('school_years.show_classes') }}">Show School Year Classes</a>
                        </li>
                        
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>


    <div class="container mt-5">
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
                <div id="yearClassSelection">
                </div>
                
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.getElementById('schoolNameSelect').addEventListener('change', function() {
        var selectedSchoolName = this.value;
        var selectedSchoolData = {!! json_encode($data) !!}.find(function(school) {
            return school.school_name === selectedSchoolName;
        });

        document.getElementById('schoolYearsValue').textContent = selectedSchoolData ? selectedSchoolData.number_of_years : '';
        document.getElementById('classesPerYearValue').textContent = selectedSchoolData ? selectedSchoolData.classes_per_year : '';

        var yearClassSelectionDiv = document.getElementById('yearClassSelection');
        yearClassSelectionDiv.innerHTML = ''; // Clear previous content
        for (var i = 1; i <= selectedSchoolData.number_of_years; i++) {
            var yearDiv = document.createElement('div');
            yearDiv.classList.add('mb-3');
            yearDiv.innerHTML = '<h4>Year ' + i + ' Classes:</h4>';
            for (var j = 1; j <= selectedSchoolData.classes_per_year; j++) {
                var selectLabel = document.createElement('label');
                selectLabel.textContent = 'Class ' + j + ': ';
                var selectElement = document.createElement('select');
                selectElement.name = 'year_' + i + '_class_' + j;
                selectElement.classList.add('form-control');
                selectElement.innerHTML = '<option value="">Select Class</option>';

                selectedSchoolData.classrooms.forEach(function(className) {
                    var optionElement = document.createElement('option');
                    optionElement.value = className;
                    optionElement.textContent = className;
                    selectElement.appendChild(optionElement);
                });

                yearDiv.appendChild(selectLabel);
                yearDiv.appendChild(selectElement);
            }
            yearClassSelectionDiv.appendChild(yearDiv);
        }
    });
</script>

</body>
</html>
