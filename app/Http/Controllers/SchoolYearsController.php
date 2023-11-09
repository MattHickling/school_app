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
        
    public function showClasses()
    {
        // Get all school years
        $schoolYears = SchoolYear::all();
    
        // Load classrooms for each school year
        $schoolYears->load('classrooms');
    
        // Get all available teachers (you may have a separate method for this)
        $teachers = Teacher::all();
    
        return view('school_years.show_classes', compact('schoolYears', 'teachers'));
    }

}
