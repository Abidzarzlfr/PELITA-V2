@extends('includes.Main')

@section('beranda')
<div class="container">
  <!-- Carousel -->
  <div id="carouselExampleCaptions" class="carousel slide mt-5 mb-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>
            Some representative placeholder content for the first slide.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>
            Some representative placeholder content for the second slide.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>
            Some representative placeholder content for the third slide.
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- About -->
  <div class="about text-center">
    <h3>About</h3>
  </div>
  <div class="d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
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
  <!-- Berita Terkini -->
  <div class="about text-center">
    <h3>Berita Terkini</h3>
  </div>
  <div class="d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
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
  <!-- Informasi Dokter -->
  <div class="about text-center">
    <h3>Informasi Dokter</h3>
  </div>
  <div class="d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
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
  <!-- Informasi Layanan Kesehatan -->
  <div class="about text-center">
    <h3>Informasi Layanan Kesehatan</h3>
  </div>
  <div class="d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
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
  <!-- Panduan Gizi Balita -->
  <div class="about text-center">
    <h3>Panduan Gizi Balita</h3>
  </div>
  <div class="d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
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
  <!-- Kebijakan & Program Kesehatan -->
  <div class="about text-center">
    <h3>Kebijakan & Program Kesehatan</h3>
  </div>
  <div class="d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
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
  <!-- Forum & Komunitas -->
  <div class="about text-center">
    <h3>Forum & Komunitas</h3>
  </div>
  <div class="d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
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
  <!-- Kampanye & Acara Kesehatan Balita -->
  <div class="about text-center">
    <h3>Kampanye & Acara Kesehatan Balita</h3>
  </div>
  <div class="d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
      <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
        <button type="button" class="btn btn-info">View More</button>
      </div>
    </div>
    <div class="card" style="width: 18rem">
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