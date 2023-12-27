@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">All School Years and Classes</h1>

        <div class="card mb-4">
            <!-- ... (rest of your HTML code) -->

            <script>
                document.addEventListener('livewire:load', function () {
                    Livewire.on('updateSelectedValues', function (data) {
                        // Handle the updated values here
                        console.log(data.selectedSchool, data.selectedClass, data.selectedTeacher);
                    });
                });
            </script>
        </div>
    </div>
@endsection
