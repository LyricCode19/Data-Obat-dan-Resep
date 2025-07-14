@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pelanggan</h2>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat (opsional)</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon (opsional)</label>
            <input type="text" class="form-control" id="telepon" name="telepon">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
