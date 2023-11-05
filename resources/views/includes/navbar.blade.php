<header class="main-header">
   <div class="d-flex align-items-center logo-box justify-content-start">
      <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent text-white" data-toggle="push-menu" role="button">
      <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
      </a>	
      <!-- Logo -->
      <a href="{{ route('home') }}" class="logo">
         <!-- logo-->
         <div class="logo-lg">
            <span class="light-logo"><img src="{{ asset('LKPJ/images/logo-lkpj-2.png') }}" alt="logo"></span>
            <span class="dark-logo"><img src="{{ asset('LKPJ/images/logo-lkpj-2.png') }}" alt="logo"></span>
         </div>
      </a>
   </div>
   <!-- Header Navbar -->
   <nav class="navbar navbar-static-top">
       <!-- Sidebar toggle button-->
       <div class="app-menu">
          <ul class="header-megamenu nav">
             <!-- <li class="btn-group nav-item d-md-none">
                <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                   </a>
                </li> -->
                <li class="btn-group nav-item d-md-none">
                  <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                     <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                   </a>
               </li>
             {{-- <li class="btn-group nav-item d-none d-xl-inline-block">
                <a href="#" class="waves-effect waves-light nav-link dropdown-toggle" data-bs-toggle="dropdown" title="User">
                <i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                Pilih Tahun Anggaran
                </a>
                <ul class="dropdown-menu animated flipInX">
                   <li class="user-body">
                      <a class="dropdown-item" onclick="setCookieTahun('2021')"><i class="ti-calendar text-muted me-2"></i> 2021</a>
                      <a class="dropdown-item" onclick="setCookieTahun('2022')"><i class="ti-calendar text-muted me-2"></i> 2022</a>
                      <a class="dropdown-item" onclick="setCookieTahun('2023')"><i class="ti-calendar text-muted me-2"></i> 2023</a>
                   </li>
                </ul>
             </li> --}}
          </ul>
       </div>
       <div class="navbar-custom-menu r-side">
          <ul class="nav navbar-nav">
             <li class="btn-group nav-item d-lg-inline-flex d-none">
                <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                </a>
             </li>
             <li class="btn-group d-lg-inline-flex d-none">
                <div class="app-menu">
                   <div class="search-bx mx-5">
                      <form>
                         <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                            <div class="input-group-append">
                               <button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </li>
             <!-- User Account-->
             <li class="dropdown user user-menu">
                <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                </a>
                <ul class="dropdown-menu animated flipInX">
                   <li class="user-body">
                      {{-- <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
                      <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
                      <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a> --}}
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ti-lock text-muted me-2"></i>
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                   </li>
                </ul>
             </li>
          </ul>
       </div>
    </nav>
    <script>
      function setCookieTahun(tahun) {
          getSKU(tahun);
      }
      
      function getSKU($test) {
          var baseURL = '//{{ $_SERVER['HTTP_HOST'] }}/';
          $.ajax({
              method: "GET",
              url: baseURL+ 'updateTahunAktif/'+$test,
              dataType: 'json',
              success: function (resp) {
                  location.reload();
              }
          })
      }
  </script>
</header>

{{-- <select class="form-control" id="set_tahun" name="set_tahun" onchange="setCookieTahun();">
   @php
   $tmp_tahun = ["2021", "2022", "2023", "2024", "2025", "2026"];
   @endphp
   @foreach ($tmp_tahun as $item)
   <option value="{{ $item }}" @if (Cookie::get('tahun_aktif') == $item)
   selected
   @endif>{{ $item }}</option>
   @endforeach
   
</select> --}}