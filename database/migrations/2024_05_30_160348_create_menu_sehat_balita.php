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
        Schema::create('menu_sehat_balita', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('kelompok_usia', ['semua usia', '6-8 bulan', '9-11 bulan', '12 bulan keatas']);
            $table->string('foto_konten');
            $table->longText('isi_konten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_sehat_balita');
    }
};
