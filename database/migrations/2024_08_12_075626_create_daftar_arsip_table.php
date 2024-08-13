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
        Schema::create('daftar_arsip', function (Blueprint $table) {
            $table->id();
            $table->string('rak')->nullable();
            $table->string('boks')->nullable();
            $table->string('indeks')->nullable();
            $table->longText('masalah')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('tahun')->nullable();
            $table->text('file_arsip')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_arsip');
    }
};
