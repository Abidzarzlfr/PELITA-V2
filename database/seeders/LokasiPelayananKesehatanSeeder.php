<?php

namespace Database\Seeders;

use App\Models\LokasiPelayananKesehatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiPelayananKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasiPelayananKesehatan = [
            [
                'nama_lokasi' => 'Siloam Hospitals Mampang',
                'provinsi' => 'DKI Jakarta',
                'kota' => 'Jakarta',
                'foto_lokasi' => 'https://htmlcolorcodes.com/assets/images/colors/black-color-solid-background-1920x1080.png',
                'tentang_lokasi' => 'Rumah Sakit A merupakan rumah sakit terkemuka di Jakarta Pusat.',
                'no_tlp_lokasi' => '08123456789',
                'alamat_lokasi' => 'Jl. Cipto Mangunkusumo No. 1, Jakarta Pusat',
                'link_maps' => 'https://www.google.com/maps/embed/v1/place?q=Siloam+Hospitals+Mampang&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8'
            ],
            [
                'nama_lokasi' => 'RS Hasan Sadikin',
                'provinsi' => 'Jawa Barat',
                'kota' => 'Bandung',
                'foto_lokasi' => 'https://htmlcolorcodes.com/assets/images/colors/light-brown-color-solid-background-1920x1080.png',
                'tentang_lokasi' => 'Puskesmas B adalah pusat kesehatan masyarakat yang melayani warga Bandung.',
                'no_tlp_lokasi' => '0222551111',
                'alamat_lokasi' => 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi',
                'link_maps' => 'https://www.google.com/maps/embed/v1/place?q=RS+hasan+sadikin&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8'
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        foreach ($lokasiPelayananKesehatan as $key => $val) {
            LokasiPelayananKesehatan::create($val);
        }
    }
}
