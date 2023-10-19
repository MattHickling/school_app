<?php

namespace App\Http\Controllers;
use Session;
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

    Session::flash('toastr', [
        'type' => 'success', 
        'message' => 'Classroom added successfully!',
        'position' => 'toast-top-right', 
    ]);
    return view('classrooms.create', compact('teachers'));
    
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'age_of_children' => 'required',
        'number_of_pupils' => 'required',
    ]);
    Session::flash('toastr', [
        'type' => 'success', 
        'message' => 'Classroom added successfully!',
        'position' => 'toast-top-right', 
    ]);

    Classroom::create($data);

    return redirect()->route('classrooms.create')->with('success', 'Class created successfully');
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
