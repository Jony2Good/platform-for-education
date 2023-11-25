<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterParentController extends Controller
{
    public function create()
    {
        return view('auth.parent');

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

        return redirect()->route('parent.student');
    }

    public function index()
    {
        $name = Auth::user()->name;
        return view('parent.register.student', compact('name'));
    }
}
