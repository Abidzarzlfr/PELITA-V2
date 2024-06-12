<div class="bg-sidebar" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 text-primary fs-4 fw-bold text-uppercase mt-3">
        <img src="{{ asset('Main/assets/main/Logo-secondary.svg') }}" alt="">
    </div>
    <div class="list-group list-group-flush my-3">
        <a href="/adminView" class="sidebar-link w-100 ms-3 mb-2 {{ Request::is('adminView') ? 'active' : '' }}">
            <i class="fa-solid fa-gauge-high fs-4 me-3"></i>Dashboard
        </a>
        <a href="/adminDokterRequest" class="sidebar-link w-100 ms-3 mb-2 {{ Request::is('adminDokterRequest') ? 'active' : '' }}">
            <i class="fa-solid fa-user-doctor fs-4 me-3"></i>Dokter Request
        </a>
        <a href="/adminProgramKebijakan" class="sidebar-link w-100 ms-3 mb-2 {{ Request::is('adminProgramKebijakan') ? 'active' : '' }}">
            <i class="fa-solid fa-users-between-lines fs-4 me-2"></i>Program & Kebijakan
        </a>
        <a href="/adminAcaraKesehatanBalita" class="sidebar-link w-100 ms-3 mb-3 {{ Request::is('adminAcaraKesehatanBalita') ? 'active' : '' }}">
            <i class="fa-solid fa-house-laptop fs-4 me-2"></i>Acara Kesehatan
        </a>
        <a href="/adminArtikelPendidikanKesehatan" class="sidebar-link w-100 ms-3 {{ Request::is('adminArtikelPendidikanKesehatan') ? 'active' : '' }}">
            <i class="fa-solid fa-book-medical fs-4 me-3"></i>Artikel Pendidikan Kesehatan
        </a>
    </div>
</div>