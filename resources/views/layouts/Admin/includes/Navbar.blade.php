<nav class="navbar navbar-expand-lg navbar-light bg-primary-subtle py-4 px-4 sticky-top">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0">Dashboard</h2>
    </div>

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

    <div class="dropdown ms-auto">
        <button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>
    </div>
</nav>