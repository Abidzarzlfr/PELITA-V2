@extends('includes.Main')

@section('berita')
<!-- Berita Terkini -->
<div class="about text-center mt-5">
    <h3>Berita Terkini</h3>
</div>
<div class="row">
    <div class="col-md-4 mt-5 mb-5">
        <div class="card mb-3">
            <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="fw-bold">Bahaya Stunting</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-dark" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        Stunting
                    </button>
                    <button type="button" class="btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        12/10/2020
                    </button>
                </div>
            </div>
            <button type="button" class="btn btn-info">View More</button>
        </div>
    </div>
    <div class="col-md-4 mt-5 mb-5">
        <div class="card mb-3">
            <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
            <div class="card-body">
                <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
                <button type="button" class="btn btn-info">View More</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-5 mb-5">
        <div class="card mb-3">
            <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
            <div class="card-body">
                <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
                <button type="button" class="btn btn-info">View More</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-5 mb-5">
        <div class="card mb-3">
            <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
            <div class="card-body">
                <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
                <button type="button" class="btn btn-info">View More</button>
            </div>
        </div>
    </div>
</div>
@endsection