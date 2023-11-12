<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Year and Class Selector</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a class="navbar-brand" href="/">
                            <h1 class="display-4" style="color: #007BFF;">Staffing Structure</h1>
                        </a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-primary btn-block btn-equal-size text-white" href="{{ route('teacher.plan') }}">Add School</a>
                        </li>
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-success btn-block btn-equal-size text-white" href="{{ route('classrooms.create') }}">Add Classroom</a>
                        </li>
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-info btn-block btn-equal-size text-white" href="{{ route('teachers.create') }}">Add Teacher</a>
                        </li>
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-warning btn-block btn-equal-size text-white" href="{{ route('teaching-assistants.create') }}">Add Teaching Assistant</a>
                        </li>
                        <li class="nav-item mx-2 flex-fill">
                            <a class="nav-link btn btn-secondary btn-block btn-equal-size text-white" href="{{ route('school_years.show_classes') }}">Show School Year Classes</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    <div class="wrapper">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center py-3">
        <p>&copy; {{ date('Y') }} Your App Name. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        .wrapper {
            min-height: 85vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1;
        }
        .btn-equal-size {
            width: 100%;
            color: white; /* Set text color to white */
        }
    </style>
</html>
