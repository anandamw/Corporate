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
            'title' => 'Surat Masuk',
            'users' => User::all(),
        ];


        return view('surat_masuk.create_surat_masuk', $datas);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_surat' => 'required|string|unique:surat_masuk,no_surat,NULL,id,deleted_at,NULL',
            'pengirim' => 'required|string',
            'perihal' => 'required|string',
            'link' => 'nullable|url',
            'file_surat' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Validasi file
            'tgl_masuk' => 'required|date',
            'tgl_keluar' => 'nullable|date',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:ditolak,setuju,verifikasi',
        ], [
            'no_surat.unique' => 'Nomor surat sudah digunakan, silakan gunakan nomor lain.',
            'no_surat.required' => 'Nomor surat wajib diisi.',
        ]);

        try {
            // Simpan file jika ada
            if ($request->hasFile('file_surat')) {
                $file = $request->file('file_surat');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Nama unik berdasarkan timestamp
                $filePath = 'assets/file_surat/' . $fileName;

                // Pindahkan file ke public/assets/file_surat
                $file->move(public_path('assets/file_surat'), $fileName);

                // Simpan hanya nama file (bukan path lengkap)
                $validatedData['file_surat'] = $fileName;
            }

            // Simpan data surat masuk
            SuratMasuk::create($validatedData);
            toast('Berhasil Menginputkan data!', 'success');

            return redirect('/surat-masuk')->with('success', 'Surat masuk berhasil ditambahkan.');
        } catch (\Exception $e) {

            alert()->error('ErrorAlert', 'Terjadi Kesalahan');

            return redirect('/surat-masuk')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
