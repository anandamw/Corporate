<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\SuratMasukExport;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AgendaController extends Controller
{
    public function index()
    {

        $datas = [
            'recipient' => SuratMasuk::select(
                'surat_masuk.id as surat_id',
                'surat_masuk.*',
                'users.name as user_name'
            )
                ->join('users', 'surat_masuk.user_id', '=', 'users.id')
                ->whereNotNull('surat_masuk.link')
                ->orderByRaw("CASE 
                WHEN surat_masuk.status = 'verifikasi' THEN 1 
                WHEN surat_masuk.status = 'ditolak' THEN 2 
                WHEN surat_masuk.status = 'setuju' THEN 3 
                ELSE 4 END")
                ->orderByDesc('surat_masuk.created_at') // Urutkan tanggal terbaru dalam status yang sama
                ->paginate(10),

            'title' => 'Daftar Kegiatan',
        ];

        return view('agenda.agenda', $datas);
    }



 
    // Controller function
    public function updateDataStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:verifikasi,setuju,ditolak', // Validasi status yang diterima
        ]);

        // Mencari SuratMasuk berdasarkan ID
        $suratMasuk = SuratMasuk::findOrFail($id);

        // Memperbarui status surat
        $suratMasuk->status = $request->input('status');
        $suratMasuk->save(); // Menyimpan perubahan
        alert()->success('Success', 'Berhasil edit Status');

        // Memberikan response atau redirect setelah update
        return redirect('/agenda');
    }
}
