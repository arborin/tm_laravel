<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'email|required|max:20',
            'password' => 'string|required|max:20'
        ]);
    }
}
