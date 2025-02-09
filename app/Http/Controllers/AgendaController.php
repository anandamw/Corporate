<?php

namespace App\Http\Controllers;

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
}
