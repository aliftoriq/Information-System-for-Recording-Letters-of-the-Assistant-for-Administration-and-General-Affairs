<?php

namespace App\Http\Controllers;

use App\Models\instansi;
use App\Models\surat;
use Illuminate\Http\Request;

class AgendaSuratMasukController extends Controller
{
    public function index()
    {
        return view('surat.agendaSuratMasuk', [
            'surats' => surat::all(),
            'title' => 'Agenda Surat Masuk',
            'instansi' => instansi::all()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'date|required',
            'no_arsip' => 'required',
            'no_surat' => 'required|unique:surats,no_surat',
            'instansi_id' => 'required',
            'hal' => 'required',
        ]);

        surat::create($validatedData);

        $request->session()->flash('succes', 'Data berhasil ditambahnkan');

        // return surat::all();

        return redirect('/agenda-surat-masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(surat $surat)
    {
        return view('home', surat::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(surat $agenda_surat_masuk)
    {
        return view('surat.edit.agendaSuratMasukEdit', [
            'surat' => $agenda_surat_masuk,
            'title' => 'Edit',
            'instansi' => instansi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, surat $agenda_surat_masuk)
    {
        $validatedData = $request->validate([
            'tanggal' => 'date|required',
            'no_arsip' => 'required',
            'no_surat' => 'required',
            'instansi_id' => 'required',
            'hal' => 'required',

        ]);


        surat::where('id', $agenda_surat_masuk->getKey())->update($validatedData);
        return redirect("/agenda-surat-masuk")->with('updated', 'Data Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(surat $agenda_surat_masuk)
    {
        // surat::destroy($agenda_surat_masuk);
        $agenda_surat_masuk->delete();
        return redirect("/agenda-surat-masuk")->with('deleted', 'Surat berhasil dihapus');
    }
}
