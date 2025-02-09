<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $datas = [
            'status' => SuratMasuk::select('status'),
            'pengelola' => SuratMasuk::select('pengelola'),
        ];

        return view('surat_masuk.create_surat_masuk', $datas);
    }
}
