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
                    <a class="nav-link" href="/kalkulatorGizi">Kalkulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/informasiAhliGizi">Ahli Gizi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/forumKomunitas">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Lainnya
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/artikelPendidikanKesehatan">Artikel Pendidikan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/menuSehatBalita">Menu Sehat Balita</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/lokasiPelayananKesehatan">Lokasi Pelayanan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/programKebijakan">Program & Kebijakan</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/grafikGiziIndonesia">Grafik Gizi Indonesia</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/acaraKesehatanBalita">Acara Kesehatan Balita</a>
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
                    <a class="nav-link" href="/kalkulatorGizi/auth">Kalkulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/informasiAhliGizi">Ahli Gizi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/forumKomunitas">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita/auth">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Lainnya
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/artikelPendidikanKesehatan/auth">Artikel Pendidikan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/menuSehatBalita/auth">Menu Sehat Balita</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/lokasiPelayananKesehatan/auth">Lokasi Pelayanan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/programKebijakan/auth">Program & Kebijakan</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/grafikGiziIndonesia/auth">Grafik Gizi Indonesia</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/acaraKesehatanBalita/auth">Acara Kesehatan Balita</a>
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