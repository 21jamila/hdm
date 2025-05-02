<?php





namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle the registration of a new user
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Single hash here
        ]);
    
        return redirect()->route('login')->with('success', 'Registration successful!');
    }
    public function logout()
    {
        // Log out the user
        Auth::logout();

        // Redirect to the login page
        return redirect()->route('login');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

   

    public function login(Request $request)
{
    // Validate the input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to login
    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {
        // Login success, redirect to dashboard or homepage
        return redirect()->intended('/dashboard');
    }

    // Login failed
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
}
