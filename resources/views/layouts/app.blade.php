<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>SIPPD Kab. Jember</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	@include('includes.style')
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			@include('includes.navbar')
		</div>
		@include('includes.sidebar')
		<div class="main-panel">
			<div class="content">
				<div class="row">
					<div class="col-md-12">
						@if ($message = Session::get('success'))
						<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
						@elseif ($message = Session::get('warning'))
						<div class="alert alert-warning alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
						@elseif ($message = Session::get('danger'))
						<div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
						@elseif ($message = Session::get('error'))
						<div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
						@endif
					</div>
				</div>
				@yield('content')
			</div>
			@include('includes.footer')
		</div>
	</div>
	@include('includes.script')
	@include('sweetalert::alert')
</body>
</html>