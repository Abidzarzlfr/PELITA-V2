@extends('includes.Main')

@section('detailMenuSehatBalita')

<!-- Header Detail Menu Sehat Balita -->
<section class="header-detail-menu py-5">
    <div class="container">
        <h2>{{ $menuSehat->name }}</h2>
        <p class="badge bg-secondary-200 text-black fs-6 p-3 mt-4 mb-0">{{ $menuSehat->kelompok_usia }}</p>
    </div>
</section>
<!-- Detail Menu Sehat Balita -->
<section class="detail-menu">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset( $menuSehat->foto_konten ) }}" alt="" class="img-fluid w-100 rounded-4">
                <div class="menu-content mt-5">
                    <p>{{ $menuSehat->isi_konten }}</p>
                </div>
            </div>
            <div class="col-6">
                <h4 class="mb-4">Resep Lainnya</h4>
                @foreach($menuSehatLainnya as $item)
                @guest
                <a href="/detailMenuSehatBalita/{{ $item->id }}" class="card mb-4" style="text-decoration: none;">
                    @else
                    @if (Auth::user()->role == 'user')
                    <a href="/detailMenuSehatBalita/auth/{{ $item->id }}" class="card mb-4" style="text-decoration: none;">
                        @endif
                        @endguest
                        <div class="card-body">
                            <p class="fw-bold mb-2">{{ $item->name }}</p>
                            <p class="text-muted m-0">{{ $item->kelompok_usia }}</p>
                        </div>
                    </a>
                    @endforeach
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