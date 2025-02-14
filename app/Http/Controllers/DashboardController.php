<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'total_pending' => SuratMasuk::where('status', 'verifikasi')->count(),
            'sekretaris' => SuratMasuk::whereHas('user', function ($query) {
                $query->where('role', 'sekretaris');
            })->where('status', 'verifikasi')->count(),
            'pemdes' => SuratMasuk::whereHas('user', function ($query) {
                $query->where('role', 'pemdes');
            })->where('status', 'verifikasi')->count(),
            'peukd' => SuratMasuk::whereHas('user', function ($query) {
                $query->where('role', 'peukd');
            })->where('status', 'verifikasi')->count(),
            'pkkmd' => SuratMasuk::whereHas('user', function ($query) {
                $query->where('role', 'pkkmd');
            })->where('status', 'verifikasi')->count(),



        ];


        $title =   'Dashboard';


        return view('dashboard', compact('data', 'title'));
    }
}
