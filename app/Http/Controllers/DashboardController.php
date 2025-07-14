<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Obat;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total data
        $totalPelanggan = Pelanggan::count();
        $totalObat = Obat::count();
        $totalTransaksi = Transaksi::count();

        // Kirim ke view dashboard.blade.php
        return view('dashboard', compact('totalPelanggan', 'totalObat', 'totalTransaksi'));
    }
}
