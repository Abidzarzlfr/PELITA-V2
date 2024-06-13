@extends('layouts.Admin.includes.Main')

@section('navbar-head', 'Ubah Data Grafik Gizi Indonesia')

@section('grafikGiziIndonesia')
<div class="row my-5">
    <!-- Grafik Gizi Indonesia Table -->
    <div class="col table-responsive">
        <table class="table table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr class="table-primary">
                    <th class="bg-secondary-100" scope="col" width="50">No</th>
                    <th class="bg-secondary-100" scope="col">Status</th>
                    <th class="bg-secondary-100" scope="col">Tahun 1</th>
                    <th class="bg-secondary-100" scope="col">Tahun 2</th>
                    <th class="bg-secondary-100" scope="col">Tahun 3</th>
                    <th class="bg-secondary-100" scope="col">Tahun 4</th>
                    <th class="bg-secondary-100" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($grafikGizi as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->tahun_1 }}</td>
                    <td>{{ $item->tahun_2 }}</td>
                    <td>{{ $item->tahun_3 }}</td>
                    <td>{{ $item->tahun_4 }}</td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}" class="text-decoration-none text-black">Ubah</a>
                    </td>
                </tr>
                <!-- Modal Update -->
                <div class="modal fade" id="modalUpdate{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUpdateLabel{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="modalUpdateLabel{{ $item->id }}">Ubah Grafik "{{ $item->status }}"</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('adminUpdateGrafikGiziIndonesia') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <div class="modal-body">
                                    <!-- Tahun Ke-1 -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="tahun_1" class="input-group-text" id="basic-addon1">Tahun 1</span>
                                        <input type="number" class="form-control" id="tahun_1" name="tahun_1" placeholder="{{ $item->tahun_1 }}" />
                                    </div>

                                    <!-- Tahun Ke-2 -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="tahun_2" class="input-group-text" id="basic-addon1">Tahun 2</span>
                                        <input type="number" class="form-control" id="tahun_2" name="tahun_2" placeholder="{{ $item->tahun_2 }}" />
                                    </div>

                                    <!-- Tahun Ke-3 -->
                                    <div class="input-group mb-3 mt-3">
                                        <span for="tahun_3" class="input-group-text" id="basic-addon1">Tahun 3</span>
                                        <input type="number" class="form-control" id="tahun_3" name="tahun_3" placeholder="{{ $item->tahun_3 }}" />
                                    </div>

                                    <!-- Tahun Ke-4 -->
                                    <div class="input-group mb-3">
                                        <span for="tahun_4" class="input-group-text" id="basic-addon1">Tahun 4</span>
                                        <input type="number" class="form-control" id="tahun_4" name="tahun_4" placeholder="{{ $item->tahun_4 }}"/>
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
@endsection