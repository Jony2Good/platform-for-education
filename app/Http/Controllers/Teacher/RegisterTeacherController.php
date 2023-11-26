<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterTeacherController extends Controller
{
    public function create()
    {
        return view('auth.teacher');

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

        return redirect()->route('teacher.admin');
    }

    public function index()
    {
        return view('teacher.layouts.main');
    }

    public function show()
    {
        return view('teacher.journal.jornal');
    }

    public function createList()
    {
        $data = [
            ['id' => 1, 'class' => '1 A', 'surname' => 'Иванова', 'name' => 'Мария', 'study' => 3.5, 'phone' => '8917-XXX-XX-XX'],
            ['id' => 2, 'class' => '1 A', 'surname' => 'Сидоров', 'name' => 'Сергей', 'study' => 4.5, 'phone' => '8917-XXX-XX-XX'],
            ['id' => 3, 'class' => '1 A', 'surname' => 'Федоров', 'name' => 'Николай', 'study' => 3.8, 'phone' => '8917-XXX-XX-XX'],
            ['id' => 3, 'class' => '2 В', 'surname' => 'Семенов', 'name' => 'Андрей', 'study' => 4.4, 'phone' => '8917-XXX-XX-XX'],
            ['id' => 3, 'class' => '2 В', 'surname' => 'Павлов', 'name' => 'Михаил', 'study' => 4, 'phone' => '8917-XXX-XX-XX'],
        ];
        return view('teacher.students.list', compact('data'));

    }

    public function showStudent()
    {
        return view('teacher.students.show');
    }

    public function editJournal()
    {
        return view('teacher.journal.jornal');
    }

    public function add()
    {
        return view('teacher.students.add');
    }

    public function showNews()
    {
        return view('teacher.news.slider');
    }

    public function createMsg()
    {
        return view('teacher.admin.message');
    }

    public function createNews()
    {
        return view('teacher.news.addNews');
    }
}
