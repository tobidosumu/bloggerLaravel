<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->withSuccess('Signed in');
        }
  
        // return redirect("login")->withSuccess('Login details are not valid');
        return redirect('login')->with('error', 'These credentials do not match our records.');
    }

    public function registration()
    {
        return view('auth.register');
    }
      
    // Register page validation method
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|min:2|unique:users',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/',
            'password_confirmation' => 'required_with:password|same:password',
        ], [
            'name.required' => 'Name cannot be empty.',
            'name.min' => 'Name must be at least :min characters.',
            'name.max' => 'The name may not be greater than :max characters.',

            'email.required' => 'Email cannot be empty.',
            'email.email' => 'The email must be a valid email address.',
            'email.min' => 'The email must be at least :min characters.',
            'email.unique' => 'The email has already been taken.',

            'password.required' => 'Password cannot be empty.',
            'password.min' => 'Password must be at least :min characters.',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
            'password_confirmation.required_with' => 'Password confirmation field is required.',
            'password_confirmation.same' => 'The password confirmation does not match the password.'
        ]);
    
        $data = $request->all();
        $check = $this->create($data);
    
        return redirect('dashboard');
    }    

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        // Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}