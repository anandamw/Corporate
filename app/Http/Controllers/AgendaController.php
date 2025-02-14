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

        $user = Auth::user();

        $datas = [
            'recipient' => SuratMasuk::select(
                'surat_masuk.id as surat_id', // Aliaskan id dari surat_masuk agar tidak bentrok
                'surat_masuk.*',
                'users.name as user_name' // Ambil nama user jika dibutuhkan
            )
                ->join('users', 'surat_masuk.user_id', '=', 'users.id')
                ->when($user->role !== 'admin', function ($query) use ($user) {
                    return $query->where('users.role', $user->role);
                })
                ->orderByRaw("
                    CASE 
                        WHEN surat_masuk.status = 'verifikasi' THEN 1
                        WHEN surat_masuk.status = 'setuju' THEN 2
                        ELSE 3
                    END
                ")
                ->orderBy('surat_masuk.created_at', 'desc') // Tambahan sorting berdasarkan tanggal terbaru
                ->paginate(10),
            'title' => 'Agenda',
        ];





        return view('agenda.agenda', $datas);
    }


    public function export()
    {

        return Excel::download(new SuratMasukExport, 'Surat Masuk.xlsx');
    }



    public function print()
    {

        $datas = SuratMasuk::join('users', 'surat_masuk.user_id', '=', 'users.id')->get();


        $pdf = Pdf::loadView('agenda.pdf', compact('datas'))->setPaper('a4', 'landscape')->setWarnings('false');

        return $pdf->stream('agenda.pdf', ["Attachment" => false]);
    }
}
