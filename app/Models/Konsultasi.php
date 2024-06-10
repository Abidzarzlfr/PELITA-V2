<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsultasi';

    protected $fillable = [
        'id_user',
        'id_dokter',
        'konsultasi_request_status',
        'detail',
        'tanggal'
    ];

    protected $dates = [
        'tanggal',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }

    public function getTanggalAttribute($value)
    {
        return Carbon::parse($value);
    }
}
