@extends('layouts.Admin.includes.Main')

@section('artikelPendidikanKesehatan')
<div class="row my-5">
    <!-- Input Artikel Pendidikan Kesehatan -->
    <div class="card text-center">
        <div class="card-header bg-primary-subtle fw-bold">Add Artikel Pendidikan Kesehatan</div>
        <div class="card-body">
            <form action="{{ route('adminUploadArtikelPendidikanKesehatan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')
                <a href="">
                    <img src="" alt="foto_penerbit" class="foto_penerbit mt-3" style="width: 350px; height: 200px" />
                </a>
                <a href="">
                    <img src="" alt="foto_konten" class="foto_konten mt-3" style="width: 350px; height: 200px" />
                </a>

                <!-- Judul -->
                <div class="input-group mb-3 mt-3">
                    <span for="judul" class="input-group-text" id="basic-addon1">Judul</span>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="" />
                </div>

                <!-- Kategori -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="kategori">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori">
                        <option value="" selected>Pilih Kategori</option>
                        <option value="pertumbuhan anak">Pertumbuhan Anak</option>
                        <option value="olahraga">Olahraga</option>
                        <option value="panduan orang tua">Panduan Orang Tua</option>
                        <option value="makanan dan nutrisi anak">Makanan dan Nutrisi Anak</option>
                        <option value="asi dan menyusui">ASI dan Menyusui</option>
                        <option value="umum">Umum</option>
                    </select>
                </div>

                <!-- Status -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="status">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="" selected>Pilih Status</option>
                        <option value="stunting">Stunting</option>
                        <option value="wasting">Wasting</option>
                        <option value="underweight">Underweight</option>
                        <option value="overweight">Overweight</option>
                        <option value="umum">Umum</option>
                    </select>
                </div>

                <!-- Kelompok Usia -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="kelompok_usia">Kelompok Usia</label>
                    <select class="form-select" id="kelompok_usia" name="kelompok_usia">
                        <option value="" selected>Pilih Kelompok Usia</option>
                        <option value="semua usia">Semua Usia</option>
                        <option value="hamil">Hamil</option>
                        <option value="bayi">Bayi</option>
                        <option value="batita">Batita</option>
                        <option value="anak">Anak</option>
                    </select>
                </div>

                <!-- Nama Penerbit -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Nama Penerbit</span>
                    <input class="form-control" name="nama_penerbit" id="nama_penerbit"></input>
                </div>

                <!-- Foto Penerbit -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="foto_penerbit">Foto Penerbit</label>
                    <input type="file" class="form-control" name="foto_penerbit" id="foto_penerbit" />
                </div>

                <!-- Foto Konten -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="foto_konten">Foto Konten</label>
                    <input type="file" class="form-control" name="foto_konten" id="foto_konten" />
                </div>

                <!-- Isi Konten -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Isi Konten</span>
                    <textarea class="form-control" aria-label="With textarea" name="isi_konten" id="isi_konten"></textarea>
                </div>

                <!-- Tanggal -->
                <div class="input-group mb-3">
                    <span for="tanggal" class="input-group-text" id="basic-addon1">Tanggal</span>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="YYYY-MM-DD" />
                </div>

                <!-- Sumber -->
                <!-- <div class="input-group mb-3">
                    <span for="sumber" class="input-group-text" id="basic-addon1">Sumber</span>
                    <input type="text" class="form-control" id="sumber" name="sumber" placeholder="www.pelita.com" />
                </div> -->

                <button type="submit" class="btn btn-primary mt-2">Upload</button>
            </form>

            <!-- Button trigger modal -->
            <!-- Modal -->
        </div>
        <div class="card-footer text-body-secondary bg-primary-subtle">-</div>
    </div>

    <!-- Tabel Artikel Pendidikan Kesehatan -->
    <h3 class="fs-4 mb-3 text-primary mt-5">Tabel Artikel Pendidikan Kesehatan</h3>
    <div class="col table-responsive">
        <table class="table table-striped table-bordered bg-white rounded shadow-sm table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col" width="50">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status</th>
                    <th scope="col">Kelompok Usia</th>
                    <th scope="col">Nama Penerbit</th>
                    <th scope="col">Foto Penerbit</th>
                    <th scope="col">Foto Konten</th>
                    <th scope="col">Isi Konten</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artikelPendidikanKesehatan as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->kelompok_usia }}</td>
                    <td>{{ $item->nama_penerbit }}</td>
                    <td><img src="{{ $item->foto_penerbit }}" style="width: 125px; height: 50px" /></td>
                    <td><img src="{{ $item->foto_konten }}" style="width: 125px; height: 50px" /></td>
                    <td>{{ $item->isi_konten }}</td>
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

    // foto_penerbit
    document.getElementById('foto_penerbit').addEventListener('change', function(event) {
        var file = event.target.files[0]; // Mengambil file yang dipilih
        var reader = new FileReader(); // Membuat objek FileReader

        reader.onload = function(e) {
            // Set nilai src dari elemen gambar berdasarkan data URL dari file yang dipilih
            document.querySelector('.foto_penerbit').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(file); // Membaca file sebagai data URL
    });
    // foto_konten
    document.getElementById('foto_konten').addEventListener('change', function(event) {
        var file = event.target.files[0]; // Mengambil file yang dipilih
        var reader = new FileReader(); // Membuat objek FileReader

        reader.onload = function(e) {
            // Set nilai src dari elemen gambar berdasarkan data URL dari file yang dipilih
            document.querySelector('.foto_konten').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(file); // Membaca file sebagai data URL
    });
</script>

@endsection