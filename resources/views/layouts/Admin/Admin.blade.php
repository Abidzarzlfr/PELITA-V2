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
        <div class="bg-primary" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 text-white fs-4 fw-bold text-uppercase"><i class="logo"></i>PELITA</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white active border border-dark"><i class="fas fa-tachometer-alt me-2 text-dark"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white border-bottom border-dark"><i class="fas fa-project-diagram me-2 text-dark"></i>Projects</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white border-bottom border-dark"><i class="fas fa-chart-line me-2 text-dark"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white border-bottom border-dark"><i class="fas fa-paperclip me-2 text-dark"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white border-bottom border-dark"><i class="fas fa-shopping-cart me-2 text-dark"></i>Store Mng</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white border-bottom border-dark"><i class="fas fa-gift me-2 text-dark"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white border-bottom border-dark"><i class="fas fa-comment-dots me-2 text-dark"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white border-bottom border-dark"><i class="fas fa-map-marker-alt me-2 text-dark"></i>Outlet</a>
                <a href="/logout" class="list-group-item list-group-item-action bg-white text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary py-4 px-4 ">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-primary-subtle fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-white">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

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
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 text-white">720</h3>
                                <p class="fs-5 text-white">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 text-white border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 text-white">4920</h3>
                                <p class="fs-5 text-white">Sales</p>
                            </div>
                            <i class="fas fa-hand-holding-usd fs-1 text-white border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 text-white">3899</h3>
                                <p class="fs-5 text-white">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 text-white border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 text-white">%25</h3>
                                <p class="fs-5 text-white">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 text-white border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3 text-primary">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Television</td>
                                    <td>Jonny</td>
                                    <td>$1200</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Laptop</td>
                                    <td>Kenny</td>
                                    <td>$750</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Cell Phone</td>
                                    <td>Jenny</td>
                                    <td>$600</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Fridge</td>
                                    <td>Killy</td>
                                    <td>$300</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Books</td>
                                    <td>Filly</td>
                                    <td>$120</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Gold</td>
                                    <td>Bumbo</td>
                                    <td>$1800</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Pen</td>
                                    <td>Bilbo</td>
                                    <td>$75</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Notebook</td>
                                    <td>Frodo</td>
                                    <td>$36</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Dress</td>
                                    <td>Kimo</td>
                                    <td>$255</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Paint</td>
                                    <td>Zico</td>
                                    <td>$434</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Carpet</td>
                                    <td>Jeco</td>
                                    <td>$1236</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Food</td>
                                    <td>Haso</td>
                                    <td>$422</td>
                                </tr>
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