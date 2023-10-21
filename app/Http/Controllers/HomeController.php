<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\View\View;

use Illuminate\Http\Request;
use App\Models\TeachingAssistant;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index()
    {
        // Logic for displaying a list of resources
    }

    public function mainCreate()
    {
dd('jhgjug');    }

    public function processSelection(Request $request)
{
    // Retrieve the form data from the request
    $formData = $request->all();

    // Process the data and organize it as needed
    $selectedClasses = [];

    foreach ($formData['years'] as $year => $numClasses) {
        $classes = [];
        for ($i = 1; $i <= $numClasses; $i++) {
            $classes[] = $formData["year{$year}_class{$i}"];
        }
        $selectedClasses[$year] = $classes;
    }

    // Pass the selected classes to the view
    return view('selected-classes', compact('selectedClasses'));
}
    
    public function show($id)
    {
        // Logic for displaying a specific resource
    }
    
    public function create()
    {
        return view('main.create');
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
