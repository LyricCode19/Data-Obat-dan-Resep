<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obats';

    protected $fillable = ['nama_obat', 'jenis_obat', 'dosis', 'stok', 'harga'];

    // Relasi: 1 obat bisa dibeli dalam banyak transaksi
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
