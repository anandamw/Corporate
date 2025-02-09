<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class SuratMasukController extends Controller
{
    public function index()
    {
        $datas = [
            'status' => SuratMasuk::select('status'),
            'pengelola' => SuratMasuk::select('pengelola'),

            'users' => User::all(),
        ];




        return view('surat_masuk.create_surat_masuk', $datas);
    }

    public function store(Request $request)
    {

        $request->validate([
            'no_surat' => 'required|string|unique:surat_masuk,no_surat,NULL,id,deleted_at,NULL',
            'pengirim' => 'required|string',
            'perihal' => 'required|string',
            'link' => 'nullable|url',
            'tgl_masuk' => 'required|date',
            'tgl_keluar' => 'nullable|date',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:pending,approved,rejected',
        ], [
            'no_surat.unique' => 'Nomor surat sudah digunakan, silakan gunakan nomor lain.',
            'no_surat.required' => 'Nomor surat wajib diisi.',
        ]);


        $suratMasuk = SuratMasuk::create($request->all());

        return redirect('/surat-masuk')->with('success', 'Surat masuk berhasil ditambahkan.');
    }
}
