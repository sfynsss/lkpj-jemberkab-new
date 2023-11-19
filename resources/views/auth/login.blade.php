<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LKPJ Bappeda {{ date('Y') }}</title>
  <link rel="icon" type="image/png" sizes="16x16" href="https://e-kapeka.jemberkab.go.id/frontend/assets/img/logoicn.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

<!-- Login Section -->
<section class="bg-light container-fluid d-flex vw-100 min-vh-100" style="background-image: url('{{ asset('img_login/bg_login_form.jpg') }}'); background-repeat: no-repeat; background-size: cover">
  <div class="container-sm card my-auto shadow-lg rounded-4 border-0">
    <div class="row">
      <div class="col-md-6 rounded-4 card-body" style="background-image: url('{{ asset('img_login/abstract_form.jpg') }}'); background-repeat: no-repeat; background-size: cover">
        <div class="container py-4" style="max-width: 400px">
          <div class="text-left mt-4">
            <div class="logo mb-4">
              <span><img src="https://e-kapeka.jemberkab.go.id/frontend/assets/img/logoicn.png" alt="logo_pemkab" height="48px" width="48px"></span>
              <span>
                <img src="https://lkpj.jemberkab.go.id/LKPJ/images/logo-lkpj-2.png" alt="logo_lpj">
              </span>
           </div>
            <h5 class="fw-bold text-secondary">Selamat datang, </h5>
            <p>Silahkan masuk untuk melanjutkan</p>
          </div>
          <form class="d-grid gap-3 pb-4" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-floating">
              <input type="text" class="form-control fw-semibold rounded-3" name="username" value="{{ old('username') }}" id="username" placeholder="Masukkan username pengguna" required>
              <label for="username"><span class="bi-person"></span> Username</label>
            </div>
            <div class="form-floating position-relative">
              <input type="password" class="form-control fw-semibold rounded-3 pe-5" id="password" name="password" placeholder="Masukkan kata sandi pengguna">
              <label for="password"><span class="bi-key"></span> Password</label>
              <button type="button" class="position-absolute h-100 btn btn-lg rounded-3" style="right: 0; top: 0" onclick="toggleShowPass()"><span class="bi-eye" id="btnIcon"></span></button>
            </div>
            <button type="submit" class="btn rounded-3 btn-lg py-3 text-white fw-bold" style="background-color: #023047"><h6>Masuk</h6></button>
          </form>
          <p class="text-center">Badan Perencanaan dan Pembangundan Daerah Kabupaten Jember &copy; {{ date('Y') }}</p>
        </div>
      </div>
      <div class="col-md-6 p-4 rounded-4" style="background-color: #023047">
        {{-- <div class="position-absolute h-100 w-100 py-3 px-4" style="background-color: rgba(255, 200, 0, 0.65)">
        </div> --}}
        <img class="w-100 h-100 rounded-4" src="{{ asset('img_login/img_login_jember.jpg') }}" alt="admin dashboard in laptop" style="object-fit: cover">
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- Custom Script -->
<script>
  /*
   * Show/Hide Password Switch
   */
  function toggleShowPass() {
    // Get input and button icon
    const inputPass = document.getElementById("password");
    const btnIcon = document.getElementById("btnIcon");

    // Check input type
    if (inputPass.type === "password") {
      // Show password
      inputPass.type = "text";
      btnIcon.classList.remove("bi-eye");
      btnIcon.classList.add("bi-eye-slash");
    } else {
      // Hide password
      inputPass.type = "password";
      btnIcon.classList.remove("bi-eye-slash");
      btnIcon.classList.add("bi-eye");
    }
  }
</script>
</body>
</html>
