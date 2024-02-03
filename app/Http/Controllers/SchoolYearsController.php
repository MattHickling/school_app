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
        // Retrieve all school years
        $schoolYears = SchoolYear::all();

        $data = [];

        foreach ($schoolYears as $schoolYear) {
            // Retrieve teachers associated with the current school year
            $teachers = Teacher::where('school_year_id', $schoolYear->id)->get();
            
            // Retrieve classrooms associated with the current school year and count them
            $numberOfClassrooms = Classroom::where('school_year_id', $schoolYear->id)->count();

            $data[$schoolYear->school_name] = [
                'teachers' => $teachers->pluck('first_name', 'id')->toArray(),
                'numberOfClassrooms' => $numberOfClassrooms,
            ];
        }

        return view('school_years.show_classes')->with('data', $data);
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
