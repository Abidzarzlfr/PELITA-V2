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
        <div class="bg-primary-subtle border-end border-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 text-primary fs-4 fw-bold text-uppercase"><i class="logo"></i>PELITA</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-primary-subtle active border-bottom border-dark"><i class="fas fa-tachometer-alt me-2 text-dark"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary-subtle border-bottom border-dark"><i class="fas fa-project-diagram me-2 text-dark"></i>Projects</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary-subtle border-bottom border-dark"><i class="fas fa-chart-line me-2 text-dark"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary-subtle border-bottom border-dark"><i class="fas fa-paperclip me-2 text-dark"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary-subtle border-bottom border-dark"><i class="fas fa-shopping-cart me-2 text-dark"></i>Store Mng</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary-subtle border-bottom border-dark"><i class="fas fa-gift me-2 text-dark"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary-subtle border-bottom border-dark"><i class="fas fa-comment-dots me-2 text-dark"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary-subtle border-bottom border-dark"><i class="fas fa-map-marker-alt me-2 text-dark"></i>Outlet</a>
                <a href="/logout" class="list-group-item list-group-item-action bg-white text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
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

            <div class="container-fluid px-4">
                <!-- Widget -->
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 text-white">{{ \App\Models\User::where('role', 'user')->count() }}</h3>
                                <p class="fs-5 text-white">User</p>
                            </div>
                            <i class="fas fa-gift fs-1 text-white border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 text-white">{{ \App\Models\User::where('role', 'dokter')->count() }}</h3>
                                <p class="fs-5 text-white">Dokter</p>
                            </div>
                            <i class="fas fa-hand-holding-usd fs-1 text-white border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 text-white">{{ \App\Models\User::where('role', 'admin')->count() }}</h3>
                                <p class="fs-5 text-white">Admin</p>
                            </div>
                            <i class="fas fa-truck fs-1 text-white border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 text-white">{{ \App\Models\User::where('dokter_request_status', 'requested')->count() }}</h3>
                                <p class="fs-5 text-white">Daftar Dokter</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 text-white border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <!-- Users Table -->
                    <h3 class="fs-4 mb-3 text-primary">Users Table</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Dokter Request</th>
                                    <th scope="col">Dokter NIK</th>
                                    <th scope="col">Dokter NIP</th>
                                    <th scope="col">Dokter Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->dokter_request_status }}</td>
                                    <td>{{ $user->dokter_nik }}</td>
                                    <td>{{ $user->dokter_nip }}</td>
                                    <td>{{ $user->dokter_detail }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    </script>
</body>

</html>