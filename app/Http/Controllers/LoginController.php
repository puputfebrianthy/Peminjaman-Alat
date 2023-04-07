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
            'email' => 'required|email',
            'password' => 'required',
            // 'hp' => 'max:15',
            // 'password' => 'min:5|max:30|required_with:confirm_password|same:confirm_password',
            // 'confirm_password' => 'required'
        ]);

        $validateData = [
            'username' => $request->username,
            'email' => $request->email,
            // 'telp' => $request->hp,
            // 'usergroup' => $request->usergroup,
            'password' => $request->password,
        ];
        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('success', 'Register Successfull!');
    }
}




// namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

// class LoginController extends Controller
// {
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
    // public function autenticate(Request $request){
    //     $credentianls = $request->validate([
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);
    //     // dd('Login berhasil');
    //     if (Auth::attempt($credentianls)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/dashboard');
    //     }
    //     return back()->with('loginError', 'Login failed!');

        // if(Auth::attempt($kredensial)){
        //     $request->session()->regenerate();
        //     $user = Auth::user();
        //     if($user->level == '1'){
        //         return redirect()->intended('beranda');
        //     }elseif($user->level =='2'){
        //         return redirect()->intended('kasir');
        //     }

        //     return redirect()->intended('/');
        // }

        // return back()->withErrors([
        //     'username'=>'Maaf username atau password anda salah'
        // ])->onlyInput('username');
    // }

    // public function logout(Request $request){
    //     Auth::logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/login');
    // }
// }
