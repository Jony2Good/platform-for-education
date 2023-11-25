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
        $name = Auth::user()->name;
        return view('teacher.layouts.main', compact('name'));
    }
}
