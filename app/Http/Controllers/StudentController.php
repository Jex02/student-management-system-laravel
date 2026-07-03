<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index'); 
    }

    public function students()
    {
        return view('students.students');
    }
}