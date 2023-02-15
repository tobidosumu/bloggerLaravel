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
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => 'required'
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('posts')->withSuccess('Signed in');
        }
  
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
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|min:5|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])/m',
                'regex:/^(?=.*[A-Z])/m',
                'regex:/^(?=.*\d)/m',
                'confirmed',
            ],
            'password_confirmation' => 'required_with:password|same:password',
        ], [
            'name.required' => 'Name cannot be empty.',
            'name.min' => 'Name must be at least :min characters.',
            'name.max' => 'Name cannot be greater than :max characters.',
            'email.required' => 'Email cannot be empty.',
            'email.email' => 'Email must be a valid email address.',
            'email.min' => 'Email must be at least :min characters.',
            'email.unique' => 'Email has already been taken.',
            'password.required' => 'Password cannot be empty.',
            'password.min' => 'Password must be at least :min characters.',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter and one number',
            'password_confirmation.required_with' => 'Password confirmation field is required.',
            'password_confirmation.same' => 'Password confirmation does not match the password.',
            'password_confirmation.confirmed' => 'Password confirmation does not match the password.'
        ]);
    
        $data = $request->all();
        $check = $this->create($data);
    
        return redirect('login')->withSuccess('You have signed-in');
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
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}