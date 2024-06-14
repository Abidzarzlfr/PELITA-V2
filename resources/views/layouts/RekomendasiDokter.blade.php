@extends('includes.Main')

@section('rekomendasiDokter')
<!-- Rekomendasi Dokter -->
<section class="informasi-dokter py-5">
    <div class="mx-5">
        <div class="row">
            <div class="col-5 py-5 rounded-5 bg-secondary-100 shadow">
                <div class="h-100 px-5 d-flex flex-column justify-content-center align-items-center">
                    <h3>Konsultasi dengan dokter</h3>
                    <p class="quote-text text-justify">Layanan telemedisin yang siap siaga untuk membantu Anda
                        memenuhi
                        kebutuhan si buah hati</p>
                    <img src="{{ asset('Main/assets/main/img-informasi-dokter.png') }}" class="img-fluid py-5" alt="">
                    <div class="daftar-feature align-self-start">
                        <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px" height="24px"></span>100% gratis untuk seluruh orang tua</p>
                        <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px" height="24px"></span>Didukung lebih dari 200 dokter di Indonesia</p>
                        <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px" height="24px"></span>Bekerja sama dengan lebih dari 50 fasilitas kesehatan</p>
                        <p class="mb-4"><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px" height="24px"></span>Konsultasi melalui platform WhatsApp</p>
                    </div>
                </div>
            </div>
            <div class="col-7">
            <div class="p-5">
                    @guest
                    <form action="{{ route('searchDokterRekomendasi') }}" method="POST">
                    @else
                    @if (Auth::user()->role == 'user')
                    <form action="{{ route('searchDokterRekomendasiAuth') }}" method="POST">
                    @endif
                    @endguest
                        @csrf
                        <div class="input-group">
                            <input type="text" name="nama_dokter" class="form-control" placeholder="Cari informasi" aria-label="Cari Informasi" aria-describedby="btn-search">
                            <button class="btn btn-secondary text-white" type="submit" id="btn-search"><i class="bi bi-search me-2"></i>Cari</button>
                        </div>
                    </form>
                    <div class="py-5">
                        <h5>Rekomendasi Dokter</h5>
                        <p>Konsultasi online dengan dokter terbaik kami</p>
                    </div>
                    <div class="row pb-4">
                        @if ($showResultSearchAhliGizi)
                        <!-- Setelah Search -->
                            <!-- Jika Data Kosong -->
                            @if($dokters->isEmpty())
                            <div class="row mb-4">
                                <div class="col-12">
                                    <p class="mb-5 text-center">Mohon maaf, data dokter tidak tersedia.</p>
                                    <br><br><br>
                                </div>
                            </div>
                            <!-- Jika Data Tidak Kosong -->
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
                        @else
                        <!-- Sebelum Search -->
                            @foreach ($user as $item)
                            @if($item->role === 'dokter')
                            <div class="col-md-6 mt-2">
                                <div class="d-flex flex-row p-4 bg-secondary-100 rounded-4 gap-2">
                                    <img src="{{ asset($item->foto) }}" class="object-fit-cover" width="80px" alt="">
                                    <div class="detail w-100">
                                        <p class="fw-bold m-0">{{ $item->name }}</p>
                                        <p class="m-0">{{ $item->dokter_kualifikasi }}</p>
                                        <p class="fw-light m-0">{{ $item->lokasi->nama_lokasi }}</p>
                                        <a href="/detailRekomendasiDokter/auth/{{ $item->id }}" class="btn btn-secondary text-white w-100 mt-3">Cari Dokter</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        @endif
                    </div>
                <a href="" class="btn btn-secondary w-100 text-white mt-4">Lihat Lebih Banyak</a>
            </div>
        </div>
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