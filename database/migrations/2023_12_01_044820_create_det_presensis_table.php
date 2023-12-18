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
        Schema::create('det_presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nis_siswa')->references('nis')->on('siswas');
            $table->foreignId('id_presensi')->references('id')->on('presensis');
            $table->boolean('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_presensis');
    }
};
