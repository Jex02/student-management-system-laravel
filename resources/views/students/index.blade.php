<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Management System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-mortarboard-fill"></i>
                Student Management System
            </a>

            <div class="navbar-nav ms-auto">

                <a class="nav-link active" href="{{ route('home') }}">
                    Home
                </a>

                <a class="nav-link" href="{{ route('students.index') }}">
                    Students
                </a>

                <a class="nav-link" href="#">
                    Add Student
                </a>

            </div>

        </div>
    </nav>

    <!-- HERO -->
    <div class="container mt-5">

        <div class="card shadow border-0">

            <div class="card-body text-center p-5">

                <h1 class="display-4 fw-bold">
                    Welcome Back!
                </h1>

                <p class="lead text-muted">
                    Manage your students efficiently with Laravel.
                </p>

            </div>

        </div>

    </div>

    <!-- QUICK ACTIONS -->

    <div class="container mt-5">

        <h3 class="fw-bold mb-4">
            Quick Actions
        </h3>

        <div class="row">

            <!-- VIEW STUDENTS -->

            <div class="col-md-6 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-people-fill display-1 text-primary"></i>

                        <h3 class="mt-3">
                            View Students
                        </h3>

                        <p class="text-muted">
                            Browse all registered students.
                        </p>

                        <a href="{{ route('students.index') }}" class="btn btn-primary w-100">
                            Open
                        </a>

                    </div>

                </div>

            </div>

            <!-- ADD STUDENT -->

            <div class="col-md-6 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-person-plus-fill display-1 text-success"></i>

                        <h3 class="mt-3">
                            Add Student
                        </h3>

                        <p class="text-muted">
                            Register a new student.
                        </p>

                        <button class="btn btn-success w-100">
                            Open
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- FOOTER -->

    <footer class="text-center mt-5 mb-4 text-muted">

        Student Management System • Laravel 13 • Bootstrap 5 • SQLite

    </footer>

</body>

</html>