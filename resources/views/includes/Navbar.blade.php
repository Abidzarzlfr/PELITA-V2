<nav class="navbar navbar-expand-lg bg-primary-subtle sticky-top">
    <div class="container">
        <a class="navbar-brand text-primary fw-bolder fs-3" href="/">PELITA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="fitur-navbar collapse navbar-collapse" id="navbarSupportedContent">
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
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/forumKomunitas">Forum & Komunitas</a>
                </li>
            </ul>
            <!-- <div class="left-side">
                <a class="btn btn-dark" href="/login">Login</a>
                <a class="btn btn-primary" href="/register">Register</a>
                <a href="#" class="btn btn-danger">Logout</a>
                <a href="">
                    <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" alt="Profile" class="profile-img rounded-circle" style="width: 40px; height: 40px;" />
                </a>
            </div> -->
            @guest <!-- Jika pengguna belum login -->
            <a class="btn btn-dark ms-2" href="/login">Login</a>
            <a class="btn btn-primary" href="/register">Register</a>
            @else <!-- Jika pengguna sudah login -->
            <form action="/logout" method="post" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger ms-2">Logout</button>
            </form>
            <a href="">
                <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" alt="Profile" class="profile-img rounded-circle" style="width: 40px; height: 40px;" />
            </a>
            @endguest
        </div>
    </div>
</nav>