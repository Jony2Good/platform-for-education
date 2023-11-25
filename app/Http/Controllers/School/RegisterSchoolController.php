<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\School\StoreRequest;

class RegisterSchoolController extends Controller
{
    public function create()
    {
        return view('auth.school');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => $data['role'],
        ]);
        Auth::login($user);

        return redirect()->route('school.admin');
    }

    public function index()
    {

        return view('admin.layouts.main');
    }

    public function show()
    {
        return view('admin.calendar.calendar');
    }

    public function showTeachers()
    {
        return view('admin.teachers.teachers');

    }

    public function showStudents()
    {
        return view('admin.students.students');
    }

    public function addStudents()
    {
        return view('admin.students.addstudent');
    }

    public function showNews()
    {
        return view('admin.news.news');
    }

    public function addLesson()
    {
        return view('admin.news.news');
    }

    public function showJornal()
    {
        return view('admin.jornal.jornal');
    }

    public function addLessons()
    {
        return view('admin.jornal.addLesson');
    }

    public function addTeacher()
    {
        return view('admin.teachers.addteacher');
    }
}
