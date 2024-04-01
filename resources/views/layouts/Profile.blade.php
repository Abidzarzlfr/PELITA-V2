@extends('includes.Main')

@section('profile')
<div class="card text-center mt-5 mb-5">
    <div class="card-header bg-primary-subtle fw-bold">Profile</div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <a href="">
                <img src="{{ Auth::user()->foto }}" alt="Profile" class="profile-img rounded-circle mt-3" style="width: 100px; height: 100px" />
            </a>
            <div class="input-group mb-3 mt-3">
                <span for="name" class="input-group-text" id="basic-addon1">Username</span>
                <input type="name" class="form-control" id="name" name="name" placeholder="{{ Auth::user()->name }}" aria-label="Username" />
            </div>
            <div class="input-group mb-3">
                <span for="email" class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" class="form-control" id="email" name="email" placeholder="{{ Auth::user()->email }}" aria-label="Email" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Status</span>
                <input type="text" class="form-control" placeholder="{{ Auth::user()->role }}" aria-disabled="true" disabled />
            </div>
            @if (Auth::user()->dokter_request_status == 'requested')
            <div class="input-group mb-3">
                <span class="input-group-text bg-warning" id="basic-addon1">Dokter Status</span>
                <input type="text" class="form-control bg-warning-subtle" placeholder="{{ Auth::user()->dokter_request_status }}" aria-disabled="true" disabled />
            </div>
            @elseif (Auth::user()->dokter_request_status == 'approved')
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-light" id="basic-addon1">Dokter Status</span>
                <input type="text" class="form-control bg-success-subtle" placeholder="{{ Auth::user()->dokter_request_status }}" aria-disabled="true" disabled />
            </div>
            @endif
            <div class="input-group mb-3">
                <span for="password" class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" id="password" name="password" placeholder="*******" />
            </div>
            <div class="input-group mb-5">
                <input type="file" class="form-control" name="inputImage" id="file" />
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <button href="#" type="submit" class="btn btn-primary mt-2">Edit</button>
        </form>
        <!-- <a href="#" class="btn btn-success mt-2">Daftar Dokter</a> -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Daftar Dokter
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary-subtle">
                        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                            Daftar Dokter
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Form Daftar -->
                    <form action="/daftarDokter" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" for="nik" id="inputGroup-sizing-default">NIK</span>
                                <input type="text" class="form-control" id="nik" name="nik" />
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" for="nip" id="inputGroup-sizing-default">NIP</span>
                                <input type="text" class="form-control" id="nip" name="nip" />
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" for="detail" id="inputGroup-sizing-default">Spesialis</span>
                                <input type="text" class="form-control" id="detail" name="detail" />
                            </div>
                        </div>
                        <div class="modal-footer bg-primary-subtle">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary" href='/daftarDokter'>
                                Daftar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-body-secondary bg-primary-subtle">-</div>
</div>
@endsection