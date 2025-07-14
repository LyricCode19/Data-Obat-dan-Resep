<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { font-family: 'Courier New', Courier, monospace; }
        .struk-box {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px dashed #333;
            margin-top: 30px;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="struk-box">
    <h4 class="text-center">Apotek Sehat Selalu</h4>
    <p class="text-center">Jl. Kesehatan No.1, Indonesia</p>
    <hr>

    <p><strong>Tanggal:</strong> {{ $transaksi->created_at->format('d-m-Y H:i') }}</p>
    <p><strong>Nama Pelanggan:</strong> {{ $transaksi->pelanggan->nama }}</p>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>Obat</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $transaksi->obat->nama_obat }}</td>
                <td>{{ $transaksi->jumlah }}</td>
                <td>Rp {{ number_format($transaksi->obat->harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($transaksi->subtotal, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <hr>
    <p class="text-center">Terima kasih telah berbelanja 🙏</p>
</div>

<div class="text-center mt-3 no-print">
    <button onclick="window.print()" class="btn btn-primary">Cetak Struk</button>
    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>
  