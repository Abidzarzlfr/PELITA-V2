@extends('layouts.Admin.includes.Main')

@section('navbar-head', 'Tambah Acara Kesehatan')

@section('acaraKesehatanBalita')
<div class="row my-5">
    <!-- Input Acara Kesehatan New -->
    <form action="{{ route('adminUploadAcaraKesehatan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row">
            <div class="col-6">
                <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" alt="foto_acara" class="foto_acara mt-3 img-fluid rounded-3" />
            </div>
            <div class="col-6">
                <!-- Judul -->
                <div class="input-group mb-3 mt-3">
                    <span for="judul" class="input-group-text" id="basic-addon1">Judul</span>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="" />
                </div>

                <!-- Foto Acara -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="foto_acara">Foto Acara</label>
                    <input type="file" class="form-control" name="foto_acara" id="foto_acara" />
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
                <textarea id="input" class="form-control" aria-label="With textarea" id="isi_konten" name="isi_konten" placeholder="Isi Konten"></textarea>

                <!-- Status -->
                <div class="input-group mb-3 mt-3">
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
                    <span class="input-group-text" for="tanggal" id="inputGroup-sizing-default">Tanggal</span>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary text-white w-100 mt-2 mb-5 border-none">Unggah Acara Kesehatan</button>
    </form>
    <!-- Acara Kesehatan Table -->
    <div class="col table-responsive">
        <table class="table table-striped table-bordered bg-white rounded shadow-sm table-hover">
            <thead>
                <tr class="table">
                    <th class="bg-secondary-100" scope="col" width="50">No</th>
                    <th class="bg-secondary-100" scope="col">Judul</th>
                    <th class="bg-secondary-100" scope="col">Foto Acara</th>
                    <th class="bg-secondary-100" scope="col">Pemateri</th>
                    <th class="bg-secondary-100" scope="col">Jam Mulai</th>
                    <th class="bg-secondary-100" scope="col">Jam Selesai</th>
                    <th class="bg-secondary-100" scope="col">Link Grup</th>
                    <th class="bg-secondary-100" scope="col">Isi Konten</th>
                    <th class="bg-secondary-100" scope="col">Status</th>
                    <th class="bg-secondary-100" scope="col">Tanggal</th>
                    <th class="bg-secondary-100" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acaraKesehatan as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->judul }}</td>
                    <td><img src="{{ $item->foto_acara }}" class="img-fluid" /></td>
                    <td>{{ $item->pemateri }}</td>
                    <td>{{ $item->jam_mulai }}</td>
                    <td>{{ $item->jam_selesai }}</td>
                    <td>{{ Str::limit($item->link_grup, 10, '...') }}</td>
                    <td>{!! Str::limit($item->isi_konten, 40, '...') !!}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tanggal)->format('d/m/Y') }}</td>
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
                                <h1 class="modal-title fs-5 fw-bold" id="modalUpdateLabel{{ $item->id }}">Ubah Data Program dan Kebijakan "{{ $item->judul }}"</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('adminUpdateAcaraKesehatan') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <div class="modal-body">
                                    <!-- Judul -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="judul_update" class="input-group-text" id="basic-addon1">Judul</span>
                                        <input type="text" class="form-control" id="judul_update" name="judul_update" placeholder="{{ $item->judul }}" />
                                    </div>

                                    <!-- Foto Acara -->
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="foto_acara_update">Foto Acara</label>
                                        <input type="file" class="form-control" name="foto_acara_update" id="foto_acara_update" />
                                    </div>

                                    <!-- Pemateri -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="pemateri_update" class="input-group-text" id="basic-addon1">Pemateri</span>
                                        <input type="text" class="form-control" id="pemateri_update" name="pemateri_update" placeholder="{{ $item->pemateri }}" />
                                    </div>

                                    <!-- Jam Mulai -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="jam_mulai_update" class="input-group-text" id="basic-addon1">Jam Mulai</span>
                                        <input type="text" class="form-control" id="jam_mulai_update" name="jam_mulai_update" placeholder="{{ $item->jam_mulai }}" />
                                    </div>

                                    <!-- Jam Selesai -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="jam_selesai_update" class="input-group-text" id="basic-addon1">Jam Selesai</span>
                                        <input type="text" class="form-control" id="jam_selesai_update" name="jam_selesai_update" placeholder="{{ $item->jam_selesai }}" />
                                    </div>

                                    <!-- Link Grup -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="link_grup_update" class="input-group-text" id="basic-addon1">Link Grup</span>
                                        <input type="text" class="form-control" id="link_grup_update" name="link_grup_update" placeholder="{{ $item->link_grup }}" />
                                    </div>

                                    <!-- Isi Konten -->
                                    <textarea class="form-control" aria-label="With textarea" id="editor" name="isi_konten_update">{!! $item->isi_konten !!}</textarea>

                                    <!-- Status -->
                                    <div class="input-group mb-3 mt-3">
                                        <label class="input-group-text" for="status_update">Status</label>
                                        <select class="form-select" id="status_update" name="status_update">
                                            <option selected disabled>{{ $item->status }}</option>
                                            <option value="segera hadir">Segera Hadir</option>
                                            <option value="dibuka">Dibuka</option>
                                            <option value="ditutup">Ditutup</option>
                                        </select>
                                    </div>

                                    <!-- Tanggal -->
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" for="tanggal_update" id="inputGroup-sizing-default">Tanggal</span>
                                        <input type="date" class="form-control" id="tanggal_update" name="tanggal_update" placeholder="{{ $item->tanggal }}" />
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
                                <form method="POST" action="{{ route('adminDeleteAcaraKesehatan', ['id' => $item->id]) }}">
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