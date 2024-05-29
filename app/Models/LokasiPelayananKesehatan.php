<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiPelayananKesehatan extends Model
{
    // Nama tabel
    protected $table = 'lokasi_pelayanan_kesehatan';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama_lokasi',
        'provinsi',
        'kota',
        'foto_lokasi',
        'tentang_lokasi',
        'no_tlp_lokasi',
        'alamat_lokasi',
        'link_maps',
    ];

    // Kolom yang bisa bernilai null
    protected $attributes = [
        'foto_lokasi' => null,
        'tentang_lokasi' => null,
        'link_maps' => null,
    ];
}
