<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramKebijakan extends Model
{
    protected $table = 'program_kebijakan';

    protected $fillable = [
        'judul',
        'kategori',
        'status',
        'nama_penerbit',
        'foto_penerbit',
        'foto_konten',
        'isi_konten',
        'tanggal',
        'sumber',
    ];

    protected $dates = [
        'tanggal',
        'created_at',
        'updated_at',
    ];
}
