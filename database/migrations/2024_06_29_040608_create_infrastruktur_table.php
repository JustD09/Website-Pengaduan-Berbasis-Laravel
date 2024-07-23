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
        Schema::create('infrastrukturs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruas');
            $table->string('panjang_km');
            $table->string('lebar_m');
            $table->string('kondisi_jalan');
            $table->string('status_jalan');
            $table->string('kelas_jalan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infrastrukturs');
    }
};
