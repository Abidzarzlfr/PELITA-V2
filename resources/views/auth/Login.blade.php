<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <title>login</title>
</head>

<body>
  <div class="card position-absolute top-50 start-50 translate-middle bg-primary-subtle" style="width: 18rem">
    <div class="card-body">
      <h5 class="card-title fw-bolder text-primary">PELITA</h5>
      @if($errors->any())
      <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $item)
        <ul>
          <li>{{ $item }}</li>
        </ul>
        @endforeach
      </div>
      @endif
      <form action="/login" method="POST">
        @csrf
        <div class="input-group mb-3 mt-5">
          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
          <input type="email" value="{{ old('email') }}" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
          <input type="password" value="" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
        </div>
        <button name="submit" type="submit" class="btn btn-primary mt-5">Login</button>
      </form>
      <div class="card-text">
        <a href=""> Lupa password! </a>
      </div>
      <div class="card-text">
        <a href="/register"> Belum punya akun? </a>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>