@extends('includes.Main')

@section('detailBerita')
<div class="card mt-5 mb-5">
    <img src="{{ asset($berita->foto) }}" class="img-fluid h-100" alt="..." />
</div>
<div class="head">
    <!-- Nama Berita -->
    <h3 class="fw-bold">{{ $berita->name }}</h3>
    <div class="d-grid gap-2 d-md-flex">
        <!-- Kategori -->
        <button type="button" class="btn btn-dark" style="
              --bs-btn-padding-y: 0.25rem;
              --bs-btn-padding-x: 0.5rem;
              --bs-btn-font-size: 0.75rem;
            ">
            {{ $berita->kategori }}
        </button>
        <!-- Tanggal -->
        <button type="button" class="btn btn-outline-primary" style="
              --bs-btn-padding-y: 0.25rem;
              --bs-btn-padding-x: 0.5rem;
              --bs-btn-font-size: 0.75rem;
            ">
            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggal)->format('d/m/Y') }}
        </button>
    </div>
</div>
<!-- Isi Berita -->
<div class="body mt-3">
    <p>{{ $berita->detail }}</p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit atque
        cupiditate, cum accusantium sit laborum similique inventore deleniti
        minus molestias voluptatum, nam asperiores praesentium. Itaque
        suscipit officia rem nesciunt dolorum. Lorem ipsum, dolor sit amet
        consectetur adipisicing elit. Odio commodi repellendus delectus itaque
        aliquid, maiores odit labore facilis sunt nobis dolor officia, culpa
        voluptatem accusantium quibusdam placeat laboriosam, blanditiis
        suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Voluptas explicabo fugiat animi tempore quibusdam ullam tempora beatae
        optio atque error? Debitis possimus dolor quas, ad illum ipsam saepe
        suscipit voluptatum? Lorem, ipsum dolor sit amet consectetur
        adipisicing elit. Veritatis pariatur cum placeat minima dolorem
        ratione voluptatem necessitatibus, dicta debitis soluta recusandae,
        iusto quas suscipit nobis quibusdam officia expedita neque corrupti.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis,
        sequi culpa, ea eos ab labore dolore earum quo beatae officia
        molestiae ipsa aperiam laboriosam quam id rerum, aliquam qui iste.
    </p>
    <figcaption class="blockquote-footer mt-3">
        Someone expert in <cite title="Source Title">{{ $berita->kategori }}</cite>
    </figcaption>
</div>
@endsection