<nav class="navbar navbar-expand-lg bg-navbar py-3 sticky-top">
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
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('informasiTerkini') ? 'active' : '' }}" href="/informasiTerkini">Informasi Terkini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kalkulatorGizi') ? 'active' : '' }}" href="/kalkulatorGizi">Kalkulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('informasiDokter') ? 'active' : '' }}" href="/informasiDokter">Dokter</a>
                </li>
                <li class="nav-item dropdown">
                    @php
                    $dropdownActive = Request::is('artikelPendidikanKesehatan') || Request::is('menuSehatBalita') ||
                    Request::is('lokasiPelayananKesehatan') || Request::is('programKebijakan') ||
                    Request::is('grafikGiziIndonesia') || Request::is('acaraKesehatanBalita');
                    @endphp
                    <a class="nav-link dropdown-toggle {{ $dropdownActive ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Lainnya
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ Request::is('artikelPendidikanKesehatan') ? 'active' : '' }}" href="/artikelPendidikanKesehatan">Artikel Pendidikan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('menuSehatBalita') ? 'active' : '' }}" href="/menuSehatBalita">Menu Sehat Balita</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('lokasiPelayananKesehatan') ? 'active' : '' }}" href="/lokasiPelayananKesehatan">Lokasi Pelayanan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('programKebijakan') ? 'active' : '' }}" href="/programKebijakan">Program & Kebijakan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('grafikGiziIndonesia') ? 'active' : '' }}" href="/grafikGiziIndonesia">Grafik Gizi Indonesia</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('acaraKesehatanBalita') ? 'active' : '' }}" href="/acaraKesehatanBalita">Acara Kesehatan Balita</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="btn bg-primary {{ Request::is('login') ? 'active' : '' }}" href="/login">Masuk/Daftar</a>
                </li>
            </ul>
            @else <!-- Jika pengguna sudah login -->
            @if (Auth::user()->role == 'user')
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('beranda/auth') ? 'active' : '' }}" aria-current="page" href="/beranda/auth">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('informasiTerkini/auth') ? 'active' : '' }}" href="/informasiTerkini/auth">Informasi Terkini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kalkulatorGizi/auth') ? 'active' : '' }}" href="/kalkulatorGizi/auth">Kalkulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('informasiDokter/auth') ? 'active' : '' }}" href="/informasiDokter/auth">Dokter</a>
                </li>
                <li class="nav-item dropdown">
                    @php
                    $dropdownActive = Request::is('artikelPendidikanKesehatan/auth') || Request::is('menuSehatBalita/auth') ||
                    Request::is('lokasiPelayananKesehatan/auth') || Request::is('programKebijakan/auth') ||
                    Request::is('grafikGiziIndonesia/auth') || Request::is('acaraKesehatanBalita/auth');
                    @endphp
                    <a class="nav-link dropdown-toggle {{ $dropdownActive ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Lainnya
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ Request::is('artikelPendidikanKesehatan/auth') ? 'active' : '' }}" href="/artikelPendidikanKesehatan/auth">Artikel Pendidikan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('menuSehatBalita/auth') ? 'active' : '' }}" href="/menuSehatBalita/auth">Menu Sehat Balita</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('lokasiPelayananKesehatan/auth') ? 'active' : '' }}" href="/lokasiPelayananKesehatan/auth">Lokasi Pelayanan Kesehatan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('programKebijakan/auth') ? 'active' : '' }}" href="/programKebijakan/auth">Program & Kebijakan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('grafikGiziIndonesia/auth') ? 'active' : '' }}" href="/grafikGiziIndonesia/auth">Grafik Gizi Indonesia</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{ Request::is('acaraKesehatanBalita/auth') ? 'active' : '' }}" href="/acaraKesehatanBalita/auth">Acara Kesehatan Balita</a></li>
                    </ul>
                </li>
                <!-- Profile Name -->
                <div class="nav-item">
                    <a href="/profile" class="btn btn-outline-primary border-primary">{{ Auth::user()->name }}</a>
                </div>
                <!-- Profile Photo -->
                <li class="nav-item">
                    <a href="/profile">
                        <img src="{{ asset(Auth::user()->foto) }}" class="rounded-circle img-fluid" style="width: 40px; height: 40px;" alt="">
                    </a>
                </li>
                <!-- Logout Button -->
                <li class="nav-item">
                    <form action="" style="width: 40px; height: 40px;">
                        <button type="button" class="btn btn-primary rounded-circle text-white w-100 h-100" data-bs-toggle="modal" data-bs-target="#confirmationLogout">
                            <i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i>
                        </button>
                    </form>
                </li>
            </ul>
            @elseif (Auth::user()->role == 'dokter')
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dokter">Beranda</a>
                </li>
                <!-- Profile Name -->
                <div class="nav-item">
                    <a href="/profile" class="btn btn-outline-primary border-primary">{{ Auth::user()->name }}</a>
                </div>
                <!-- Profile Photo -->
                <li class="nav-item">
                    <a href="/profile">
                        <img src="{{ asset(Auth::user()->foto) }}" class="rounded-circle img-fluid" style="width: 40px; height: 40px;" alt="">
                    </a>
                </li>
                <!-- Logout Button -->
                <li class="nav-item">
                    <form action="" style="width: 40px; height: 40px;">
                        <button type="button" class="btn btn-primary rounded-circle text-white w-100 h-100" data-bs-toggle="modal" data-bs-target="#confirmationLogout"><i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i></button>
                    </form>
                </li>
            </ul>
            @endif
            @endguest
        </div>

    </div>
</nav>