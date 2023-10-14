<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
{
    $classrooms = Classroom::all(); 
    return view('classrooms.index', compact('classrooms'));}

public function show($id)
{
    // Logic for displaying a specific resource
}

public function create()
{
    return view('classrooms.create');
}

public function store(Request $request)
{
    // Logic for storing a new resource
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
