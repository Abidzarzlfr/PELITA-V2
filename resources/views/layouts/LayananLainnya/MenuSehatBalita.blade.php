@extends('includes.Main')

@section('menuSehatBalita')
<!-- Menu Sehat Balita -->

<!-- Header Menu Sehat Balita -->
<section class="header-menu-balita py-5">
    <div class="container text-center">
        <h2>Menu Sehat Balita</h2>
        <p class="fw-bold text-accent">Memastikan Tumbuh Kembang Anak yang Optimal dengan Menu Sehat dan Lezat</p>
        <p class="quote-text">Masa balita merupakan periode penting dalam pertumbuhan dan perkembangan anak.
            Memberikan asupan gizi yang seimbang dan tepat menjadi kunci utama untuk mendukung proses tersebut. Di
            halaman ini, Pelita menyediakan berbagai inspirasi menu sehat balita yang lezat dan mudah dibuat.</p>
    </div>
</section>
<!-- Kategori Usia -->
<section class="category-buttons">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="?category=semua_usia" class="btn w-100 {{ request('category') == 'semua_usia' ? 'btn-danger' : 'btn-primary' }}">Semua Usia</a>
            </div>
            <div class="col">
                <a href="?category=6_8_bulan" class="btn w-100 {{ request('category') == '6_8_bulan' ? 'btn-danger' : 'btn-primary' }}">6-8 bulan</a>
            </div>
            <div class="col">
                <a href="?category=9_11_bulan" class="btn w-100 {{ request('category') == '9_11_bulan' ? 'btn-danger' : 'btn-primary' }}">9-11 bulan</a>
            </div>
            <div class="col">
                <a href="?category=12_bulan_keatas" class="btn w-100 {{ request('category') == '12_bulan_keatas' ? 'btn-danger' : 'btn-primary' }}">12 bulan ke atas</a>
            </div>
        </div>
    </div>
</section>
<!-- Menu Sehat Card -->
<section class="menu-balita-cards py-5">
    <div class="container">
        <div class="row mb-5">
            @foreach ($menuSehat as $item)
            <div class="col-md-3 mb-4">
                @guest
                <a class="card" style="text-decoration: none;" href="/detailMenuSehatBalita/{{ $item->id }}">
                    @else
                    @if (Auth::user()->role == 'user')
                    <a class="card" style="text-decoration: none;" href="/detailMenuSehatBalita/auth/{{ $item->id }}">
                        @endif
                        @endguest
                        <img src="{{ asset( $item->foto_konten ) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">{{ $item->name }}</h6>
                            <p class="text-muted my-3">{{ $item->kelompok_usia }}</p>
                        </div>
                    </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Informasi Lebih Lanjut -->
<section class="info-bawah text-center pt-5">
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