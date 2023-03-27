<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if($user = Auth::user()){
        if($user->level == '1'){
            return redirect()->intended('beranda');
        }elseif($user->level =='2'){
            return redirect()->intended('kasir');
        }
    }
    return view('login');

    }
    public function proses(Request $request){
        $request->validasi([
            'username'=>'required',
            'password'=>'required'
        ],
        [
            'username.required'=>'Username tidak boleh kosong'
        ]
    );

    $kredensial = $request->only('username','password');

    if(Auth::attempt($kredensial)){
        $request->session()->regenerate();
        $user = Auth::user();
        if($user->level == '1'){
            return redirect()->intended('beranda');
        }elseif($user->level =='2'){
            return redirect()->intended('kasir');
        }

        return redirect()->intended('/');
    }

        return back()->withErrors([
            'username'=>'Maaf username atau password anda salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
