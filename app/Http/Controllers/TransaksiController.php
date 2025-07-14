<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Obat;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with(['pelanggan', 'obat'])->get();
        return view('form-step.transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        $obats = Obat::all();
        return view('form-step.transaksi.create', compact('pelanggans', 'obats'));
    }

    public function store(Request $request)
    {
        $obat = Obat::find($request->obat_id);
        $subtotal = $obat->harga * $request->jumlah;

        Transaksi::create([
            'pelanggan_id' => $request->pelanggan_id,
            'obat_id' => $request->obat_id,
            'jumlah' => $request->jumlah,
            'subtotal' => $subtotal,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil disimpan!');
    }

    public function show(Transaksi $transaksi)
    {
        return view('form-step.transaksi.show', compact('transaksi'));
    }

    // Cetak struk langsung dari controller ini juga
    public function struk($id)
    {
        $transaksi = Transaksi::with(['pelanggan', 'obat'])->findOrFail($id);
        return view('form-step.struk.struk', compact('transaksi'));
    }
}
