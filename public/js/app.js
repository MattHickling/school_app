// Retrieve the embedded school data
var schoolData = JSON.parse(document.getElementById('schoolData').textContent);

// This event listener triggers when the user selects a school from the dropdown
document.getElementById('schoolNameSelect').addEventListener('change', function() {
    // Get the selected school name
    var selectedSchoolName = this.value;
    
    // Find the data of the selected school from the embedded data
    var selectedSchoolData = schoolData.find(function(school) {
        return school.school_name === selectedSchoolName;
    });

    // Update the display with the number of years and classes per year for the selected school
    document.getElementById('schoolYearsValue').textContent = selectedSchoolData ? selectedSchoolData.number_of_years : '';
    document.getElementById('classesPerYearValue').textContent = selectedSchoolData ? selectedSchoolData.classes_per_year : '';

    // Get the container div where the year and class selection will be displayed
    var yearClassSelectionDiv = document.getElementById('yearClassSelection');
    // Clear previous content
    yearClassSelectionDiv.innerHTML = ''; 

    // Loop through each year of the selected school
    for (var i = 1; i <= selectedSchoolData.number_of_years; i++) {
        // Create a div for each year
        var yearDiv = document.createElement('div');
        yearDiv.classList.add('mb-3');
        // Set the heading for the year
        yearDiv.innerHTML = '<h4>Year ' + i + ' Classes:</h4>';
        
        // Loop through each class in the year
        for (var j = 1; j <= selectedSchoolData.classes_per_year; j++) {
            // Create a label for the class
            var selectLabel = document.createElement('label');
            selectLabel.textContent = 'Class ' + j + ': ';
            
            // Create a select dropdown for the class
            var selectElement = document.createElement('select');
            selectElement.name = 'year_' + i + '_class_' + j;
            selectElement.classList.add('form-control');
            selectElement.innerHTML = '<option value="">Select Class</option>';

            // Populate the select dropdown with class names from the embedded data
            selectedSchoolData.classrooms.forEach(function(className) {
                var optionElement = document.createElement('option');
                optionElement.value = className;
                optionElement.textContent = className;
                selectElement.appendChild(optionElement);
            });

            // Add the label and select dropdown to the year div
            yearDiv.appendChild(selectLabel);
            yearDiv.appendChild(selectElement);
        }
        
        // Add the year div to the container div
        yearClassSelectionDiv.appendChild(yearDiv);
    }
});
