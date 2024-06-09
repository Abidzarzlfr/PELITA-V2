@extends('includes.Main')

<!-- Portal Artikel Dokter -->
@section('portalArtikelDokter')

<!-- Tambah Artikel -->
<section class="statistik-ahli-gizi py-5">
    <div class="container">
        <h2>Tambah Artikel</h2>
        <form action="" enctype="multipart/form-data">
            <div class="row my-5">
                <div class="col-6">
                    <img src="img/berita-1.png" class="img-fluid rounded-3" alt="" id="artikelPreview">
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-gray-200" id="basic-addon1">Judul</span>
                        <input type="text" class="form-control" placeholder="Judul" aria-label="Dokumen STR" name="judul">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-gray-200" id="basic-addon1">Kategori</span>
                        <select name="kategori" class="form-select" id="">
                            <option value="">Pilih Kategori</option>
                            <option value="">Pertumbuhan Anak</option>
                            <option value="">Olahraga</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-gray-200" id="basic-addon1">Status</span>
                        <select name="status" class="form-select" id="">
                            <option value="">Pilih Status Gizi</option>
                            <option value="">Wasting</option>
                            <option value="">Umum</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-gray-200" id="basic-addon1">Kelompok Usia</span>
                        <select name="kelompok_usia" class="form-select" id="">
                            <option value="">Pilih Kategori</option>
                            <option value="">Pertumbuhan Anak</option>
                            <option value="">Olahraga</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-gray-200" id="basic-addon1">Dokumen STR</span>
                        <input type="file" class="form-control d-none" placeholder="Foto Konten" name="foto_konten" aria-describedby="basic-addon1" accept="image/png,image/jpg,image/jpeg" id="foto_konten">
                        <label for="foto_konten" class="fs-6 border form-control cursor-pointer" id="fotoKontenId">Pilih Berkas</label>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-gray-200" id="basic-addon1">Isi Konten</span>
                        <input type="text" class="form-control" placeholder="Example" name="isi_konten">
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-secondary text-white w-100" value="Unggah Artikel" />
        </form>
    </div>
</section>
<!-- Tabel Artikel -->
<section class="artikel-table py-5">
    <div class="container">
        <h2>Daftar Artikel</h2>
        <div class="table-responsive">

            <table class="table table-bordered mt-4 w-100">
                <thead class="text-black">
                    <th class="bg-secondary-100">No</th>
                    <th class="bg-secondary-100" style="width: 250px;">Judul</th>
                    <th class="bg-secondary-100" style="width: 110px;">Kategori</th>
                    <th class="bg-secondary-100" style="width: 100px;">Status</th>
                    <th class="bg-secondary-100" style="width: 130px;">Kelompok Usia</th>
                    <th class="bg-secondary-100">Foto Konten</th>
                    <th class="bg-secondary-100" style="width: 250px;">Isi Konten</th>
                    <th class="bg-secondary-100" style="width: 100px;">Tanggal</th>
                    <th class="bg-secondary-100" style="width: 120px;">Aksi</th>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Balita Terlalu Kurus, Awas Malabsorpsi Kronis</td>
                        <td>Pertumbuhan Anak</td>
                        <td>Wasting</td>
                        <td>Anak</td>
                        <td><img src="img/carousel-3.png" class="" alt="" width="168px"></td>
                        <td>Pelita - Jakarta, Balita Kurus Meskipun Sudah Diberi Makanan Bergizi? Ini Tanda
                            Malabsorpsi
                            Kronis yang Harus Diwaspadai!</td>
                        <td>3 Juni 2024</td>
                        <td><a href="" class="text-decoration-none text-black">Ubah</a> <span class="text-muted fw-light">|</span> <a href="" class="text-decoration-none text-black">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>6 Aktivitas Seru untuk Balita yang Bikin Badan Tetap Fit!</td>
                        <td>Olahraga</td>
                        <td>Umum</td>
                        <td>Anak</td>
                        <td><img src="img/carousel-2.png" class="" alt="" width="168px"></td>
                        <td>Pelita - Jakarta, Keseruan Aktivitas Fisik: Balita Membutuhkan Gerakan untuk Tetap Enerjik! Minimal 180 Menit atau Lebih untuk Kesehatan Mereka!</td>
                        <td>2 Juni 2024</td>
                        <td><a href="" class="text-decoration-none text-black">Ubah</a> <span class="text-muted fw-light">|</span> <a href="" class="text-decoration-none text-black">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Warna Feses Bayi: Tanda Penting bagi Orang Tua</td>
                        <td>Pertumbuhan Anak</td>
                        <td>Umum</td>
                        <td>Bayi</td>
                        <td><img src="img/carousel-1.png" class="" alt="" width="168px"></td>
                        <td>Pelita - Jakarta, Banyak orang tua cemas tentang apakah anak kecil mereka mengonsumsi makanan yang cukup sehat. Anak kecil umumnya makan sedikit, picky terhadap makanan, dan sering menolak untuk makan. Nafsu makan anak kecil sering berubah-ubah karena pertumbuhan yang cepat dan variasi dalam aktivitas mereka.</td>
                        <td>1 Juni 2024</td>
                        <td><a href="" class="text-decoration-none text-black">Ubah</a> <span class="text-muted fw-light">|</span> <a href="" class="text-decoration-none text-black">Hapus</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
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