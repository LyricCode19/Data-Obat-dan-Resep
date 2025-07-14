@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Dashboard Apotek</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Pelanggan</h5>
                    <h3>{{ $totalPelanggan }}</h3>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-light btn-sm mt-2">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Obat</h5>
                    <h3>{{ $totalObat }}</h3>
                    <a href="{{ route('obat.index') }}" class="btn btn-light btn-sm mt-2">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-info shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Transaksi</h5>
                    <h3>{{ $totalTransaksi }}</h3>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-light btn-sm mt-2">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
