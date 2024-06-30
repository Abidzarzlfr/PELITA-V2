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
        Schema::create('artikel_pendidikan_kesehatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dokter')->nullable()->constrained('users')->comment('dokter role');
            $table->string('judul');
            $table->enum('kategori', ['umum', 'pertumbuhan anak', 'olahraga', 'panduan orang tua', 'makanan dan nutrisi anak', 'asi dan menyusui'])->default('umum');
            $table->enum('status', ['umum', 'stunting', 'wasting', 'underweight', 'overweight'])->default('umum');
            $table->enum('kelompok_usia', ['semua usia', 'hamil', 'bayi', 'batita', 'anak'])->default('semua usia');
            $table->string('nama_penerbit');
            $table->string('foto_penerbit');
            $table->enum('artikel_request_status', ['requested', 'not requested', 'approved'])->default('not requested');
            $table->longText('foto_konten');
            $table->longText('isi_konten');
            $table->date('tanggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel_pendidikan_kesehatan');
    }
};
