@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buat Transaksi</h2>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pelanggan_id" class="form-label">Pilih Pelanggan</label>
            <select name="pelanggan_id" id="pelanggan_id" class="form-select" required>
                <option value="" disabled selected>-- Pilih Pelanggan --</option>
                @foreach($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="obat_id" class="form-label">Pilih Obat</label>
            <select name="obat_id" id="obat_id" class="form-select" required>
                <option value="" disabled selected>-- Pilih Obat --</option>
                @foreach($obats as $obat)
                    <option value="{{ $obat->id }}">
                        {{ $obat->nama_obat }} (stok: {{ $obat->stok }}) - Rp {{ number_format($obat->harga, 0, ',', '.') }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
 