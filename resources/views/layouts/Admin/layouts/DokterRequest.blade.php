@extends('layouts.Admin.includes.Main')

@section('navbar-head', 'Daftar Dokter')

@section('dokterRequest')
<!-- Widget -->
<div class="row g-3 my-2">
    <div class="col-md-6 mt-4">
        <div class="border-secondary-600 rounded-4 d-flex gap-3 p-4">
            <div class="d-flex align-items-center justify-content-center bg-secondary-100 w-67px h-67px rounded-circle">
                <i class="fa-solid fa-stethoscope fs-1 text-secondary-600"></i>
            </div>
            <div class="text-secondary-600">
                <h3 class="m-0">{{ \App\Models\User::where('role', 'dokter')->count() }}</h3>
                <p class="quote-text m-0">Total Dokter</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-4">
        <div class="border-secondary-600 rounded-4 d-flex gap-3 p-4">
            <div class="d-flex align-items-center justify-content-center bg-secondary-100 w-67px h-67px rounded-circle">
                <i class="fa-solid fa-user-doctor fs-1 text-secondary-600"></i>
            </div>
            <div class="text-secondary-600">
                <h3 class="m-0">{{ \App\Models\User::where('dokter_request_status', 'requested')->count() }}</h3>
                <p class="quote-text m-0">Daftar Dokter</p>
            </div>
        </div>
    </div>
</div>

<div class="row my-5">
    <!-- Dokter Request Table -->
    <h3 class="fs-4 mb-3">Permintaan Daftar Dokter</h3>
    <div class="col table-responsive">
        <table class="table table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr class="table">
                    <th class="bg-secondary-300" scope="col" width="50">No</th>
                    <th class="bg-secondary-300" scope="col">Nama</th>
                    <th class="bg-secondary-300" scope="col">Email</th>
                    <th class="bg-secondary-300" scope="col">ID Lokasi</th>
                    <th class="bg-secondary-300" scope="col">Nomor STR</th>
                    <th class="bg-secondary-300" scope="col">Dokumen STR</th>
                    <th class="bg-secondary-300" scope="col">Kualifikasi</th>
                    <th class="bg-secondary-300" scope="col">No HP</th>
                    <th class="bg-secondary-300" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $counter = 0;
                @endphp
                @foreach($users as $user)
                @if($user->dokter_request_status == 'requested')
                <tr class="table">
                    <th scope="row">{{ ++$counter }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->id_lokasi }}</td>
                    <td>{{ $user->dokter_nomor_str }}</td>
                    <td><img src="{{ $user->dokter_dokumen_str }}" alt="" class="img-fluid"></td>
                    <td>{{ $user->dokter_kualifikasi }}</td>
                    <td>{{ $user->dokter_hp }}</td>
                    <td>
                        <!-- Button Confirmation Dokter Requested -->
                        <a href="" data-bs-toggle="modal" data-bs-target="#confirmationDokterRequested{{ $user->id }}" class="text-decoration-none text-black">Terima</a>
                        <span class="text-muted fw-light">|</span>
                        <!-- Button Rejected Dokter Requested -->
                        <a href="" data-bs-toggle="modal" data-bs-target="#rejectedDokterRequested{{ $user->id }}" class="text-decoration-none text-black">Tolak</a>
                    </td>
                </tr>
                <!-- Modal Confirmation Dokter Requested -->
                <div class="modal fade" id="confirmationDokterRequested{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmationDokterRequestedLabel{{ $user->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="confirmationDokterRequestedLabel{{ $user->id }}">Penerimaan Daftar Dokter</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Anda yakin ingin menerima "<b>{{ $user->name }}</b>" sebagai dokter?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                <form method="POST" action="{{ route('adminDokterRequest') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-success">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Rejected Dokter Requested -->
                <div class="modal fade" id="rejectedDokterRequested{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="rejectedDokterRequestedLabel{{ $user->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="rejectedDokterRequestedLabel{{ $user->id }}">Penolakan Daftar Dokter</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Anda yakin ingin menolak "<b>{{ $user->name }}</b>" sebagai dokter?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                                <form method="POST" action="{{ route('adminDokterRejected') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Dokter Approved Table -->
    <h3 class="fs-4 mb-3 mt-4">Dokter Approved Table</h3>
    <div class="col table-responsive">
        <table class="table table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr class="table">
                    <th class="bg-secondary-100" scope="col" width="50">No</th>
                    <th class="bg-secondary-100" scope="col">Nama</th>
                    <th class="bg-secondary-100" scope="col">Email</th>
                    <th class="bg-secondary-100" scope="col">ID Lokasi</th>
                    <th class="bg-secondary-100" scope="col">Nomor STR</th>
                    <th class="bg-secondary-100" scope="col">Dokumen STR</th>
                    <th class="bg-secondary-100" scope="col">Kualifikasi</th>
                    <th class="bg-secondary-100" scope="col">No HP</th>
                </tr>
            </thead>
            <tbody>
                @php
                $counter = 0;
                @endphp
                @foreach($users as $user)
                @if($user->dokter_request_status == 'approved')
                <tr class="table">
                    <th scope="row">{{ ++$counter }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->id_lokasi }}</td>
                    <td>{{ $user->dokter_nomor_str }}</td>
                    <td><img src="{{ $user->dokter_dokumen_str }}" alt="" class="img-fluid"></td>
                    <td>{{ $user->dokter_kualifikasi }}</td>
                    <td>{{ $user->dokter_hp }}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection