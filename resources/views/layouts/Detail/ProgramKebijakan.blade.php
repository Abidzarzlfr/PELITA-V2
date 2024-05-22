@extends('includes.Main')

@section('detailProgramKebijakan')
<!-- Program & Kebijakan Detail -->
<section class="artikel-detail py-5 bg-bg">
    <div class="container">
        <!-- Tag -->
        <div class="category-label d-flex gap-3 align-items-center mb-3">
            <!-- Kategori -->
            <h6 class="badge bg-secondary-200 fs-6 text-black fw-normal m-0">{{ strtoupper($programKebijakan->kategori) }}</h6>
            <!-- Status -->
            <h6 class="badge bg-secondary-200 fs-6 text-black fw-normal m-0">{{ strtoupper($programKebijakan->status) }}</h6>
        </div>
        <!-- Judul Artikel -->
        <h1 class="mb-3">{{ $programKebijakan->judul }}</h1>
        <!-- Foto, Nama, dan Tanggal Penerbit -->
        <div class="author d-flex flex-row align-items-center gap-3 mb-5">
            <img src="{{ $programKebijakan->foto_penerbit }}" width="30px" height="30px" alt="" class="rounded-circle">
            <!-- Nama Penerbit -->
            <p class="m-0">{{ $programKebijakan->nama_penerbit }}</p>
            <!-- Tanggal -->
            <p class="m-0">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $programKebijakan->tanggal)->format('d/m/Y') }}</p>
        </div>
        <!-- Foto Konten -->
        <img src="{{ $programKebijakan->foto_konten }}" class="w-100 rounded mb-5" style="height:550px;" alt="">
        <!-- Isi Konten -->
        <div class="artikel-body">
            <p>{{ $programKebijakan->isi_konten }}</p>
        </div>
        <!-- <div class="artikel-body">
            <p>Diare tidak hanya menyerang orang dewasa, tetapi bayi juga sangat rentan terhadap kondisi ini,
                terutama pada usia 0-6 bulan karena sistem pencernaan mereka yang belum sempurna. Di Indonesia,
                diare menjadi salah satu penyebab utama kematian bayi. Oleh karena itu, penting bagi orang tua untuk
                memahami ciri-ciri, penyebab, dan cara mengatasi diare pada bayi.</p>
            <h4 class="pt-5">Mengenali Penyebab Diare pada Bayi</h4>
            <p>Penyebab diare pada bayi dapat dikenali dari warna feses yang dikeluarkan. Warna feses dapat
                memberikan petunjuk awal mengenai kondisi kesehatan bayi.</p>
            <ul>
                <li>
                    Mekonium (Hitam Kehijauan)
                    <p class="fw-normal">Feses pertama bayi, berwarna hitam kehijauan, disebut mekonium, biasanya
                        keluar dalam beberapa hari pertama setelah lahir. Mekonium adalah campuran dari cairan
                        ketuban, empedu, serta sekresi dari kelenjar usus bayi.</p>
                </li>
                <li>
                    Kuning Kecoklatan
                    <p class="fw-normal">Warna kuning cerah yang pekat dan bertekstur encer biasanya muncul pada
                        minggu pertama kehidupan. Ini adalah hasil dari sisa ASI yang tidak tercerna dan empedu dari
                        hati. Warna ini menunjukkan kondisi bayi yang sehat.</p>
                </li>
            </ul>
            <h4 class="pt-5">Tanda-Tanda Diare pada Bayi</h4>
            <p>Mengetahui tanda-tanda diare pada bayi sangat penting untuk penanganan cepat. Berikut adalah beberapa
                ciri-cirinya:</p>
            <ul>
                <li>
                    Frekuensi BAB Meningkat
                    <p class="fw-normal">Buang air besar lebih sering dari biasanya bisa menjadi tanda diare. Bayi
                        yang mengonsumsi ASI biasanya buang air besar hingga enam kali sehari, sementara bayi yang
                        mengonsumsi susu formula bisa hingga delapan kali sehari pada minggu pertama. Jika
                        frekuensinya melebihi ini, kemungkinan bayi mengalami diare.</p>
                </li>
                <li>
                    Feses Berair dan Berbau Busuk
                    <p class="fw-normal">Feses yang sangat cair dan berbau busuk adalah indikasi diare. Biasanya
                        disertai perubahan warna dan tekstur.</p>
                </li>
            </ul>
            <p>Mengenali dan memahami gejala, penyebab, dan penanganan diare pada bayi sangat penting untuk
                kesehatan mereka. Orang tua harus selalu waspada dan siap mengambil tindakan yang diperlukan untuk
                menjaga kesehatan bayi mereka. Semoga informasi ini bermanfaat.</p>
        </div> -->
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