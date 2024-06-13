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
  <link rel="stylesheet" href="{{ asset('Users/register/register.css') }}" />
  <style>
    body {
      font-family: "Poppins", sans-serif !important;
    }
  </style>
  <link rel="icon" type="png" href="{{ asset('Main/assets/main/title-logo.png') }}">
  <title>PELITA</title>
</head>

<body>
  <div class="register">
    <div class="card shadow position-absolute top-50 start-50 translate-middle bg-white" style="width: 450px">
      <!-- Card register -->
      <div class="card-body">
        <!-- Header Register -->
        <div class="header-register text-center">
          <h3 class="card-title mt-3">Daftar Pelita</h3>
          <p>
            Selamat datang, silakan daftarkan data diri Anda untuk dapat
            mengakses seluruh fitur
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
        <form action="/register" method="post">
          @csrf
          <!-- Input Name -->
          <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="name" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="nama lengkap" />
          </div>
          <!-- Input Email -->
          <div class="input-group mb-3">
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
          <!-- Input Password Confirmation -->
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
            <input type="password" name="password_confirmation" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="konfirmasi kata sandi" id="confirmPasswordInput" />
            <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
              <i class="fa-regular fa-eye-slash"></i>
            </button>
          </div>
          <!-- Button Register -->
          <div class="button-masuk d-flex justify-content-center mt-2">
            <button href="#" class="btn-daftar btn" style="width: 100%">
              Daftar
            </button>
          </div>
          <!-- Have Account -->
          <div class="masuk d-flex justify-content-center mt-2">
            <p>
              Sudah punya akun? <span><a href="/login">Masuk</a></span>
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
      togglePasswordVisibility("passwordInput", this);
    });

  document
    .getElementById("toggleConfirmPassword")
    .addEventListener("click", function() {
      togglePasswordVisibility("confirmPasswordInput", this);
    });

  function togglePasswordVisibility(inputId, button) {
    var passwordInput = document.getElementById(inputId);
    var icon = button.querySelector("i");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    } else {
      passwordInput.type = "password";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    }
  }
</script>

</html>