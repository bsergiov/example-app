<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function laravelPage()
    {

        return view('laravel', [
            "arrList" => ["Laravel Jetstream", "Models Directory", "Model Factory Classes"]
        ]);
    }

    public function studentsPage()
    {

        $students = Student::all();
        return view('students', [
            "students" => $students
        ]);
    }
}

