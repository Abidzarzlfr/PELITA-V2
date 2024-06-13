<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('Users/login/login.css') }}" />
  <style>
    body {
      font-family: "Poppins", sans-serif !important;
    }
  </style>
  <link rel="icon" type="png" href="{{ asset('Main/assets/main/title-logo.png') }}">
  <title>PELITA</title>
</head>

<body>
  <div class="login">
    <div class="card shadow position-absolute top-50 start-50 translate-middle bg-white" style="width: 450px">
      <!-- Card Login -->
      <div class="card-body">
        <!-- Header Login -->
        <div class="header-login text-center">
          <h3 class="card-title mt-3">Masuk Pelita</h3>
          <p>
            Selamat datang kembali, silakan masuk dengan detail akun yang
            telah Anda daftarkan
          </p>
          @if($errors->any())
          <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $item)
            <ul>
              <li>{{ $item }}</li>
            </ul>
            @endforeach
          </div>
          @endif
        </div>
        <!-- Input Email -->
        <form action="/login" method="POST">
          @csrf
          <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="alamat email" />
          </div>
          <!-- Input Password -->
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
            <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="kata sandi" id="passwordInput" />
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
              <i class="fa-regular fa-eye-slash"></i>
            </button>
          </div>
          <!-- Forgot Password -->
          <div class="forgot-password d-flex justify-content-end">
            <a href="/forgotPassword"> Lupa kata sandi? </a>
          </div>
          <!-- Button Login -->
          <div class="button-masuk d-flex justify-content-center mt-2">
            <button href="#" class="btn-masuk btn" style="width: 100%">
              Masuk
            </button>
          </div>
          <!-- Haven't Account -->
          <div class="daftar d-flex justify-content-center mt-2">
            <p>
              Belum punya akun? <span><a href="/register">Daftar</a></span>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  document
    .getElementById("togglePassword")
    .addEventListener("click", function() {
      var passwordInput = document.getElementById("passwordInput");
      var icon = this.querySelector("i");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      } else {
        passwordInput.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      }
    });
</script>

</html>

<!-- <!DOCTYPE html>
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

</html> -->