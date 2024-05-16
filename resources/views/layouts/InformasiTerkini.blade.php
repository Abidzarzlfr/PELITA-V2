@extends('includes.Main')

@section('informasiTerkini')
<!-- Head Informasi Terkini  -->
<section class="informasi-terkini py-5 bg-bg">
    <div class="container">
        <div class="row">
            <div class="col-6 pt-3">
                <h2>Informasi Terkini untuk Si Kecil</h2>
                <p>Temukan informasi terkini dan berguna! Mari bersama-sama menjaga kesehatan si kecil dengan
                    membaca berita terbaru di halaman kami!</p>
                <form action="">
                    <div class="input-group pt-5">
                        <input type="text" class="form-control" placeholder="Cari Informasi" aria-label="Cari Informasi" aria-describedby="btn-search">
                        <button class="btn btn-primary" type="submit" id="btn-search"><i class="bi bi-search me-2"></i>Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Carousel Berita Terikini -->
<section class="carousel-terkini py-5 pb-4">
    <div class="container d-flex justify-content-center aling-items-center">
        <div id="carouselBerita" class="carousel slide w-75 h-75" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselBerita" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselBerita" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselBerita" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('Main/assets/main/berita-3.png') }}" class="d-block w-100 rounded" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>6 Aktivitas Seru untuk Balita yang Bikin Badan Tetap Fit!</h5>
                        <p>PERTUMBUHAN BALITA | 15 menit yang lalu</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Main/assets/main/berita-2.png') }}" class="d-block w-100 rounded" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>6 Aktivitas Seru untuk Balita yang Bikin Badan Tetap Fit!</h5>
                        <p>PERTUMBUHAN BALITA | 15 menit yang lalu</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="d-block w-100 rounded" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>6 Aktivitas Seru untuk Balita yang Bikin Badan Tetap Fit!</h5>
                        <p>PERTUMBUHAN BALITA | 15 menit yang lalu</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBerita" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBerita" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- Artikel Pendidikan Kesehatan Terkini -->
<section class="artikel-terkini py-5 bg-bg">
    <div class="container">
        <h3 class="mb-5">Artikel Pendidikan Kesehatan</h3>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Warna Feses Bayi: Tanda Penting bagi Orang Tua</h5>
                        <h6 class="text-muted my-3">PERTUMBUHAN BALITA</h6>
                        <p>Pelita - Jakarta, Banyak orang tua cemas tentang apakah anak kecil mereka mengonsumsi
                            makanan yang cukup sehat. Anak kecil umumnya makan sedikit, picky terhadap makanan, dan
                            sering menolak untuk makan. Nafsu makan anak kecil sering berubah-ubah karena
                            pertumbuhan yang cepat dan variasi dalam aktivitas mereka.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/berita-2.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">6 Aktivitas Seru untuk Balita yang Bikin Badan Tetap Fit!</h5>
                        <h6 class="text-muted my-3">OLAHRAGA</h6>
                        <p>Pelita - Jakarta, Keseruan Aktivitas Fisik: Balita Membutuhkan Gerakan untuk Tetap
                            Enerjik! Minimal 180 Menit atau Lebih untuk Kesehatan Mereka!</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/berita-3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Balita Terlalu Kurus, Awas Malabsorpsi Kronis</h5>
                        <h6 class="text-muted my-3">PERTUMBUHAN BALITA</h6>
                        <p>Pelita - Jakarta, Balita Kurus Meskipun Sudah Diberi Makanan Bergizi? Ini Tanda
                            Malabsorpsi Kronis yang Harus Diwaspadai!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="" class="btn btn-primary mt-5">Baca Selengkapnya</a>
        </div>
    </div>
</section>
<!-- Program dan Kebijakan Terkini -->
<section class="program-terkini py-5">
    <div class="container">
        <h3 class="mb-5">Program dan Kebijakan</h3>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/program-terkini/program-terikini-1.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Kominfo ajak Masyarakat Turunkan Prevalensi Stunting</h5>
                        <h6 class="text-muted my-3">STUNTING</h6>
                        <p>Kominfo - Jakarta, Pada tahun 2030, Indonesia akan menikmati masa keemasan demografi, di
                            mana mayoritas penduduknya berada dalam usia produktif. Kondisi ini akan menjadikan
                            mereka sebagai pilar utama yang menopang pertumbuhan ekonomi negara.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/program-terkini/program-terikini-2.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Hari Gizi Nasional. Waspada Ancaman Gizi Buruk</h5>
                        <h6 class="text-muted my-3">GIZI BURUK</h6>
                        <p>Kemenkes - Jakarta, Peringatan Hari Gizi Nasional mengingatkan kita akan bahaya
                            malnutrisi. Dalam konteks ini, ada beberapa aspek penting yang perlu diperhatikan.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/program-terkini/program-terikini-3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Bahaya Pneumonia Selalu Mengintai Anak-anak Kita</h5>
                        <h6 class="text-muted my-3">KESEHATAN ANAK</h6>
                        <p>IDAI - Jakarta, Setiap hari, puluhan hingga ratusan anak-anak dibawa oleh orangtua mereka
                            ke IGD Rumah Sakit karena mengalami sesak napas akibat pneumonia atau radang paru-paru.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="" class="btn btn-primary mt-5">Baca Selengkapnya</a>
        </div>
    </div>
</section>
<!-- Acara Kesehatan Balita Terkini -->
<section class="acara-terkini py-5 bg-bg">
    <div class="container">
        <h3 class="mb-5">Acara Kesehatan</h3>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/acara-1.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Perkembangan Motorik Balita Zaman Sekarang</h5>
                        <h6 class="text-muted my-3">Dr. Rina Mulyani, Sp.A (Dokter Spesialis Anak)</h6>
                        <p>Tanggal: Sabtu, 25 Mei 2024 <br> 10.00 - 12.00 WIB</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/acara-2.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Nutrisi Seimbang untuk Pertumbuhan Balita</h5>
                        <h6 class="text-muted my-3">Dr. Yulia Ariani, Sp.A(K) (Dokter Spedialis Anak)</h6>
                        <p>Tanggal: Minggu, 2 Juni 2024 <br>
                            Jam: 14.00 - 16.00 WIB</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('Main/assets/main/acara-3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Mengatasi Masalah Tidur pada Balita</h5>
                        <h6 class="text-muted my-3">Dr. Indah Jati Pratiwi, M.Psi (Psikolog Anak)</h6>
                        <p>Tanggal: Rabu, 12 Juni 2024 <br> Jam: 19.00 - 21.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="" class="btn btn-primary mt-5">Baca Selengkapnya</a>
        </div>
    </div>
</section>
<!-- Informasi Lebih Lanjut -->
<section class="info text-center pt-5">
  <div class="container">
    <p>KESEHATAN BALITA UNTUK INDONESIA EMAS 2045</p>
    <h1 class="my-3">Informasi Lebih Lanjut</h1>
    <h6 class="mt-4">
      Tak hanya sebuah website kesehatan balita, Pelita adalah panggung
      inovasi yang mengukir jejak unik dalam tahap klinis, menerangi
      perjalanan sehat si kecil di Indonesia dengan cahaya penuh harapan.
    </h6>
    <a href="" class="btn btn-primary my-3 mt-4">Kontak Kami</a>
    <p class="text-muted mt-4">&copy; 2024 Pelita</p>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container my-3">
    <hr />
    <div class="row">
      <div class="col-2">
        <img src="{{ asset('Main/assets/main/Logo.svg') }}" alt="" />
      </div>
      <div class="col-7 d-flex justify-content-around align-items-center">
        <a href="" class="text-black text-decoration-none">Tentang</a>
        <a href="" class="text-black text-decoration-none">Kontak</a>
        <a href="" class="text-black text-decoration-none">Bantuan</a>
        <a href="" class="text-black text-decoration-none">Kebijakan Privasi</a>
        <a href="" class="text-black text-decoration-none">FAQ</a>
      </div>
      <div class="col-3 d-flex gap-3 justify-content-evenly align-items-center">
        <a href="" class="sosmed-circle">
          <img src="{{ asset('Main/assets/main/ic-linkedin.svg') }}" width="20px" alt="" />
        </a>
        <a href="" class="sosmed-circle">
          <img src="{{ asset('Main/assets/main/ic-ig.svg') }}" width="20px" alt="" />
        </a>
        <a href="" class="sosmed-circle">
          <img src="{{ asset('Main/assets/main/ic-github.svg') }}" width="20px" alt="" />
        </a>
        <a href="" class="sosmed-circle">
          <img src="{{ asset('Main/assets/main/ic-youtube.svg') }}" width="20px" alt="" />
        </a>
      </div>
    </div>
  </div>
</footer>
@endsection