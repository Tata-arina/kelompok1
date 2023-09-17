<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'judul_pendaftaran' => 'required',
                'isi_pendaftaran' => 'required',
            ]
        );


        $pendaftarans = new Pendaftarans;
        $pendaftarans->namasiswa = $request['namasiswa'];
        $pendaftarans->nisn = $request['nisn'];
        $pendaftarans->tempatlahir = $request['tempatlahir'];
        $pendaftarans->tanggallahir = $request['tanggallahir'];
        $pendaftarans->agama = $request['agama'];
        $pendaftarans->jeniskelamin = $request['jeniskelamin'];
        $pendaftarans->kewarganegaraan = $request['kewarganegaraan'];
        $pendaftarans->alamat = $request['alamat'];
        $pendaftarans->namaayah = $request['namaayah'];
        $pendaftarans->nikayah = $request['nikayah'];
        $pendaftarans->pendidikanayah = $request['pendidikanayah'];
        $pendaftarans->pekerjaanayah = $request['pekerjaanayah'];
        $pendaftarans->agamaayah = $request['agamaayah'];
        $pendaftarans->alamatayah = $request['alamatayah'];
        $pendaftarans->namaibu = $request['namaibu'];
        $pendaftarans->nikibu = $request['nikibu'];
        $pendaftarans->pendidikanibu = $request['pendidikanibu'];
        $pendaftarans->pekerjaanibu = $request['pekerjaanibu'];
        $pendaftarans->agamaibu = $request['agamaibu'];
        $pendaftarans->alamatibu = $request['alamatibu'];

        $pendaftarans->save();

        return redirect('/datapendaftarans');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
