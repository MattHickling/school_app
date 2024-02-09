<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Personalized Title</title>
    <!-- Bootstrap CSS -->
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
            <div id="classSelection">
                <!-- Here you can display the selected school's classes -->
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Add event listener to the school name select element
    document.getElementById('schoolNameSelect').addEventListener('change', function() {
        // Get the selected school name
        var selectedSchoolName = this.value;
        // Find the school data from the data array
        var selectedSchoolData = {!! json_encode($data) !!}.find(function(school) {
            return school.school_name === selectedSchoolName;
        });
        // Update the school years value on the screen
        document.getElementById('schoolYearsValue').textContent = selectedSchoolData ? selectedSchoolData.number_of_years : '';
    });
</script>

</body>
</html>
