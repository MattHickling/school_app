<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachingAssistant;

class TeachingAssistantController extends Controller
{
    public function index()
    {
        $teachingAssistants = TeachingAssistant::all(); 
        return view('teaching_assistants.index', compact('teachingAssistants'));
    }

    public function create()
    {
        return view('teaching_assistants.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
            'preference_of_year' => 'required',
            'strength' => 'required',
            'higher_ta' => 'required',
        ]);

        TeachingAssistant::create($data);

        return redirect()->route('teaching-assistants.create')->with('success', 'Class created successfully');
    }
}
