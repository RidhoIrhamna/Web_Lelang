<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('id_feedback');
            $table->foreignId('user_id')->constrained('pengguna')->onDelete('cascade');
            $table->foreignId('lelang_id')->constrained('lelang')->onDelete('cascade');
            $table->unsignedTinyInteger('rating');
            $table->text('komentar')->nullable();
            $table->dateTime('waktu_feedback');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
