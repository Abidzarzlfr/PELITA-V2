@extends('includes.Main')

<!-- Informasi Ahli Gizi -->
@section('informasiAhliGizi')
<!-- Header Ahli Gizi -->
<section class="header-ahli-gizi py-5 bg-bg">
    <div class="container">
        <div class="row">
            <div class="col-6 pt-3">
                <h2>Informasi Ahli Gizi Balita</h2>
                <p class="quote-text text-justify">Jelajahi pilihan ahli gizi belita terbaik melalui Pelita. Segala
                    permasalahan
                    buah hati Anda akan ditangani oleh ahli gizi yang sudah professional dari fasilitas kesehatan
                    terbaik.</p>
                <form action="">
                    <div class="input-group pt-4">
                        <input type="text" class="form-control" placeholder="Cari nama ahli gizi" aria-label="Cari Informasi" aria-describedby="btn-search">
                        <button class="btn btn-secondary text-white" type="submit" id="btn-search"><i class="bi bi-search me-2"></i>Cari</button>
                    </div>
                </form>
                <a href="" class="btn btn-secondary text-white w-100 mt-4">Temukan Lokasi Pelayanan Kesehatan</a>
            </div>
        </div>
    </div>
</section>
<!-- Card Ahli Gizi -->
<section class="py-5">
    <div class="container">
        <p class="fw-bold text-accent text-center">Solusi Terbaik</p>
        <h2 class="text-center mb-5">langkah demi langkah untuk mendapatkan solusi</h2>
        <div class="row">
            <div class="col-3">
                <a class="card card-ahli-gizi" style="text-decoration: none;">
                    <i class="fa-regular fa-hospital text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Cari Lokasi</p>
                    <p class="fw-light">Temukan lokasi fasilitas kesehatan agar lebih mudah mencari ahli gizi yang
                        Anda inginkan</p>
                </a>
            </div>
            <div class="col-3">
                <a class="card card-ahli-gizi" style="text-decoration: none;">
                    <i class="fa-solid fa-stethoscope text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Cari Ahli Gizi</p>
                    <p class="fw-light">Pilih ahli gizi terbaik menurut Anda dari fasilitas kesehatan terbaik yang
                        ada</p>
                </a>
            </div>
            <div class="col-3">
                <a class="card card-ahli-gizi" style="text-decoration: none;">
                    <i class="fa-brands fa-whatsapp text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Konsultasi</p>
                    <p class="fw-light">Jadwalkan konsultasi dengan ahli gizi terbaik melalui platform WhatsApp
                        terdaftar</p>
                </a>
            </div>
            <div class="col-3">
                <a class="card card-ahli-gizi" style="text-decoration: none;">
                    <i class="fa-regular fa-newspaper text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Informasi Terkini</p>
                    <p class="fw-light">Akses informasi terkini dan terpercaya hanya di Pelita mengenai kesehatan
                        buah hati Anda</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Cari Ahli Gizi -->
<section class="find-ahli-gizi">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p class="fw-bold text-accent">Cari Ahli Gizi</p>
                <h2 class="mb-4">Cari ahli gizi terbaik menurut Anda dari fasilitas kesehatan terbaik yang ada</h2>
                <p class="fw-light">Pelita bukan sekadar aplikasi kesehatan balita. Dengan Pelita, Anda mendapatkan
                    lebih
                    dari sekadar rekomendasi ahli gizi terbaik. Kami membantu Anda secara proaktif menemukan ahli
                    gizi yang
                    tepat berdasarkan lokasi Anda dan kebutuhan pribadi buah hati Anda. Nikmati perjalanan menuju
                    kehidupan
                    yang lebih sehat untuk si kecil dengan dukungan ahli gizi terpercaya, hanya dengan Pelita. Unduh
                    sekarang dan mulailah petualangan kesehatan balita Anda yang penuh cinta dan perhatian!</p>
                <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check.svg') }}" alt="" width="24px" height="24px"></span>100% gratis untuk seluruh orang tua</p>
                <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check.svg') }}" alt="" width="24px" height="24px"></span>Didukung lebih dari 200 ahli gizi di Indonesia</p>
                <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check.svg') }}" alt="" width="24px" height="24px"></span>Bekerja sama dengan lebih dari 50 fasilitas kesehatan</p>
                <p class="mb-4"><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check.svg') }}" alt="" width="24px" height="24px"></span>Konsultasi melalui platform WhatsApp</p>
                <a href="" class="btn btn-primary px-5">Cari Ahli Gizi</a>
            </div>
        </div>
    </div>
</section>
<!-- Hero Konsultasi Ahli Gizi -->
<section class="hero-konsul py-80px">
    <div class="container">
        <div class="row">
            <div class="col-6 position-relative img-konsul">
                <img src="{{ asset('Main/assets/main/img-hero-find-ahli-gizi.png') }}" alt="" class="img-fluid" id="img-hero-konsul">
            </div>
            <div class="col-6 px-5">
                <p class="fw-bold text-accent">Konsultasi Online</p>
                <h2 class="mb-4">Jadwalkan konsultasi dengan ahli gizi terbaik</h2>
                <p class="fw-light">Konsultasikan segala permasalahan buah hati Anda dengan ahli gizi terbaik hanya di Pelita melalui WhatsApp terdaftar</p>
                <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px" height="24px"></span>Buat jadwal dengan satu kali klik</p>
                <p class="mb-4"><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px" height="24px"></span>Melalui WhatsApp</p>
                <a href="" class="btn btn-secondary px-5 text-white">Cari Ahli Gizi</a>
            </div>
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