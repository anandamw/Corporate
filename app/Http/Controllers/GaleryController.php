<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class GaleryController extends Controller
{
    public function index()
    {
        $datas = [
            'recipient' => SuratMasuk::join('users', 'surat_masuk.user_id', '=', 'users.id')->where('status','setuju')->paginate(10),
            'title' => 'Galeri',
        ];

        return view('galery.galery', $datas);
    }
}
