@extends('includes.Main')

<!-- Detail Lokasi Pelayanan Kesehatan -->
@section('detailLokasiPelayananKesehatan')

<!-- Detail Lokasi Pelayanan Kesehatan -->
<section class="detail-lokasi-kesehatan py-5">
    <div class="container">
        <div class="row">
            <!-- Detail Pelayanan Kesehatan -->
            <div class="col-6">
                <img src="{{ $lokasiPelayananKesehatan->foto_lokasi }}" class="rounded-4 img-fluid w-100 mb-5" alt="">
                <h2>{{ $lokasiPelayananKesehatan->nama_lokasi }}</h2>
                <p class="fw-bold mt-4"><i class="fa-solid fa-circle-info me-2"></i>Tentang</p>
                <p class="mt-4 text-justify">{{ $lokasiPelayananKesehatan->tentang_lokasi }}</p>
                <a href="" class="btn btn-outline-primary w-100">Telpon RS {{ $lokasiPelayananKesehatan->no_tlp_lokasi }}</a>

                <p class="fw-bold mt-4"><i class="fa-solid fa-city me-2"></i>Lokasi</p>
                <p class="mt-4">{{ $lokasiPelayananKesehatan->kota }}, {{ $lokasiPelayananKesehatan->provinsi }}</p>
                <p class="mt-4 text-justify">{{ $lokasiPelayananKesehatan->alamat_lokasi }}</p>

                <!-- Map Embeded -->
                <div style="overflow:hidden;resize:none;max-width:100%;width:636px;height:300px;">
                    <div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="{{ $lokasiPelayananKesehatan->link_maps }}"></iframe>
                    </div><a class="code-for-google-map" href="https://www.bootstrapskins.com/themes" id="grab-map-authorization">premium bootstrap themes</a>
                    <style>
                        #google-maps-canvas img {
                            max-height: none;
                            max-width: none !important;
                            background: none !important;
                        }
                    </style>
                </div>
            </div>
            <!-- Rekomendasi Ahli Gizi -->
            <div class="col-6">
                <form action="">
                    <div class="input-group pt-5">
                        <input type="text" class="form-control" placeholder="Cari Informasi" aria-label="Cari acara kesehatan" aria-describedby="btn-search">
                        <button class="btn btn-primary" type="submit" id="btn-search"><i class="bi bi-search me-2"></i>Cari</button>
                    </div>
                </form>
                <h5 class="mt-5">Rekomendasi Ahli Gizi</h5>
                <p>Konsultasi online dengan ahli gizi terbaik kami</p>
                @forelse ($dokter as $item)
                <div class="d-flex flex-row p-4 bg-bg rounded-3 gap-2 mb-4">
                    <img src="{{ $item->foto }}" class="object-fit-cover" width="80px" alt="">
                    <div class="detail w-100">
                        <p class="fw-bold m-0">{{ $item->name }}</p>
                        <p class="m-0">{{ $item->dokter_kualifikasi }}</p>
                        <p class="fw-light m-0">{{ $lokasiPelayananKesehatan->nama_lokasi }}</p>
                        <a href="/detailRekomendasiAhliGizi/auth/{{ $item->id }}" class="btn btn-primary text-black w-100 mt-3">Konsultasi</a>
                    </div>
                </div>
                @empty
                <div class="p-4 bg-bg mb-4">
                    <p>Mohon Maaf, tidak ada rekomendasi ahli gizi pada lokasi ini.</p>
                </div>
                @endforelse
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