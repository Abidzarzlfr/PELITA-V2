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
        Schema::create('lokasi_pelayanan_kesehatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lokasi');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('foto_lokasi')->nullable();
            $table->longText('tentang_lokasi')->nullable();
            $table->string('no_tlp_lokasi');
            $table->longText('alamat_lokasi');
            $table->string('link_maps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasi_pelayanan_kesehatan');
    }
};
