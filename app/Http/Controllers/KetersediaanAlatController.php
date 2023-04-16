<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KetersediaanAlat;
use Illuminate\Support\Facades\DB;

class KetersediaanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->search;

        $datas = DB::table('ketersediaan_alat')
        ->orderBy('kode_alat', 'asc');

        if ($s) {
            $datas =  $datas->where(function ($query) use ($s) {
                $query->where('nama', 'LIKE', '%' . $s . '%')
                    ->orWhere('kode_alat', 'LIKE', '%' . $s . '%')
                    ->orWhere('jumlah', 'LIKE', '%' . $s . '%');
            });
        }
        // dd($datas);
        return view('ketersediaanAlat', [
            'datas' => $datas->paginate(5)
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
