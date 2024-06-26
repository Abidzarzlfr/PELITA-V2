@extends('includes.Main')

@section('detailArtikelPendidikanKesehatan')
<!-- Artikel Detail -->
<section class="artikel-detail py-5 bg-bg">
    <div class="container">
        <!-- Tag -->
        <div class="category-label d-flex gap-3 align-items-center mb-3">
            <!-- Kategori -->
            <h6 class="badge bg-secondary-200 fs-6 text-black fw-normal m-0">{{ strtoupper($artikels->kategori) }}</h6>
            <!-- Status -->
            <h6 class="badge bg-secondary-200 fs-6 text-black fw-normal m-0">{{ strtoupper($artikels->status) }}</h6>
        </div>
        <!-- Judul Artikel -->
        <h1 class="mb-3">{{ $artikels->judul }}</h1>
        <!-- Foto, Nama, dan Tanggal Penerbit -->
        <div class="author d-flex flex-row align-items-center gap-3 mb-5">
            <img src="{{ asset($artikels->foto_penerbit) }}" width="30px" height="30px" alt="" class="rounded-circle">
            <!-- Nama Penerbit -->
            <p class="m-0">{{ $artikels->nama_penerbit }}</p>
            <!-- Tanggal -->
            <p class="m-0">{{ \Carbon\Carbon::parse($artikels->created_at)->format('d/m/Y') }}</p>
        </div>
        <!-- Foto Konten -->
        <img src="{{ asset($artikels->foto_konten) }}" class="w-100 rounded mb-5" style="height:550px;" alt="">
        <!-- Isi Konten -->
        <div class="artikel-body">
            <p>{!! $artikels->isi_konten !!}</p>
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