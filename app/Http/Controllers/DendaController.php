<?php

namespace App\Http\Controllers;


class DendaController extends Controller
{
    public function index()
    {
        // data sementara (dummy, nanti bisa dari database)
        $denda = [
            [
                'nama' => 'Verlolia',
                'terlambat' => '2 hari',
                'total' => 'Rp15000',
                'status' => 'Diproses'
            ]
        ];

        return view('denda', compact('denda'));
    }
}