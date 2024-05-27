@extends('includes.Main')

<!-- Acara Kesehatan Balita -->
@section('acaraKesehatanBalita')
<!-- Header Acara Kesehatan -->
<section class="header-acara-kesehatan py-5 bg-bg">
    <div class="container">
        <div class="row">
            <div class="col-5 pt-1">
                <div id="carouselAcaraKesehatan" class="carousel slide w-100 h-100 rounded-4" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselAcaraKesehatan" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselAcaraKesehatan" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselAcaraKesehatan" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('/Main/assets/main/berita-3.png') }}" class="d-block w-100 rounded-4 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/Main/assets/main/berita-3.png') }}" class="d-block w-100 rounded-4 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/Main/assets/main/berita-3.png') }}" class="d-block w-100 rounded-4 " alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAcaraKesehatan" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselAcaraKesehatan" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-7">
                <h2>Acara Kesehatan</h2>
                <p class="quote-text">Ikuti berbagai acara kesehatan yang diadakan oleh para ahli terkemuka. Dapatkan wawasan terkini dan solusi praktis untuk hidup lebih sehat dan bahagia.</p>

            </div>
        </div>
        <form action="">
            <div class="input-group pt-5">
                <input type="text" class="form-control" placeholder="Cari Informasi" aria-label="Cari acara kesehatan" aria-describedby="btn-search">
                <button class="btn btn-primary" type="submit" id="btn-search"><i class="bi bi-search me-2"></i>Cari</button>
            </div>
        </form>
    </div>
</section>
<!-- Card Acara Kesehatan -->
<section class="acara-kesehatan-cards py-5">
    <div class="container">
        <div class="row mb-5">
            @foreach ($acaraKesehatan as $item)
            @guest
            <div class="col-md-4 mb-4">
                <a class="card" style="text-decoration: none;" href="/detailAcaraKesehatanBalita/auth/{{ $item->id }}">
                    <img src="{{ asset($item->foto_acara) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h6 class="text-muted my-3">{{ $item->pemateri }}</h6>
                        <p>Tanggal: {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tanggal)->format('d/m/Y') }}<br>
                            Jam: {{ $item->jam_mulai }} - {{ $item->jam_selesai }} WIB</p>
                    </div>
                </a>
            </div>
            @else
            @if (Auth::user()->role == 'user')
            <div class="col-md-4 mb-4">
                <a class="card" style="text-decoration: none;" href="/detailAcaraKesehatanBalita/auth/{{ $item->id }}">
                    <img src="{{ asset($item->foto_acara) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h6 class="text-muted my-3">{{ $item->pemateri }}</h6>
                        <p>Tanggal: {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tanggal)->format('d/m/Y') }}<br>
                            Jam: {{ $item->jam_mulai }} - {{ $item->jam_selesai }} WIB</p>
                    </div>
                </a>
            </div>
            @endif
            @endguest
            @endforeach
        </div>
        <div class="text-center">
            <a href="" class="btn btn-primary">Lihat Lebih Banyak</a>
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