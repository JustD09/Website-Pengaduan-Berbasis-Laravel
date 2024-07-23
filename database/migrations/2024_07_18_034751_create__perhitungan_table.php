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
        Schema::create('perhitungans', function (Blueprint $table) {
            $table->id();
            $table->string('inisial');
            $table->time('arrival_time');
            $table->integer('burst_time');
            $table->time('start_time')->nullable();
            $table->time('finish_time')->nullable();
            $table->integer('waiting_time')->nullable();
            $table->integer('turn_around_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perhitungans');
    }
};
