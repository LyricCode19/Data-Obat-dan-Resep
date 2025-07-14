<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id(); // id BIGINT AUTO_INCREMENT
            $table->string('nama_obat');
            $table->string('jenis_obat');
            $table->string('dosis');
            $table->integer('stok');
            $table->integer('harga');
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};

 