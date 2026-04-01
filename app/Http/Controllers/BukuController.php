<?php

namespace App\Http\Controllers;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('DataBuku.index', compact('bukus'));
    }
}
