<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function persyaratan()
    {
        return view('user.persyaratan');
    }

    public function pendaftaran()
    {
        return view('user.pendaftaran');
    }

    public function pengumuman()
    {
        $pengumumen = Pengumuman::all();
        return view('user.pengumuman',compact('pengumumen'));
    }

}
