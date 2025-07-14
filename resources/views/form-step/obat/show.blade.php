@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Obat</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $obat->nama_obat }}</p>
            <p><strong>Jenis:</strong> {{ $obat->jenis_obat }}</p>
            <p><strong>Dosis:</strong> {{ $obat->dosis }}</p>
            <p><strong>Stok:</strong> {{ $obat->stok }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($obat->harga, 0, ',', '.') }}</p>
        </div>
    </div>

    <a href="{{ route('obat.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
 