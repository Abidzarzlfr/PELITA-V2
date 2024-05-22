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
        Schema::create('program_kebijakan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->enum('kategori', ['umum', 'pertumbuhan anak', 'olahraga', 'panduan orang tua', 'makanan dan nutrisi anak', 'asi dan menyusui'])->default('umum');
            $table->enum('status', ['umum', 'stunting', 'wasting', 'underweight', 'overweight'])->default('umum');
            $table->enum('nama_penerbit', ['kominfo', 'bkkbn', 'kemenkes', 'who', 'kpppa', 'unicef', 'idai']);
            $table->string('foto_penerbit');
            $table->string('foto_konten');
            $table->longText('isi_konten');
            $table->date('tanggal');
            $table->string('sumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kebijakan');
    }
};
