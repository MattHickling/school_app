<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('main.create', compact('teachers'));
    }
    
    public function show($id)
    {
        // Logic for displaying a specific resource
    }
    
    public function create()
    {
        $teachers = Teacher::all();
        return view('teachers.create', compact('teachers'));    }
    
    public function store(Request $request)
    
    {
        $data = $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
            'preference_of_year' => 'required',
            'strength' => 'required',
            'ECT' => 'nullable|required',
            'leadership' => 'required',
        ]);

        Teacher::create($data);

        return redirect()->route('teachers.create')->with('success', 'Teacher created successfully');

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
