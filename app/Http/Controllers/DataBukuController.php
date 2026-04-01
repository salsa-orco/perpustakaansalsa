<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBukuController extends Controller
{
    // Untuk menampilkan halaman daftar buku
    public function index(Request $request)
    {
        return view('DataBuku', compact('books'));
    }
}
