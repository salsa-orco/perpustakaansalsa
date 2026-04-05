<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('peminjaman');
    }

    public function store(Request $request)
    {
        // nanti bisa simpan ke database di sini

        return redirect()->route('peminjaman.index')
            ->with('success', 'Peminjaman buku oleh ' . $request->anggota . ' berhasil disimpan');
    }
}