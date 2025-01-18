<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister () {
        return view('register');
    }
    public function register (Request $request) {
      
    }
}
