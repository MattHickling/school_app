<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function create()
    {
        $teachers = Teacher::all();
        return view('classrooms.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age_of_children' => 'required',
            'number_of_pupils' => 'required',
        ]);

        Classroom::create($data);

        return redirect()->route('classrooms.create')->with('success', 'Classroom created successfully');
    }
}
