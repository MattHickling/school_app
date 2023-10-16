<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachingAssistant;
use Illuminate\Support\Facades\View;

class TeachingAssistantController extends Controller
{
    public function index()
    {
        $teachingAssistants = TeachingAssistant::all(); 
        return view('teaching_assistants.index', compact('teachingAssistants'));    }
    
    public function show($id)
    {
        // Logic for displaying a specific resource
    }
    
    public function create()
    {
        $teaching_assistants = TeachingAssistant::all();
        return view('teaching_assistants.create')->with('success', 'Class created successfully');
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
    }}
