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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lokasi')->nullable()->constrained('lokasi_pelayanan_kesehatan')->name('id_lokasi');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['user', 'dokter', 'admin'])->default('user');
            $table->enum('dokter_request_status', ['requested', 'not requested', 'approved'])->default('not requested');
            $table->string('foto')->nullable();
            $table->string('dokter_nomor_str')->nullable();
            $table->string('dokter_dokumen_str')->nullable();
            $table->string('dokter_kualifikasi')->nullable();
            $table->string('dokter_hp')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
