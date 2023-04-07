<?php

namespace App\Http\Controllers;

use Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function index()
    // {
    //     if($user = Auth::user()){
    //     if($user->level == '1'){
    //         return redirect()->intended('beranda');
    //     }elseif($user->level =='2'){
    //         return redirect()->intended('kasir');
    //     }
    // }
    // return view('login');

    // }
    public function proses(Request $request){
        $kredensial = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'email tidak boleh kosong'
        ]
    );

    // $kredensial = $request->only('email','password');

    if(Auth::attempt($kredensial)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    // return back()->with('loginError', 'Email atau Password salah');
    // $request->session()->regenerate();
    // return redirect()->intended('/dashboard');
        return back()->withErrors([
            'email'=>'Maaf email atau password anda salah'
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
