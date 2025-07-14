@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Transaksi</h2>

    <a href="{{ route('transaksi.create') }}" class="btn btn-success mb-3">+ Buat Transaksi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Pelanggan</th>
                <th>Obat</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transaksis as $transaksi)
            <tr>
                <td>{{ $transaksi->pelanggan->nama }}</td>
                <td>{{ $transaksi->obat->nama_obat }}</td>
                <td>{{ $transaksi->jumlah }}</td>
                <td>Rp {{ number_format($transaksi->subtotal, 0, ',', '.') }}</td>
                <td>{{ $transaksi->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('transaksi.struk', $transaksi->id) }}" class="btn btn-secondary btn-sm" target="_blank">Cetak Struk</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
 