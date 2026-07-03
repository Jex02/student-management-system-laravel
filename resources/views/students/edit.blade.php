<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">

            <h3>
                <i class="bi bi-pencil-square"></i>
                Edit Student
            </h3>

        </div>

        <div class="card-body">

            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{ route('students.update', $student) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label>Name</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name', $student->name) }}">

                </div>

                <div class="mb-3">

                    <label>Age</label>

                    <input
                        type="number"
                        name="age"
                        class="form-control"
                        value="{{ old('age', $student->age) }}">

                </div>

                <div class="mb-3">

                    <label>Course</label>

                    <input
                        type="text"
                        name="course"
                        class="form-control"
                        value="{{ old('course', $student->course) }}">

                </div>

                <div class="mb-3">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email', $student->email) }}">

                </div>

                <button class="btn btn-warning">
                    <i class="bi bi-save"></i>
                    Update Student
                </button>

                <a href="{{ route('students.index') }}" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>