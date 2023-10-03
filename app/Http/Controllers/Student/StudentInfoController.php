<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    public function getGrades()
    {
        return view('student.info.grades');    
    }
}
