@extends('includes.Main')

@section('beranda')
<!-- Solusi Kesehatan Terlengkap -->
<section class="top-feature pt-5">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h2>Solusi Kesehatan Terlengkap</h2>
        <p>
          Jelajahi saran dokter, temukan pusat kesehatan terdekat, tanya
          jawab dengan sesama orang tua, dan nikmati fitur-fitur menarik
          lainnya untuk mendukung kesehatan si kecil, hanya di Pelita!
        </p>
        <div class="card-solusi row">
          <!-- Informasi Dokter -->
          <div class="col-3">
            @guest
            <a class="btn card card-icon" href="/informasiDokter">
              @else
              @if (Auth::user()->role == 'user')
              <a class="btn card card-icon" href="/informasiDokter/auth">
                @endif
                @endguest
                <div class="card-body text-center d-flex flex-column justify-content-start align-items-center gap-2">
                  <div class="rounded-circle bg-icon-beranda icon-circle">
                    <img src="{{ asset('Main/assets/main/ic-dokter.svg') }}" class="" width="75px" height="75px" alt="" />
                  </div>
                  <strong>Informasi Dokter</strong>
                </div>
              </a>
          </div>
          <!-- Lokasi Pelayanan Kesehatan -->
          <div class="col-3">
            @guest
            <a class="btn card card-icon" href="/lokasiPelayananKesehatan">
              @else
              @if (Auth::user()->role == 'user')
              <a class="btn card card-icon" href="/lokasiPelayananKesehatan/auth">
                @endif
                @endguest
                <div class="card-body text-center d-flex flex-column justify-content-start align-items-center gap-2">
                  <div class="rounded-circle bg-icon-beranda icon-circle">
                    <img src="{{ asset('Main/assets/main/ic-faskes.svg') }}" class="" width="60px" alt="" />
                  </div>
                  <strong>Lokasi Pelayanan Kesehatan</strong>
                </div>
              </a>
          </div>
          <!-- Informasi Terkini -->
          <div class="col-3">
            @guest
            <a class="btn card card-icon" href="/informasiTerkini">
              @else
              @if (Auth::user()->role == 'user')
              <a class="btn card card-icon" href="/informasiTerkini/auth">
                @endif
                @endguest
                <div class="card-body text-center d-flex flex-column justify-content-start align-items-center gap-2">
                  <div class="rounded-circle bg-icon-beranda icon-circle">
                    <img src="{{ asset('Main/assets/main/ic-berita.svg') }}" class="" width="60px" alt="" />
                  </div>
                  <strong>Informasi Terkini</strong>
                </div>
              </a>
          </div>
          <!-- Kalkulator Gizi Indonesia -->
          <div class="col-3">
            @guest
            <a class="btn card card-icon" href="/kalkulatorGizi">
              @else
              @if (Auth::user()->role == 'user')
              <a class="btn card card-icon" href="/kalkulatorGizi/auth">
                @endif
                @endguest
                <div class="card-body text-center d-flex flex-column justify-content-start align-items-center gap-2">
                  <div class="rounded-circle bg-icon-beranda icon-circle">
                    <img src="{{ asset('Main/assets/main/ic-kalkulator.svg') }}" class="" width="50px" alt="" />
                  </div>
                  <strong>Kalkulator Gizi</strong>
                </div>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Layanan Pelita -->
<section class="layanan mt-5 pb-4">
  <div class="container">
    <h3>Layanan Pelita</h3>
    <div class="layanan-pelita row pt-3">

      <!-- Informasi Terkini -->
      @guest
      <a class="btn col-2 circle-image" href="/informasiTerkini">
        @else
        @if (Auth::user()->role == 'user')
        <a class="btn col-2 circle-image" href="/informasiTerkini/auth">
          @endif
          @endguest
          <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
            <img src="{{ asset('Main/assets/main/ic-berita.svg') }}" class="" width="50px" alt="" />
          </div>
          <p class="fw-bold">Informasi Terkini</p>
        </a>

        <!-- Artikel Pendidikan Kesehatan -->
        @guest
        <a class="btn col-2 circle-image" href="/artikelPendidikanKesehatan">
          @else
          @if (Auth::user()->role == 'user')
          <a class="btn col-2 circle-image" href="/artikelPendidikanKesehatan/auth">
            @endif
            @endguest
            <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
              <img src="{{ asset('Main/assets/main/ic-artikel.svg') }}" class="" width="55px" alt="" />
            </div>
            <p class="fw-bold">Artikel Pendidikan Kesehatan</p>
          </a>

          <!-- Program dan Kebijakan -->
          @guest
          <a class="btn col-2 circle-image" href="/programKebijakan">
            @else
            @if (Auth::user()->role == 'user')
            <a class="btn col-2 circle-image" href="/programKebijakan/auth">
              @endif
              @endguest
              <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
                <img src="{{ asset('Main/assets/main/ic-program.svg') }}" class="" width="50px" alt="" />
              </div>
              <p class="fw-bold">Program dan Kebijakan</p>
            </a>

            <!-- Acara Kesehatan Balita -->
            @guest
            <a class="btn col-2 circle-image" href="/acaraKesehatanBalita">
              @else
              @if (Auth::user()->role == 'user')
              <a class="btn col-2 circle-image" href="/acaraKesehatanBalita/auth">
                @endif
                @endguest
                <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
                  <img src="{{ asset('Main/assets/main/ic-acara.svg') }}" class="" width="50px" alt="" />
                </div>
                <p class="fw-bold">Acara Kesehatan Balita</p>
              </a>

              <!-- Kalkulator Gizi -->
              @guest
              <a class="btn col-2 circle-image" href="/kalkulatorGizi">
                @else
                @if (Auth::user()->role == 'user')
                <a class="btn col-2 circle-image" href="/kalkulatorGizi/auth">
                  @endif
                  @endguest
                  <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
                    <img src="{{ asset('Main/assets/main/ic-kalkulator.svg') }}" class="" width="60px" height="60px" alt="" />
                  </div>
                  <p class="fw-bold">Kalkulator Gizi</p>
                </a>

                <!-- Menu Sehat Balita -->
                @guest
                <a class="btn col-2 circle-image" href="/menuSehatBalita">
                  @else
                  @if (Auth::user()->role == 'user')
                  <a class="btn col-2 circle-image" href="/menuSehatBalita/auth">
                    @endif
                    @endguest
                    <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
                      <img src="{{ asset('Main/assets/main/ic-menu-kesehatan.svg') }}" class="" width="50px" alt="" />
                    </div>
                    <p class="fw-bold">Menu Sehat Balita</p>
                  </a>

    </div>
    <div class="layanan-pelita row pt-3">

      <!-- Informasi Dokter -->
      @guest
      <a class="btn col-2 circle-image" href="/informasiDokter">
        @else
        @if (Auth::user()->role == 'user')
        <a class="btn col-2 circle-image" href="/informasiDokter/auth">
          @endif
          @endguest
          <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
            <img src="{{ asset('Main/assets/main/ic-dokter.svg') }}" class="" width="50px" height="55px" alt="" />
          </div>
          <p class="fw-bold">Informasi Dokter</p>
        </a>

        <!-- Lokasi Pelayanan Kesehatan -->
        @guest
        <a class="btn col-2 circle-image" href="/lokasiPelayananKesehatan">
          @else
          @if (Auth::user()->role == 'user')
          <a class="btn col-2 circle-image" href="/lokasiPelayananKesehatan/auth">
            @endif
            @endguest
            <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
              <img src="{{ asset('Main/assets/main/ic-faskes.svg') }}" class="" width="50px" alt="" />
            </div>
            <p class="fw-bold">Lokasi Pelayanan Kesehatan</p>
          </a>

          <!-- Grafik Gizi Indonesia -->
          @guest
          <a class="btn col-2 circle-image" href="/grafikGiziIndonesia">
            @else
            @if (Auth::user()->role == 'user')
            <a class="btn col-2 circle-image" href="/grafikGiziIndonesia/auth">
              @endif
              @endguest
              <div class="rounded-circle bg-icon-beranda icon-circle d-flex justify-content-center align-items-center">
                <img src="{{ asset('Main/assets/main/ic-grafik-kesehatan.svg') }}" class="" width="50px" alt="" />
              </div>
              <p class="fw-bold">Grafik Gizi Indonesia</p>
            </a>

    </div>
  </div>
</section>
<!-- Berita Terbaru -->
<section class="berita py-4 bg-bg">
  <div class="container">
    <h3>Berita Terbaru</h3>
    <div class="news-category d-flex gap-4 my-4">
      <a href="" class="btn active">Tag Populer</a>
      <a href="" class="btn">Pertumbuhan Balita</a>
      <a href="" class="btn">Olahraga</a>
      <a href="" class="btn">Stunting</a>
      <a href="" class="btn">Makanan dan Nutrisi Anak</a>
      <a href="" class="btn">Otitis Media</a>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Warna Feses Bayi: Tanda Penting bagi Orang Tua
            </h5>
            <h6 class="text-muted my-3">PERTUMBUHAN BALITA</h6>
            <p>
              Pelita - Jakarta, Banyak orang tua cemas tentang apakah anak
              kecil mereka mengonsumsi makanan yang cukup sehat. Anak kecil
              umumnya makan sedikit, picky terhadap makanan, dan sering
              menolak untuk makan. Nafsu makan anak kecil sering
              berubah-ubah karena pertumbuhan yang cepat dan variasi dalam
              aktivitas mereka.
            </p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="{{ asset('Main/assets/main/berita-2.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              6 Aktivitas Seru untuk Balita yang Bikin Badan Tetap Fit!
            </h5>
            <h6 class="text-muted my-3">OLAHRAGA</h6>
            <p>
              Pelita - Jakarta, Keseruan Aktivitas Fisik: Balita Membutuhkan
              Gerakan untuk Tetap Enerjik! Minimal 180 Menit atau Lebih
              untuk Kesehatan Mereka!
            </p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="{{ asset('Main/assets/main/berita-3.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Balita Terlalu Kurus, Awas Malabsorpsi Kronis
            </h5>
            <h6 class="text-muted my-3">PERTUMBUHAN BALITA</h6>
            <p>
              Pelita - Jakarta, Balita Kurus Meskipun Sudah Diberi Makanan
              Bergizi? Ini Tanda Malabsorpsi Kronis yang Harus Diwaspadai!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Highlight -->
<section class="higlight pt-5 pb-4 bg-bg">
  <div class="container card border-0">
    <h5 class="mt-4">
      Higlight
      <span class="ms-3 badge bg-primary fw-normal text-black">Segera Hadir</span>
    </h5>
    <div class="row mt-4">
      <div class="col-2 circle-image">
        <img src="{{ asset('Main/assets/main/promil.png') }}" class="rounded-circle" alt="" width=100px">
        <p class="fw-bold">Program Kehamilan</p>
      </div>
      <div class="col-2 circle-image">
        <img src="{{ asset('Main/assets/main/fase-hamil.png') }}" class="rounded-circle" alt="" width=100px">
        <p class="fw-bold">Fase Kehamilan</p>
      </div>
      <div class="col-2 circle-image">
        <img src="{{ asset('Main/assets/main/batita.png') }}" class="rounded-circle" alt="" width=100px">
        <p class="fw-bold">Fase Batita</p>
      </div>
      <div class="col-2 circle-image">
        <img src="{{ asset('Main/assets/main/balita.png') }}" class="rounded-circle" alt="" width=100px">
        <p class="fw-bold">Fase Balita</p>
      </div>
      <div class="col-2 circle-image">
        <img src="{{ asset('Main/assets/main/resep.png') }}" class="rounded-circle" alt="" width=100px">
        <p class="fw-bold">Resep</p>
      </div>
      <div class="col-2 circle-image">
        <img src="{{ asset('Main/assets/main/produk.png') }}" class="rounded-circle" alt="" width=100px">
        <p class="fw-bold">Rekomendasi Produk</p>
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