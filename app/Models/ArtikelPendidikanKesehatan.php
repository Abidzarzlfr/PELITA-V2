<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelPendidikanKesehatan extends Model
{
    protected $table = 'artikel_pendidikan_kesehatan';

    protected $fillable = [
        'id_dokter',
        'judul',
        'kategori',
        'status',
        'kelompok_usia',
        'nama_penerbit',
        'foto_penerbit',
        'artikel_request_status',
        'foto_konten',
        'isi_konten',
        'tanggal',
    ];

    protected $dates = [
        'tanggal',
        'created_at',
        'updated_at',
    ];

    public function dokter()
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }
}
