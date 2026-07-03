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
}