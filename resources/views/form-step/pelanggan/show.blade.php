@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Pelanggan</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
            <p><strong>Alamat:</strong> {{ $pelanggan->alamat ?? '-' }}</p>
            <p><strong>Telepon:</strong> {{ $pelanggan->telepon ?? '-' }}</p>
        </div>
    </div>

    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
 