<?php

namespace App\Http\Controllers;

// use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        if ($validator->fails()) {
            return back()->withInput()
            ->withErrors($validator);
        }

        // $user = new User();
        // $user->firstName = $request->input('firstName');
        // $user->lastName = $request->input('lastName');
        // $user->email = $request->input('email');
        // $user->password = Hash::make($request->input('password'));
        // $user->save();

        return redirect()->route('login')
        ->with('success', 'Your account has been created successfully. You can now log in.');
    }
}
