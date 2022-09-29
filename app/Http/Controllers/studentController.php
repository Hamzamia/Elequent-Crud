<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    //
    public function allStudent()
    {
        // $students = Student::all();
        // $students = Student::where('id', 1)->get();
        // $students = Student::whereBetween('id', [1, 5])->get();
        $students = Student::whereBetween('id', [5, 10])->orderBy('id', 'DESC')->get();
        return $students;
    }
}