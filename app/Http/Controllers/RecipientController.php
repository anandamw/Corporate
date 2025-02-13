<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;



class RecipientController extends Controller
{
    public function index()
    {
        $user = Auth::user();


        $datas = [
            'recipient' => SuratMasuk::select(
                'surat_masuk.id as surat_id', // Aliaskan id dari surat_masuk agar tidak bentrok
                'surat_masuk.*',
                'users.name as user_name' // Ambil nama user jika dibutuhkan
            )
                ->join('users', 'surat_masuk.user_id', '=', 'users.id')
                ->where('users.role', $user->role)
                ->orderBy('surat_masuk.created_at', 'desc')
                ->paginate(10),
            'title' => 'Recipient',
        ];



        return view('recipient.recipient', $datas);
    }


    public function update_link(Request $request, $id)
    {
        // Validasi input dengan aturan nullable + URL
        $validatedData = $request->validate([
            'link' => 'nullable|url'
        ]);

        // Debugging (Opsional)
        info($validatedData);

        // Cek apakah data ditemukan
        $surat = SuratMasuk::findOrFail($id);
        $surat->update($validatedData);

        return redirect('/recipient')->with('success', 'Link berhasil diperbarui.');
    }
}
