<?php

namespace App\Http\Controllers;

use App\Models\pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('tb_peminjaman')->get();
        return view('pengembalian', compact('datas') );
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
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show(pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit(pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengembalian $pengembalian)
    {
        //
    }
}
