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

        $suratMasuk = [
            [
                'no_surat' => '001/SM/2025',
                'pengirim' => 'Dinas Pendidikan',
                'perihal' => 'Permohonan Bantuan Sekolah',
                'link' => 'https://example.com/surat1.pdf',
                'tgl_masuk' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'tgl_keluar' => Carbon::now()->format('Y-m-d'),
                'user_id' => 2, // Sesuaikan dengan ID user
                'status' => 'pending',
            ],
            [
                'no_surat' => '002/SM/2025',
                'pengirim' => 'Dinas Kesehatan',
                'perihal' => 'Laporan Kesehatan Masyarakat',
                'link' => 'https://example.com/surat2.pdf',
                'tgl_masuk' => Carbon::now()->subDays(3)->format('Y-m-d'),
                'tgl_keluar' => Carbon::now()->addDays(2)->format('Y-m-d'),
                'user_id' => 3, // Sesuaikan dengan ID user
                'status' => 'pending',
            ],
            [
                'no_surat' => '003/SM/2025',
                'pengirim' => 'Dinas Sosial',
                'perihal' => 'Bantuan Sosial',
                'link' => null, // Tidak ada link
                'tgl_masuk' => Carbon::now()->subDays(7)->format('Y-m-d'),
                'tgl_keluar' => null,
                'user_id' => 4, // Sesuaikan dengan ID user
                'status' => 'pending',
            ],
            [
                'no_surat' => '004/SM/2025',
                'pengirim' => 'Dinas Sosial',
                'perihal' => 'Bantuan Sosial',
                'link' => null, // Tidak ada link
                'tgl_masuk' => Carbon::now()->subDays(7)->format('Y-m-d'),
                'tgl_keluar' => null,
                'user_id' => 5, // Sesuaikan dengan ID user
                'status' => 'pending',
            ],
        ];

        DB::table('surat_masuk')->insert($suratMasuk);
    }
}
