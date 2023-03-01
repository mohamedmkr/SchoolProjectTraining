<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
    function index()
    {
        $students = Student::get();
        return view("students.index", compact(["students"]));
    }

    function register()
    {
        return view("students.register");
    }

    function registerHandler(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:students',
            'age' => 'required|max_digits:2',
        ]);
        Student::create([
            "name" => $request->name,
            "age" => $request->age,
        ]);
        return redirect("/");
    }
}
