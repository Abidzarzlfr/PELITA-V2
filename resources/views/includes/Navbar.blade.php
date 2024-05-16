<nav class="navbar navbar-expand-lg bg-body-tertiary py-3 sticky-top">
    <div class="container-fluid px-5">

        <!-- Logo -->
        @guest
        <!-- Jika pengguna belum login -->
        <a class="navbar-brand" href="/"><img src="{{ asset('Main/assets/navbar/Logo.svg') }}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @else
        <!-- Jika pengguna sudah login -->
        @if (Auth::user()->role == 'user')
        <a class="navbar-brand" href="/beranda/auth"><img src="{{ asset('Main/assets/navbar/Logo.svg') }}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @elseif (Auth::user()->role == 'dokter')
        <a class="navbar-brand" href="/dokter"><img src="{{ asset('Main/assets/navbar/Logo.svg') }}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @endif
        @endguest

        <!-- Navbar Feature -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @guest <!-- Jika pengguna belum login -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/informasiTerkini">Informasi Terkini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Lainnya
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
                            <a class="dropdown-item" href="/statistik">Statistik</a>
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
                    <a class="btn bg-primary" href="/login">Masuk/Daftar</a>
                </li>
            </ul>
            @else <!-- Jika pengguna sudah login -->
            @if (Auth::user()->role == 'user')
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/beranda/auth">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/informasiTerkini/auth">Informasi Terkini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about/auth">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita/auth">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Lainnya
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
                            <a class="dropdown-item" href="/kebijakanProgram/auth">Kebijakan & Program</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/statistik/auth">Statistik</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/kalkulatorStunting/auth">Kalkulator Stunting</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/kampanyeAcara/auth">Kampanye & Acara</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forumKomunitas">Forum & Komunitas</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/informasiDokter">Informasi Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- Username -->
                    <a class="btn btn-primary me-2" disabled>{{ Auth::user()->name }}</a>
                    <!-- Logout Button -->
                    <button type="button" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#confirmationLogout">
                        Logout
                    </button>
                    <!-- Profile -->
                    <a href="/profile">
                        <img src="{{ asset(Auth::user()->foto) }}" alt="Profile" class="profile-img rounded-circle" style="width: 40px; height: 40px;" />
                    </a>
                </li>
            </ul>
            @elseif (Auth::user()->role == 'dokter')
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dokter">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dokter">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dokter">Berita</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="btn bg-primary" href="#">Masuk/Daftar</a> -->
                    <a class="btn btn-primary me-2" disabled>{{ Auth::user()->name }}</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#confirmationLogout">
                        Logout
                    </button>
                    <a href="/profile">
                        <img src="{{ asset(Auth::user()->foto) }}" alt="Profile" class="profile-img rounded-circle" style="width: 40px; height: 40px;" />
                    </a>
                </li>
            </ul>
            @endif
            @endguest
        </div>
        
    </div>
</nav>