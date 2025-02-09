<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('surat_masuk')->insert([
            [
                'no_surat' => 'SM/001/2025',
                'pengirim' => 'Dinas Pendidikan',
                'perihal' => 'Laporan Kegiatan',
                'tgl_masuk' => Carbon::create('2025', '02', '09')->format('Y-m-d'),
                'tgl_keluar' => Carbon::create('2025', '02', '10')->format('Y-m-d'),
                'pengelola' => 'sekretaris',
                'status' => 'Gambar Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_surat' => 'SM/002/2025',
                'pengirim' => 'Kecamatan Peukd',
                'perihal' => 'Undangan Rapat',
                'tgl_masuk' => Carbon::create('2025', '02', '08')->format('Y-m-d'),
                'tgl_keluar' => Carbon::create('2025', '02', '09')->format('Y-m-d'),
                'pengelola' => 'pemdes',
                'status' => 'Gambar Centang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_surat' => 'SM/003/2025',
                'pengirim' => 'PKKMD',
                'perihal' => 'Penyuluhan Kesehatan',
                'tgl_masuk' => Carbon::create('2025', '02', '07')->format('Y-m-d'),
                'tgl_keluar' => Carbon::create('2025', '02', '09')->format('Y-m-d'),
                'pengelola' => 'pkkmd',
                'status' => 'Gambar Silang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
