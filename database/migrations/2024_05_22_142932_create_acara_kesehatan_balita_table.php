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
        Schema::create('acara_kesehatan_balita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('foto_acara');
            $table->string('pemateri');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('link_grup');
            $table->longText('isi_konten');
            $table->enum('status', ['segera hadir', 'dibuka', 'ditutup']);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acara_kesehatan_balita');
    }
};
