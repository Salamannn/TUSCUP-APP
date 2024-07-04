<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use App\Models\Pertandingan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTim = Tim::count();
        $totalPertandingan = Pertandingan::count();
        $pertandinganMendatang = Pertandingan::where('tanggal', '>', now())->orderBy('tanggal', 'asc')->take(5)->get();
        $daftarTim = Tim::with('cabangOlahraga')->take(5)->get();

        return view('dashboard.index', compact('totalTim', 'totalPertandingan', 'pertandinganMendatang', 'daftarTim'));
    }
}

