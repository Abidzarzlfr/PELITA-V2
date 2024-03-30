@extends('includes.Main')

@section('profile')
<div class="card text-center mt-5">
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
        <a href="#" class="btn btn-success mt-2">Daftar Dokter</a>
    </div>
    <div class="card-footer text-body-secondary bg-primary-subtle">-</div>
</div>
@endsection