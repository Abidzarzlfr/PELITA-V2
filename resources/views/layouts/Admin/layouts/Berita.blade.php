@extends('layouts.Admin.includes.Main')

@section('berita')
<div class="row my-5">
    <div class="card text-center">
        <div class="card-header bg-primary-subtle fw-bold">Add Berita Kesehatan Terkini</div>
        <div class="card-body">
            <form action="{{ route('adminUploadBerita') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- @method('post') -->
                <a href="">
                    <img src="" alt="img" class="profile-img mt-3" style="width: 350px; height: 200px" />
                </a>
                <div class="input-group mb-3 mt-3">
                    <span for="name" class="input-group-text" id="basic-addon1">Nama Berita</span>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" aria-label="Nama Berita" />
                </div>
                <div class="input-group mb-3">
                    <label for="kategori" class="input-group-text" for="inputGroupSelect01">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori">
                        <option selected disabled>Choose...</option>
                        <option value="Stunting">Stunting</option>
                        <option value="Wasting">Wasting</option>
                        <option value="Underweight">Underweight</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span for="detail" class="input-group-text">Detail</span>
                    <textarea class="form-control" id="detail" name="detail" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mb-3">
                    <span for="tanggal" class="input-group-text" id="basic-addon1">Tanggal</span>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="YYYY-MM-DD" />
                </div>
                <div class="input-group mb-5">
                    <input type="file" class="form-control" name="foto" id="foto" />
                    <label class="input-group-text" for="foto">Upload</label>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Upload</button>
            </form>
            <!-- Button trigger modal -->
            <!-- Modal -->
        </div>
        <div class="card-footer text-body-secondary bg-primary-subtle">-</div>
    </div>

    <!-- Beritas Table -->
    <h3 class="fs-4 mb-3 text-primary mt-5">Berita Table</h3>
    <div class="col">
        <table class="table table-striped table-bordered bg-white rounded shadow-sm table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col" width="50">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($beritas as $key => $berita)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $berita->name }}</td>
                    <td>{{ $berita->kategori }}</td>
                    <td>{{ $berita->detail }}</td>
                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggal)->format('d/m/Y') }}</td>
                    <td><img src="{{ $berita->foto }}" style="width: 250px; height: 100px" /></td>
                    <td>
                        <button type="button" class="btn btn-danger mt-1"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection