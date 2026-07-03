<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])
    ->name('home');

Route::get('/students', [StudentController::class, 'students'])
    ->name('students.index');