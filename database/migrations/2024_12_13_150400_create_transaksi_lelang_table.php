<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiLelangTable extends Migration
{
    public function up()
    {
        Schema::create('transaksi_lelang', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->foreignId('lelang_id')->constrained('lelang')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('pengguna')->onDelete('cascade');
            $table->enum('status_transaksi', ['menunggu_verifikasi', 'selesai', 'gagal'])->default('menunggu_verifikasi');
            $table->string('bukti_pembayaran')->nullable();
            $table->dateTime('waktu_transaksi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi_lelang');
    }
}
