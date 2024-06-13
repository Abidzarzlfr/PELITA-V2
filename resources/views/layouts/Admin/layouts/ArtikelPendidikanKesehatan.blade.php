@extends('layouts.Admin.includes.Main')

@section('navbar-head', 'Tambah Artikel Pendidikan Kesehatan')

@section('artikelPendidikanKesehatan')
<div class="row my-5">
    <!-- Input Artikel Pendidikan New -->
    <form action="{{ route('adminUploadArtikelPendidikanKesehatan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row">
            <div class="col-6">
                <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" alt="foto_konten" class="foto_konten mt-3 img-fluid rounded-3" />
            </div>
            <div class="col-6">
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
                <textarea id="input" class="form-control" aria-label="With textarea" name="isi_konten" id="isi_konten" placeholder="Isi Konten"></textarea>

                <!-- Tanggal -->
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" for="tanggal" id="inputGroup-sizing-default">Tanggal</span>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary text-white w-100 mt-2 mb-5 border-none">Unggah Artikel</button>
    </form>
    <!-- Tabel Artikel Pendidikan Kesehatan -->
    <div class="col table-responsive">
        <table class="table table-striped table-bordered bg-white rounded shadow-sm table-hover">
            <thead>
                <tr class="table">
                    <th class="bg-secondary-100" scope="col" width="50">No</th>
                    <th class="bg-secondary-100" scope="col">Judul</th>
                    <th class="bg-secondary-100" scope="col">Kategori</th>
                    <th class="bg-secondary-100" scope="col">Status</th>
                    <th class="bg-secondary-100" scope="col">Kelompok Usia</th>
                    <th class="bg-secondary-100" scope="col">Nama Penerbit</th>
                    <th class="bg-secondary-100" scope="col">Foto Penerbit</th>
                    <th class="bg-secondary-100" scope="col">Foto Konten</th>
                    <th class="bg-secondary-100" scope="col">Isi Konten</th>
                    <th class="bg-secondary-100" scope="col">Tanggal</th>
                    <th class="bg-secondary-100" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artikelPendidikanKesehatan as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ Str::limit($item->judul, 40, '...') }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->kelompok_usia }}</td>
                    <td>{{ $item->nama_penerbit }}</td>
                    <td><img src="{{ $item->foto_penerbit }}" class="img-fluid" /></td>
                    <td><img src="{{ $item->foto_konten }}" class="img-fluid" /></td>
                    <td>{!! Str::limit($item->isi_konten, 40, '...') !!}</td>
                    <td>
                        @if (!is_null($item->tanggal))
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tanggal)->format('d/m/Y') }}
                        @else
                        <span class="text-muted">Tanggal tidak tersedia</span>
                        @endif
                    </td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}" class="text-decoration-none text-black">Ubah</a>
                        <span class="text-muted fw-light">|</span>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}" class="text-decoration-none text-black">Hapus</a>
                    </td>
                </tr>
                <!-- Modal Update -->
                <div class="modal fade" id="modalUpdate{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUpdateLabel{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="modalUpdateLabel{{ $item->id }}">Ubah Data Artikel Pendidikan Kesehatan "{{ $item->judul }}"</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('adminUpdateArtikelPendidikanKesehatan') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <div class="modal-body">
                                    <!-- Judul -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="judul_update" class="input-group-text" id="basic-addon1">Judul</span>
                                        <input type="text" class="form-control" id="judul_update" name="judul_update" placeholder="{{ $item->judul }}" />
                                    </div>

                                    <!-- Kategori -->
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="kategori_update">Kategori</label>
                                        <select class="form-select" id="kategori_update" name="kategori_update">
                                            <option selected disabled>{{ $item->kategori }}</option>
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
                                        <label class="input-group-text" for="status_update">Status</label>
                                        <select class="form-select" id="status_update" name="status_update">
                                            <option selected disabled>{{ $item->status }}</option>
                                            <option value="stunting">Stunting</option>
                                            <option value="wasting">Wasting</option>
                                            <option value="underweight">Underweight</option>
                                            <option value="overweight">Overweight</option>
                                            <option value="umum">Umum</option>
                                        </select>
                                    </div>

                                    <!-- Kelompok Usia -->
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="kelompok_usia_update">Kelompok Usia</label>
                                        <select class="form-select" id="kelompok_usia_update" name="kelompok_usia_update">
                                            <option selected disabled>{{ $item->kelompok_usia }}</option>
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
                                        <input class="form-control" name="nama_penerbit_update" id="nama_penerbit_update" placeholder="{{ $item->nama_penerbit }}"></input>
                                    </div>

                                    <!-- Foto Penerbit -->
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="foto_penerbit_update">Foto Penerbit</label>
                                        <input type="file" class="form-control" name="foto_penerbit_update" id="foto_penerbit_update" />
                                    </div>

                                    <!-- Foto Konten -->
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="foto_konten_update">Foto Konten</label>
                                        <input type="file" class="form-control" name="foto_konten_update" id="foto_konten_update" />
                                    </div>

                                    <!-- Isi Konten -->
                                    <textarea id="editor" class="form-control" aria-label="With textarea" name="isi_konten_update" id="isi_konten_update">{!! $item->isi_konten !!}</textarea>

                                    <!-- Tanggal -->
                                    <div class="input-group mb-3 mt-3">
                                        <span class="input-group-text" for="tanggal_update" id="inputGroup-sizing-default">Tanggal</span>
                                        <input type="date" class="form-control" id="tanggal_update" name="tanggal_update" />
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
                <div class="modal fade" id="modalDelete{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteLabel{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="modalDeleteLabel{{ $item->id }}">Konfirmasi Hapus</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin ingin menghapus konten ini "<b>{{ $item->judul }}</b>"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                                <form method="POST" action="{{ route('adminDeleteArtikelPendidikanKesehatan', ['id' => $item->id]) }}">
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

<script>
    ClassicEditor
        .create(document.querySelector('#input', '#editor'))
        .catch(error => {
            console.error(error);
        });

    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('textarea[id^="editor"]').forEach(editorElement => {
            ClassicEditor
                .create(editorElement)
                .catch(error => {
                    console.error(error);
                });
        });
    });
</script>
@endsection