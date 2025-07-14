<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans';

    protected $fillable = ['nama', 'alamat', 'telepon'];

    // Relasi: 1 pelanggan bisa punya banyak transaksi
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
