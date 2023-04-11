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
    public function index()
    {
        $datas = DB::table('tb_peminjaman')
        // ->where('status', 'Diterima')
        ->get();
        // return dd ($datas);
        return view('laporanPeminjaman', compact('datas'));
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
            'nomor' => $request->nomor,
            'dosen' => $request->dosen,
            'alat' => $request->alat,
            'waktu' => date('H:i:s'),
            'tanggal' => $request->tanggal,
            'status' => 'Created',
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
