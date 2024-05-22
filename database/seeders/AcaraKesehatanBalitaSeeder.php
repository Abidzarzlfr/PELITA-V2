<?php

namespace Database\Seeders;

use App\Models\AcaraKesehatanBalita;
use Illuminate\Database\Seeder;

class AcaraKesehatanBalitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $acaraData = [
            [
                'judul' => 'Bahaya Stunting',
                'foto_acara' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSrd4DuhpuJcCoDLLineKllQGPqvyff3Okr0QaRlgOKQ&s',
                'pemateri' => 'Dr. Richard Lee',
                'jam_mulai' => '11.00',
                'jam_selesai' => '13.00',
                'link_grup' => 'https://chat.whatsapp.com/Ek5SfhkiUys2PpEwvCWaoD',
                'isi_konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat.',
                'status' => 'segera hadir',
                'tanggal' => '2024-04-20',
            ],
            [
                'judul' => 'Good Parenting',
                'foto_acara' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSrd4DuhpuJcCoDLLineKllQGPqvyff3Okr0QaRlgOKQ&s',
                'pemateri' => 'DR. Abidzar Zulfa A S.Kom., M.Kom',
                'jam_mulai' => '14.00',
                'jam_selesai' => '17.00',
                'link_grup' => 'https://chat.whatsapp.com/Ek5SfhkiUys2PpEwvCWaoD',
                'isi_konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat.',
                'status' => 'segera hadir',
                'tanggal' => '2024-07-04',
            ],
            [
                'judul' => 'Internet Bagi Anak',
                'foto_acara' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSrd4DuhpuJcCoDLLineKllQGPqvyff3Okr0QaRlgOKQ&s',
                'pemateri' => 'DR. M Faraz Adhifa S.Kom., M.Kom',
                'jam_mulai' => '08.00',
                'jam_selesai' => '15.00',
                'link_grup' => 'https://chat.whatsapp.com/Ek5SfhkiUys2PpEwvCWaoD',
                'isi_konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat.',
                'status' => 'segera hadir',
                'tanggal' => '2024-04-10',
            ],
            [
                'judul' => 'Bahaya Overweight',
                'foto_acara' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSrd4DuhpuJcCoDLLineKllQGPqvyff3Okr0QaRlgOKQ&s',
                'pemateri' => 'Dr. Bohongan',
                'jam_mulai' => '13.00',
                'jam_selesai' => '19.00',
                'link_grup' => 'https://chat.whatsapp.com/Ek5SfhkiUys2PpEwvCWaoD',
                'isi_konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores laudantium nemo perspiciatis voluptate reiciendis, unde possimus laboriosam architecto sapiente doloremque. Sunt eos voluptas, eum laborum qui fuga ipsa placeat.',
                'status' => 'segera hadir',
                'tanggal' => '2024-04-20',
            ],

        ];

        foreach ($acaraData as $key => $val) {
            AcaraKesehatanBalita::create($val);
        }
    }
}
