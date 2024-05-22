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
            @foreach ($artikels as $artikel)
            @guest
            <div class="col-md-4 mb-2">
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
            <div class="col-md-4 mb-2">
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
        </div>
        <div class="text-center">
            @guest
            <a href="/artikelPendidikanKesehatan" class="btn btn-primary mt-5">Lihat Lebih Banyak</a>
            @else
            @if (Auth::user()->role == 'user')
            <a href="/artikelPendidikanKesehatan/auth" class="btn btn-primary mt-5">Lihat Lebih Banyak</a>
            @endif
            @endguest
        </div>
    </div>
</section>
<!-- Program dan Kebijakan Terkini -->
<section class="program-terkini py-5">
    <div class="container">
        <h3 class="mb-5">Program dan Kebijakan</h3>
        <div class="row">
            @guest
            @foreach ($programKebijakan as $item)
            <div class="col-md-4 mb-3">
                <a class="card mb-1" style="text-decoration: none;" href="/detailProgramKebijakan/{{ $item->id }}">
                    <img src="{{ asset($item->foto_konten) }}" class="card-img-top" style="height: 250px;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h6 class="text-muted my-3">{{ strtoupper($item->kategori) }}</h6>
                        <p>{{ Str::limit($item->isi_konten, 125, '...') }}</p>
                    </div>
                </a>
            </div>
            @endforeach
            @else
            @if (Auth::user()->role == 'user')
            @foreach ($programKebijakan as $item)
            <div class="col-md-4 mb-3">
                <a class="card mb-1" style="text-decoration: none;" href="/detailProgramKebijakan/auth/{{ $item->id }}">
                    <img src="{{ asset($item->foto_konten) }}" class="card-img-top" style="height: 250px;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h6 class="text-muted my-3">{{ strtoupper($item->kategori) }}</h6>
                        <p>{{ Str::limit($item->isi_konten, 125, '...') }}</p>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
            @endguest
        </div>
        <div class="text-center">
            @guest
            <a href="/programKebijakan" class="btn btn-primary mt-5">Lihat Lebih Banyak</a>
            @else
            @if (Auth::user()->role == 'user')
            <a href="/programKebijakan/auth" class="btn btn-primary mt-5">Lihat Lebih Banyak</a>
            @endif
            @endguest
        </div>
    </div>
</section>
<!-- Acara Kesehatan Balita Terkini -->
<section class="acara-terkini py-5 bg-bg">
    <div class="container">
        <h3 class="mb-5">Acara Kesehatan</h3>
        <div class="row">
            @foreach ($acaraKesehatan as $item)
            @guest
            <div class="col-md-4 mb-4">
                <a class="card" style="text-decoration: none;" href="/detailAcaraKesehatanBalita/auth/{{ $item->id }}">
                    <img src="{{ $item->foto_acara }}" class="card-img-top" alt="">
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
                    <img src="{{ $item->foto_acara }}" class="card-img-top" alt="">
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
            @guest
            <a href="/acaraKesehatanBalita" class="btn btn-primary mt-5">Lihat Lebih Banyak</a>
            @else
            @if (Auth::user()->role == 'user')
            <a href="/acaraKesehatanBalita/auth" class="btn btn-primary mt-5">Lihat Lebih Banyak</a>
            @endif
            @endguest
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