@extends('includes.Main')

<!-- Informasi Dokter -->
@section('informasiDokter')
<!-- Header Dokter -->
<section class="header-dokter py-5 bg-bg">
    <div class="container">
        <div class="row">
            <div class="col-6 pt-3">
                <h2>Informasi Dokter Balita</h2>
                <p class="quote-text text-justify">Jelajahi pilihan dokter belita terbaik melalui Pelita. Segala
                    permasalahan
                    buah hati Anda akan ditangani oleh dokter yang sudah professional dari fasilitas kesehatan
                    terbaik.</p>
                @guest
                <form action="{{ route('searchDokter') }}" method="POST">
                    @else
                    @if (Auth::user()->role == 'user')
                    <form action="{{ route('searchDokterAuth') }}" method="POST">
                        @endif
                        @endguest
                        @csrf
                        <div class="input-group pt-4">
                            <input type="text" name="nama_dokter" class="form-control" placeholder="Cari nama dokter" aria-label="Cari Informasi" aria-describedby="btn-search">
                            <button class="btn btn-secondary text-white" type="submit" id="btn-search"><i class="bi bi-search me-2"></i>Cari</button>
                        </div>
                    </form>
                    @guest
                    <a href="/lokasiPelayananKesehatan" class="btn btn-secondary text-white w-100 mt-4">Temukan Lokasi Pelayanan Kesehatan</a>
                    @else
                    @if (Auth::user()->role == 'user')
                    <a href="/lokasiPelayananKesehatan/auth" class="btn btn-secondary text-white w-100 mt-4">Temukan Lokasi Pelayanan Kesehatan</a>
                    @endif
                    @endguest
            </div>
        </div>
    </div>
</section>

@if ($showResultSearchAhliGizi)
<!-- Result Search Ahli Gizi -->
<section class="result-search-ahli-gizi">
    <div class="container">
        <div class="py-5">
            <h5>Rekomendasi Ahli Gizi</h5>
            <p>Konsultasi online dengan ahli gizi terbaik kami</p>
        </div>
        @if($dokters->isEmpty())
        <div class="row mb-4">
            <div class="col-12">
                <p class="mb-5 text-center">Mohon maaf, data dokter tidak tersedia.</p>
                <br><br><br>
            </div>
        </div>
        @else
        <div class="row mb-4">
            @foreach($dokters as $dokter)
            <div class="col-md-6 mb-4">
                <div class="d-flex flex-row p-4 bg-secondary-100 rounded-4 gap-2">
                    <img src="{{ asset($dokter->foto) }}" class="object-fit-cover" width="80px" alt="Dokter Image">
                    <div class="detail w-100">
                        <p class="fw-bold m-0">{{ $dokter->name }}</p>
                        <p class="m-0">{{ $dokter->dokter_kualifikasi }}</p>
                        <p class="fw-light m-0">{{ $dokter->lokasi->nama_lokasi }}</p>
                        <a href="/detailRekomendasiDokter/auth/{{ $dokter->id }}" class="btn btn-secondary text-white w-100 mt-3">Cari Ahli Gizi</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@else
<!-- Card Dokter -->
<section class="py-5">
    <div class="container">
        <p class="fw-bold text-accent text-center">Solusi Terbaik</p>
        <h2 class="text-center mb-5">langkah demi langkah untuk mendapatkan solusi</h2>
        <div class="row">
            <div class="col-3">
                <a class="card card-dokter" style="text-decoration: none;">
                    <i class="fa-regular fa-hospital text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Cari Lokasi</p>
                    <p class="fw-light">Temukan lokasi fasilitas kesehatan agar lebih mudah mencari dokter yang
                        Anda inginkan</p>
                </a>
            </div>
            @guest
            <div class="col-3">
                <a class="card card-dokter" style="text-decoration: none;" href="/rekomendasiDokter">
                    <i class="fa-solid fa-stethoscope text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Cari Dokter</p>
                    <p class="fw-light">Pilih dokter terbaik menurut Anda dari fasilitas kesehatan terbaik yang
                        ada</p>
                </a>
            </div>
            <div class="col-3">
                <a class="card card-dokter" style="text-decoration: none;" href="/rekomendasiDokter">
                    <i class="fa-brands fa-whatsapp text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Konsultasi</p>
                    <p class="fw-light">Jadwalkan konsultasi dengan dokter terbaik melalui platform WhatsApp
                        terdaftar</p>
                </a>
            </div>
            @else
            @if (Auth::user()->role == 'user')
            <div class="col-3">
                <a class="card card-dokter" style="text-decoration: none;" href="/rekomendasiDokter/auth">
                    <i class="fa-solid fa-stethoscope text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Cari Dokter</p>
                    <p class="fw-light">Pilih dokter terbaik menurut Anda dari fasilitas kesehatan terbaik yang
                        ada</p>
                </a>
            </div>
            <div class="col-3">
                <a class="card card-dokter" style="text-decoration: none;" href="/rekomendasiDokter/auth">
                    <i class="fa-brands fa-whatsapp text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Konsultasi</p>
                    <p class="fw-light">Jadwalkan konsultasi dengan dokter terbaik melalui platform WhatsApp
                        terdaftar</p>
                </a>
            </div>
            @endif
            @endguest
            <div class="col-3">
                <a class="card card-dokter" style="text-decoration: none;">
                    <i class="fa-regular fa-newspaper text-accent fs-1 mb-4"></i>
                    <p class="fw-bold">Informasi Terkini</p>
                    <p class="fw-light">Akses informasi terkini dan terpercaya hanya di Pelita mengenai kesehatan
                        buah hati Anda</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Cari Dokter -->
<section class="find-dokter">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p class="fw-bold text-accent">Cari Dokter</p>
                <h2 class="mb-4">Cari dokter terbaik menurut Anda dari fasilitas kesehatan terbaik yang ada</h2>
                <p class="fw-light">Pelita bukan sekadar aplikasi kesehatan balita. Dengan Pelita, Anda mendapatkan
                    lebih
                    dari sekadar rekomendasi dokter terbaik. Kami membantu Anda secara proaktif menemukan dokter
                    gizi yang
                    tepat berdasarkan lokasi Anda dan kebutuhan pribadi buah hati Anda. Nikmati perjalanan menuju
                    kehidupan
                    yang lebih sehat untuk si kecil dengan dukungan dokter terpercaya, hanya dengan Pelita. Unduh
                    sekarang dan mulailah petualangan kesehatan balita Anda yang penuh cinta dan perhatian!</p>
                <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check.svg') }}" alt="" width="24px" height="24px"></span>100% gratis untuk seluruh orang tua</p>
                <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check.svg') }}" alt="" width="24px" height="24px"></span>Didukung lebih dari 200 dokter di Indonesia</p>
                <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check.svg') }}" alt="" width="24px" height="24px"></span>Bekerja sama dengan lebih dari 50 fasilitas kesehatan</p>
                <p class="mb-4"><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check.svg') }}" alt="" width="24px" height="24px"></span>Konsultasi melalui platform WhatsApp</p>
                @guest
                <a href="/rekomendasiDokter" class="btn btn-primary px-5">Cari Dokter</a>
                @else
                @if (Auth::user()->role == 'user')
                <a href="/rekomendasiDokter/auth" class="btn btn-primary px-5">Cari Dokter</a>
                @endif
                @endguest
            </div>
        </div>
    </div>
</section>
<!-- Hero Konsultasi Dokter -->
<section class="hero-konsul py-80px">
    <div class="container">
        <div class="row">
            <div class="col-6 position-relative img-konsul">
                <img src="{{ asset('Main/assets/main/img-hero-find-dokter.png') }}" alt="" class="img-fluid" id="img-hero-konsul">
            </div>
            <div class="col-6 px-5">
                <p class="fw-bold text-accent">Konsultasi Online</p>
                <h2 class="mb-4">Jadwalkan konsultasi dengan dokter terbaik</h2>
                <p class="fw-light">Konsultasikan segala permasalahan buah hati Anda dengan dokter terbaik hanya di Pelita melalui WhatsApp terdaftar</p>
                <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px" height="24px"></span>Buat jadwal dengan satu kali klik</p>
                <p class="mb-4"><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px" height="24px"></span>Melalui WhatsApp</p>
                @guest
                <a href="/rekomendasiDokter" class="btn btn-secondary px-5 text-white">Cari Dokter</a>
                @else
                @if (Auth::user()->role == 'user')
                <a href="/rekomendasiDokter/auth" class="btn btn-secondary px-5 text-white">Cari Dokter</a>
                @endif
                @endguest
            </div>
        </div>
    </div>
</section>
@endif

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