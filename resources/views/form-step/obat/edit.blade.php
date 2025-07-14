@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Obat</h2>

    <form action="{{ route('obat.update', $obat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ $obat->nama_obat }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_obat" class="form-label">Jenis Obat</label>
            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" value="{{ $obat->jenis_obat }}" required>
        </div>

        <div class="mb-3">
            <label for="dosis" class="form-label">Dosis</label>
            <input type="text" class="form-control" id="dosis" name="dosis" value="{{ $obat->dosis }}" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ $obat->stok }}" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $obat->harga }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
 