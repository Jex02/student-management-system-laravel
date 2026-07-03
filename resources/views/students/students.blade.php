<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="mb-4">
        Student List
    </h1>

    <div class="card shadow">

        <div class="card-body">
            <table class="table table-striped table-hover">

    <thead class="table-dark">

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Age</th>

            <th>Course</th>

            <th>Email</th>

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

            </tr>

        @empty

            <tr>

                <td colspan="5" class="text-center">

                    No students found.

                </td>

            </tr>

        @endforelse

    </tbody>

</table>

        </div>

    </div>

</div>

</body>

</html>