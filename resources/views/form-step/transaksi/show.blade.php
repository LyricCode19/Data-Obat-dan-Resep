@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Transaksi</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Pelanggan:</strong> {{ $transaksi->pelanggan->nama }}</p>
            <p><strong>Obat:</strong> {{ $transaksi->obat->nama_obat }}</p>
            <p><strong>Jumlah:</strong> {{ $transaksi->jumlah }}</p>
            <p><strong>Subtotal:</strong> Rp {{ number_format($transaksi->subtotal, 0, ',', '.') }}</p>
            <p><strong>Tanggal Transaksi:</strong> {{ $transaksi->created_at->format('d-m-Y H:i') }}</p>
        </div>
    </div>

    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
 