@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">{{ $message }}
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">{{ $message }}
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif ($message = Session::get('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif