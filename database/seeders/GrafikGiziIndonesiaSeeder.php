<?php

namespace Database\Seeders;

use App\Models\GrafikGiziIndonesia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrafikGiziIndonesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grafikGiziIndonesia = [
            [
                'status' => 'stunting',
                'tahun_1' => 2200000.0,
                'tahun_2' => 3300000.0,
                'tahun_3' => 440000.0,
                'tahun_4' => 520000.0,
            ],
            [
                'status' => 'wasting',
                'tahun_1' => 1030000.0,
                'tahun_2' => 301000.0,
                'tahun_3' => 402000.0,
                'tahun_4' => 803000.0,
            ],
            [
                'status' => 'underweight',
                'tahun_1' => 201000.0,
                'tahun_2' => 1020000.0,
                'tahun_3' => 304000.0,
                'tahun_4' => 42000.0,
            ],
            [
                'status' => 'overweight',
                'tahun_1' => 264000.0,
                'tahun_2' => 305000.0,
                'tahun_3' => 4006000.0,
                'tahun_4' => 500200.0,
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        foreach ($grafikGiziIndonesia as $key => $val) {
            GrafikGiziIndonesia::create($val);
        }
    }
}
