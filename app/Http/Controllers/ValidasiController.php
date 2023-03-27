<?php

namespace App\Http\Controllers;

use App\Models\validasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ValidasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('tb_peminjaman')
        ->where('tb_peminjaman.status','created')
        ->get();
        // return dd($datas);
        return view('validasi', compact('datas'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\validasi  $validasi
     * @return \Illuminate\Http\Response
     */
    public function show(validasi $validasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\validasi  $validasi
     * @return \Illuminate\Http\Response
     */
    public function edit(validasi $validasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\validasi  $validasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, validasi $validasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\validasi  $validasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(validasi $validasi)
    {
        //
    }
}
