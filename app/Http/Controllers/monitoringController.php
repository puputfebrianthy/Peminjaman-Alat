<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MLD;

class monitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MLD $mld)
    {
        $request->validate([
            'kuliah' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'hadir'=>'required|numeric',
            'alpa'=>'required|numeric',
            'sks'=>'required|numeric',
            'semester'=>'required',
            'kelas'=>'required',
            'pembahasan' => 'required',
            'pembelajaran' => 'required',
            'dosen' => 'required',
        ]);
        $dataCreate = [
            'mata_kuliah' => $request->kuliah,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'hadir'=>$request->hadir,
            'alpa'=>$request->alpa,
            'sks'=>$request->sks,
            'semester'=>$request->semester,
            'kelas'=>$request->kelas,
            'pembahasan' => $request->pembahasan,
            'pembelajaran' => $request->pembelajaran,
            'dosen' => $request->dosen,
        ];
        // return dd($dataCreate);
        MLD::create($dataCreate);
        return redirect('/mld');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
