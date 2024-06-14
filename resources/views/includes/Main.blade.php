<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('Main/main/main.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <!-- CRISP -->
    <!-- <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="82c4ba15-4fa0-41da-bab8-a9281fe59437";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> -->

    <!-- Z-Score (Kalkulator) -->
    <script src="{{ asset('Main/kalkulator/zscore.js') }}"></script>

    <!-- Date Picker -->
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css">

    <link rel="icon" type="png" href="{{ asset('Main/assets/main/title-logo.png') }}">
    <title>PELITA</title>
</head>

<body>
    <!-- Quotes -->
    @guest
    <header class="bg-pink py-3">
        <div class="container">
            <p class="m-0 text-center fw-light">
                Tumbuh kembang sehat balita Indonesia adalah prioritas utama kami,
                kami mengikuti praktik terbaik untuk kebersihan dan kesejahteraan
            </p>
        </div>
    </header>
    @else
    @if (Auth::user()->role == 'user')
    <header class="bg-pink py-3">
        <div class="container">
            <p class="m-0 text-center fw-light">
                Tumbuh kembang sehat balita Indonesia adalah prioritas utama kami,
                kami mengikuti praktik terbaik untuk kebersihan dan kesejahteraan
            </p>
        </div>
    </header>
    @endif
    @endguest

    <!-- Navbar -->
    @include('includes.Navbar')

    <!-- Modal Confirmation Logout -->
    <div class="modal fade" id="confirmationLogout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Pesan Konfirmasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin keluar dari website?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                    <a type="button" class="btn btn-danger" href="/logout">Yes</a>
                </div>
            </div>
        </div>
    </div>

    <!-- USER VIEWS (BEFORE-AFTER AUTH) -->

    <!-- Beranda -->
    @yield('beranda')

    <!-- Informasi Terkini -->
    @yield('informasiTerkini')

    <!-- Artikel Pendidikan Kesehatan -->
    @yield('artikelPendidikanKesehatan')

    <!-- Detail Artikel Pendidikan Kesehatan -->
    @yield('detailArtikelPendidikanKesehatan')

    <!-- Program & Kebijakan -->
    @yield('programKebijakan')

    <!-- Detail Program & Kebijakan -->
    @yield('detailProgramKebijakan')

    <!-- Acara Kesehatan Balita -->
    @yield('acaraKesehatanBalita')

    <!-- Detail Acara Kesehatan Balita -->
    @yield('detailAcaraKesehatanBalita')

    <!-- Informasi Dokter -->
    @yield('informasiDokter')

    <!-- Rekomendasi Dokter -->
    @yield('rekomendasiDokter')

    <!-- Detail Rekomendasi Dokter -->
    @yield('detailRekomendasiDokter')

    <!-- Lokasi Pelayanan kesehatan -->
    @yield('lokasiPelayananKesehatan')

    <!-- Detail Lokasi Pelayanan Kesehatan -->
    @yield('detailLokasiPelayananKesehatan')

    <!-- Kalkulator Gizi -->
    @yield('kalkulatorGizi')

    <!-- Menu Sehat Balita -->
    @yield('menuSehatBalita')

    <!-- Detail Menu Sehat Balita -->
    @yield('detailMenuSehatBalita')


    <!-- DOKTER VIEWS -->

    <!-- Dokter Views (Konsultasi) -->
    @yield('dokter')

    <!-- Portal Artikel Dokter -->
    @yield('portalArtikelDokter')

    <!-- Grafik Gizi Indonesia -->
    @yield('grafikGiziIndonesia')

    <!-- Profile -->
    @yield('profile')
    
</body>
<script>
    const passwordField = document.getElementById("password");
    const togglePassword = document.querySelector("#pass-eye");

    togglePassword.addEventListener("click", function() {
        if (passwordField.type === "text") {
            passwordField.type = "password";
            togglePassword.classList.remove("fa-eye");
            togglePassword.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "text";
            togglePassword.classList.remove("fa-eye-slash");
            togglePassword.classList.add("fa-eye");
        }
    });
</script>

<!-- Kalkulator Input -->
<script type="module">
    import indo from '{{ asset("Main/datePicker/indo.js") }}';
    document.addEventListener('DOMContentLoaded', () => {
        const calendar = new AirDatepicker('#tanggal_lahir', {
            locale: indo,
            autoClose: true,
            dateFormat: 'yyyy-MM-dd',
        });
    });
    var results = document.getElementById('result').children;
    console.log(results);
</script>

<!-- Dokter Views (Konsultasi) -->
<!-- <script type="module">
    import indo from '{{ asset("Main/datePicker/indo.js") }}';
    const calendar = new AirDatepicker('#kalender', {
    inline: true,
    locale: indo,
    onSelect: ({date, formattedDate, datepicker}) => {
        console.log(date)
        console.log(formattedDate)
        console.log(datepicker)
    }
});
</script> -->

</html>