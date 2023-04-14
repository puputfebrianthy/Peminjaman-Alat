<?php

namespace App\Http\Controllers;

use App\Models\MLD;
use Carbon\Carbon;
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
    
    public function cetaksurat($id)
    {
        $datas = MLD::where('id', $id)->first();

        // return dd($datas);
        return view('surat', [
            'datas' => $datas,
        ]);
    }
}
