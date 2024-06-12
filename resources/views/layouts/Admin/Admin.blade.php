@extends('layouts.Admin.includes.Main')

@section('navbar-head', 'Dashboard')

@section('dashboard')
<!-- Widget -->
<div class="row g-3 my-2">
    <div class="col-md-3">
        <div class="border-secondary-600 rounded-4 d-flex gap-3 p-4">
            <div class="d-flex align-items-center justify-content-center bg-secondary-100 w-67px h-67px rounded-circle">
                <i class="fa-solid fa-user fs-1 text-secondary-600"></i>
            </div>
            <div class="text-secondary-600">
                <h3 class="m-0">{{ \App\Models\User::where('role', 'user')->count() }}</h3>
                <p class="quote-text m-0">Total User</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
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

    <div class="col-md-3">
        <div class="border-secondary-600 rounded-4 d-flex gap-3 p-4">
            <div class="d-flex align-items-center justify-content-center bg-secondary-100 w-67px h-67px rounded-circle">
                <i class="fa-solid fa-user-tie fs-1 text-secondary-600"></i>
            </div>
            <div class="text-secondary-600">
                <h3 class="m-0">{{ \App\Models\User::where('role', 'admin')->count() }}</h3>
                <p class="quote-text m-0">Total Admin</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
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
    <!-- Users Table -->
    <h4 class="fs-4 mb-4">Daftar Pengguna</h4>
    <div class="col">
        <table class="table table-bordered bg-secondary-100 rounded shadow-sm table-hover">
            <thead class="text-center">
                <th scope="col" width="50" class="bg-secondary-100">No</th>
                <th scope="col" class="bg-secondary-100">Nama</th>
                <th scope="col" class="bg-secondary-100">Email</th>
                <th scope="col" class="bg-secondary-100">Role</th>
                <th scope="col" class="bg-secondary-100">Aksi</th>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                <tr>
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $user->id }}" class="text-decoration-none text-black">Ubah</a> <span class="text-muted fw-light">|</span>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $user->id }}" class="text-decoration-none text-black">Hapus</a>
                    </td>
                </tr>
                <!-- Modal Update -->
                <div class="modal fade" id="modalUpdate{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUpdateLabel{{ $user->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="modalUpdateLabel{{ $user->id }}">Ubah Data Pengguna "{{ $user->name }}"</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('adminUpdateUser') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="modal-body">
                                    <!-- Nama -->
                                    <div class="input-group mb-3">
                                        <span for="name_update" class="input-group-text" id="basic-addon1">Nama</span>
                                        <input type="text" class="form-control" id="name_update" name="name_update" placeholder="{{ $user->name }}" />
                                    </div>
                                    <!-- Email -->
                                    <div class="input-group mb-3">
                                        <span for="email_update" class="input-group-text" id="basic-addon1">Email</span>
                                        <input type="text" class="form-control" id="email_update" name="email_update" placeholder="{{ $user->email }}" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-success">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Delete -->
                <div class="modal fade" id="modalDelete{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteLabel{{ $user->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="modalDeleteLabel{{ $user->id }}">Konfirmasi Hapus</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin ingin menghapus pengguna ini "<b>{{ $user->name }}</b>"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                                <form method="POST" action="{{ route('adminDeleteUser', ['id' => $user->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection