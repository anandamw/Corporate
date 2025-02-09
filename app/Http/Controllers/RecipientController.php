<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class RecipientController extends Controller
{
    public function index()
    {
        $datas = [
            'recipient' => SuratMasuk::paginate(10),  // Paginate 10 records per page
        ];

        return view('recipient.recipient', $datas);
    }


    public function update_link(Request $request, $id)
    {

        $validatedData = $request->validate([
            'link' => 'required|string'
        ]);

        SuratMasuk::where('id', $id)->update($validatedData);


        return redirect('/surat-masuk');
    }
}
