<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => bcrypt('123456'),
                'role' => 'user',
                'foto' => 'https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png'
            ],
            [
                'id_lokasi' => 1,
                'name' => 'dokter',
                'email' => 'dokter@example.com',
                'password' => bcrypt('123456'),
                'role' => 'dokter',
                'dokter_request_status' => 'approved',
                'foto' => 'https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png',
                'dokter_nomor_str' => '1200231233',
                'dokter_dokumen_str' => 'https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png',
                'dokter_kualifikasi' => 'Ahli Gizi',
                'dokter_hp' => '0818229341',
            ],
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('123456'),
                'role' => 'admin',
                'foto' => 'https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png'
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
