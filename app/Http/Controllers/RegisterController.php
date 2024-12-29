<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->toArray());
        $validatedData = $request->validate([
            'name' => 'string|required|max:20',
            'password' => 'required|max:20',
            'email' => 'email|required',
        ]);

        // dd($validatedData);
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        return redirect()->route('login')->with('success', 'User created seccessfully!');
    }
}
