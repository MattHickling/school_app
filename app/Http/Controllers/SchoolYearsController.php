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
        // Fetch the school year from the database or any other logic
        $schoolYear = SchoolYear::find(1); // Assuming you have a SchoolYear model and you're fetching it by ID 1

        $schoolYears = SchoolYear::all();
        $schoolYears->load('classrooms');
        $teachers = Teacher::all();

        return view('school_years.show_classes', compact('schoolYear', 'schoolYears', 'teachers'));
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

}
