<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralViewController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function peminjaman()
    {
        return view('formPinjam');
    }

    public function beranda()
    {
        return view('beranda');
    }

    public function monitoring()
    {
        return view('monitoring');
    }
}
