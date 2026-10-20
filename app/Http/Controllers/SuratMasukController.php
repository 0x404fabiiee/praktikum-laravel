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
                'nomor_surat' => '002/SOLO/XXI',
                'tanggal' => '20-12-2027',
                'pengirim' => 'mulyono',
                'perihal' => 'Ganti nama',
            ],
            [
                'id'=> 2,
                'nomor_surat' => '02,',
                'tanggal' => '19-04-1945',
                'pengirim' => 'widodo',
                'perihal' => 'korupsi'
            ],
            [
                'id'=> 3,
                'nomor_surat' => '005/KPK/X/Bjir',
                'tanggal' => '20-05-2026',
                'pengirim' => 'wowo',
                'perihal' => 'MBG'
            ],
        ];
        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function show($id) {
            $suratMasukShow = [
            1 => [
                    'id'=> $id,
                    'nomor_surat' => '002/ML/Jungle/Retri',
                    'tanggal' => '20-12-2027',
                    'pengirim' => 'mulyono',
                    'perihal' => 'Ganti nama',
                  ],
            2 => [
                    'id'=> $id,
                    'nomor_surat' => '02, fakultas TEKNIK',
                    'tanggal' => '19-04-1945',
                    'pengirim' => 'widodo',
                    'perihal' => 'kopdes'
                   ],
            3 => [
                    'id'=> $id,
                    'nomor_surat' => '005/KPK/X/Bjir',
                    'tanggal' => '20-05-2026',
                    'pengirim' => 'wowo',
                    'perihal' => 'MBG'
                  ],
        ];
        $suratShow = $suratMasukShow[$id] ?? null;
        return view('surat-masuk.show', compact('suratShow'));
    }
}