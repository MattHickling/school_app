<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolYear;

class SchoolYearController extends Controller
{
    public function index()
    {
        $schoolYears = SchoolYear::all();
        return view('school_years.index', compact('schoolYears'));
    }

    public function create()
    {
        return view('school_years.create');
    }

    public function store(Request $request)
    {
        // Validation and saving logic for creating a new school year
    }

    public function edit(SchoolYear $schoolYear)
    {
        return view('school_years.edit', compact('schoolYear'));
    }

    public function update(Request $request, SchoolYear $schoolYear)
    {
        // Validation and updating logic for a school year
    }

    public function destroy(SchoolYear $schoolYear)
    {
        // Deletion logic for a school year
    }
}
