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
                'name' => 'dokter',
                'email' => 'dokter@example.com',
                'password' => bcrypt('123456'),
                'role' => 'dokter',
                'dokter_request_status' => 'approved',
                'foto' => 'https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png',
                'dokter_nik' => '1200231233',
                'dokter_nip' => '2203342152',
                'dokter_detail' => 'Ahli Gizi',
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
