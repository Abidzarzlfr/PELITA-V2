@extends('includes.Main')

@section('berita')
<!-- Berita Terkini -->
<div class="about text-center mt-5">
    <h3>Berita Terkini</h3>
</div>
<div class="row">
    @foreach($beritas as $berita)
    <div class="col-md-4 mt-5 mb-5">
        <div class="card mb-3">
            <!-- <img src="{{ $berita->foto }}" class="card-img-top" alt="" style="height: 200px;" /> -->
            <img src="{{ asset($berita->foto) }}" class="card-img-top" alt="" style="height: 200px;" />
            <div class="card-body">
                <h5 class="fw-bold">{{ $berita->name }}</h5>
                <p class="card-text">
                    {{ $berita->detail }}
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-dark" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        {{ $berita->kategori }}
                    </button>
                    <!-- @if($berita->tanggal instanceof \Carbon\Carbon)
                    <button type="button" class="btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        {{ $berita->tanggal->format('d/m/Y') }}
                    </button>
                    @else -->
                    <button type="button" class="btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggal)->format('d/m/Y') }}
                    </button>
                    <!-- @endif -->
                </div>
            </div>
            <a href="#" class="btn btn-info">View More</a>
        </div>
    </div>
    @endforeach
</div>
@endsection