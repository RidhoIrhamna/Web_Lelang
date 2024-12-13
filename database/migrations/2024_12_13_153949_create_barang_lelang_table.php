<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangLelangTable extends Migration
{
    public function up()
    {
        Schema::create('barang_lelang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga_awal', 15, 2);
            $table->enum('status', ['aktif', 'selesai'])->default('aktif');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_berakhir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_lelang');
    }
}
