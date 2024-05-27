@extends('includes.Main')

<!-- Detail Acara Kesehatan Balita -->
@section('detailAcaraKesehatanBalita')
<!-- Header Detail Acara Kesehatan -->
<section class="header-detail-acara-kesehatan py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($acaraKesehatan->foto_acara) }}" class="img-fluid rounded-4 w-100" alt="">
            </div>
            <div class="col-md-6">
                <div class="card bg-secondary-100 rounded-4 h-100 border-none p-5">
                    <div class="card-body">
                        <h6 class="badge bg-secondary-200 text-black fs-6 fw-medium mb-4">{{ strtoupper($acaraKesehatan->status) }}</h6>
                        <h2 class="mb-4">{{ $acaraKesehatan->judul }}</h2>
                        <div class="d-flex flex-column">
                            <p><i class="fa-solid fa-calendar-days me-2"></i>{{ $acaraKesehatan->tanggal }}</p>
                            <p><i class="fa-solid fa-clock me-2"></i>{{ $acaraKesehatan->jam_mulai }} - {{ $acaraKesehatan->jam_selesai }}</p>
                            <p><i class="fa-solid fa-person-chalkboard me-2"></i>{{ $acaraKesehatan->pemateri }}</p>
                            <a href="{{ $acaraKesehatan->link_grup }}" class="btn btn-secondary" target="_blank">Daftar Acara Kesehatan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Detail Cara Kesehatan -->
<section class="detail-acara-kesehatan py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-8">
                <h4>Detail Acara: {{ $acaraKesehatan->judul }}</h4>
                <p>{{ $acaraKesehatan->isi_konten }}</p>
            </div>
            <!-- <div class="col-8">
                <h4>Detail Acara: {{ $acaraKesehatan->judul }}</h4>
                <p>Acara ini akan mengupas tuntas mengenai berbagai aspek perkembangan motorik pada balita di era
                    modern. Peserta akan mendapatkan wawasan mendalam tentang bagaimana stimulasi yang tepat dapat
                    mendukung tumbuh kembang motorik anak secara optimal. Webinar ini sangat cocok bagi orang tua,
                    pendidik, dan profesional kesehatan anak.</p>
                <br>
                <p class="quote-text">Materi yang akan dibahas:</p>
                <ul>
                    <li>Tahapan Perkembangan Motorik pada Balita</li>
                    <li>Faktor yang Mempengaruhi Perkembangan Motorik</li>
                    <li>Strategi Stimulasi Motorik yang Efektif</li>
                    <li>Deteksi Dini dan Penanganan Masalah Motorik</li>
                </ul>
                <p class="quote-text">Pembicara:</p>
                <p>Acara kesehatan ini akan menghadirkan ahli perkembangan anak yang berpengalaman, Dr. Rina
                    Mulyani, Sp.A., yang memiliki latar belakang Dokter Spesialis Anak, dan telah banyak memberikan
                    edukasi mengenai perkembangan motorik pada anak-anak.</p>
                <p class="quote-text">Cara Pendaftaran:</p>
                <p>Untuk mengikuti acara ini, silakan klik tombol “Daftar Acara Kesehatan”. Tempat terbatas, segera
                    daftarkan diri Anda untuk mendapatkan informasi berharga mengenai perkembangan motorik balita!
                </p>
            </div> -->
            <div class="col-4">
                <h6 class="badge bg-secondary-200 text-black fs-6 fw-medium mb-4">Detail Acara</h6>
                <div class="d-flex flex-column">
                    <strong><i class="fa-solid fa-calendar-days me-2"></i> Tanggal </strong>
                    <p class="ms-4 mt-2">{{ $acaraKesehatan->tanggal }}</p>
                    <strong><i class="fa-solid fa-clock me-2"></i>Jam</strong>
                    <p class="ms-4 mt-2">{{ $acaraKesehatan->jam_mulai }} - {{ $acaraKesehatan->jam_selesai }} WIB</p>
                    <strong><i class="fa-solid fa-person-chalkboard me-2"></i>Pemateri</strong>
                    <p class="ms-4 mt-2">{{ $acaraKesehatan->pemateri }}</p>
                    <a href="{{ $acaraKesehatan->link_grup }}" class="btn btn-secondary" target="_blank">Daftar Acara Kesehatan</a>
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