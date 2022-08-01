<?php

namespace App\Http\Controllers;

use App\Models\sekda;
use App\Models\surat;
use App\Models\instansi;
use App\Models\suratTugas;
use App\Http\Requests\StoresekdaRequest;
use App\Http\Requests\UpdatesekdaRequest;

class SekdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat.sekda', [
            'surats' => surat::doesntHave('sekda')->get(),
            'sekdas' => sekda::where('status', '1')->get(),
            'sekdaFalse'=> sekda::where('status', '0')->get(),
            'suratTugas' => suratTugas::doesntHave('sekda')->get(),
            'instansi' => instansi::all(),
            'title' => 'Sekertaris Daerah'
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
     * @param  \App\Http\Requests\StoresekdaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresekdaRequest $request)
    {
        if($request->jenis_surat == '1'){
            $surat = surat::findOrFail($request->get('id'));

            //    $surat = ['surat_masuk_id' => $request->id];
            $surat = [
                'tanggal' => $surat->tanggal,
                'no_arsip' => $surat->no_arsip,
                'no_surat' => $surat->no_surat,
                'instansi_id' => $surat->instansi->id,
                'hal' => $surat->hal,
                'status' => false,
                'surat_masuk_id' => $surat->id
            ];
            sekda::create($surat);
        }

        if($request->jenis_surat == '2'){
            $surat = suratTugas::findOrFail($request->get('id'));

            //    $surat = ['surat_masuk_id' => $request->id];
            $surat = [
                'tanggal' => $surat->tanggal,
                'no_arsip' => $surat->no_arsip.'-ST',
                'instansi_id' => $surat->instansi->id,
                'hal' => $surat->nama .' | '. $surat->tujuan. ' | Surat tugas',
                'status' => false,
                'surat_masuk_id' => $surat->id
            ];
            sekda::create($surat);
        }



        return redirect("/surat-sekda")->with('updated', 'Data Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sekda  $sekda
     * @return \Illuminate\Http\Response
     */
    public function show(sekda $sekda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sekda  $sekda
     * @return \Illuminate\Http\Response
     */
    public function edit(sekda $sekda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesekdaRequest  $request
     * @param  \App\Models\sekda  $sekda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesekdaRequest $request, sekda $sekda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sekda  $sekda
     * @return \Illuminate\Http\Response
     */
    public function destroy(sekda $surat_sekda)
    {
        $surat_sekda->delete();
        return redirect("/surat-sekda")->with('deleted', 'Surat berhasil dihapus');
    }
}
