<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_guru');
            $table->foreignId('id_mapel')->references('id')->on('mapels');
            $table->foreign('kode_guru')->references('kode_guru')->on('gurus');
            $table->foreignId('id_kelas')->references('id')->on('kelas');
            $table->string('deskripsi');
            $table->date('hari_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
