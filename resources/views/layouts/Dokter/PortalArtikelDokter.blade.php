@extends('includes.Main')

<!-- Portal Artikel Dokter -->
@section('portalArtikelDokter')

<!-- Tambah Artikel -->
<section class="statistik-ahli-gizi py-5">
    <div class="container">
        <h2>Tambah Artikel</h2>
        <form action="{{ route('dokterUploadArtikelPendidikanKesehatan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="row my-5">
                <!-- Foto Konten -->
                <div class="col-6">
                    <img src="{{ asset('Main/assets/main/input-image.png') }}" class="foto_konten img-fluid rounded-3" alt="foto_konten">
                </div>
                <div class="col-6">
                    <!-- Judul -->
                    <div class="input-group mb-3">
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
                    <!-- Foto Konten -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="foto_konten">Foto Konten</label>
                        <input type="file" class="form-control" name="foto_konten" id="foto_konten" />
                    </div>
                    <!-- Isi Konten -->
                    <textarea id="input" class="form-control" aria-label="With textarea" name="isi_konten" id="isi_konten" placeholder="Isi Konten"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-secondary text-white w-100" value="Unggah Artikel" />
        </form>
    </div>
</section>

<!-- Tabel Artikel -->
<section class="artikel-table py-5">
    <div class="container">
        <h2>Daftar Artikel</h2>
        <div class="table-responsive">
            <table class="table table-bordered mt-4 w-100">
                <thead class="text-black">
                    <th class="bg-secondary-100">No</th>
                    <th class="bg-secondary-100" style="width: 250px;">Judul</th>
                    <th class="bg-secondary-100" style="width: 110px;">Kategori</th>
                    <th class="bg-secondary-100" style="width: 100px;">Status</th>
                    <th class="bg-secondary-100" style="width: 130px;">Kelompok Usia</th>
                    <th class="bg-secondary-100">Foto Konten</th>
                    <th class="bg-secondary-100" style="width: 250px;">Isi Konten</th>
                    <th class="bg-secondary-100" style="width: 100px;">Tanggal</th>
                    <th class="bg-secondary-100" style="width: 120px;">Aksi</th>
                </thead>
                <tbody>
                    @php $index = 1; @endphp
                    @foreach ($artikelPendidikanKesehatan->where('id_dokter', auth()->user()->id) as $item)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->kelompok_usia }}</td>
                        <td><img src="{{ asset($item->foto_konten) }}" class="" alt="" width="168px"></td>
                        <td>{!! Str::limit($item->isi_konten, 40, '...') !!}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                        <td>
                            <!-- Ubah -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}" class="text-decoration-none text-black">Ubah</a>
                            <span class="text-muted fw-light">|</span>
                            <!-- Hapus -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}" class="text-decoration-none text-black">Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal Update -->
                    <div class="modal fade" id="modalUpdate{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUpdateLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-bold" id="modalUpdateLabel{{ $item->id }}">Ubah Artikel "{{ $item->judul }}"</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('dokterUpdateArtikelPendidikanKesehatan') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <div class="modal-body">
                                        <!-- Judul -->
                                        <div class="input-group mb-3">
                                            <span for="judul-update" class="input-group-text" id="basic-addon1">Judul</span>
                                            <input type="text" class="form-control" id="judul-update" name="judul-update" placeholder="{{ $item->judul }}" />
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
                                        <!-- Foto Konten -->
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="foto_konten_update">Foto Konten</label>
                                            <input type="file" class="form-control" name="foto_konten_update" id="foto_konten_update" />
                                        </div>
                                        <!-- Isi Konten -->
                                        <textarea id="editor" class="form-control" aria-label="With textarea" name="isi_konten_update" id="isi_konten_update">{!! $item->isi_konten !!}</textarea>
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
                                    Apakah anda yakin ingin menghapus artikel "<b>{{ $item->judul }}</b>"?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                                    <form method="POST" action="{{ route('dokterDeleteArtikelPendidikanKesehatan', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $index++; @endphp
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-secondary-100">
    <section class="info text-center pt-5 bg-bg" style="background-image: url('/Main/assets/main/footer-portal-konsultasi.png');">
        <div class="container">
            <p>KESEHATAN BALITA UNTUK INDONESIA EMAS 2045</p>
            <h1 class="my-4">Informasi Lebih Lanjut</h1>
            <h6>Tak hanya sebuah website kesehatan balita, Pelita adalah panggung inovasi yang mengukir jejak unik
                dalam
                tahap klinis, menerangi perjalanan sehat si kecil di Indonesia dengan cahaya penuh harapan.</h6>
            <a href="" class="btn btn-secondary text-white my-5">Kontak Kami</a>
            <p class="text-muted mb-5">&copy; 2024 Pelita</p>
        </div>
    </section>

    <div class="container">
        <hr class="m-0">
        <div class="row py-5">
            <div class="col-2">
                <img src="{{ asset('Main/assets/main/Logo-secondary.svg') }}" alt="">
            </div>
            <div class="col-6 d-flex justify-content-around align-items-center">
                <a href="" class="text-black text-decoration-none">Tentang</a>
                <a href="" class="text-black text-decoration-none">Kontak</a>
                <a href="" class="text-black text-decoration-none">Bantuan</a>
                <a href="" class="text-black text-decoration-none">Kebijakan Privasi</a>
                <a href="" class="text-black text-decoration-none">FAQ</a>
            </div>
            <div class="col-4 d-flex gap-3 justify-content-evenly align-items-center">
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-linkedin fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-instagram fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-github fs-4"></i>
                </a>
                <a href="" class="sosmed-circle-secondary">
                    <i class="fa-brands fa-youtube fs-4"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Tambahkan jQuery (jika belum ada) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Tambahkan skrip JavaScript -->
<script>
    $(document).ready(function() {
        // Tangkap peristiwa ketika pengguna memilih file
        $('#foto_konten').change(function() {
            // Dapatkan file yang dipilih
            var file = this.files[0];
            // Buat URL sementara untuk file yang dipilih
            var temporaryUrl = URL.createObjectURL(file);
            // Perbarui atribut src dari elemen gambar
            $('.foto_konten').attr('src', temporaryUrl);
        });
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