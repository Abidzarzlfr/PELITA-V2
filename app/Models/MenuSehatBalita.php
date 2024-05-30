<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSehatBalita extends Model
{
    // Nama tabel
    protected $table = 'menu_sehat_balita';

    // Kolom yang bisa diisi
    protected $fillable = [
        'name',
        'kelompok_usia',
        'foto_konten',
        'foto_lokasi',
        'isi_konten',
    ];
}
