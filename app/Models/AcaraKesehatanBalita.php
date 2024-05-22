<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcaraKesehatanBalita extends Model
{
    protected $table = 'acara_kesehatan_balita';

    protected $fillable = [
        'judul',
        'foto_acara',
        'pemateri',
        'jam_mulai',
        'jam_selesai',
        'link_grup',
        'isi_konten',
        'status',
        'isi_konten',
        'tanggal',
    ];

    protected $dates = [
        'tanggal',
        'created_at',
        'updated_at',
    ];
}
