<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('main.create', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
            'preference_of_year' => 'required',
            'strength' => 'required',
            'ECT' => 'nullable',
            'leadership' => 'required',
        ]);

        Teacher::create($data);

        return redirect()->route('teachers.create')->with('success', 'Teacher created successfully');
    }
}

