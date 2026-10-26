<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        return view('surat-keluar.index');
    }

    public function show($id)
    {
        // Membuat data dummy sementara agar view tidak error
        $suratShow = (object) [
            'id' => $id,
            'nomor_surat' => '0046/XXXXI/09737',
            'tanggal' => '06-11-2026',
            'pengirim' => 'Saya Sendiri',
            'perihal' => 'Makan Malam'
        ];

        // Memuat view sambil membawa data $suratShow
        return view('surat-keluar.show', compact('suratShow'));
    }
}
