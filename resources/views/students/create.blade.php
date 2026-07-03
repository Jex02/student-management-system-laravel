<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h3>Add Student</h3>

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

            <form action="{{ route('students.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label>Name</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}">

                </div>

                <div class="mb-3">

                    <label>Age</label>

                    <input
                        type="number"
                        name="age"
                        class="form-control"
                        value="{{ old('age') }}">

                </div>

                <div class="mb-3">

                    <label>Course</label>

                    <input
                        type="text"
                        name="course"
                        class="form-control"
                        value="{{ old('course') }}">

                </div>

                <div class="mb-3">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}">

                </div>

                <button class="btn btn-success">

                    Save Student

                </button>

                <a href="{{ route('students.index') }}" class="btn btn-secondary">

                    Cancel

                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>