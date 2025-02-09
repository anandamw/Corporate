<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Exports\SuratMasukExport;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AgendaController extends Controller
{
    public function index()
    {
        $datas = [
            'recipient' => SuratMasuk::paginate(10),  // Paginate 10 records per page
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
