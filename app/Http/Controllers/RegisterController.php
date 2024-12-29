<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'email|required|max:20',
            'password' => 'string|required|max:20'
        ]);

        User::create($validatedData);
    }
}
