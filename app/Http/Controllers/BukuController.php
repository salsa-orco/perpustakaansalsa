<?php

namespace App\Http\Controllers;




class BukuController extends Controller
{
    public function index()
    {
        return view('DataBuku');
    }

    public function create()
    {
        return view('TambahBuku');
    }
}