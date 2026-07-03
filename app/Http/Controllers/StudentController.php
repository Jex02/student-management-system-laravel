<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function students()
    {
        $students = Student::all();

        return view('students.students', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'   => 'required|min:3',
            'age'    => 'required|integer|min:1|max:100',
            'course' => 'required',
            'email'  => 'required|email|unique:students,email',
        ]);

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student added successfully!');
    }
}