@extends('includes.Main')

@section('profile')
<div class="card text-center mt-5">
    <div class="card-header bg-primary-subtle fw-bold">Profile</div>
    <div class="card-body">
        <a href="">
            <img src="{{ Auth::user()->foto }}" alt="Profile" class="profile-img rounded-circle mt-3" style="width: 100px; height: 100px" />
        </a>
        <!-- <h5 class="card-title mt-3">Special title treatment</h5>
          <p class="card-text">
            With supporting text below as a natural lead-in to additional
            content.
          </p> -->
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text" id="basic-addon1">Username</span>
            <input type="text" class="form-control" placeholder="{{ Auth::user()->name }}" aria-label="Username" aria-describedby="basic-addon1" />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email</span>
            <input type="email" class="form-control" placeholder="{{ Auth::user()->email }}" aria-label="Email" aria-describedby="basic-addon1" />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Status</span>
            <input type="text" class="form-control" placeholder="{{ Auth::user()->role }}" aria-disabled="true" disabled />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="{{ Auth::user()->password }}" aria-label="Password" aria-describedby="basic-addon1" />
        </div>
        <div class="input-group mb-5">
            <input type="file" class="form-control" id="inputGroupFile02" />
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <a href="#" class="btn btn-primary mt-2">Edit</a>
        <a href="#" class="btn btn-success mt-2">Daftar Dokter</a>
    </div>
    <div class="card-footer text-body-secondary bg-primary-subtle">-</div>
</div>
@endsection