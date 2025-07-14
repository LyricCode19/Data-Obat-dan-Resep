<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class StrukController extends Controller
{
    // ✅ Tampilkan semua struk (untuk route /struk)
    public function index()
    {
        $transaksis = Transaksi::with(['pelanggan', 'obat'])->get();
        return view('struk.index', compact('transaksis'));
    }

    // ✅ Tampilkan 1 struk berdasarkan ID (untuk route /struk/{id})
    public function show($id)
    {
        $transaksi = Transaksi::with(['pelanggan', 'obat'])->findOrFail($id);
        return view('struk.show', compact('transaksi'));
    }
}
