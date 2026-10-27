<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nomor_surat' => '001/KELUAR/X/2026',
                'tanggal' => '2026-10-05',
                'tujuan' => 'Rektorat',
                'perihal' => 'Permohonan Izin Kegiatan',
                'keterangan' => 'Izin kegiatan seminar',
            ],
            [
                'nomor_surat' => '002/KELUAR/X/2026',
                'tanggal' => '2026-10-06',
                'tujuan' => 'BAA',
                'perihal' => 'Pengajuan Jadwal',
                'keterangan' => 'Jadwal ujian',
            ],
            [
                'nomor_surat' => '003/KELUAR/X/2026',
                'tanggal' => '2026-10-07',
                'tujuan' => 'LPPM',
                'perihal' => 'Balasan Undangan',
                'keterangan' => null,
            ],
        ];

        foreach ($data as $surat) {
            DB::table('outgoing_letters')->updateOrInsert(
                ['nomor_surat' => $surat['nomor_surat']],
                $surat + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}