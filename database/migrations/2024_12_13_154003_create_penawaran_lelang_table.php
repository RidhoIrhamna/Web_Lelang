<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenawaranLelangTable extends Migration
{
    public function up()
    {
        Schema::create('penawaran_lelang', function (Blueprint $table) {
            $table->id('id_penawaran');
            $table->foreignId('lelang_id')->constrained('lelang')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('pengguna')->onDelete('cascade');
            $table->decimal('harga_penawaran', 15, 2);
            $table->dateTime('waktu_penawaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penawaran_lelang');
    }
}
