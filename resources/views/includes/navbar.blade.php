
<!-- Logo Header -->
<div class="logo-header" data-background-color="blue">
	@if(Auth::user()->hak_akses == 'ADMIN')
	<a href="{{ url('/') }}" class="logo">
		<img src="{{ asset('backend/img/logo.svg') }}" alt="navbar brand" class="navbar-brand">
	</a>
	@elseif(Auth::user()->hak_akses == 'BIDANG')
	<a href="{{ url('/dashboard-bidang') }}" class="logo">
		<img src="{{ asset('backend/img/logo.svg') }}" alt="navbar brand" class="navbar-brand">
	</a>
	@else
	<a href="{{ url('/dashboard-opd') }}" class="logo">
		<img src="{{ asset('backend/img/logo.svg') }}" alt="navbar brand" class="navbar-brand">
	</a>
	@endif
	<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon">
			<i class="icon-menu"></i>
		</span>
	</button>
	<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
	<div class="nav-toggle">
		<button class="btn btn-toggle toggle-sidebar">
			<i class="icon-menu"></i>
		</button>
	</div>
</div>
<!-- End Logo Header -->

<!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
	
	<div class="container-fluid">
		<ul class="navbar-nav topbar-nav">
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
		<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
			<li class="nav-item dropdown hidden-caret">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
					<div class="avatar-sm">
						<img src="{{ asset('backend/img/icon_user.png') }}" alt="..." class="avatar-img rounded-circle">
					</div>
				</a>
				<ul class="dropdown-menu dropdown-user animated fadeIn">
					<div class="dropdown-user-scroll scrollbar-outer">
						<li>
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</div>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<!-- End Navbar -->

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
