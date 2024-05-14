<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <style>
        .carousel-item img {
            height: 450px;
            /* Set your desired height here */
            object-fit: cover;
            /* This property ensures the image covers the specified dimensions */
        }
    </style> -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('Main/main/main.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <title>PELITA</title>
</head>

<body>
    <!-- Quotes -->
    <header class="bg-primary py-3">
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
    
    <div class="container">

        <!-- About -->
        @yield('about')

        <!-- Berita Terkini -->
        @yield('berita')

        <!-- Detail Berita Terkini -->
        @yield('detailBerita')

        <!-- Informasi Layanan Kesehatan -->
        @yield('layananKesehatan')

        <!-- Panduan Gizi Balita -->
        @yield('panduanGizi')

        <!-- Kebijakan & Program Kesehatan -->
        @yield('kebijakanProgram')

        <!-- Statistik -->
        @yield('statistik')

        <!-- Kalkulator Stunting -->
        @yield('kalkulatorStunting')

        <!-- Kampanye Acara -->
        @yield('kampanyeAcara')

        <!-- Forum & Komunitas -->
        @yield('forumKomunitas')

        <!-- Forum & Komunitas -->
        @yield('informasiDokter')

        <!-- Profile -->
        @yield('profile')

        <!-- Dokter Views (ON PROGRESS!) -->
        @yield('dokter')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>