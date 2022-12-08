
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login LKPJ Bappeda 2022</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  </head>
  <body>
    <!-- Login Section -->
    <section class="bg-light container-fluid d-flex vw-100 min-vh-100" style="background-image: url('{{ asset('img_login/bg-illustration-0012-faris.png') }}'); background-repeat: no-repeat; background-size: cover">
      <!-- Bar -->
      <div class="h-100 w-25 position-absolute" style="background-color: rgba(255, 215, 0, 1); left: 0"></div>

      <!-- Card Component -->
      <div class="container-sm card my-5 my-md-auto shadow-lg rounded-0 border-0">
        <div class="row">
          <!-- Side 1 (Image) -->
          <div class="col-md-6 p-0 position-relative">
            <!-- Overlay -->
            <div class="position-absolute h-100 w-100 py-3 px-4" style="background-color: rgba(255, 200, 0, 0.65)">
              <h2 class="fw-bold text-white">LKPJ 2022</h2>
            </div>
            <!-- Image -->
            <img class="w-100 h-100" src="{{ asset('img_login/daniel-korpai-vHVfpi3h5xk-unsplash.jpg') }}" alt="admin dashboard in laptop" style="object-fit: cover" />
          </div>

          <!-- Side 2 (Form) -->
          <div class="col-md-6 card-body">
            <div class="container pt-3" style="max-width: 400px">
              <!-- Title -->
              <h3 class="fw-bold">Login LKPJ</h3>
              <h5 class="fw-normal text-secondary">Silahkan masuk untuk melanjutkan</h5>

              <!-- From -->
              <form class="d-grid gap-3 my-5" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-floating">
                  <input type="text" class="form-control rounded-0" name="username" value="{{ old('username') }}" id="username" placeholder="Masukkan username pengguna" required />
                  <label for="username"><span class="bi-person"></span> Username</label>
                </div>
                <div class="form-floating position-relative">
                  <input type="password" class="form-control rounded-0 pe-5" id="password" name="password" placeholder="Masukkan kata sandi pengguna" />
                  <label for="password"><span class="bi-key"></span> Password</label>
                  @error('password')
                  <div class="mt-2"><small><h6 class="text-danger fw-bold"><i>{{ $message }}</i></h6></small></div>
                  @enderror
                  <button type="button" class="position-absolute h-100 btn btn-lg rounded-0" style="right: 0; top: 0" onclick="toggleShowPass()"><span class="bi-eye" id="btnIcon"></span></button>
                </div>
                <button type="submit" class="btn rounded-0 btn-lg" style="background-color: rgb(255, 200, 0)"><b>Login</b></button>
              </form>

              <!-- Text -->
              <p class="text-center">Badan Perencanaan dan Pembangundan Daerah Kabupaten Jember &copy; 2022</p>
            </div>
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
        const inputPass = document.getElementById("floatingPassword");
        const btnIcon = document.getElementById("btnIcon");

        // Check data attribute 'type' value
        if (inputPass.getAttributeNode("type").value == "password") {
          // Change input type
          inputPass.getAttributeNode("type").value = "text";
          // Chage icon
          btnIcon.classList.remove("bi-eye");
          btnIcon.classList.add("bi-eye-slash");
        } else {
          // Change input type
          inputPass.getAttributeNode("type").value = "password";
          // Chage icon
          btnIcon.classList.remove("bi-eye-slash");
          btnIcon.classList.add("bi-eye");
        }
      }
    </script>
  </body>
</html>
