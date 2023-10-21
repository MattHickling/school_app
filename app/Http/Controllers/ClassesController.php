<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Teacher; 
use App\Models\SchoolYear;

class ClassesController extends Controller
{
    public function displayForm()
    {
        return view('classes.create'); // Update to the correct view path
    }

    public function selectTeachers(Request $request)
{
    // Assuming you have a model for school years
    $schoolYears = SchoolYear::all();

    // You can fetch the years and classes from your $schoolYears data
    $years = $schoolYears->pluck('years');
    $numClasses = $schoolYears->pluck('number_of_classes');

    // Fetch the teachers
    $teachers = Teacher::all();

    return view('classes.create', compact('years', 'numClasses', 'teachers'));
}

    public function processSelection(Request $request)
    {
        $academicSettings = AcademicSetting::all(); // Assuming AcademicSetting is your model for the table.

// Use the data in your controller
        $selectedClasses = $request->input('selectedClasses');

        return view('classes.create', ['selectedClasses' => $selectedClasses]); // Update to the correct view path
    }
}

