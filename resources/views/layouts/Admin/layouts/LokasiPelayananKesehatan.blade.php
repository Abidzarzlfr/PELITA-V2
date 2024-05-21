@extends('layouts.Admin.includes.Main')

@section('lokasiPelayananKesehatan')
<div class="row my-5">
    <div class="card text-center">
        <div class="card-header bg-primary-subtle fw-bold">Add Lokasi Pelayanan Kesehatan</div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')
                <a href="">
                    <img src="" alt="img" class="profile-img mt-3" style="width: 350px; height: 200px" />
                </a>
                <div class="input-group mb-3 mt-3">
                    <span for="name" class="input-group-text" id="basic-addon1">Nama Layanan Kesehatan</span>
                    <input type="name" class="form-control" id="name" name="name" placeholder="" aria-label="Username" />
                </div>
                <div class="input-group mb-3">
                    <span for="email" class="input-group-text" id="basic-addon1">Lokasi</span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" aria-label="Email" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Detail</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mb-5">
                    <input type="file" class="form-control" name="inputImage" id="file" />
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <button href="#" type="submit" class="btn btn-primary mt-2">Upload</button>
            </form>
            <!-- Button trigger modal -->
            <!-- Modal -->
        </div>
        <div class="card-footer text-body-secondary bg-primary-subtle">-</div>
    </div>
</div>
@endsection