<?php

namespace App\Http\Controllers;

use App\Models\MLD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MLDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('tb_monitoring')->get();
        // return dd($datas);
        return view('MLD', compact('datas') );
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
     * @param  \App\Models\MLD  $mLD
     * @return \Illuminate\Http\Response
     */
    public function show(MLD $mLD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MLD  $mLD
     * @return \Illuminate\Http\Response
     */
    public function edit(MLD $mLD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MLD  $mLD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MLD $mLD)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MLD  $mLD
     * @return \Illuminate\Http\Response
     */
    public function destroy(MLD $mLD)
    {
        //
    }
}
