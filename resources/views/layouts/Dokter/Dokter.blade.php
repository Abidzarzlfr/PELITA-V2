@extends('includes.Main')

<!-- Dokter Views (Konsultasi Page) -->
@section('dokter')

<!-- Statistik Ahli Gizi -->
<section class="statistik-ahli-gizi py-5">
    <div class="container">
        <div class="row">
            <!-- Dokter Name -->
            <div class="col-5">
                <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
            </div>
            <!-- Widget -->
            <div class="col-7">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex rounded-5 bg-secondary p-4 align-items-center justify-content-start gap-3">
                            <div class=" d-flex align-items-center justify-content-center rounded-circle w-67px h-67px text-center" style="background-color: #978378;">
                                <i class="fa-solid fa-laptop-medical fs-2"></i>
                            </div>
                            <div class="">
                                <h1>{{ $widgetPermintaan }}</h1>
                                <p class="m-0"> Total Permintaan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex rounded-5 bg-secondary-200 p-4 align-items-center justify-content-start gap-3">
                            <div class=" d-flex align-items-center justify-content-center rounded-circle w-67px h-67px text-center" style="background-color: #A2948D;">
                                <i class="fa-regular fa-address-card fs-2"></i>
                            </div>
                            <div class="">
                                <h1>{{ $widgetJadwal }}</h1>
                                <p class="m-0">Total Jadwal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portal Konsultasi -->
<section class="portal-konsultasi py-5">
    <div class="container">
        <div class="row">
            <!-- Permintaan Konsultasi -->
            <div class="col-6">
                <h5>Permintaan Konsultasi</h5>
                <p>Terima atau tolak permintaan konsultasi oleh user</p>

                @php
                $hasRequested = false;
                @endphp

                @forelse($permintaanKonsultasi as $konsultasi)
                @if($konsultasi->konsultasi_request_status == 'requested')
                @php
                $hasRequested = true;
                @endphp
                <div class="d-flex justify-content-start gap-3 align-items-center mb-4">
                    <img src="{{ asset($konsultasi->user->foto) }}" class="rounded-circle" width="84px" height="84px" alt="">
                    <div class="konsul-detail-card w-100">
                        <div class="row">
                            <div class="col-6">
                                <p class="fw-bold mb-2">{{ $konsultasi->user->name }}</p>
                                <p class="m-0">{{ $konsultasi->tanggal->format('d/m/Y') }}</p>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-outline-secondary w-100" data-bs-toggle="modal" data-bs-target="#modalDetailKonsultasi{{ $konsultasi->id }}">Detail Permintaan</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="" data-bs-toggle="modal" data-bs-target="#modalRejected{{ $konsultasi->id }}" class="btn btn-danger w-100">Tolak</a>
                            </div>
                            <div class="col-6">
                                <a href="" data-bs-toggle="modal" data-bs-target="#modalApproved{{ $konsultasi->id }}" class="btn btn-success w-100">Terima</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Detail Permintaan -->
                <div class="modal fade" id="modalDetailKonsultasi{{ $konsultasi->id }}" tabindex="-1" aria-labelledby="modalDetailKonsultasiLabel{{ $konsultasi->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalDetailKonsultasiLabel{{ $konsultasi->id }}">Permintaan Konsultasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" for="detail" id="inputGroup-sizing-default">Nama</span>
                                        <input type="text" class="form-control" id="detail" name="detail" placeholder="{{ $konsultasi->user->name }}" disabled />
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" for="detail" id="inputGroup-sizing-default">Detail</span>
                                        <input type="text" class="form-control" id="detail" name="detail" placeholder="{{ $konsultasi->detail }}" disabled />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Rejected -->
                <div class="modal fade" id="modalRejected{{ $konsultasi->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRejectedLabel{{ $konsultasi->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="modalRejectedLabel{{ $konsultasi->id }}">Penolakan Konsultasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin ingin menolak permintaan <b>{{ $konsultasi->user->name }}</b>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                                <form method="POST" action="{{ route('rejectedKonsultasi', ['id' => $konsultasi->id]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Approved -->
                <div class="modal fade" id="modalApproved{{ $konsultasi->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalApprovedLabel{{ $konsultasi->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="modalApprovedLabel{{ $konsultasi->id }}">Penerimaan Konsultasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin ingin menerima permintaan <b>{{ $konsultasi->user->name }}</b>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                <form method="POST" action="{{ route('confirmKonsultasi', ['id' => $konsultasi->id]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @empty
                <p class="mt-5 mb-5">Tidak ada permintaan konsultasi.</p>
                @endforelse

                @if (!$hasRequested)
                <br> <br> <br>
                <p class="mt-5 mb-5">Tidak ada permintaan konsultasi.</p>
                @else
                <a href="" class="btn btn-outline-secondary w-100">Lihat Semuanya</a>
                @endif

            </div>

            <!-- Jadwal Konsultasi -->
            <div class="col-6">
                <h5>Jadwal Konsultasi</h5>
                <p>Pilih tanggal untuk melihat jadwal konsultasi</p>
                <div class="gap-4 w-100">
                    <!-- Filter Tanggal -->
                    <button type="button" class="btn btn-secondary w-100 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Filter Tanggal <i class="fa-solid fa-calendar-days fs-4"></i></button>
                    <!-- Modal Filter Tanggal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        Permintaan Konsultasi
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Filter Tanggal -->
                                <form id="filterForm" action="" method="GET">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" for="tanggal" id="inputGroup-sizing-default">Tanggal</span>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal" />
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Konsultasi Approved -->
                    <div class="detail-permintaan-wrapper">
                        <!-- Loop untuk menampilkan konsultasi yang sesuai -->
                        @forelse($approvedKonsultasi as $konsultasi)
                        <div class="d-flex w-100 gap-3 detail-permintaan mb-3 align-items-center konsultasi-item" data-tanggal="{{ $konsultasi->tanggal->format('Y-m-d') }}" data-status="{{ $konsultasi->konsultasi_request_status }}">
                            <img src="{{ asset($konsultasi->user->foto) }}" class="rounded-circle" alt="" width="84px" height="84px">
                            <div class="w-100">
                                <p class="fw-bold">{{ $konsultasi->user->name }}</p>
                                <a href="" class="btn btn-outline-secondary w-100" data-bs-toggle="modal" data-bs-target="#modalDetailKonsultasiJadwal{{ $konsultasi->id }}">Detail Permintaan</a>
                            </div>
                        </div>
                        <!-- Modal Detail Jadwal -->
                        <div class="modal fade" id="modalDetailKonsultasiJadwal{{ $konsultasi->id }}" tabindex="-1" aria-labelledby="modalDetailKonsultasiJadwalLabel{{ $konsultasi->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalDetailKonsultasiJadwalLabel{{ $konsultasi->id }}">Permintaan Konsultasi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" for="detail" id="inputGroup-sizing-default">Nama</span>
                                                <input type="text" class="form-control" id="detail" name="detail" placeholder="{{ $konsultasi->user->name }}" disabled />
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" for="detail" id="inputGroup-sizing-default">Detail</span>
                                                <input type="text" class="form-control" id="detail" name="detail" placeholder="{{ $konsultasi->detail }}" disabled />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="mt-5 mb-5 text-center">Tidak ada jadwal konsultasi.</p>
                        @endforelse
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!-- Tabel Konsultasi -->
<section class="table-konsultasi">
    <div class="container">

        <h5>Daftar Konsultasi</h5>
        <table class="table table-striped table-bordered mt-4">
            <thead>
                <th>Nama Pengguna</th>
                <th>Tanggal Pengajuan</th>
                <th>Jadwal Konsultasi</th>
                <th>Status</th>
                <th>Detail</th>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($permintaanKonsultasi as $konsultasi)
                <tr>
                    <td>{{ $konsultasi->user->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($konsultasi->created_at)->format('d/m/Y') }}</td>
                    <td>{{ ($konsultasi->tanggal)->format('d/m/Y') }}</td>
                    <td>{{ $konsultasi->konsultasi_request_status }}</td>
                    <td><a href="" class="text-decoration-none text-black" data-bs-toggle="modal" data-bs-target="#modalDetailKonsultasiTabel{{ $konsultasi->id }}">Lihat Detail</a></td>
                </tr>
                <!-- Modal Detail Permintaan -->
                <div class="modal fade" id="modalDetailKonsultasiTabel{{ $konsultasi->id }}" tabindex="-1" aria-labelledby="modalDetailKonsultasiTabelLabel{{ $konsultasi->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalDetailKonsultasiTabelLabel{{ $konsultasi->id }}">
                                    Permintaan Konsultasi
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" for="detail" id="inputGroup-sizing-default">Nama</span>
                                        <input type="text" class="form-control" id="detail" name="detail" placeholder="{{ $konsultasi->user->name }}" disabled />
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" for="detail" id="inputGroup-sizing-default">Detail</span>
                                        <input type="text" class="form-control" id="detail" name="detail" placeholder="{{ $konsultasi->detail }}" disabled />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

<!-- Footer -->
<footer class="bg-secondary-100">
    <section class="info text-center pt-5 bg-bg" style="background-image: url('/Main/assets/main/footer-portal-konsultasi.png');">
        <div class="container">
            <p>KESEHATAN BALITA UNTUK INDONESIA EMAS 2045</p>
            <h1 class="my-4">Informasi Lebih Lanjut</h1>
            <h6>Tak hanya sebuah website kesehatan balita, Pelita adalah panggung inovasi yang mengukir jejak unik
                dalam
                tahap klinis, menerangi perjalanan sehat si kecil di Indonesia dengan cahaya penuh harapan.</h6>
            <a href="" class="btn btn-secondary text-white my-5">Kontak Kami</a>
            <p class="text-muted mb-5">&copy; 2024 Pelita</p>
        </div>
    </section>

    <div class="container">
        <hr class="m-0">
        <div class="row py-5">
            <div class="col-2">
                <img src="{{ asset('Main/assets/main/Logo-secondary.svg') }}" alt="">
            </div>
            <div class="col-6 d-flex justify-content-around align-items-center">
                <a href="" class="text-black text-decoration-none">Tentang</a>
                <a href="" class="text-black text-decoration-none">Kontak</a>
                <a href="" class="text-black text-decoration-none">Bantuan</a>
                <a href="" class="text-black text-decoration-none">Kebijakan Privasi</a>
                <a href="" class="text-black text-decoration-none">FAQ</a>
            </div>
            <div class="col-4 d-flex gap-3 justify-content-evenly align-items-center">
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-linkedin fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-instagram fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-github fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-youtube fs-4"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Tambahkan kode JavaScript ini di bagian bawah view -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Tangkap perubahan pada input tanggal dan submit form
        $('#tanggal').change(function() {
            $('form#filterForm').submit();
        });
    });
</script>
@endsection