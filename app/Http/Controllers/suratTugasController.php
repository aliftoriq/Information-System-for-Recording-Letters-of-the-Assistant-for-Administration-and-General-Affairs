<?php

namespace App\Http\Controllers;

use App\Models\instansi;
use App\Models\suratTugas;
use Illuminate\Http\Request;

class suratTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat.suratTugas', [
            'title' => 'Surat Tugas',
            'suratTugas' => suratTugas::all(),
            'instansi' => instansi::all()
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
        $validatedData = $request->validate([
            'tanggal' => 'date|required',
            'no_arsip' => 'required',
            'instansi_id' => 'required',
            'nama' => 'required',
            'lama' => 'required',
            'tujuan' => 'required',
            'jenis_surat' => '2'
        ]);

        suratTugas::create($validatedData);

        $request->session()->flash('succes', 'Data berhasil ditambahnkan');

        // return surat::all();

        return redirect('/surat-tugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suratTugas  $suratTugas
     * @return \Illuminate\Http\Response
     */
    public function show(suratTugas $suratTugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suratTugas  $suratTugas
     * @return \Illuminate\Http\Response
     */
    public function edit(suratTugas $suratTugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suratTugas  $suratTugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suratTugas $suratTugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suratTugas  $suratTugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(suratTugas $suratTugas)
    {
        //
    }
}
