<nav class="navbar navbar-expand-lg bg-primary-subtle sticky-top">
    <div class="container">
        
        <!-- Logo -->
        @guest <!-- Jika pengguna belum login -->
        <a class="navbar-brand text-primary fw-bolder fs-3" href="/">PELITA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @else <!-- Jika pengguna sudah login -->
        <a class="navbar-brand text-primary fw-bolder fs-3" href="/beranda/auth">PELITA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @endguest 

        <!-- Navbar Feature -->
        <div class="fitur-navbar collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Navbar Left Side -->
            @guest <!-- Jika pengguna belum login -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/berita">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi Kesehatan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/layananKesehatan">Layanan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/panduanGizi">Panduan Gizi</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/kebijakanProgram">Kebijakan & Program</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/statistik">Statistik Stunting</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/kalkulatorStunting">Kalkulator Stunting</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/kampanyeAcara">Kampanye & Acara</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/forumKomunitas">Forum & Komunitas</a>
                </li> -->
            </ul>
            @else <!-- Jika pengguna sudah login -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" aria-current="page" href="/beranda/auth">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/about/auth">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/berita/auth">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi Kesehatan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/layananKesehatan/auth">Layanan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/panduanGizi/auth">Panduan Gizi</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/kebijakanProgram">Kebijakan & Program</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/statistik">Statistik Stunting</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/kalkulatorStunting">Kalkulator Stunting</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/kampanyeAcara">Kampanye & Acara</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/forumKomunitas">Forum & Komunitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/informasiDokter">Informasi Dokter</a>
                </li>
            </ul>
            @endguest

            <!-- Navbar Right Side -->
            @guest <!-- Jika pengguna belum login -->
            <a class="btn btn-dark me-2" href="/login">Login</a>
            <a class="btn btn-primary" href="/register">Register</a>
            @else <!-- Jika pengguna sudah login -->
            <a href="/logout" class="btn btn-danger me-2">Logout</a>
            <!-- </form> -->
            <a href="">
                <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" alt="Profile" class="profile-img rounded-circle" style="width: 40px; height: 40px;" />
            </a>
            @endguest
        </div>
    </div>
</nav>