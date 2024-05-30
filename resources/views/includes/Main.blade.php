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
    
    <!-- CRISP -->
    <!-- <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="82c4ba15-4fa0-41da-bab8-a9281fe59437";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> -->
    <link rel="icon" type="png" href="{{ asset('Main/assets/main/title-logo.png') }}">
    <title>PELITA</title>
</head>

<body>
    <!-- Quotes -->
    <header class="bg-pink py-3">
        <div class="container">
            <p class="m-0 text-center fw-light">
                Tumbuh kembang sehat balita Indonesia adalah prioritas utama kami,
                kami mengikuti praktik terbaik untuk kebersihan dan kesejahteraan
            </p>
        </div>
    </header>

    <!-- Navbar -->
    @include('includes.Navbar')

    <!-- Modal Confirmation Logout -->
    <div class="modal fade" id="confirmationLogout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary-subtle">
                    <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Confirmation Message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    <a type="button" class="btn btn-danger" href="/logout">Yes</a>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Informasi Ahli Gizi -->
    @yield('informasiAhliGizi')

    <!-- Rekomendasi Ahli Gizi -->
    @yield('rekomendasiAhliGizi')

    <!-- Detail Rekomendasi Ahli Gizi -->
    @yield('detailRekomendasiAhliGizi');

    <div class="container">

        <!-- Berita Terkini -->
        @yield('berita')

        <!-- Detail Berita Terkini -->
        @yield('detailBerita')

        <!-- Lokasi Pelayanan kesehatan -->
        @yield('lokasiPelayananKesehatan')

        <!-- Menu Sehat Balita -->
        @yield('menuSehatBalita')

        <!-- Grafik Gizi Indonesia -->
        @yield('grafikGiziIndonesia')

        <!-- Kalkulator Gizi -->
        @yield('kalkulatorGizi')

        <!-- Profile -->
        @yield('profile')

        <!-- Dokter Views (ON PROGRESS!) -->
        @yield('dokter')
    </div>
</body>
<script>
    const passwordField = document.getElementById("password");
    const togglePassword = document.querySelector("#pass-eye");

    togglePassword.addEventListener("click", function () {
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

</html>