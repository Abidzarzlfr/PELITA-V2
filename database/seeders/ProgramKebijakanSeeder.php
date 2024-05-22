<?php

namespace Database\Seeders;

use App\Models\ProgramKebijakan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramKebijakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programKebijakanData = [
            [
                'judul' => 'Warna Feses Bayi',
                'kategori' => 'pertumbuhan anak',
                'status' => 'umum',
                'nama_penerbit' => 'kominfo',
                'foto_penerbit' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSrd4DuhpuJcCoDLLineKllQGPqvyff3Okr0QaRlgOKQ&s',
                'foto_konten' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSrd4DuhpuJcCoDLLineKllQGPqvyff3Okr0QaRlgOKQ&s',
                'isi_konten' => 'Diare tidak hanya menyerang orang dewasa, tetapi bayi juga sangat rentan terhadap kondisi ini, terutama pada usia 0-6 bulan karena sistem pencernaan mereka yang belum sempurna. Di Indonesia, diare menjadi salah satu penyebab utama kematian bayi. Oleh karena itu, penting bagi orang tua untuk memahami ciri-ciri, penyebab, dan cara mengatasi diare pada bayi.',
                'tanggal' => '2024-04-20',
                'sumber' => 'https://www.google.com/',
            ],
            [
                'judul' => 'Bahaya Susu Formula',
                'kategori' => 'pertumbuhan anak',
                'status' => 'overweight',
                'nama_penerbit' => 'kemenkes',
                'foto_penerbit' => 'https://htmlcolorcodes.com/assets/images/colors/light-green-color-solid-background-1920x1080.png',
                'foto_konten' => 'https://htmlcolorcodes.com/assets/images/colors/light-green-color-solid-background-1920x1080.png',
                'isi_konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat.',
                'tanggal' => '2024-06-26',
                'sumber' => 'https://www.google.com/',
            ],
            [
                'judul' => 'Pentingnya Perhatian Intens',
                'kategori' => 'pertumbuhan anak',
                'status' => 'umum',
                'nama_penerbit' => 'idai',
                'foto_penerbit' => 'https://www.geaves.com/media/catalog/product/cache/acd115faf6a75f6594ab269049b631ed/3/1/31552_5.webp',
                'foto_konten' => 'https://www.geaves.com/media/catalog/product/cache/acd115faf6a75f6594ab269049b631ed/3/1/31552_5.webp',
                'isi_konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat.',
                'tanggal' => '2024-06-24',
                'sumber' => 'https://www.google.com/',
            ],
            [
                'judul' => 'Bahaya Susu Formula',
                'kategori' => 'pertumbuhan anak',
                'status' => 'overweight',
                'nama_penerbit' => 'unicef',
                'foto_penerbit' => 'https://t4.ftcdn.net/jpg/05/06/41/89/360_F_506418953_5R5MQsN4UJ4hLgqnKlltS44wbQ33LhIU.jpg',
                'foto_konten' => 'https://t4.ftcdn.net/jpg/05/06/41/89/360_F_506418953_5R5MQsN4UJ4hLgqnKlltS44wbQ33LhIU.jpg',
                'isi_konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat.',
                'tanggal' => '2024-01-01',
                'sumber' => 'https://www.google.com/',
            ],

        ];

        foreach ($programKebijakanData as $key => $val) {
            ProgramKebijakan::create($val);
        }
    }
}
