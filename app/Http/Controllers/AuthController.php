<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class AuthController extends Controller
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
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Default user credentials
        $defaultUserEmail = 'testtean@testing.com'; // Replace with your default email
        $defaultUserPassword = 'testing123'; // Replace with your default password

        // Check if provided credentials match the default credentials
        if ($credentials['email'] === $defaultUserEmail && $credentials['password'] === $defaultUserPassword) {
            $user = User::where('email', $defaultUserEmail)->first();
            if (!$user) {
                // Create the default user if it does not exist
                $user = User::create([
                    'first_name' => 'Default',
                    'last_name' => 'User',
                    'email' => $defaultUserEmail,
                    'password' => Hash::make($defaultUserPassword),
                ]);
            }
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // Normal login attempt
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }



    public function showCreateAccountForm()
    {
        return view('create-account');
    }

    public function showDebitRequestForm()
    {
        return view('debit-request');
    }
}
