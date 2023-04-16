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
    public function index(Request $request)
    {
        $s = $request->search;
        
        $datas = DB::table('tb_monitoring')->leftJoin('tb_dosen', 'tb_dosen.id', '=', 'tb_monitoring.id_dosen')
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
        )
        ->orderBy('created_at', 'desc');
        
        
        if ($s) {
            $datas =  $datas->where(function ($query) use ($s) {
                $query->where('nama_dosen', 'LIKE', '%' . $s . '%')
                    ->orWhere('mata_kuliah', 'LIKE', '%' . $s . '%')
                    ->orWhere('pembahasan', 'LIKE', '%' . $s . '%')
                    ->orWhere('pembelajaran', 'LIKE', '%' . $s . '%')
                    ->orWhere('alpa', 'LIKE', '%' . $s . '%')
                    ->orWhere('hadir', 'LIKE', '%' . $s . '%')
                    ->orWhere('semester', 'LIKE', '%' . $s . '%')
                    ->orWhere('waktu', 'LIKE', '%' . $s . '%')
                    ->orWhere('tanggal', 'LIKE', '%' . $s . '%')
                    ->orWhere('sks', 'LIKE', '%' . $s . '%')
                    ->orWhere('kelas', 'LIKE', '%' . $s . '%');
            });
        }

        // return dd($datas);
        return view('MLD', [
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
