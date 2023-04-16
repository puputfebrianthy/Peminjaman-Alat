<?php

namespace App\Http\Controllers;

use App\Models\peminjamanAlat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->search;
        
        $datas = DB::table('tb_peminjaman')->leftJoin('tb_dosen', 'tb_dosen.id', '=', 'tb_peminjaman.id_dosen')
        ->leftJoin('ketersediaan_alat', 'ketersediaan_alat.id', '=' , 'tb_peminjaman.id_alat')
        ->select(
            'tb_peminjaman.id',
            'tb_peminjaman.nama',
            'tb_peminjaman.nim',
            'tb_peminjaman.nomor',
            'ketersediaan_alat.nama as nama_alat',
            'tb_peminjaman.matakuliah',
            'tb_peminjaman.kelas',
            'tb_peminjaman.tanggal',
            'tb_peminjaman.waktu',
            'tb_peminjaman.status',
            'tb_peminjaman.created_at',
            'tb_dosen.nama_dosen',
        )
        ->orderBy('tb_peminjaman.created_at', 'desc');
        // return dd($datas);
        
        
        if ($s) {
            $datas =  $datas->where(function ($query) use ($s) {
                $query->where('tb_peminjaman.nama', 'LIKE', '%' . $s . '%')
                    ->orWhere('nim', 'LIKE', '%' . $s . '%')
                    ->orWhere('nama_dosen', 'LIKE', '%' . $s . '%')
                    ->orWhere('matakuliah', 'LIKE', '%' . $s . '%')
                    ->orWhere('kelas', 'LIKE', '%' . $s . '%')
                    ->orWhere('status', 'LIKE', '%' . $s . '%')
                    ->orWhere('ketersediaan_alat.nama', 'LIKE', '%' . $s . '%');
            });
        }
        
        // return dd($datas);
        return view('laporanPeminjaman', [
            'datas' => $datas->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // =====FORM BUAT PEMINJAMAN ALAT UNTUK USER=====
    public function store(Request $request)
    {
        $dataCreate = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'matakuliah' => $request ->matakuliah,
            'kelas' =>$request ->kelas,
            'nomor' => $request->nomor,
            'id_dosen' => $request->dosen,
            'alat' => $request->alat,
            'waktu' => $request->waktu,
            'tanggal' => $request->tanggal,
            'status' => 'Dibuat',
        ];
        // return dd($dataCreate);
        peminjamanAlat::create($dataCreate);
        return redirect('/laporanPeminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjamanAlat  $peminjamanAlat
     * @return \Illuminate\Http\Response
     */
    public function show(peminjamanAlat $peminjamanAlat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjamanAlat  $peminjamanAlat
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjamanAlat $peminjamanAlat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjamanAlat  $peminjamanAlat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjamanAlat $peminjamanAlat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjamanAlat  $peminjamanAlat
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjamanAlat $peminjamanAlat)
    {
        //
    }
}
