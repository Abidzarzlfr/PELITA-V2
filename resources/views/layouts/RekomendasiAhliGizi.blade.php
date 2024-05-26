@extends('includes.Main')

@section('rekomendasiAhliGizi')
<section class="informasi-ahli py-5">
        <div class="mx-5">
            <div class="row">
                <div class="col-5 py-5 rounded-5 bg-secondary-100 shadow">
                    <div class="h-100 px-5 d-flex flex-column justify-content-center align-items-center">
                        <h3>Konsultasi dengan ahli gizi</h3>
                        <p class="quote-text text-justify">Layanan telemedisin yang siap siaga untuk membantu Anda
                            memenuhi
                            kebutuhan si buah hati</p>
                        <img src="{{ asset('Main/assets/main/img-informasi-ahli.png') }}" class="img-fluid py-5" alt="">
                        <div class="daftar-feature align-self-start">
                            <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px"
                                        height="24px"></span>100% gratis untuk seluruh orang tua</p>
                            <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px"
                                        height="24px"></span>Didukung lebih dari 200 ahli gizi di Indonesia</p>
                            <p><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt="" width="24px"
                                        height="24px"></span>Bekerja sama dengan lebih dari 50 fasilitas kesehatan</p>
                            <p class="mb-4"><span class="me-4"><img src="{{ asset('Main/assets/main/icons/ic-check-secondary.svg') }}" alt=""
                                        width="24px" height="24px"></span>Konsultasi melalui platform WhatsApp</p>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="p-5">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari informasi"
                                    aria-label="Cari Informasi" aria-describedby="btn-search">
                                <button class="btn btn-secondary text-white" type="submit" id="btn-search"><i
                                        class="bi bi-search me-2"></i>Cari</button>
                            </div>
                        </form>
                        <div class="py-5">
                            <h5>Rekomendasi Ahli Gizi</h5>
                            <p>Konsultasi online dengan ahli gizi terbaik kami</p>
                        </div>
                        <div class="row pb-4">
                            <div class="col">
                                <div class="d-flex flex-row p-4 bg-secondary-100 rounded-4 gap-2">
                                    <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="object-fit-cover" width="80px" alt="">
                                    <div class="detail w-100">
                                        <p class="fw-bold m-0">Dr. Lingga Pradipta Sp.A</p>
                                        <p class="m-0">Sp. Anak</p>
                                        <p class="fw-light m-0">RS Hermina Makassar</p>
                                        <a href="" class="btn btn-secondary text-white w-100 mt-3">Cari Ahli Gizi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-row p-4 bg-secondary-100 rounded-4 gap-2">
                                    <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="object-fit-cover" width="80px" alt="">
                                    <div class="detail w-100">
                                        <p class="fw-bold m-0">Dr. Lingga Pradipta Sp.A</p>
                                        <p class="m-0">Sp. Anak</p>
                                        <p class="fw-light m-0">RS Hermina Makassar</p>
                                        <a href="" class="btn btn-secondary text-white w-100 mt-3">Cari Ahli Gizi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col">
                                <div class="d-flex flex-row p-4 bg-secondary-100 rounded-4 gap-2">
                                    <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="object-fit-cover" width="80px" alt="">
                                    <div class="detail w-100">
                                        <p class="fw-bold m-0">Dr. Lingga Pradipta Sp.A</p>
                                        <p class="m-0">Sp. Anak</p>
                                        <p class="fw-light m-0">RS Hermina Makassar</p>
                                        <a href="" class="btn btn-secondary text-white w-100 mt-3">Cari Ahli Gizi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-row p-4 bg-secondary-100 rounded-4 gap-2">
                                    <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="object-fit-cover" width="80px" alt="">
                                    <div class="detail w-100">
                                        <p class="fw-bold m-0">Dr. Lingga Pradipta Sp.A</p>
                                        <p class="m-0">Sp. Anak</p>
                                        <p class="fw-light m-0">RS Hermina Makassar</p>
                                        <a href="" class="btn btn-secondary text-white w-100 mt-3">Cari Ahli Gizi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col">
                                <div class="d-flex flex-row p-4 bg-secondary-100 rounded-4 gap-2">
                                    <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="object-fit-cover" width="80px" alt="">
                                    <div class="detail w-100">
                                        <p class="fw-bold m-0">Dr. Lingga Pradipta Sp.A</p>
                                        <p class="m-0">Sp. Anak</p>
                                        <p class="fw-light m-0">RS Hermina Makassar</p>
                                        <a href="" class="btn btn-secondary text-white w-100 mt-3">Cari Ahli Gizi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-row p-4 bg-secondary-100 rounded-4 gap-2">
                                    <img src="{{ asset('Main/assets/main/berita-1.png') }}" class="object-fit-cover" width="80px" alt="">
                                    <div class="detail w-100">
                                        <p class="fw-bold m-0">Dr. Lingga Pradipta Sp.A</p>
                                        <p class="m-0">Sp. Anak</p>
                                        <p class="fw-light m-0">RS Hermina Makassar</p>
                                        <a href="" class="btn btn-secondary text-white w-100 mt-3">Cari Ahli Gizi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-secondary w-100 text-white mt-4">Lihat Lebih Banyak</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection