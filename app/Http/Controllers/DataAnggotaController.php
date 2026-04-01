<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota; // Pastikan sudah buat model Anggota dan migration-nya

class DataAnggotaController extends Controller
{
    // Tampilkan semua anggota
    public function index()
    {
        $anggotas = Anggota::all();  // Ambil semua data anggota
        return view('dataanggota.index', compact('anggotas'));
    }

}