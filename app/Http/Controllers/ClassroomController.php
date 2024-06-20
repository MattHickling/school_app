<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    // Display the form to create a new classroom
    public function create()
    {
        return view('classrooms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'age_of_children' => 'required',
            'number_of_pupils' => 'required|integer',
            'class_name' => 'required',
            'school_year_id' => 'exists:school_years,id', 
            'number_of_sen' => 'required',
        ]);

       
        $classroom = Classroom::create($data);

        return redirect()->route('classrooms.create')->with('success', 'Classroom created successfully');
    }
}
