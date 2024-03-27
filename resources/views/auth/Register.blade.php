<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <title>register</title>
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
      <form action="/register" method="post">
        @csrf
        <div class="input-group mb-3 mt-5">
          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
          <input value="{{ old('email') }}" placeholder="abidzar@gmail.com" type="email" class="form-control" name="email" />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
          <input placeholder="abidzar" type="text" class="form-control" name="username" />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
          <input type="password" class="form-control" name="password" />
        </div>
        <a class="btn btn-primary mt-5">Register</a>
      </form>
      <div class="card-text">
        <a href="/login"> Sudah punya akun? </a>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <title>Register</title>
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
      <form action="/register" method="post">
        @csrf
        <div class="input-group mb-3 mt-5">
          <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
          <input value="{{ old('name') }}" placeholder="Abidzar" type="text" class="form-control" name="name" />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
          <input value="{{ old('email') }}" placeholder="abidzar@gmail.com" type="email" class="form-control" name="email" />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
          <input type="password" class="form-control" name="password" />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Konfirmasi Password</span>
          <input type="password" class="form-control" name="password_confirmation" />
        </div>
        <button type="submit" class="btn btn-primary mt-5">Register</button>
      </form>
      <div class="card-text">
        <a href="/login"> Sudah punya akun? </a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>