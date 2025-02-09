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
            'recipient' => SuratMasuk::latest()->paginate(10),  // Apply latest first, then paginate
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
