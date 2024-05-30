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
        Schema::create('grafik_gizi_indonesia', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['stunting', 'wasting', 'underweight', 'overweight']);
            $table->double('tahun_1', 15, 2);
            $table->double('tahun_2', 15, 2);
            $table->double('tahun_3', 15, 2);
            $table->double('tahun_4', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grafik_gizi_indonesia');
    }
};
