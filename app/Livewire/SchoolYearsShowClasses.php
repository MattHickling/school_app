<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use App\Models\SchoolYear;
use Livewire\Component;

class SchoolYearsShowClasses extends Component
{
    public $schoolNames;
    public $teacherNames;
    public $classes;
    public $selectedSchool;
    public $selectedClass;
    public $selectedTeacher;

    public function render()
    {
        $teachers = Teacher::all();
        $schoolYears = SchoolYear::with('classrooms')->get();

        $this->schoolNames = SchoolYear::distinct('school_name')->pluck('school_name', 'id')->toArray();
        $this->teacherNames = $teachers->map(function ($teacher) {
            return $teacher->first_name . ' ' . $teacher->surname;
        });

        $this->classes = $schoolYears->flatMap(function ($schoolYear) {
            return $schoolYear->classrooms->pluck('age_of_children', 'id');
        });

        return view('livewire.school-years-show-classes');
    }

    public function updatedSelectedSchool()
    {
        $this->updateSelectedValues();
    }

    public function updatedSelectedClass()
    {
        $this->updateSelectedValues();
    }

    public function updatedSelectedTeacher()
    {
        $this->updateSelectedValues();
    }

    private function updateSelectedValues()
    {
        $this->emit('updateSelectedValues', [
            'selectedSchool' => $this->selectedSchool,
            'selectedClass' => $this->selectedClass,
            'selectedTeacher' => $this->selectedTeacher,
        ]);
    }
}
