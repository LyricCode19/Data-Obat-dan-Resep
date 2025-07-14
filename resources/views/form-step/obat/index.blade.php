@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Obat</h2>

    <a href="{{ route('obat.create') }}" class="btn btn-success mb-3">+ Tambah Obat</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Dosis</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($obats as $obat)
            <tr>
                <td>{{ $obat->nama_obat }}</td>
                <td>{{ $obat->jenis_obat }}</td>
                <td>{{ $obat->dosis }}</td>
                <td>{{ $obat->stok }}</td>
                <td>Rp {{ number_format($obat->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('obat.show', $obat->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
 