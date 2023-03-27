<?php

namespace App\Http\Controllers;

use App\Models\KetersediaanAlat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KetersediaanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = KetersediaanAlat::all();
        $datas = DB::table('tb_alat')->get();
        // return dd($data);
        return view('ketersediaanAlat', compact('datas'));
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
     * @param  \App\Models\KetersediaanAlat  $ketersediaanAlat
     * @return \Illuminate\Http\Response
     */
    public function show(KetersediaanAlat $ketersediaanAlat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KetersediaanAlat  $ketersediaanAlat
     * @return \Illuminate\Http\Response
     */
    public function edit(KetersediaanAlat $ketersediaanAlat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KetersediaanAlat  $ketersediaanAlat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KetersediaanAlat $ketersediaanAlat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KetersediaanAlat  $ketersediaanAlat
     * @return \Illuminate\Http\Response
     */
    public function destroy(KetersediaanAlat $ketersediaanAlat)
    {
        //
    }
}
