<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class RegisterParentController extends Controller
{
    public function __invoke()
    {
      return view('regcards.index');
    }
}
