<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'name',
        'kategori',
        'detail',
        'tanggal',
        'foto',
    ];

    protected $dates = [
        'tanggal',
        'created_at',
        'updated_at',
    ];
}
