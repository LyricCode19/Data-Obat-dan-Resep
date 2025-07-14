@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Obat</h2>

    <form action="{{ route('obat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
        </div>

        <div class="mb-3">
            <label for="jenis_obat" class="form-label">Jenis Obat</label>
            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" required>
        </div>

        <div class="mb-3">
            <label for="dosis" class="form-label">Dosis</label>
            <input type="text" class="form-control" id="dosis" name="dosis" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
 