<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withInput($request->only('email'))
                     ->withErrors(['email' => 'These credentials do not match our records.']);
    }
}
