<?php

namespace App\Http\Controllers;

use App\Models\instansi;
use App\Http\Requests\StoreinstansiRequest;
use App\Http\Requests\UpdateinstansiRequest;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('instansi.instansi', [
            'title' => 'Instansi',
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
     * @param  \App\Http\Requests\StoreinstansiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinstansiRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|unique:instansis,nama',
        ]);

        instansi::create($validatedData);

        $request->session()->flash('success', 'Data berhasil ditambahnkan');

        // return surat::all();

        return redirect('/instansi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function show(instansi $instansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function edit(instansi $instansi)
    {
        return view('instansi.edit', [
            'instansi' => $instansi,
            'title' => 'Edit Instansi'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinstansiRequest  $request
     * @param  \App\Models\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinstansiRequest $request, instansi $instansi)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        instansi::where('id', $instansi->getKey())->update($validatedData);
        return redirect("/instansi")->with('updated', 'Data Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(instansi $instansi)
    {
        $instansi->delete();
        return redirect("/instansi")->with('deleted', 'instansi berhasil dihapus');
    }
}
