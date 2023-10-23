<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\TeachingAssistant;

use Illuminate\View\View;
use Illuminate\Http\Request;


class ClassroomController extends Controller
{
    public function index()
{
    $classrooms = Classroom::all(); 

   
    return view('classrooms.index', compact('classroom'));}

public function show($id)
{
    // Logic for displaying a specific resource
}

public function create()
{
    $teachers = Teacher::all();
    return view('classrooms.create', compact('teachers'));
}


public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'nullable', // Make 'name' field optional
        'age_of_children' => 'required',
        'number_of_pupils' => 'required',
    ]);
    $teachers = Teacher::all();


    Classroom::create($data);
    
    return redirect()->route('classrooms.create')->with('toastr_message', 'Classroom created successfully');
}


public function edit($id)
{
    // Logic for displaying the edit form
}

public function update(Request $request, $id)
{
    // Logic for updating an existing resource
}

public function destroy($id)
{
    // Logic for deleting a resource
}
}
