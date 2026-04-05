<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        return view('pengembalian');
    }

    public function store(Request $request)
    {
        return redirect()->route('pengembalian.index')
            ->with('success', 'Buku oleh ' . $request->anggota . ' berhasil dikembalikan');
    }
}