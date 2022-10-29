<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="{{ route('home-lkpj') }}">
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('LKPJ/backend/assets/images/logo-icon2.png') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('LKPJ/backend/assets/images/logo-icon2.png') }}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('LKPJ/backend/assets/images/logo-text2.png') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{ asset('LKPJ/backend/assets/images/logo-text2.png') }}" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <select class="form-control" id="set_tahun" name="set_tahun" onchange="setCookieTahun();">
                                    @php
                                    $tmp_tahun = ["2021", "2022", "2023", "2024", "2025", "2026"];
                                    @endphp
                                    @foreach ($tmp_tahun as $item)
                                    <option value="{{ $item }}" @if (Cookie::get('tahun_aktif') == $item)
                                    selected
                                    @endif>{{ $item }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{-- <img src="{{ asset('backend/assets/images/users/profile-pic.jpg') }}" alt="user" class="rounded-circle" width="40"> --}}
                        <span class="ml-2 d-none d-lg-inline-block"><span
                            class="text-dark">{{ Auth::user()->nama }}</span> <i data-feather="chevron-down"
                            class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <script>
            function setCookieTahun() {
                var test = $("#set_tahun").val();
                getSKU(test);
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
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->