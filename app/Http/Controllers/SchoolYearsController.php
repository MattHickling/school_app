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
    
        // Initialize an empty array to store school names
        $schoolNames = [];
    
        foreach ($schoolYears as $schoolYear) {
            // Access the school name from each SchoolYear instance
            $schoolNames[] = $schoolYear->school_name;
        }
    
        // Assuming you only want the first school name, you can use the first() method
        $school = $schoolNames[0] ?? null;
    
        $teacherNames = $teachers->map(function ($teacher) {
            return $teacher->first_name . ' ' . $teacher->surname;
        });
    
        $classes = $schoolYears->flatMap(function ($schoolYear) {
            return $schoolYear->classrooms->pluck('age_of_children', 'id');
        });
    
        // Check if $school is null before passing it to the view
        if ($school) {
            return view('school_years.show_classes', compact('schoolYears', 'teacherNames', 'classes', 'school'))
                ->with('success', 'School created successfully');
        } else {
            return view('school_years.show_classes', compact('schoolYears', 'teacherNames', 'classes'))
                ->with('warning', 'No school found');
        }
    }

    public function getNumberOfClasses($schoolYear, $classId)
    {
        $numberOfClasses = SchoolYear::where('school_year', $schoolYear)
                                        ->where('class_id', $classId)
                                        ->count();

        return response()->json(['numberOfClasses' => $numberOfClasses]);
    }
}
