<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
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
    $teachers = Classroom::all();


    return view('classrooms.create', compact('teachers'));
    
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'age_of_children' => 'required',
        'number_of_pupils' => 'required',
        'teacher_id' => 'required', // Make sure you have a field for teacher_id in your form.
    ]);

    // Check if the provided teacher_id exists in the teachers table before creating a classroom.
    if (Teacher::where('id', $data['teacher_id'])->exists()) {
        Classroom::create($data);
        return view('classrooms.create')->with('toastr_message', 'Classroom created successfully');
    } else {
        // Handle the case where the teacher_id doesn't exist.
        return view('classrooms.create')->with('error_message', 'Invalid teacher selected');
    }
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
