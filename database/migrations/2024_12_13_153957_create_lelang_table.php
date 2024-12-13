<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLelangTable extends Migration
{
    public function up()
    {
        Schema::create('lelang', function (Blueprint $table) {
            $table->id('id_lelang');
            $table->foreignId('barang_id')->constrained('barang_lelang')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('pengguna')->onDelete('cascade');
            $table->enum('status', ['aktif', 'selesai'])->default('aktif');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_berakhir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lelang');
    }
}
