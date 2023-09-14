<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pengumuman');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createpengumuman');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'judul_pengumuman' => 'required',
                'gambar_pengumuman' => 'mimes:png,jpg,gif|image|max:5048',
                'isi_pengumuman' => 'required',
            ]
        );

        $file = $request->file('gambar_pengumuman');
        $path = $file->storeAs('uploads', time() .'.'. $request->file('gambar_pengumuman')->extension());

        $post = new Post;
        $post->judul_post = $request['judul_pengumuman'];
        $post->isi_post = $request['isi_pengumuman'];
        $post->gambar_pengumuman = $path;
        $post->save();

        return redirect('/index');
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
        return view('admin.editpengumuman');
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
