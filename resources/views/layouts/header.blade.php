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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item m-2">
                        <a class="nav-link btn btn-primary btn-block" href="/">Home</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link btn btn-success btn-block" href="{{ route('classrooms.create') }}">Add Classroom</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link btn btn-info btn-block" href="{{ route('teachers.create') }}">Add Teacher</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link btn btn-warning btn-block" href="{{ route('teaching-assistants.create') }}">Add Teaching Assistant</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
