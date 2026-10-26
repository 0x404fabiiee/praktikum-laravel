<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        //return 'Daftar Surat Masuk';
        $suratMasuk = [
            [
                'id'=> 1,
                'nomor_surat' => '002/Besuki/XXI',
                'tanggal' => '20-12-2027',
                'pengirim' => 'Andre Mullet',
                'perihal' => 'Surat Nikah',
            ],
            [
                'id'=> 2,
                'nomor_surat' => '02/Wuluhan/gayeng',
                'tanggal' => '19-04-1945',
                'pengirim' => 'Bagus Pradana',
                'perihal' => 'Gedang Goreng'
            ],
            [
                'id'=> 3,
                'nomor_surat' => '005/KPK/X/Bjir',
                'tanggal' => '20-05-2026',
                'pengirim' => 'Rapli Licin',
                'perihal' => 'Nyawitt'
            ],
        ];
        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function show($id) {
            $suratMasukShow = [
            1 => [
                    'id'=> $id,
                    'nomor_surat' => '002/Besuki/XXI',
                    'tanggal' => '20-12-2027',
                    'pengirim' => 'Andre Mullet',
                    'perihal' => 'Undangan Pernikahan',
                  ],
            2 => [
                    'id'=> $id,
                    'nomor_surat' => '02/Wuluhan/gayeng',
                    'tanggal' => '19-04-1945',
                    'pengirim' => 'Bagus Pradana',
                    'perihal' => 'Gedang Goreng'
                   ],
            3 => [
                    'id'=> $id,
                    'nomor_surat' => '005/KPK/X/Bjir',
                    'tanggal' => '20-05-2026',
                    'pengirim' => 'Rapli Licin',
                    'perihal' => 'Nyawitt'
                  ],
        ];
        $suratShow = $suratMasukShow[$id] ?? null;
        return view('surat-masuk.show', compact('suratShow'));
    }
}