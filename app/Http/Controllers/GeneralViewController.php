<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\MLD;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralViewController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function peminjaman()
    {
        $dosens = DB::table('tb_dosen')->select('id','nama_dosen')->get();
        $alats = DB::table('ketersediaan_alat')->select('id','nama')->get();

        // return dd($dosens);
        return view('formPinjam', [
            'dosens' => $dosens,
            'alats' => $alats,
        ]);
    }

    public function beranda()
    {
        return view('beranda');
    }

    public function monitoring()
    {
        $dosens = DB::table('tb_dosen')->select(
            'id',
            'nama_dosen'
        )->get();

        return view('monitoring', [
            'dosens' => $dosens,
        ]);
    }
    
    public function cetaksurat($id)
    {
        $datas = MLD::leftJoin('tb_dosen', 'tb_dosen.id', '=', 'tb_monitoring.id_dosen')
        ->where('tb_monitoring.id', $id)
        ->select(
            'tb_monitoring.id',
            'tb_monitoring.tanggal',
            'tb_monitoring.waktu',
            'tb_monitoring.mata_kuliah',
            'tb_monitoring.hadir',
            'tb_monitoring.alpa',
            'tb_monitoring.pembahasan',
            'tb_monitoring.pembelajaran',
            'tb_monitoring.sks',
            'tb_monitoring.kelas',
            'tb_monitoring.semester',
            'tb_monitoring.created_at',
            'tb_dosen.nama_dosen',
            'tb_dosen.no_induk'
        )->first();

        // return dd($datas);
        return view('surat', [
            'datas' => $datas,
        ]);
    }
}
