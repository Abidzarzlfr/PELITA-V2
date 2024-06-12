<nav class="navbar navbar-expand-lg bg-navbar py-4 px-4 sticky-top">
    <div class="d-flex align-items-center mt-2">
        <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
        <h3 class="nabvar-head ms-2 1 m-0">@yield('navbar-head')</h3>
    </div>
    <div class="dropdown ms-auto d-flex">
        <!-- Profile Name -->
        <a href="/profile" class="btn btn-outline-secondary border-secondary me-2">{{ Auth::user()->name }}</a>
        <!-- Profile Photo -->
        <a href="/profile">
            <img src="{{ asset(Auth::user()->foto) }}" class="rounded-circle img-fluid me-2" style="width: 40px; height: 40px;" alt="">
        </a>
        <!-- Logout Button -->
        <form action="" style="width: 40px; height: 40px;">
            <button type="button" style="border: none;" class="logout btn btn-secondary rounded-circle w-100 h-100" data-bs-toggle="modal" data-bs-target="#confirmationLogout"><i class="fa-solid fa-person-walking-dashed-line-arrow-right text-white"></i></button>
        </form>
    </div>
</nav>