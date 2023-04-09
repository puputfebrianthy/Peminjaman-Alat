<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        // return dd($credential);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'username' => 'Wrong username or password',
        ]);

    // return back()->with('loginError', 'Email atau Password salah');
    // $request->session()->regenerate();
    // return redirect()->intended('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function register(Request $request)
    {
        return view('register');
    }
    public function registration(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:20|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            // 'hp' => 'max:15',
            // 'password' => 'min:5|max:30|required_with:confirm_password|same:confirm_password',
            // 'confirm_password' => 'required'
        ]);

        $validateData = [
            'username' => $request->username,
            'email' => $request->email,
            'level' => 'admin',
            // 'usergroup' => $request->usergroup,
            'password' => $request->password,
        ];
        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        return back()->with('success', 'Register Successfull!');
    }
}