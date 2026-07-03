<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student List</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">
    
    <!-- Success Message -->
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">

            <strong>Success!</strong>
            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>

        </div>

    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h1 class="mb-0">Student List</h1>
                <small class="text-muted">Manage all registered students.</small>
            </div>

            <div>

                <a href="{{ route('home') }}" class="btn btn-secondary me-2">
                    <i class="bi bi-house-fill"></i> Home
                </a>

                <a href="{{ route('students.create') }}" class="btn btn-success">
                    <i class="bi bi-person-plus-fill"></i> Add Student
                </a>

            </div>

        </div>

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-hover align-middle mb-0"> 
                <thead class="table-dark">

                    <tr>

                        <th>ID</th>

                        <th>Name</th>

                        <th>Age</th>

                        <th>Course</th>

                        <th>Email</th>

                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse ($students as $student)

                        <tr>

                            <td>{{ $student->id }}</td>

                            <td>{{ $student->name }}</td>

                            <td>{{ $student->age }}</td>

                            <td>{{ $student->course }}</td>

                            <td>{{ $student->email }}</td>

                            <td>
                                <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="text-center">

                                No students found.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>