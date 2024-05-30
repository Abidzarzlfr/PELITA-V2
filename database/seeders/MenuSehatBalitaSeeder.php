<?php

namespace Database\Seeders;

use App\Models\MenuSehatBalita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSehatBalitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuSehatBalita = [
            [
                'name' => 'Resep Bubur Sehat',
                'kelompok_usia' => 'semua usia',
                'foto_konten' => 'https://htmlcolorcodes.com/assets/images/colors/black-color-solid-background-1920x1080.png',
                'isi_konten' => 'isi konten',
            ],
            [
                'name' => 'Cemilan Sehat',
                'kelompok_usia' => '6-8 bulan',
                'foto_konten' => 'https://htmlcolorcodes.com/assets/images/colors/black-color-solid-background-1920x1080.png',
                'isi_konten' => 'isi konten',
            ],
            [
                'name' => 'Resep Donat',
                'kelompok_usia' => '9-11 bulan',
                'foto_konten' => 'https://htmlcolorcodes.com/assets/images/colors/black-color-solid-background-1920x1080.png',
                'isi_konten' => 'isi konten',
            ],
            [
                'name' => 'Bubur Ubi Sehat',
                'kelompok_usia' => '12 bulan keatas',
                'foto_konten' => 'https://htmlcolorcodes.com/assets/images/colors/black-color-solid-background-1920x1080.png',
                'isi_konten' => 'isi konten',
            ],
        ];

        foreach ($menuSehatBalita as $key => $val) {
            MenuSehatBalita::create($val);
        }
    }
}
