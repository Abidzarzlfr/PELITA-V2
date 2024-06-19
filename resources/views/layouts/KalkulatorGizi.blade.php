@extends('includes.Main')

@section('kalkulatorGizi')
<!-- Kalkulator -->
<section class="kalkulator py-5">
  <div class="container">
    <div class="row h-100">
      <!-- Perhitungan Kalkulator -->
      <div class="col-6 h-100">
        <div class="py-5 bg-bg rounded-4">
          <div class="w-450px mx-auto">
            <p class="fw-bold text-center">Anak Anda:</p>
            <!-- Radio Gender -->
            <div class="d-flex image-wrapper justify-content-center align-items-center gap-5">
              <label class="p-4 rounded-3">
                <input type="radio" name="gender" value="boy" checked>
                <img src="{{ asset('Main/assets/main/anak-laki.svg') }}" class="img-fluid" alt="" width="100px">
              </label>
              <label class="p-4 rounded-3">
                <input type="radio" name="gender" value="girl">
                <img src="{{ asset('Main/assets/main/anak-perempuan.svg') }}" class="img-fluid" alt="" width="100px">
              </label>
            </div>
            <form action="" class="mt-5" id="form-submit" onsubmit="calculateZScore(event)">
              <!-- Tanggal Lahir Anak -->
              <div class="row align-items-center justify-content-between mb-4">
                <div class="col-5">
                  <label for="" class="fw-bold">Tanggal Lahir Anak</label>
                </div>
                <div class="col-7">
                  <input type="text" class="form-control w-100" name="dob" id="tanggal_lahir" readonly required>
                </div>
              </div>
              <!-- Tinggi Badan Anak -->
              <div class="row align-items-center justify-content-between mb-4">
                <div class="col-5">
                  <label for="" class="fw-bold">Tinggi Badan Anak</label>
                </div>
                <div class="col-7">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="100" name="tb_anak" required>
                    <span class="input-group-text bg-primary">cm</span>
                  </div>
                </div>
              </div>
              <!-- Berat Badan Anak -->
              <div class="row align-items-center justify-content-between mb-4">
                <div class="col-5 ">
                  <label for="" class="fw-bold">Berat Badan Anak</label>
                </div>
                <div class="col-7 ">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="10" name="bb_anak" required>
                    <span class="input-group-text bg-primary" id="basic-addon2">kg</span>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary w-100" id="btn-submit">Hitung</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Hasil Perhitungan Kalkulator -->
      <div class="col-6">
        <div class="container p-5 rounded-5 bg-bg h-100">
          <div class="px-5">
            <h2 class="text-center mb-5">Hasil Cek Status Gizi</h2>
            <div id="result">
            </div>
          </div>
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