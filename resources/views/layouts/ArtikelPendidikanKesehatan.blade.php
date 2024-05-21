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
<!-- Kategori Artikel -->
<section class="category-artikel py-5">
    <div class="container d-flex flex-row gap-5 justify-content-center align-items-center">
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="">
                <img src="{{ asset('Main/assets/main/icons/ic-semua-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Semua</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="">
                <img src="{{ asset('Main/assets/main/icons/ic-hamil-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Hamil</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="">
                <img src="{{ asset('Main/assets/main/icons/ic-bayi-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Bayi</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="">
                <img src="{{ asset('Main/assets/main/icons/ic-batita-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Batita</p>
            </a>
        </div>
        <div class="card category-artikel-card hover-bg-primary w-100px">
            <a class="text-decoration-none card-body d-flex flex-column justify-content-center align-items-center" href="">
                <img src="{{ asset('Main/assets/main/icons/ic-anak-artikel-kesehatan.svg') }}" width="50px" alt="">
                <p class="fw-bold m-0">Anak</p>
            </a>
        </div>
    </div>
</section>
<!-- Konten Artikel -->
<section class="artikel py-5 bg-bg">
    <div class="container">
        <!-- Kategori Artikel -->
        <div class="news-category d-flex gap-4 mb-5">
            <a href="" class="news-item btn active">Tag Populer</a>
            <a href="" class="news-item">Pertumbuhan Balita</a>
            <a href="" class="news-item ">Olahraga</a>
            <a href="" class="news-item ">Stunting</a>
            <a href="" class="news-item">Makanan dan Nutrisi Anak</a>
            <a href="" class="news-item">Otitis Media</a>
        </div>
        <!-- Konten -->
        <div class="row">
            @foreach ($artikels as $artikel)
            <div class="col-md-4 mt-5 mb-3">
                <div class="card mb-1">
                    <img src="{{ asset($artikel->foto_konten) }}" class="card-img-top" style="height: 250px;" alt="">
                    <div class="card-body">
                        @guest
                        <a href="/detailArtikelPendidikanKesehatan/{{ $artikel->id }}"><h5 class="card-title">{{ $artikel->judul }}</h5></a>
                        @else
                        @if (Auth::user()->role == 'user')
                        <a href="/detailArtikelPendidikanKesehatan/auth/{{ $artikel->id }}"><h5 class="card-title">{{ $artikel->judul }}</h5></a>    
                        @endif    
                        @endguest
                        <h6 class="text-muted my-3">{{ strtoupper($artikel->kategori) }}</h6>
                        <p>{{ Str::limit($artikel->isi_konten, 125, '...') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="" class="btn btn-primary">Baca Selengkapnya</a>
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