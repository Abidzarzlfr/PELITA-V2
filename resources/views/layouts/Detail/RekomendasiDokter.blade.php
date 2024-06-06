@extends('includes.Main')

@section('detailRekomendasiDokter')
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
                <div class="container py-5 d-flex justify-content-center align-items-center">
                    <div class="rounded-4 bg-secondary-100 w-75 p-5">
                        <img src="{{ asset($detailRekomendasiDokter->foto) }}" class="rounded-3 img-fluid mb-5" alt="">
                        <h3 class="mb-2">{{ $detailRekomendasiDokter->name }}</h3>
                        <p class="quote-text mb-2">{{ $detailRekomendasiDokter->dokter_kualifikasi }}</p>
                        <p>{{ $detailRekomendasiDokter->lokasi->nama_lokasi }}</p>
                        <a href="https://wa.me/{{ $detailRekomendasiDokter->dokter_hp }}" class="btn btn-secondary text-white w-100 text-center mt-5" target="_blank"><i class="fs-5 fa-brands fa-whatsapp me-2"></i>Jadwalkan Konsultasi</a>
                    </div>
                </div>
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