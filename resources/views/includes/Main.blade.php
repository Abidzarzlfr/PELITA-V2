<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        .carousel-item img {
            height: 450px;
            /* Set your desired height here */
            object-fit: cover;
            /* This property ensures the image covers the specified dimensions */
        }
    </style>
    <title>PELITA</title>
</head>

<body>
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

    <div class="container">
        <!-- Beranda -->
        @yield('beranda')

        <!-- About -->
        @yield('about')

        <!-- Berita Terkini -->
        @yield('berita')

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
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>