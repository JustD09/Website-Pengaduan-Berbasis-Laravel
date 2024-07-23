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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('nama_pelapor');
            $table->string('nama_ruas')->nullable();
            $table->string('tanggal_laporan')->nullable();
            $table->string('panjang_kerusakan')->nullable();
            $table->string('lebar_kerusakan')->nullable();
            $table->string('kondisi_jalan')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('Dalam Pemeriksaan Petugas');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
