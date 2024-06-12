<nav class="navbar navbar-expand-lg navbar-light bg-primary-subtle py-4 px-4 sticky-top">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0">Dashboard Admin</h2>
    </div>
    <div class="dropdown ms-auto">
        <button class="btn btn-light fw-bold" type="button" aria-expanded="false">
            <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}
        </button>
        <button type="button" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#confirmationLogout">
            Logout
        </button>
    </div>
</nav>