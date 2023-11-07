<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use App\Models\SchoolYear;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SchoolYearsController extends Controller
{
    public function create()
    {
        return view('school_years.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number_of_years' => 'required|integer',
            'classes_per_year' => 'required|integer',
        ]);

        SchoolYear::create($data);

        return redirect()->route('school_years.create')->with('success', 'School years data created successfully');
    }
        
    public function showClasses($schoolYearId)
    {
        // Find the school year by its ID
        $schoolYear = SchoolYear::find($schoolYearId);

        if (!$schoolYear) {
            // Handle the case where the school year is not found
            abort(404); // You can customize the error response here
        }

        // Load the associated classes and teachers
        $schoolYear->load('classes.teachers');

        // Get all available teachers (you may have a separate method for this)
        $teachers = Teacher::all();

        return view('school_years.show-classes', compact('schoolYear', 'teachers'));
    }


}
