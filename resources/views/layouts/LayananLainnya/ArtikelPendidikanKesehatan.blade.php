@extends('includes.Main')

@section('artikelPendidikanKesehatan')
<!-- Header Artikel Pendidikan Kesehatan -->
<section class="header-artikel-kesehatan py-5 bg-bg">
    <div class="container">
        <div class="row">
            <div class="col-6 pt-3">
                <h2>Artikel Pendidikan Kesehatan</h2>
                <p>Jelajahi tips kesehatan terkini dan berguna! Ayo, bersama kita ciptakan masa depan yang lebih
                    sehat untuk si kecil dengan selalu mengikuti artikel terbaru di halaman kami!</p>
                @guest
                <form action="{{ route('searchArtikel') }}" method="GET">
                    @else
                    @if (Auth::user()->role == 'user')
                    <form action="{{ route('searchArtikelAuth') }}" method="GET">
                        @endif
                        @endguest
                        <div class="input-group pt-5">
                            <input type="text" name="judul" class="form-control" placeholder="Cari Informasi" aria-label="Cari Informasi" aria-describedby="btn-search">
                            <button class="btn btn-primary" type="submit" id="btn-search"><i class="bi bi-search me-2"></i>Cari</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
<!-- Kelompok Usia Artikel -->
<section class="category-artikel py-5">
    @guest
    <div class="container d-flex flex-row gap-5 justify-content-center align-items-center">
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'semua' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => 'semua', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-semua-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Semua</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'hamil' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => 'hamil', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-hamil-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Hamil</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'bayi' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => 'bayi', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-bayi-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Bayi</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'batita' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => 'batita', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-batita-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Batita</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'anak' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => 'anak', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-anak-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Anak</p>
            </a>
        </div>
    </div>
    @else
    @if (Auth::user()->role == 'user')
    <div class="container d-flex flex-row gap-5 justify-content-center align-items-center">
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'semua' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => 'semua', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-semua-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Semua</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'hamil' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => 'hamil', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-hamil-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Hamil</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'bayi' ? 'active-primary' : '' }}  text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => 'bayi', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-bayi-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Bayi</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'batita' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => 'batita', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-batita-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Batita</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="{{ request('kelompokUsia') == 'anak' ? 'active-primary' : '' }} text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => 'anak', 'kategori' => request('kategori')]) }}">
                <img src="{{ asset('Main/assets/main/icons/ic-anak-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Anak</p>
            </a>
        </div>
    </div>
    @endif
    @endguest
    </div>
</section>

<!-- Konten Artikel -->
<section class="artikel py-5 bg-bg">
    <div class="container">
        <!-- Kategori Artikel -->
        @guest
        <div class="news-category d-flex gap-4 mb-5">
            <a href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'umum']) }}" class="news-item btn {{ request('kategori') == 'umum' ? 'active' : '' }}">Umum</a>
            <a href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'pertumbuhan_anak']) }}" class="news-item btn {{ request('kategori') == 'pertumbuhan_anak' ? 'active' : '' }}">Pertumbuhan Anak</a>
            <a href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'olahraga']) }}" class="news-item btn {{ request('kategori') == 'olahraga' ? 'active' : '' }}">Olahraga</a>
            <a href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'panduan_orang_tua']) }}" class="news-item btn {{ request('kategori') == 'panduan_orang_tua' ? 'active' : '' }}">Panduan Orang Tua</a>
            <a href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'makanan_dan_nutrisi_anak']) }}" class="news-item btn {{ request('kategori') == 'makanan_dan_nutrisi_anak' ? 'active' : '' }}">Makanan dan Nutrisi Anak</a>
            <a href="{{ route('artikelPendidikanKesehatan', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'asi_dan_menyusui']) }}" class="news-item btn {{ request('kategori') == 'asi_dan_menyusui' ? 'active' : '' }}">Asi dan Menyusui</a>
        </div>
        @else
        @if (Auth::user()->role == 'user')
        <div class="news-category d-flex gap-4 mb-5">
            <a href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'umum']) }}" class="news-item btn {{ request('kategori') == 'umum' ? 'active' : '' }}">Umum</a>
            <a href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'pertumbuhan_anak']) }}" class="news-item btn {{ request('kategori') == 'pertumbuhan_anak' ? 'active' : '' }}">Pertumbuhan Anak</a>
            <a href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'olahraga']) }}" class="news-item btn {{ request('kategori') == 'olahraga' ? 'active' : '' }}">Olahraga</a>
            <a href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'panduan_orang_tua']) }}" class="news-item btn {{ request('kategori') == 'panduan_orang_tua' ? 'active' : '' }}">Panduan Orang Tua</a>
            <a href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'makanan_dan_nutrisi_anak']) }}" class="news-item btn {{ request('kategori') == 'makanan_dan_nutrisi_anak' ? 'active' : '' }}">Makanan dan Nutrisi Anak</a>
            <a href="{{ route('artikelPendidikanKesehatanAuth', ['kelompokUsia' => request('kelompokUsia'), 'kategori' => 'asi_dan_menyusui']) }}" class="news-item btn {{ request('kategori') == 'asi_dan_menyusui' ? 'active' : '' }}">Asi dan Menyusui</a>
        </div>
        @endif
        @endguest

        <!-- Konten -->
        <div class="row">
            @if($artikels->isEmpty())
            <div class="col-12 mt-5 mb-5">
                <p class="text-center">Mohon maaf, artikel tidak ditemukan.</p>
            </div>
            @else
            @foreach ($artikels as $artikel)
            @guest
            <div class="col-md-4 mb-3">
                <a class="card mb-1" style="text-decoration: none;" href="/detailArtikelPendidikanKesehatan/{{ $artikel->id }}">
                    <img src="{{ asset($artikel->foto_konten) }}" class="card-img-top" style="height: 250px;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $artikel->judul }}</h5>
                        <h6 class="text-muted my-3">{{ strtoupper($artikel->kategori) }}</h6>
                        <p>{{ Str::limit($artikel->isi_konten, 125, '...') }}</p>
                    </div>
                </a>
            </div>
            @else
            @if (Auth::user()->role == 'user')
            <div class="col-md-4 mb-3">
                <a class="card mb-1" style="text-decoration: none;" href="/detailArtikelPendidikanKesehatan/auth/{{ $artikel->id }}">
                    <img src="{{ asset($artikel->foto_konten) }}" class="card-img-top" style="height: 250px;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $artikel->judul }}</h5>
                        <h6 class="text-muted my-3">{{ strtoupper($artikel->kategori) }}</h6>
                        <p>{{ Str::limit($artikel->isi_konten, 125, '...') }}</p>
                    </div>
                </a>
            </div>
            @endif
            @endguest
            @endforeach
            @endif
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