<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    public function index()
    {
        $datas = [
            'recipient' => SuratMasuk::paginate(10),  // Paginate 10 records per page
        ];
    
        return view('recipient.recipient', $datas);
    }
}
