<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrafikGiziIndonesia extends Model
{
    protected $table = 'grafik_gizi_indonesia';

    protected $fillable = [
        'status',
        'tahun_1',
        'tahun_2',
        'tahun_3',
        'tahun_4',
    ];
}
