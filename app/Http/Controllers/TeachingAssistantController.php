<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('teaching_assistants.create');
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
    }}
