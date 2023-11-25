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
        $name = Auth::user()->name;
        return view('admin.layouts.main', compact('name'));
    }
}
