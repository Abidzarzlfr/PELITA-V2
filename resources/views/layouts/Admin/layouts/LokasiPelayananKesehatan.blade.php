@extends('layouts.Admin.includes.Main')

@section('navbar-head', 'Tambah Lokasi Pelayanan Kesehatan')

@section('lokasiPelayananKesehatan')
<div class="row my-5">
    <!-- Lokasi Pelayanan Kesehatan New -->
    <form action="{{ route('adminUploadLokasiPelayananKesehatan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row">
            <!-- Lokasi Preview -->
            <div class="col-6">
                <img src="{{ asset('Main/assets/main/input-image.png') }}" alt="foto_lokasi" class="foto_lokasi img-fluid rounded-3" />
            </div>
            <!-- Input Field Lokasi -->
            <div class="col-6">
                <!-- Nama Lokasi -->
                <div class="input-group mb-3">
                    <span for="nama_lokasi" class="input-group-text" id="basic-addon1">Nama Lokasi</span>
                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" placeholder="" />
                </div>

                <!-- Provinsi -->
                <div class="input-group mb-3">
                    <span for="provinsi" class="input-group-text" id="basic-addon1">Provinsi</span>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="" />
                </div>

                <!-- Kota -->
                <div class="input-group mb-3">
                    <span for="kota" class="input-group-text" id="basic-addon1">Kota</span>
                    <input type="text" class="form-control" id="kota" name="kota" placeholder="" />
                </div>

                <!-- Foto Lokasi -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="foto_lokasi">Foto Lokasi</label>
                    <input type="file" class="form-control" name="foto_lokasi" id="foto_lokasi" />
                </div>

                <!-- Tentang Lokasi -->
                <textarea id="input" class="form-control" aria-label="With textarea" name="tentang_lokasi" id="tentang_lokasi" placeholder="Tentang Lokasi"></textarea>

                <!-- No Telepon Lokasi -->
                <div class="input-group mb-3 mt-3">
                    <span for="no_tlp_lokasi" class="input-group-text" id="basic-addon1">No Telepon Lokasi</span>
                    <input type="text" class="form-control" id="no_tlp_lokasi" name="no_tlp_lokasi" placeholder="" />
                </div>

                <!-- Alamat Lokasi -->
                <div class="input-group mb-3 mt-3">
                    <span for="alamat_lokasi" class="input-group-text" id="basic-addon1">Alamat Lokasi</span>
                    <input type="text" class="form-control" id="alamat_lokasi" name="alamat_lokasi" placeholder="" />
                </div>

                <!-- link_maps -->
                <div class="input-group mb-3">
                    <span for="link_maps" class="input-group-text" id="basic-addon1">Link Maps</span>
                    <input type="text" class="form-control" id="link_maps" name="link_maps" placeholder="www.maps.com" />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary text-white w-100 mt-2 mb-5 border-none">Unggah Lokasi Pelayanan Kesehatan</button>
    </form>
    <!-- Program Kebijakan Table -->
    <div class="col table-responsive">
        <table class="table table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr class="table-primary">
                    <th class="bg-secondary-100" scope="col" width="50">No</th>
                    <th class="bg-secondary-100" scope="col">Nama Lokasi</th>
                    <th class="bg-secondary-100" scope="col">Provinsi</th>
                    <th class="bg-secondary-100" scope="col">Kota</th>
                    <th class="bg-secondary-100" scope="col">Foto Lokasi</th>
                    <th class="bg-secondary-100" scope="col">Tentang Lokasi</th>
                    <th class="bg-secondary-100" scope="col">Alamat Lokasi</th>
                    <th class="bg-secondary-100" scope="col">Link Maps</th>
                    <th class="bg-secondary-100" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lokasiPelayanan as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ Str::limit($item->nama_lokasi, 40, '...') }}</td>
                    <td>{{ $item->provinsi }}</td>
                    <td>{{ $item->kota }}</td>
                    <td><img src="{{ $item->foto_lokasi }}" class="img-fluid" /></td>
                    <td>{!! Str::limit($item->tentang_lokasi, 40, '...') !!}</td>
                    <td>{{ Str::limit($item->alamat_lokasi, 40, '...') }}</td>
                    <td>{{ Str::limit($item->link_maps, 10, '...') }}</td>
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
                                <h1 class="modal-title fs-5 fw-bold" id="modalUpdateLabel{{ $item->id }}">Ubah Data Lokasi "{{ $item->nama_lokasi }}"</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('adminUpdateLokasiPelayananKesehatan') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <div class="modal-body">
                                    <!-- Nama Lokasi -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="nama_lokasi_update" class="input-group-text" id="basic-addon1">Nama Lokasi</span>
                                        <input type="text" class="form-control" id="nama_lokasi_update" name="nama_lokasi_update" placeholder="{{ $item->nama_lokasi }}" />
                                    </div>

                                    <!-- Provinsi -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="provinsi_update" class="input-group-text" id="basic-addon1">Provinsi</span>
                                        <input type="text" class="form-control" id="provinsi_update" name="provinsi_update" placeholder="{{ $item->provinsi }}" />
                                    </div>

                                    <!-- Kota -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="kota_update" class="input-group-text" id="basic-addon1">Kota</span>
                                        <input type="text" class="form-control" id="kota_update" name="kota_update" placeholder="{{ $item->kota }}" />
                                    </div>

                                    <!-- Foto Lokasi -->
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="foto_lokasi_update">Foto Lokasi</label>
                                        <input type="file" class="form-control" name="foto_lokasi_update" id="foto_lokasi_update" />
                                    </div>


                                    <!-- No Telepon Lokasi -->
                                    <div class="input-group mb-3">
                                        <span for="no_tlp_lokasi_update" class="input-group-text" id="basic-addon1">No Telepon Lokasi</span>
                                        <input type="text" class="form-control" id="no_tlp_lokasi_update" name="no_tlp_lokasi_update" placeholder="{{ $item->no_tlp_lokasi }}" />
                                    </div>

                                    <!-- Alamat Lokasi -->
                                    <div class="input-group mb-3">
                                        <span for="alamat_lokasi_update" class="input-group-text" id="basic-addon1">Alamat Lokasi</span>
                                        <input type="text" class="form-control" id="alamat_lokasi_update" name="alamat_lokasi_update" placeholder="{{ $item->alamat_lokasi }}" />
                                    </div>

                                    <!-- Tentang Lokasi -->
                                    <textarea id="editor" class="form-control" aria-label="With textarea" name="tentang_lokasi_update" id="tentang_lokasi_update">{!! $item->tentang_lokasi !!}</textarea>

                                    <!-- link_maps -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="link_maps_update" class="input-group-text" id="basic-addon1">Link Maps</span>
                                        <input type="text" class="form-control" id="link_maps_update" name="link_maps_update" placeholder="{{ $item->link_maps }}" />
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
                                Apakah anda yakin ingin menghapus lokasi ini "<b>{{ $item->nama_lokasi }}</b>"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                                <form method="POST" action="{{ route('adminDeleteLokasiPelayananKesehatan', ['id' => $item->id]) }}">
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

    // foto_lokasi
    document.getElementById('foto_lokasi').addEventListener('change', function(event) {
        var file = event.target.files[0]; // Mengambil file yang dipilih
        var reader = new FileReader(); // Membuat objek FileReader

        reader.onload = function(e) {
            // Set nilai src dari elemen gambar berdasarkan data URL dari file yang dipilih
            document.querySelector('.foto_lokasi').setAttribute('src', e.target.result);
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