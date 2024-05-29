@extends('includes.Main')

@section('profile')
<!-- <div class="card text-center mt-5 mb-5">
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
        <button type="button" class="btn btn-dark mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Daftar Dokter
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary-subtle">
                        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                            Daftar Dokter
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
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
</div> -->

<!-- New Profile UI -->
<section class="profile py-5">
    <div class="container">
        <div class="row">
            <div class="col-4 card">
                <div class="card-body pt-5 h-100 bg-body">
                    <h5>{{ Auth::user()->name }}</h5>
                    <p class="fw-bold mt-4">Status Keanggotaan</p>
                    <p class="mb-4">{{ Auth::user()->role }}</p>
                    @if ( Auth::user()->dokter_request_status == 'requested' || Auth::user()->dokter_request_status == 'approved')
                    <p class="fw-bold mt-4">Status Daftar Dokter</p>
                    <p class="mb-4">{{ Auth::user()->dokter_request_status }}</p>
                    @endif
                    <a href="" class="btn btn-primary">Ubah Profile</a>
                </div>
            </div>
            <div class="col-8 ps-4">
                <h3>Ubah Profil</h3>
                <img src="{{ Auth::user()->foto }}" class="rounded-circle my-5" alt="" width="80px" height="80px">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col">
                            <label for="id"><strong>Edit Profile</strong></label>
                            <div class="input-group mb-3 mt-2">
                                <input type="file" class="form-control" name="inputImage" id="file" />
                            </div>
                            <label for="fullName"><strong>Nama Lengkap<span class="text-danger">*</span></strong></label>
                            <div class="input-group mb-3 mt-2">
                                <input type="name" class="form-control" id="name" name="name" placeholder="{{ Auth::user()->name }}" aria-label="Username">
                            </div>
                        </div>
                        <div class="col">
                            <label for="email"><strong>Alamat Email <span>*</span></strong></label>
                            <div class="input-group mb-3 mt-2">
                                <input type="email" class="form-control" id="email" name="email" placeholder="{{ Auth::user()->email }}" aria-label="Email"">
                            </div>
                            <label for=" password"><strong>Password<span class="text-danger">*</span></strong></label>
                                <div class="input-group mb-3 mt-2">
                                    <input type="password" class="form-control border-end-none" name="password" id="password" placeholder="your new password">
                                    <div class="input-group-text bg-body border-start-none">
                                        <i class="fa-regular fa-eye-slash" id="pass-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-4">
                                <input type="submit" class="btn btn-primary w-full" value="Ubah Profile">
                                <!-- <a href="" class="btn btn-danger w-full">Daftar Sebagai Ahli Gizi Pelita</a> -->
                                <button type="button" class="btn btn-danger w-full" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Daftar Sebagai Ahli Gizi Pelita
                                </button>
                            </div>
                        </div>
                </form>
                <!-- Modal Daftar Dokter -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    Daftar Dokter
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/daftarDokter" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Lokasi Layanan Kesehatan</label>
                                        <select class="form-select" id="inputGroupSelect01" name="lokasi_id">
                                            <option selected>Choose...</option>
                                            @foreach($lokasiPelayananKesehatan as $lokasi)
                                            <option value="{{ $lokasi->id }}">{{ $lokasi->nama_lokasi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" for="dokter_nomor_str" id="inputGroup-sizing-default">Nomor STR</span>
                                        <input type="text" class="form-control" id="dokter_nomor_str" name="dokter_nomor_str" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="dokter_dokumen_str">Dokumen STR</label>
                                        <input type="file" class="form-control" id="dokter_dokumen_str" name="dokter_dokumen_str">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" for="dokter_kualifikasi" id="inputGroup-sizing-default">Kualifikasi</span>
                                        <input type="text" class="form-control" id="dokter_kualifikasi" name="dokter_kualifikasi" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" for="dokter_hp" id="inputGroup-sizing-default">Nomor HP</span>
                                        <input type="text" class="form-control" id="dokter_hp" name="dokter_hp" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button> -->
                                    <button type="submit" class="btn btn-primary" href='/daftarDokter'>
                                        Daftar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection