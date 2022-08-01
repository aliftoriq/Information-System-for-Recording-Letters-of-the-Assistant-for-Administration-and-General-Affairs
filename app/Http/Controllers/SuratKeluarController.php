<?php

namespace App\Http\Controllers;

use App\Models\sekda;
use App\Models\surat;
use App\Models\instansi;
use App\Models\suratKeluar;
use App\Models\suratTugas;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat.suratKeluar', [
            'surats' => sekda::doesntHave('suratKeluars')->get(),
            'suratKeluars' => suratKeluar::all(),
            'isntansi' => instansi::all(),
            'title' => 'Surat Keluar'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect("/surat-keluar")->with('updated', 'Data Terupdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surat = sekda::findOrFail($request->get('id'));

        //    $surat = ['surat_masuk_id' => $request->id];
        $surat = [
            'tanggal' => $surat->tanggal,
            'no_arsip' => $surat->no_arsip,
            'no_surat' => $surat->no_surat,
            'instansi_id' => $surat->instansi->id,
            'hal' => $surat->hal,
            'surat_masuk_id' => $surat->id
        ];

        suratKeluar::create($surat);
        return redirect("/surat-keluar")->with('updated', 'Data Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(suratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(suratKeluar $surat_keluar)
    {
        return view('surat.edit.suratKeluarEdit', [
            'surat_keluar' => $surat_keluar,
            'title' => 'Edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(surat $surat_keluar)
    {
        $validatedData = $surat_keluar->replicate([
            'tanggal' => 'date|required',
            'no_arsip' => 'required',
            'no_surat' => 'required',
            'instansi_id' => 'required',
            'hal' => 'required'
        ]);

        suratKeluar::where('id', $surat_keluar->getKey())->update($validatedData);
        return redirect("/surat-keluar")->with('updated', 'Data Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(suratKeluar $suratKeluar)
    {
        $suratKeluar->delete();
        return redirect("/surat-keluar")->with('deleted', 'Surat berhasil dihapus');
    }
}
