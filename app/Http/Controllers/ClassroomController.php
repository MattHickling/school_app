<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ClassroomController extends Controller
{
    // Display the form to create a new classroom
    public function create()
    {
        return view('classrooms.create');
    }

    // Store a new classroom in the database
    public function store(Request $request)
    {
        // Validate the input data
        $data = $request->validate([
            'age_of_children' => 'required',
            'number_of_pupils' => 'required|integer',
        ]);

        // Create a new classroom
        $classroom = Classroom::create($data);

        return redirect()->route('classrooms.create')->with('success', 'Classroom created successfully');
    }
}
