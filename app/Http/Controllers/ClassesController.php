<?php

namespace App\Http\Controllers;

use App\Models\Teacher; 
use App\Models\SchoolYear;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;



class ClassesController extends Controller
{
    public function displayForm()
    {
        return view('classes.create'); // Update to the correct view path
    }

    public function selectTeachers(Request $request)
        {
    // Assuming you have a model for school years
    $years = SchoolYear::all();

    // You can fetch the years and classes from your $schoolYears data
    $years = $schoolYears->pluck('years');
    $numClasses = $schoolYears->pluck('number_of_classes');

    // Fetch the teachers
    $teachers = Teacher::all();

    return view('classes.create', compact('years', 'numClasses', 'teachers'));
    }

    public function processSelection(Request $request)
    {
        $schoolYears = SchoolYear::all(); // Fetch data from the SchoolYear model

        // Use the data in your controller
        $selectedClasses = $request->input('selectedClasses');

        return view('classes.create', [
            'schoolYears' => $schoolYears, // Pass the SchoolYear data to the view
            'selectedClasses' => $selectedClasses,
        ]);
    }
}

