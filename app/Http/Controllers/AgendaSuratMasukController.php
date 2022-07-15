<?php

namespace App\Http\Controllers;

use App\Models\surat;
use Illuminate\Http\Request;

class AgendaSuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return surat::all();
        return view('surat.agendaSuratMasuk', [
            'surats' => surat::all(),
            'title' => 'Agenda Surat Masuk'
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
            'no_surat' => 'required|unique:surats,no_surat',
            'instansi' => 'required',
            'hal' => 'required'
        ]);

        // if($validatedData == null){
        //     $request->session()->flash('nosurat', 'Nomor Surat Tersebut Sudah Ada');
        //     return redirect('/agenda-surat-masuk');
        // };


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
    public function edit(surat $surat)
    {
        return view('surat.agendaSuratMasukEdit', [
            'surat' => $surat,
            'title' => 'Edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, surat $surat)
    {
        $validatedData = $request->validate([
            'tanggal' => 'date|required',
            'no_arsip' => 'required',
            'no_surat' => 'required',
            'instansi' => 'required',
            'hal' => 'required'
        ]);

        surat::where('id',$surat->getKey())->update($validatedData);
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
