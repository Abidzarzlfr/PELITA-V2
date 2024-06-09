@extends('includes.Main')

<!-- Dokter Views (Konsultasi Page) -->
@section('dokter')

<!-- Statistik Ahli Gizi -->
<section class="statistik-ahli-gizi py-5">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex rounded-5 bg-secondary p-4 align-items-center justify-content-start gap-3">
                            <div class=" d-flex align-items-center justify-content-center rounded-circle w-67px h-67px text-center" style="background-color: #978378;">
                                <i class="fa-solid fa-laptop-medical fs-2"></i>
                            </div>
                            <div class="">
                                <h1>20</h1>
                                <p class="m-0"> Total Jadwal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex rounded-5 bg-secondary-200 p-4 align-items-center justify-content-start gap-3">
                            <div class=" d-flex align-items-center justify-content-center rounded-circle w-67px h-67px text-center" style="background-color: #A2948D;">
                                <i class="fa-regular fa-address-card fs-2"></i>
                            </div>
                            <div class="">
                                <h1>15</h1>
                                <p class="m-0">Total Pengguna</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portal Konsultasi -->
<section class="portal-konsultasi py-5">
    <div class="container">
        <div class="row">
            <!-- Permintaan Konsultasi -->
            <div class="col-6">
                <h5>Permintaan Konsultasi</h5>
                <p>Terima atau tolak permintaan konsultasi oleh user</p>
                <div class="d-flex justify-content-start gap-3 align-items-center mb-4">
                    <img src="img/balita.png" class="rounded-circle" width="84px" height="84px" alt="">
                    <div class="konsul-detail-card w-100">
                        <div class="row">
                            <div class="col-6">
                                <p class="fw-bold mb-2">Budi Santoso</p>
                                <p class="m-0">2 Juni 2024, 07.44</p>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-outline-secondary w-100">Detail Permintaan</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="" class="btn btn-danger w-100">Tolak</a>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-success w-100">Terima</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 align-items-center mb-4">
                    <img src="img/balita.png" class="rounded-circle" width="84px" height="84px" alt="">
                    <div class="konsul-detail-card w-100">
                        <div class="row">
                            <div class="col-6">
                                <p class="fw-bold mb-2">Budi Santoso</p>
                                <p class="m-0">2 Juni 2024, 07.44</p>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-outline-secondary w-100">Detail Permintaan</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="" class="btn btn-danger w-100">Tolak</a>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-success w-100">Terima</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 align-items-center mb-4">
                    <img src="img/balita.png" class="rounded-circle" width="84px" height="84px" alt="">
                    <div class="konsul-detail-card w-100">
                        <div class="row">
                            <div class="col-6">
                                <p class="fw-bold mb-2">Budi Santoso</p>
                                <p class="m-0">2 Juni 2024, 07.44</p>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-outline-secondary w-100">Detail Permintaan</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="" class="btn btn-danger w-100">Tolak</a>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-success w-100">Terima</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="" class="btn btn-outline-secondary w-100">Lihat Semuanya</a>
            </div>
            <!-- Jadwal Konsultasi -->
            <div class="col-6">
                <h5>Jadwal Konsultasi</h5>
                <p>Pilih tanggal untuk melihat jadwal konsultasi</p>
                <div class="d-flex gap-4">
                    <div class="shadow" id="kalender"></div>
                    <div class="detail-permintaan-wrapper">
                        <div class="d-flex w-100 gap-3 detail-permintaan mb-3 align-items-center">
                            <img src="img/balita.png" class="rounded-circle" alt="" width="84px" height="84px">
                            <div class="w-100">
                                <p class="fw-bold">Clarissa Felicia</p>
                                <a href="" class="btn btn-outline-secondary w-100">Detail Permintaan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Tabel Konsultasi -->
<section class="table-konsultasi">
    <div class="container">

        <h5>Daftar Konsultasi</h5>
        <table class="table table-striped table-bordered mt-4">
            <thead>
                <th>Nama Pengguna</th>
                <th>Tanggal Pengajuan</th>
                <th>Jadwal Konsultasi</th>
                <th>Status</th>
                <th>Detail</th>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>Clarissa Felicia</td>
                    <td>1 Juni 2024</td>
                    <td>8 Juni 2024</td>
                    <td>Diterima</td>
                    <td><a href="" class="text-decoration-none text-black">Lihat Detail</a></td>
                </tr>
                <tr>
                    <td>Budi Santoso</td>
                    <td>2 Juni 2024</td>
                    <td>1 Juni 2024</td>
                    <td>Menunggu</td>
                    <td><a href="" class="text-decoration-none text-black">Lihat Detail</a></td>
                </tr>
                <tr>
                    <td>Rina Wulandari</td>
                    <td>2 Juni 2024</td>
                    <td>2 Juni 2024</td>
                    <td>Menunggu</td>
                    <td><a href="" class="text-decoration-none text-black">Lihat Detail</a></td>
                </tr>
                <tr>
                    <td>Agus Prasetyo</td>
                    <td>2 Juni 2024</td>
                    <td>10 Juni 2024</td>
                    <td>Menunggu</td>
                    <td><a href="" class="text-decoration-none text-black">Lihat Detail</a></td>
                </tr>
                <tr>
                    <td>Andi Wijaya</td>
                    <td>4 Juni 2024</td>
                    <td>11 Juni 2024</td>
                    <td>Ditolak</td>
                    <td><a href="" class="text-decoration-none text-black">Lihat Detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Footer -->
<footer class="bg-secondary-100">
    <section class="info text-center pt-5 bg-bg" style="background-image: url('/Main/assets/main/footer-portal-konsultasi.png');">
        <div class="container">
            <p>KESEHATAN BALITA UNTUK INDONESIA EMAS 2045</p>
            <h1 class="my-4">Informasi Lebih Lanjut</h1>
            <h6>Tak hanya sebuah website kesehatan balita, Pelita adalah panggung inovasi yang mengukir jejak unik
                dalam
                tahap klinis, menerangi perjalanan sehat si kecil di Indonesia dengan cahaya penuh harapan.</h6>
            <a href="" class="btn btn-secondary text-white my-5">Kontak Kami</a>
            <p class="text-muted mb-5">&copy; 2024 Pelita</p>
        </div>
    </section>

    <div class="container">
        <hr class="m-0">
        <div class="row py-5">
            <div class="col-2">
                <img src="{{ asset('Main/assets/main/Logo-secondary.svg') }}" alt="">
            </div>
            <div class="col-6 d-flex justify-content-around align-items-center">
                <a href="" class="text-black text-decoration-none">Tentang</a>
                <a href="" class="text-black text-decoration-none">Kontak</a>
                <a href="" class="text-black text-decoration-none">Bantuan</a>
                <a href="" class="text-black text-decoration-none">Kebijakan Privasi</a>
                <a href="" class="text-black text-decoration-none">FAQ</a>
            </div>
            <div class="col-4 d-flex gap-3 justify-content-evenly align-items-center">
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-linkedin fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-instagram fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-github fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-youtube fs-4"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
@endsection