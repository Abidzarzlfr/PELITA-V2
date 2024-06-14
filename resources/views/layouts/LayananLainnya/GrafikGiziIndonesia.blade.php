@extends('includes.Main')

@section('grafikGiziIndonesia')
<!-- Grafik Gizi -->
<section class="grafik-gizi py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-6">
        <h2>Underweight Indonesia</h2>
        <div id="underweightChart"></div>
        <a href="" class="btn btn-danger w-100">Baca Artikel Underweight</a>
        <a href="" class="btn btn-outline-primary w-100 mt-4">Download Hasil Survei Terkini</a>
      </div>
      <div class="col-6">
        <h2>Stunting Indonesia</h2>
        <div id="stuntingChart"></div>
        <a href="" class="btn btn-danger w-100">Baca Artikel Stunting</a>
        <a href="" class="btn btn-outline-primary w-100 mt-4">Download Hasil Survei Terkini</a>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <h2>Wasting Indonesia</h2>
        <div id="wastingChart"></div>
        <a href="" class="btn btn-danger w-100">Baca Artikel Wasting</a>
        <a href="" class="btn btn-outline-primary w-100 mt-4">Download Hasil Survei Terkini</a>
      </div>
      <div class="col-6">
        <h2>Overweight Indonesia</h2>
        <div id="overweightChart"></div>
        <a href="" class="btn btn-danger w-100">Baca Artikel Overweight</a>
        <a href="" class="btn btn-outline-primary w-100 mt-4">Download Hasil Survei Terkini</a>
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

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- Blade Template untuk data JSON -->
<script type="application/json" id="underweightData">{!! json_encode($underweightData) !!}</script>
<script type="application/json" id="stuntingData">{!! json_encode($stuntingData) !!}</script>
<script type="application/json" id="wastingData">{!! json_encode($wastingData) !!}</script>
<script type="application/json" id="overweightData">{!! json_encode($overweightData) !!}</script>

<script>
  
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil data dari Blade dan ubah menjadi JSON
    const underweightData = JSON.parse(document.getElementById('underweightData').textContent);
    const stuntingData = JSON.parse(document.getElementById('stuntingData').textContent);
    const wastingData = JSON.parse(document.getElementById('wastingData').textContent);
    const overweightData = JSON.parse(document.getElementById('overweightData').textContent);

    // Mapping data untuk grafik underweight
    const underweightChartData = [{
        x: '2019',
        y: underweightData.tahun_1
      },
      {
        x: '2021',
        y: underweightData.tahun_2
      },
      {
        x: '2022',
        y: underweightData.tahun_3
      },
      {
        x: '2023',
        y: underweightData.tahun_4
      }
    ];

    // Mapping data untuk grafik stunting
    const stuntingChartData = [{
        x: '2019',
        y: stuntingData.tahun_1
      },
      {
        x: '2021',
        y: stuntingData.tahun_2
      },
      {
        x: '2022',
        y: stuntingData.tahun_3
      },
      {
        x: '2023',
        y: stuntingData.tahun_4
      }
    ];

    // Mapping data untuk grafik wasting
    const wastingChartData = [{
        x: '2019',
        y: wastingData.tahun_1
      },
      {
        x: '2021',
        y: wastingData.tahun_2
      },
      {
        x: '2022',
        y: wastingData.tahun_3
      },
      {
        x: '2023',
        y: wastingData.tahun_4
      }
    ];

    // Mapping data untuk grafik overweight
    const overweightChartData = [{
        x: '2019',
        y: overweightData.tahun_1
      },
      {
        x: '2021',
        y: overweightData.tahun_2
      },
      {
        x: '2022',
        y: overweightData.tahun_3
      },
      {
        x: '2023',
        y: overweightData.tahun_4
      }
    ];

    const options = (data, name) => {
      return {
        chart: {
          type: "bar",
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            borderRadiusApplication: 'end',
            dataLabels: {
              position: 'top',
              style: {
                colors: "#FF8EAA",
              },
            },
          },
        },
        dataLabels: {
          enabled: true,
          offsetY: 5,
          background: {
            enabled: true,
            foreColor: '#000000',
            opacity: 1,
            colors: '#FF8EAA',
            borderRadius: 2,
            borderWidth: 2,
            borderColor: '#FF8EAA00',
          },
        },
        colors: ['#FF8EAA'],
        stroke: {
          show: true,
          width: 2,
          colors: ['#FF8EAA']
        },
        series: [{
          name: name,
          data: data
        }],
      }
    }

    // Inisialisasi grafik
    var underweightChart = new ApexCharts(
      document.getElementById("underweightChart"),
      options(underweightChartData, 'Underweight Data')
    );
    var stuntingChart = new ApexCharts(
      document.getElementById("stuntingChart"),
      options(stuntingChartData, 'Stunting Data')
    );
    var wastingChart = new ApexCharts(
      document.getElementById("wastingChart"),
      options(wastingChartData, 'Wasting Data')
    );
    var overweightChart = new ApexCharts(
      document.getElementById("overweightChart"),
      options(overweightChartData, 'Overweight Data')
    );

    // Render grafik
    underweightChart.render();
    stuntingChart.render();
    wastingChart.render();
    overweightChart.render();
  });
</script>
@endsection