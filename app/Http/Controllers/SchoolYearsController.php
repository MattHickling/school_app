<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Classroom;
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
        $classNames = Classroom::pluck('class_name')->toArray();

        $schoolYears = SchoolYear::all();

        $data = [];

        foreach ($schoolYears as $schoolYear) {
            $numberOfYears = $schoolYear->number_of_years;
            $classesPerYear = $schoolYear->classes_per_year;
            $totalClasses = $numberOfYears * $classesPerYear;

            $data[] = [
                'school_name' => $schoolYear->school_name,
                'number_of_years' => $numberOfYears,
                'classes_per_year' => $classesPerYear,
                'total_classes' => $totalClasses,
                'classrooms' => $classNames, 
            ];
        }

        return view('school_years.show_classes', compact('data'));
    }





    public function getNumberOfClasses($schoolId)
    {
        $school = SchoolYear::find($schoolId);
        if (!$school) {
            return response()->json(['error' => 'School not found']);
        }

        $numberOfYears = $school->number_of_years;
        $numberOfClasses = $school->classes_per_year;

        return response()->json(['numberOfYears' => $numberOfYears, 'numberOfClasses' => $numberOfClasses]);
    }

   


}
