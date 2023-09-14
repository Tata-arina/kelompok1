<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    //Tampilan halaman pendaftaran admin
    public function index()
    {
        $admin = Admin::all();
        return view('admin.index', compact('admin'));
    }

    // Tampilan form pendaftaran admin
    public function create()
    {
        return view('admin.create');
    }

    //Menyimpan data admin yang baru didaftarkan
    publicfunction store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin,email',
            'password' => 'required|string|min:6',
        ]);

        //Simpan data admin
        Admin::create($validatedData);

        return redirect()->return('admin.index')->with('success', 'Admin berhasil didaftarkan!');
    }

    //Tampilan form edit admin
    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    //Memperbarui data admin yang sudah ada
    public function update(Request $request, Admin $admin)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin,email,' . $admin->id,
            'password' => 'required|string|min:6',
        ]);

        //Perbarui data admin
        $admin->update($validatedData);

        return redirect()->route('admin.index')->with('success', 'Data admin berhasil diperbarui!');
    }
}
