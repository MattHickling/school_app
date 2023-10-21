<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;

class ClassesController extends Controller
{
    public function displayForm()
    {
        return view('classes.create'); // Update to the correct view path
    }

    public function selectTeachers(Request $request)
    {
        // Logic for handling class selection

        // You can access the selected years and classes from the $request
        // and then retrieve and display teachers accordingly

        return view('classes.create', ['teachers' => $teachers]);
    }

    public function processSelection(Request $request)
    {
        // Process the submitted form data
        // Retrieve selected classes and years from the request

        // Example: Retrieve data from the request
        $selectedClasses = $request->input('selectedClasses');

        return view('classes.selected-classes', ['selectedClasses' => $selectedClasses]); // Update to the correct view path
    }
}

