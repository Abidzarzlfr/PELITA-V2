@extends('layouts.Admin.includes.Main')

@section('navbar-head', 'Tambah Acara Kesehatan')

@section('acaraKesehatanBalita')
<div class="row my-5">
    <!-- Add Acara Kesehatan -->
    <div class="card text-center">
        <div class="card-header bg-primary-subtle fw-bold">Add Acara Kesehatan</div>
        <div class="card-body">
            <form action="{{ route('adminUploadAcaraKesehatan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')
                <a href="">
                    <img src="" alt="foto_acara" class="foto_acara mt-3" style="width: 350px; height: 200px" />
                </a>

                <!-- Judul -->
                <div class="input-group mb-3 mt-3">
                    <span for="judul" class="input-group-text" id="basic-addon1">Judul</span>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="" />
                </div>

                <!-- Pemateri -->
                <div class="input-group mb-3 mt-3">
                    <span for="pemateri" class="input-group-text" id="basic-addon1">Pemateri</span>
                    <input type="text" class="form-control" id="pemateri" name="pemateri" placeholder="" />
                </div>

                <!-- Jam Mulai -->
                <div class="input-group mb-3 mt-3">
                    <span for="jam_mulai" class="input-group-text" id="basic-addon1">Jam Mulai</span>
                    <input type="text" class="form-control" id="jam_mulai" name="jam_mulai" placeholder="10.00" />
                </div>

                <!-- Jam Selesai -->
                <div class="input-group mb-3 mt-3">
                    <span for="jam_selesai" class="input-group-text" id="basic-addon1">Jam Selesai</span>
                    <input type="text" class="form-control" id="jam_selesai" name="jam_selesai" placeholder="13.00" />
                </div>

                <!-- Link Grup -->
                <div class="input-group mb-3 mt-3">
                    <span for="link_grup" class="input-group-text" id="basic-addon1">Link Grup</span>
                    <input type="text" class="form-control" id="link_grup" name="link_grup" placeholder="" />
                </div>

                <!-- Isi Konten -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Isi Konten</span>
                    <textarea class="form-control" aria-label="With textarea" id="isi_konten" name="isi_konten"></textarea>
                </div>

                <!-- Status -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="status">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="" selected>Pilih Status</option>
                        <option value="segera hadir">Segera Hadir</option>
                        <option value="dibuka">Dibuka</option>
                        <option value="ditutup">Ditutup</option>
                    </select>
                </div>

                <!-- Tanggal -->
                <div class="input-group mb-3">
                    <span for="tanggal" class="input-group-text" id="basic-addon1">Tanggal</span>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="YYYY-MM-DD" />
                </div>

                <!-- Foto Acara -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="foto_acara">Foto Acara</label>
                    <input type="file" class="form-control" name="foto_acara" id="foto_acara" />
                </div>

                <!-- Upload -->
                <button href="#" type="submit" class="btn btn-primary mt-2">Upload</button>
            </form>
        </div>
        <div class="card-footer text-body-secondary bg-primary-subtle">-</div>
    </div>

    <!-- Acara Kesehatan Table -->
    <h3 class="fs-4 mb-3 text-primary mt-5">Tabel Acara Kesehatan</h3>
    <div class="col table-responsive">
        <table class="table table-striped table-bordered bg-white rounded shadow-sm table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col" width="50">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Foto Acara</th>
                    <th scope="col">Pemateri</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Jam Selesai</th>
                    <th scope="col">Link Grup</th>
                    <th scope="col">Isi Konten</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acaraKesehatan as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->judul }}</td>
                    <td><img src="{{ $item->foto_acara }}" style="width: 250px; height: 100px" /></td>
                    <td>{{ $item->pemateri }}</td>
                    <td>{{ $item->jam_mulai }}</td>
                    <td>{{ $item->jam_selesai }}</td>
                    <td>{{ $item->link_grup }}</td>
                    <td>{{ $item->isi_konten }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tanggal)->format('d/m/Y') }}</td>
                    <td>
                        <button type="button" class="btn btn-danger mt-1"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };

    // Image logic views

    // foto_acara
    document.getElementById('foto_acara').addEventListener('change', function(event) {
        var file = event.target.files[0]; // Mengambil file yang dipilih
        var reader = new FileReader(); // Membuat objek FileReader

        reader.onload = function(e) {
            // Set nilai src dari elemen gambar berdasarkan data URL dari file yang dipilih
            document.querySelector('.foto_acara').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(file); // Membaca file sebagai data URL
    });
</script>
@endsection