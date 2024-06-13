<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('Admin/Admin.css') }}" />
    <link rel="icon" type="png" href="{{ asset('Main/assets/main/title-logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <title>PELITA</title>
</head>

<body>
    <div class="d-flex bg-light" id="wrapper">
        <!-- Sidebar -->
        @include('layouts.Admin.includes.Sidebar')

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <!-- Navbar -->
            @include('layouts.Admin.includes.Navbar')

            <div class="container-fluid px-4">

                <!-- Dashboard Admin -->
                @yield('dashboard')

                <!-- Dokter Request -->
                @yield('dokterRequest')

                <!-- Lokasi Pelayanan Kesehatan -->
                @yield('lokasiPelayananKesehatan')

                <!-- Program & Kebijakan -->
                @yield('programKebijakan')

                <!-- Acara Kesehatan Balita -->
                @yield('acaraKesehatanBalita')

                <!-- Artikel Pendidikan kesehatan -->
                @yield('artikelPendidikanKesehatan')

                <!-- Grafik Gizi Indonesia -->
                 @yield('grafikGiziIndonesia')

                <!-- Modal Confirmation Logout -->
                <div class="modal fade" id="confirmationLogout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary-100">
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

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>