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
        Schema::create('detail_konsultasi', function (Blueprint $table) {

            $table->id();

            $table->foreignId('konsultasi_id');

            $table->foreignId('gejala_id');

            $table->float('cf_user');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_konsultasi');
    }
};