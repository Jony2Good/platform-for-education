<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class RegisterStudentController extends Controller
{
    public function create()
    {
        return view('auth.student');

    }

    public function store()
    {

    }
}
