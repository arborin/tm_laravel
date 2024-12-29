<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {

        $credentianals = $request->validate([
            'password' => 'required|max:20',
            'email' => 'email|required',
        ]);

        if (Auth::attempt($credentianals)) {
            $request->session()->regenerate();
            return redirect()->intended()->with('success', 'auth success!');
        } else {
            return back()->withErrors([
                'email' => "invalid credentionals!"
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->intended();
    }
}
