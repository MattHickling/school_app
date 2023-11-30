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
            'school_name' => 'required',
        ]);

        SchoolYear::create($data);

        return redirect()->route('school_years.create')->with('success', 'School years data created successfully');
    }

    public function showClasses()
    {
        $teachers = Teacher::all();
        $schoolYears = SchoolYear::with('classrooms')->get();

        $teacherNames = $teachers->map(function ($teacher) {
            return $teacher->first_name . ' ' . $teacher->surname;
        });

        $classes = $schoolYears->flatMap(function ($schoolYear) {
            return $schoolYear->classrooms->pluck('age_of_children', 'id');
        });

        return view('school_years.show_classes', compact('schoolYears', 'teacherNames', 'classes'))
            ->with('success', 'School created successfully');
    }

    public function getNumberOfClasses($schoolYear, $classId)
    {
        $numberOfClasses = SchoolYear::where('school_year', $schoolYear)
                                        ->where('class_id', $classId)
                                        ->count();

        return response()->json(['numberOfClasses' => $numberOfClasses]);
    }
}
