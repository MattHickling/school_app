<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Personalized Title</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">All School Years and Classes</h1>
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2>School Years and Classes</h2>
        </div>
        <div class="card-body">
            <div>
                <label for="schoolNameSelect">Select School:</label>
                <select id="schoolNameSelect" name="school_name">
                    @foreach ($data as $school)
                        <option value="{{ $school['school_name'] }}">{{ $school['school_name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label id="schoolYearsLabel">Number of Years:</label>
                <span id="schoolYearsValue"></span>
            </div>
            <div>
                <label id="classesPerYearLabel">Classes per Year:</label>
                <span id="classesPerYearValue"></span>
            </div>
            <div id="yearClassSelection">
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
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
                selectElement.innerHTML = '<option value="">Select Class</option>';


                for (var k = 1; k <= selectedSchoolData.classes_per_year; k++) {
                    var optionElement = document.createElement('option');
                    optionElement.value = 'Class ' + k;
                    optionElement.textContent = 'Class ' + k;
                    selectElement.appendChild(optionElement);
                }
                yearDiv.appendChild(selectLabel);
                yearDiv.appendChild(selectElement);
            }
            yearClassSelectionDiv.appendChild(yearDiv);
        }
    });
</script>

</body>
</html>
