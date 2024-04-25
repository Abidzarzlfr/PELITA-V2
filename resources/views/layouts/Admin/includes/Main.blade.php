<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('Admin/Admin.css') }}" />
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

                <!-- Berita Terkini -->
                @yield('berita')

                <!-- Layanan Kesehatan -->
                @yield('layananKesehatan')

                <!-- Kebijakan & Program -->
                @yield('kebijakanProgram')

                <!-- Forum & Komunitas -->
                @yield('forumKomunitas')

                <!-- Kampanye & Acara -->
                @yield('kampanyeAcara')

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

        // Image logic views
        document.getElementById('foto').addEventListener('change', function(event) {
            var file = event.target.files[0]; // Mengambil file yang dipilih
            var reader = new FileReader(); // Membuat objek FileReader

            reader.onload = function(e) {
                // Set nilai src dari elemen gambar berdasarkan data URL dari file yang dipilih
                document.querySelector('.profile-img').setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(file); // Membaca file sebagai data URL
        });
    </script>
</body>

</html>