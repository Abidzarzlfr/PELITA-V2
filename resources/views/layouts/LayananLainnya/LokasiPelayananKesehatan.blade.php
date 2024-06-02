@extends('includes.Main')

@section('lokasiPelayananKesehatan')

<section class="header-lokasi-kesehatan py-5 bg-bg">
    <div class="container">
        <div class="row">
            <div class="col-7 pt-3 px-5">
                <h2>Lokasi Pelayanan Kesehatan</h2>
                <p class="quote-text text-justify">Jelajahi pilihan ahli gizi belita terbaik melalui Pelita. Segala
                    permasalahan
                    buah hati Anda akan ditangani oleh ahli gizi yang sudah professional dari fasilitas kesehatan
                    terbaik.</p>
                <form action="" class="w-100 form-filter-lokasi">
                    <div class="d-flex gap-4">
                        <div class="input-group pt-4">
                            <select class="form-select text-center" aria-label="Default select example" name="provinsi">
                                <option value="">Provinsi</option>
                                <option value="1">Banten</option>
                                <option value="2">Jawa Tengah</option>
                                <option value="3">DKI Jakarta</option>
                            </select>
                        </div>
                        <div class="input-group pt-4">
                            <select class="form-select text-center" aria-label="Default select example" name="kota">
                                <option value="">Kabupaten/Kota</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary w-100 mt-4" value="Temukan Lokasi Pelayanan Kesehatan">
                </form>
            </div>
        </div>
    </div>
</section>

<section class="lokasi-cards py-5">
    <div class="container">
        <div class="row">
            @guest
            @foreach ($lokasiPelayananKesehatan as $item)
            <div class="col-md-4 mb-4">
                <a class="card" href="" style="text-decoration: none;">
                    <img src="{{ asset($item->foto_lokasi) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_lokasi }}</h5>
                        <h6 class="text-muted my-3">{{ $item->kota }}</h6>
                        <p class="text-justify">{{ Str::limit($item->tentang_lokasi, 125, '...') }}</p>
                    </div>
                </a>
            </div>
            @endforeach
            @else
            @if (Auth::user()->role == 'user')
            @foreach ($lokasiPelayananKesehatan as $item)
            <div class="col-md-4 mb-4">
                <a class="card" href="" style="text-decoration: none;">
                    <img src="{{ asset($item->foto_lokasi) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_lokasi }}</h5>
                        <h6 class="text-muted my-3">{{ $item->kota }}</h6>
                        <p class="text-justify">{{ Str::limit($item->tentang_lokasi, 125, '...') }}</p>
                    </div>
                </a>
            </div>
            @endforeach
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