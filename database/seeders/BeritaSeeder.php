<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritaData = [
            [
                'name' => 'Bahaya Stunting',
                'kategori' => 'stunting',
                'detail' => 'Stunting merupakan penyakit yang berbahaya untuk bayi dibawah lima tahun',
                // 'tanggal' => date('Y-m-d', strtotime('2024/10/13')),
                'tanggal' => '2024-04-20',
                'foto' => 'https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png'
            ],
            [
                'name' => 'Dampak Underweight',
                'kategori' => 'underweight',
                'detail' => 'Underweight merupakan penyakit yang berbahaya untuk bayi dibawah lima tahun',
                'tanggal' => '2024-04-21',
                'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Purple_website.svg/1200px-Purple_website.svg.png'
            ],
            [
                'name' => 'Kasus Stunting di Indonesia',
                'kategori' => 'stunting',
                'detail' => 'Kasus Stunting di Indonesia saat ini mencapai 67% yang merupakan status darurat',
                'tanggal' => '2024-04-21',
                'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Flag_of_Libya_%281977%E2%80%932011%29.svg/300px-Flag_of_Libya_%281977%E2%80%932011%29.svg.png'
            ],
            [
                'name' => 'Darurat Wasting',
                'kategori' => 'wasting',
                'detail' => 'Wasting merupakan penyakit yang berbahaya untuk bayi dibawah lima tahun',
                'tanggal' => '2024-04-21',
                'foto' => 'https://htmlcolorcodes.com/assets/images/colors/red-color-solid-background-1920x1080.png'
            ],
            
        ];

        foreach ($beritaData as $key => $val) {
            Berita::create($val);
        }
    }
}
